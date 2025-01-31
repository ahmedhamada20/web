<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChooseEbright;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChooseEbrightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ChooseEbright::all();
        return view('admin.choose_ebright.index',compact('data'));
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

        $sliders = ChooseEbright::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'notes_ar' => $request->notes_ar,
            'notes_en' => $request->notes_en,

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('choose_ebright', 'public');
            Photo::create([
                'filename' => $imagePath,
                'photoable_type' => ChooseEbright::class,
                'photoable_id' => $sliders->id,
            ]);
        }

        return redirect()->back()->with('success', 'ChooseEbright created successfully.');

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
        $row =  Slider::findorfail($request->id);
        $row->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'notes_ar' => $request->notes_ar,
            'notes_en' => $request->notes_en,
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
            $imagePath = $image->store('choose_ebright', 'public');
            Photo::create([
                'filename' => $imagePath,
                'photoable_type' => ChooseEbright::class,
                'photoable_id' => $row->id,
            ]);
        }
        return redirect()->back()->with('success', 'ChooseEbright updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        ChooseEbright::destroy($request->id);
        return redirect()->back()->with('success', 'ChooseEbright deleted successfully.');

    }
}
