<?php

namespace Modules\Admin\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::orderBy('id', 'desc')->paginate(10);
        return view('admin::service.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $data['title'] = [];
        $data['content'] = [];
        $data['description'] = [];
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['title'][$key] = $request->get("title_" . $key);
            $data['description'][$key] = $request->get("description_" . $key);
            $data['content'][$key] = $request->get("content_" . $key);
        }
        if($request->has('image')){
            $data['image'] = $request->file('image')->store('service', 'public');
        }
        Service::create($data);
        return redirect("/admin/service")->with('success', 'تم اضافة الخدمة بنجاح');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = \App\Models\Service::findOrFail($id);
        return view('admin::service.edit')->with('item', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $data = $request->all();
        if($request->has('image')){
            $data['image'] = $request->file('image')->store('service', 'public');
        }
        $data['title'] = [];
        $data['description'] = [];
        $data['content'] = [];
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['title'][$key] = $request->get("title_" . $key);
            $data['description'][$key] = $request->get("description_" . $key);
            $data['content'][$key] = $request->get("content_" . $key);
        }
        $service = Service::findOrFail($id);
        $service->update($data);
        return redirect("/admin/service")->with('success', 'تم تعديل الخدمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect("/admin/service")->with('success', 'تم حذف الخدمة بنجاح');
    }
}
