<?php

namespace Modules\Admin\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Car;

class CarsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:cars']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type  = request()->get('type') ? request()->get('type') : 'default';
        $data = Car::with("company","brand","model","types","features")->where(function($query) use ($type) {
            if (request()->has('search') && request()->search != '') {
                $query->where('name', 'like', '%' . request()->search . '%');
            }
            if(request()->get('status')) {
                $query->where('status',request()->get('status'));
            }
            if(request()->get('company_id')) {
                $query->where('company_id',request()->get('company_id'));
            }
            if(request()->get('brand_id')) {
                $query->where('brand_id',request()->get('brand_id'));
            }
            if(request()->get('type_id')) {
                $query->whereHas('types', function($q) {
                    $q->whereIn('car_types.type_id', [request()->get('type_id')]);
                });
            }
            if(auth()->user()->type == "user") {
                $query->where('company_id',auth()->user()->company->id);
            }
            $query->where('type',$type);
        })->orderBy("id","desc")->paginate(10);
        return view('admin::cars.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->type == "user") {
            if(auth()->user()->company->getAvailableCars() <= 0) {
                return redirect()->back()->withErrors(["لقد استنفذت عدد السيارات المتاحة للإضافة"]);
            }
        }
        return view('admin::cars.create');
    }

    public function getModels($brand_id)
    {
        $models = \App\Models\Models::where('brand_id', $brand_id)->get();
        return response()->json($models);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['name'] = [];
        $data['show_in_home'] = $request->has('show_in_home') ? 1 : 0;

        // Handle multi-language fields
        foreach (\Config::get("app.languages") as $key => $lang) {
            $data['name'][$key] = $request->get("name_" . $key);
            $data['customer_notes'][$key] = $request->get("customer_notes_" . $key);
            $data['description'][$key] = $request->get("description_" . $key);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('cars', 'public');
        }

        // Set admin-specific fields
        if (auth()->user()->type == "admin") {
            $data['status'] = 'active';
            $data['is_publish'] = 1;
        } else {
            $data['status'] = 'pending';
            $data['is_publish'] = 0;
        }

        // Handle offer fields
        if ($request->has('offer_amount') && $request->has('offer_duration')) {
            $data['offer_amount'] = $request->offer_amount;
            $data['offer_duration'] = $request->offer_duration;
            $data['offer_start_time'] = now();
        }

        $data['type'] = $request->type;

        // Create car record
        $car = Car::create($data);

        // Sync relationships
        $car->features()->sync($request->get('feature_id', []));
        $car->types()->sync($request->get('type_id', []));

        // Handle additional files
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $car->images()->create(['image' => $file->store('cars', 'public')]);
            }
        }

        // Generate long descriptions
        $car->long_description = [
            'en' => $this->generateLongDescription($car, 'en'),
            'ar' => $this->generateLongDescription($car, 'ar'),
        ];
        $car->save();

        return response()->json(['status' => 'success']);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::with("company","brand","model","images","features","types")->find($id);
        return view('admin::cars.edit')->with([
            "car" => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $data = $request->all();

        $data['name'] = [];
        $request->has('show_in_home')? $data['show_in_home']= 1: $data['show_in_home'] = 0;
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['name'][$key] = $request->get("name_" . $key);
        }
        $data['customer_notes'] = [];
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['customer_notes'][$key] = $request->get("customer_notes_" . $key);
        }
        $data['description'] = [];
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['description'][$key] = $request->get("description_" . $key);
        }
        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('cars', 'public');
        }
        if (isset($request->is_day_offer) && $request->is_day_offer == "on") {
            $data['is_day_offer'] = "1";
        } else {
            $data['is_day_offer'] = "0";
        }

        if(auth()->user()->type == "user") {
            $data['status'] = 'pending';
        }
         // Update offer details if provided
        if ($request->has('offer_amount') || $request->has('offer_duration')) {
            $offerAmountChanged = $request->input('offer_amount') !== null && $request->input('offer_amount') != $car->offer_amount;
            $offerDurationChanged = $request->input('offer_duration') !== null && $request->input('offer_duration') != $car->offer_duration;

            if ($offerAmountChanged || $offerDurationChanged) {
                $car->offer_start_time = now(); // Update to current time if either value changes
            }

            // Update the values regardless of changes
            $car->offer_amount = $request->input('offer_amount', $car->offer_amount);
            $car->offer_duration = $request->input('offer_duration', $car->offer_duration);
        }

        $car->update($data);
        $car->features()->sync($request->get('feature_id'));
        $car->types()->sync($request->get('type_id'));
        if($request->hasFile('files')) {
            foreach($request->file('files') as $file) {
                $car->images()->create(['image' => $file->store('cars', 'public')]);
            }
        }

        $car->long_description = [
            'en' => $this->generateLongDescription($car, 'en'),
            'ar' => $this->generateLongDescription($car, 'ar'),
        ];
        $car->save();

