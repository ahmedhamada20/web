<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function index()
    {
        $data = Package::all();
        return view('admin.packages.index',compact('data'));
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

     Package::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,

        ]);


        return redirect()->back()->with('success', 'Package created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Package::findorfail($id);
        return view('admin.packages.show',compact('data'));

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
        $row =  Package::findorfail($request->id);
        $row->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,

        ]);

        return redirect()->back()->with('success', 'Package updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Package::destroy($request->id);
        return redirect()->back()->with('success', 'Package deleted successfully.');

    }
}
