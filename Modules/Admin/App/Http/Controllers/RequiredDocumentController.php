<?php

namespace Modules\Admin\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RequiredDocument;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Service;

class RequiredDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RequiredDocument::orderBy('id', 'desc')->paginate(10);
        return view('admin::required_document.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::required_document.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $data['content'] = [];
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['content'][$key] = $request->get("content_" . $key);
        }
        RequiredDocument::create($data);
        return redirect("/admin/required-documents")->with('success', 'تم اضافة الاوراق المطلوبة بنجاح');
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
        $service = \App\Models\RequiredDocument::findOrFail($id);
        return view('admin::required_document.edit')->with('item', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $data = $request->all();
        $data['content'] = [];
        foreach(\Config::get("app.languages") as $key => $lang) {
            $data['content'][$key] = $request->get("content_" . $key);
        }
        $service = RequiredDocument::findOrFail($id);
        $service->update($data);
        return redirect("/admin/required_document")->with('success', 'تم تعديل الاوراق المطلوبة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = RequiredDocument::findOrFail($id);
        $service->delete();
        return redirect("/admin/required-documents")->with('success', 'تم حذف الاوراق المطلوبة بنجاح');
    }
}
