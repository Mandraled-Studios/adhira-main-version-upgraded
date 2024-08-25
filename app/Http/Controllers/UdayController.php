<?php

namespace App\Http\Controllers;

use App\Models\Uday;
use Illuminate\Http\Request;

class UdayController extends Controller
{
    public function index() {
        $uday = Uday::all();
    }
}
