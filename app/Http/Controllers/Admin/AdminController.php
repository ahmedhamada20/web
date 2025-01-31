<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function setting()
    {
        $setting = Setting::pluck('value', 'key')->toArray();
        return view('admin.setting.index',compact('setting'));
    }

    public function setting_updated(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            if (is_array($value) && isset($value['en'], $value['ar'])) {
                $data[$key] = [
                    'en' => $value['en'] ?? '',
                    'ar' => $value['ar'] ?? '',
                ];
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $path = $file->store('public/settings');
                if ($path) {
                    $data[$key] = Storage::url($path);

                    Photo::updateOrCreate([
                        'photoable_id' => 1,
                        'photoable_type' => Setting::class,
                    ], [
                        'filename' => $path,
                        'photoable_type' => Setting::class,
                        'photoable_id' => 1
                    ]);
                }
            }
        }

        $setting = new Setting();
        foreach ($data as $key => $value) {
            $setting->updateOrCreate(
                ['key' => $key],
                ['value' => is_array($value) ? json_encode($value) : $value]
            );
        }

        return redirect()->back()->with('success','done updated');
    }
}
