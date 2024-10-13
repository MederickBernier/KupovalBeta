<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index(){
        $settings= Setting::all()->pluck('value','key')->toArray();
        return view('admin.settings.index',[
            'settings'=>$settings,
        ]);
    }

    public function updateGeneralSettings(Request $request){
        $request->validate([
            'site_name' => 'required|string|max:255',
            'default_language' => 'required|string',
            'timezone' => 'required|string',
            'seo_meta_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string|max:500',
        ]);

        $this->saveSetting('site_name', $request->site_name);
        $this->saveSetting('default_language', $request->default_language);
        $this->saveSetting('timezone', $request->timezone);
        $this->saveSetting('seo_meta_title', $request->seo_meta_title);
        $this->saveSetting('seo_meta_description', $request->seo_meta_description);

        session()->forget('settings');

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully');
    }

    public function updatePaymentSettings(Request $request){
        $request->validate([
            'currency' => 'required|string|max:3',
            'tps' => 'required|numeric|min:0|max:100',
            'tvq' => 'required|numeric|min:0|max:100',
        ]);
        $this->saveSetting('currency', $request->currency);
        $this->saveSetting('curency', $request->currency);
        $this->saveSetting('tps', $request->tps);
        $this->saveSetting('tvq', $request->tvq);

        session()->forget('settings');

        return redirect()->route('admin.settings.index')->with('success', 'Payment settings updated successfully');
    }

    private function saveSetting($key, $value){
        Setting::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