//         $resource = "car";
//         $content = new \Modules\Admin\App\Services\ContentService();
//         $content->update($request,
//         \App\Models\Content::where('type',$resource)->where('resource_id',$id)->first(),
//         \App\Models\SEO::where('type',$resource)->where('resource_id',$id)->first()
//         );
//         $content->updateFaq($request, $resource, $id);

        return response()->json(['status' => 'success']);
    }

    public function refreshCars(Request $request) {
        $car_ids = $request->get('cars');
        $cars    = Car::whereIn('id', $car_ids)->get();
        foreach($cars as $car) {
            if(auth()->user()->type == "user" && auth()->user()->company->id != $car->company_id) {
                abort(403);
            }
            if($car->company->getAvailableRefreshCars() <= 0) {
                return redirect()->back()->withErrors(["لقد استنفذت عدد السيارات المتاحة للتحديث"]);
            }
            if($car->refreshed_at == null) {
                $car->is_refresh = 1;
                $car->refreshed_at = now();
                $car->save();
            }


        }
        return redirect()->back()->withSuccess("تم تحديث السيارات بنجاح");

    }

    public function refreshSingleCar($id) {
        $car = Car::find($id);
        if(auth()->user()->type == "user" && auth()->user()->company->id != $car->company_id) {
            abort(403);
        }
        if($car->company->getAvailableRefreshCars() <= 0) {
            return redirect()->back()->withErrors(["لقد استنفذت عدد السيارات المتاحة للتحديث"]);
        }
        if($car->refreshed_at == null) {
            $car->is_refresh = 1;
            $car->refreshed_at = now();
            $car->save();
        }
        return redirect()->back()->withSuccess("تم تحديث السيارة بنجاح");
    }

    public function deleteImage($id)
    {
        $image = \App\Models\CarImage::find($id);
        $image->delete();
        return redirect()->back()->withSuccess("تم حذف الصورة بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        if(auth()->user()->type == "user" && auth()->user()->company->id != $car->company_id) {
            abort(403);
        }
        $car->features()->detach();
        $car->types()->detach();
        $car->images()->delete();
        $car->delete();
        return redirect()->back()->withSuccess("تم الحذف بنجاح");
    }

    public function toggleStatus($id)
    {
        if(auth()->user()->type != "admin") {
            abort(403);
        }
        $car = Car::find($id);
        if($car->status == "active") {
            $car->status = "pending";
        }else {
            $car->status = "active";
        }
        $car->save();
        return redirect()->back()->withSuccess("تم تغيير الحالة بنجاح");
    }

    public function toggleVisibility($id)
    {
        $car = Car::find($id);
        if($car->status != "active") {
            abort(403);
        }
        if($car->is_publish == 1) {
            $car->is_publish = 0;
        }else {
            $car->is_publish = 1;
        }
        $car->save();
        return redirect()->back()->withSuccess("تم تغيير حالة العرض");
    }


    private function generateLongDescription($car, $locale)
    {
        $brand = $car->brand->getTranslation('title', $locale);
        $model = $car->model->getTranslation('title', $locale);
        $color = $car->color->getTranslation('title', $locale);
        $year = $car->year->title;

        // Fetch features and types from relationships
        $featuresList = $car->features->map(function ($feature) use ($locale) {
            return $feature->getTranslation('name', $locale);
        });

        $typesList = $car->types->map(function ($type) use ($locale) {
            return $type->getTranslation('title', $locale);
        });

        // Convert lists to HTML <li> elements
        $featuresHTML = $featuresList->map(fn($feature) => "<li>{$feature}</li>")->implode('');
        $typesHTML = $typesList->map(fn($type) => "<li>{$type}</li>")->implode('');

        if ($locale === 'en') {
            return <<<HTML
<h1 style="color: #fe9600;">Rent the {$year} {$brand} {$model} in Dubai</h1>
<p>Are you planning a trip to Dubai and looking for a premium car rental option? The {$year} {$brand} {$model} in <span style="color: #fe9600;">{$color}</span> is your ideal companion for a comfortable and stylish ride.</p>

<h2>Why Choose the {$year} {$brand} {$model}?</h2>
<p>This car is known for its impressive performance and top-tier features, making it perfect for both short and long trips.</p>

<h3>Main Features</h3>
<ul>
    {$featuresHTML}
</ul>

<h3>Available Types</h3>
<ul>
    {$typesHTML}
</ul>

<p>Whether you're visiting Dubai for business or leisure, the {$brand} {$model} offers unmatched reliability and elegance. Book your {$year} {$brand} {$model} today and make your Dubai experience unforgettable!</p>
HTML;
        } elseif ($locale === 'ar') {
            return <<<HTML
<h1 style="color: #fe9600;">استأجر {$brand} {$model} {$year} في دبي</h1>
<p>هل تخطط لرحلة إلى دبي وتبحث عن خيار تأجير سيارات فاخر؟ سيارة {$brand} {$model} سنة {$year} بلون <span style="color: #fe9600;">{$color}</span> هي الرفيق المثالي لرحلة مريحة وأنيقة.</p>

<h2>لماذا تختار {$brand} {$model} {$year}؟</h2>
<p>تشتهر هذه السيارة بأدائها المذهل وميزاتها الفاخرة، مما يجعلها مثالية للرحلات القصيرة والطويلة.</p>

<h3>الميزات الرئيسية</h3>
<ul>
    {$featuresHTML}
</ul>

<h3>الأنواع المتاحة</h3>
<ul>
    {$typesHTML}
</ul>

<p>سواء كنت تزور دبي للعمل أو الترفيه، توفر سيارة {$brand} {$model} الموثوقية والأناقة بلا منازع. احجز {$brand} {$model} {$year} اليوم واجعل تجربتك في دبي لا تُنسى!</p>
HTML;
        }

        return '';
    }



}
