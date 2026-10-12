<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SisterConcern;

class SustainabilityController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $compositeUnit = SisterConcern::where('slug', 'magpie-composite-textile-ltd')->first();

        return view('frontend.sustainability', compact('setting', 'compositeUnit'));
    }

    public function compliance()
    {
        $setting = Setting::first();
        $sisterConcerns = SisterConcern::active()->get();

        return view('frontend.compliance', compact('setting', 'sisterConcerns'));
    }
}
