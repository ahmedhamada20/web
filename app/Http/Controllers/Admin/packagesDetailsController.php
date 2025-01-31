<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageDetail;
use Illuminate\Http\Request;

class packagesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PackageDetail::create([
            'package_id'=>$request->package_id,
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'title_ar'=>$request->title_ar,
            'title_en'=>$request->title_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,

        ]);


        return redirect()->back()->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        PackageDetail::findorfail($request->id)->update([
            'package_id'=>$request->package_id,
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'title_ar'=>$request->title_ar,
            'title_en'=>$request->title_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,

        ]);


        return redirect()->back()->with('success', 'Package created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        PackageDetail::destroy($request->id);
        return redirect()->back()->with('success', 'Package deleted successfully.');
    }
}
