<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Duedate;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $from = date ('Y-m-d', strtotime ('-30 days'));
        $to = date ('Y-m-d', strtotime ('+365 days'));
        $income = Duedate::where('category', 'income-tax')->whereBetween('date', [$from, $to])->latest()->take(10)->get();
        $gst = Duedate::where('category', 'gst')->whereBetween('date', [$from, $to])->latest()->take(10)->get();
        $others = Duedate::where('category', 'other')->whereBetween('date', [$from, $to])->latest()->take(10)->get();
        $news = News::latest()->take(10)->get();
        return view('pages.landing')->with([
            "income" => $income,
            "gst" => $gst,
            "others" => $others,
            "news" => $news
        ]);
    }

    public function clients() {
        return view('pages.clients');
    }

    public function calculator() {
        return view('pages.calculator');
    }
}
