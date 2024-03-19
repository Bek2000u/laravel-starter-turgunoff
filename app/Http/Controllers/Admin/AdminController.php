<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Setting;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function index() {
        $setting = count(Setting::all());

        return view('admin.index', compact('setting'));
    }
}
