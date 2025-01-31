<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.services.index',compact('data'));
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

        $service = Service::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('services', 'public');
            Photo::create([
                'filename' => $imagePath,
                'photoable_type' => Service::class,
                'photoable_id' => $service->id,
            ]);
        }

        return redirect()->back()->with('success', 'service created successfully.');

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
        $row =  Service::findorfail($request->id);
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
            $imagePath = $image->store('services', 'public');
            Photo::create([
                'filename' => $imagePath,
                'photoable_type' => Service::class,
                'photoable_id' => $row->id,
            ]);
        }
        return redirect()->back()->with('success', 'services updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Service::destroy($request->id);
        return redirect()->back()->with('success', 'Slider deleted successfully.');

    }
}
