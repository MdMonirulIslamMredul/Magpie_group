<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SisterConcern;
use App\Models\Setting;

class SisterConcernController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sisterConcerns = SisterConcern::active()->get();

        return view('frontend.sister_concerns.index', compact('setting', 'sisterConcerns'));
    }

    public function show(SisterConcern $sisterConcern)
    {
        $setting = Setting::first();
        $otherConcerns = SisterConcern::where('id', '!=', $sisterConcern->id)
            ->where('status', true)
            ->get();

        return view('frontend.sister_concerns.show', compact('setting', 'sisterConcern', 'otherConcerns'));
    }
}
