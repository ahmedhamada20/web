<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurpartnersController extends Controller
{
    public function index()
    {
        $data = Partner::all();
        return view('admin.partners.index',compact('data'));
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

        $service = Partner::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('partners', 'public');
            Photo::create([
                'filename' => $imagePath,
                'photoable_type' => Partner::class,
                'photoable_id' => $service->id,
            ]);
        }

        return redirect()->back()->with('success', 'Partner created successfully.');

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
        $row =  Partner::findorfail($request->id);
        $row->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,

        ]);
        if ($request->hasFile('image')) {
            $oldPhoto = $row->photo()->first();
            if ($oldPhoto) {
                if (Storage::exists('public/' . $oldPhoto->filename)) {
                    Storage::delete('public/' . $oldPhoto->filename);
                }
                $oldPhoto->delete();
            }
            $image = $request->file('image');
            $imagePath = $image->store('partners', 'public');
            Photo::create([
                'filename' => $imagePath,
                'photoable_type' => Partner::class,
                'photoable_id' => $row->id,
            ]);
        }
        return redirect()->back()->with('success', 'Partner updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Partner::destroy($request->id);
        return redirect()->back()->with('success', 'Partner deleted successfully.');

    }
}
