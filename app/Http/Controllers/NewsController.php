<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::paginate(5);

        $enquiryCount = Enquiry::whereNull('archive')->count();
        $archiveCount = Enquiry::whereNotNull('archive')->count();

        return view('pages.news')->with([
            "news" => $news,
            "enquiryCount" => $enquiryCount,
            "archiveCount" => $archiveCount
        ]);
    }

    public function store(Request $request) {

        $data = $request->validate([
            'day' => 'required|numeric|between:1,31',
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric|between:2020,2100',
            'title' => 'required|max:255',
            'message' => 'required|min:5',
        ]);

        $myDate = strtotime($data['day'].'-'.$data['month'].'-'.$data['year']);

        $data['date'] = date('Y-m-d', $myDate);

        News::create($data);

        return redirect()->route('whats-new.index')->with([
            "success" => "News has been added"
        ]);

    }

    public function edit($id) {
        $news = News::findOrFail($id);
        $allNews = News::paginate(5);

        $enquiryCount = Enquiry::whereNull('archive')->count();
        $archiveCount = Enquiry::whereNotNull('archive')->count();

        return view('pages.newsEdit')->with([
            "allNews" => $allNews,
            "news" => $news,
            "enquiryCount" => $enquiryCount,
            "archiveCount" => $archiveCount
        ]);
    }

    public function update($id, Request $request) {

        $news = News::findOrFail($id);

        $data = $request->validate([
            'day' => 'required|numeric|between:1,31',
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric|between:2020,2100',
            'title' => 'required|max:255',
            'message' => 'required|min:5',
        ]);

        $myDate = strtotime($data['day'].'-'.$data['month'].'-'.$data['year']);

        $data['date'] = date('Y-m-d', $myDate);

        $news->update($data);

        return redirect()->route('whats-new.index')->with([
            "success" => "News has been modified"
        ]);

    }

    public function destroy($id) {

        $news = News::findOrFail($id);

        $news->delete();

        return redirect()->route('whats-new.index')->with([
            "danger" => "News has been removed"
        ]);

    }

    
}
