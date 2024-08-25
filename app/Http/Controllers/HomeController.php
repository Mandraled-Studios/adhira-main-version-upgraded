<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Duedate;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $admins = User::all();

        if(isset($request->filter)) {
            switch($request->filter) {
                case 'week': $from = date ('Y-m-d', strtotime ('-7 days'));
                             $to = date ('Y-m-d');
                             $enquiryCount = Enquiry::whereNull('archive')->whereBetween('created_at', [$from, $to])->count();
                             $archiveCount = Enquiry::whereNotNull('archive')->whereBetween('created_at', [$from, $to])->count();
                             $enquiries = Enquiry::whereNull('archive')->latest()->take(5)->get();
                             $news = News::whereBetween('created_at', [$from, $to])->latest()->get();
                             $income = Duedate::where('category', 'income-tax')->whereBetween('created_at', [$from, $to])->latest()->get();
                             $gst = Duedate::where('category', 'gst')->whereBetween('created_at', [$from, $to])->latest()->get();
                             break;
                
                case 'month': $from = date ('Y-m-d', strtotime ('-30 days'));
                              $to = date ('Y-m-d');
                              $enquiryCount = Enquiry::whereNull('archive')->whereBetween('created_at', [$from, $to])->count();
                              $archiveCount = Enquiry::whereNotNull('archive')->whereBetween('created_at', [$from, $to])->count();
                              $enquiries = Enquiry::whereNull('archive')->latest()->take(5)->get();
                              $news = News::whereBetween('created_at', [$from, $to])->latest()->get();
                              $income = Duedate::where('category', 'income-tax')->whereBetween('created_at', [$from, $to])->latest()->get();
                              $gst = Duedate::where('category', 'gst')->whereBetween('created_at', [$from, $to])->latest()->get();
                              break;
                
                case 'year': $from = date ('Y-m-d', strtotime ('-365 days'));
                             $to = date ('Y-m-d');
                             $enquiryCount = Enquiry::whereNull('archive')->whereBetween('created_at', [$from, $to])->count();
                             $archiveCount = Enquiry::whereNotNull('archive')->whereBetween('created_at', [$from, $to])->count();
                             $enquiries = Enquiry::whereNull('archive')->latest()->take(5)->get();
                             $news = News::whereBetween('created_at', [$from, $to])->latest()->get();
                             $income = Duedate::where('category', 'income-tax')->whereBetween('created_at', [$from, $to])->latest()->get();
                             $gst = Duedate::where('category', 'gst')->whereBetween('created_at', [$from, $to])->latest()->get();
                             break;
            }
        } else {
            $enquiryCount = Enquiry::whereNull('archive')->count();
            $archiveCount = Enquiry::whereNotNull('archive')->count();
            $enquiries = Enquiry::whereNull('archive')->latest()->take(5)->get();
            $news = News::latest()->get();
            $income = Duedate::where('category', 'income-tax')->latest()->get();
            $gst = Duedate::where('category', 'gst')->latest()->get();
        }
        

        return view('home')->with([
            'enquiries' => $enquiries,
            'news' => $news,
            'income' => $income,
            'gst' => $gst,
            'admins' => $admins,
            "enquiryCount" => $enquiryCount,
            "archiveCount" => $archiveCount
        ]);
    }

    public function statusChange($id, Request $request) {
        $user = User::findOrFail($id);
        $user->isActive = $request->status;
        $user->save();
        
        return redirect()->back()->with([
            "success" => "Admin status changed"
        ]);
    }
}
