<?php

namespace App\Http\Controllers;

use App\Models\Duedate;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class DuedateController extends Controller
{
    public function index() {
        $income = Duedate::where('category', 'income-tax')->orderBy('date', 'desc')->latest()->paginate(5);
        $gst = Duedate::where('category', 'gst')->orderBy('date', 'desc')->latest()->paginate(5);
        $other = Duedate::where('category', 'other')->orderBy('date', 'desc')->latest()->paginate(5);

        $enquiryCount = Enquiry::whereNull('archive')->count();
        $archiveCount = Enquiry::whereNotNull('archive')->count();

        return view('pages.duedates')->with([
            "income" => $income,
            "gst" => $gst,
            "other" => $other,
            "enquiryCount" => $enquiryCount,
            "archiveCount" => $archiveCount
        ]);
    }

    public function edit($id) {
        $data = Duedate::find($id);
        $income = Duedate::where('category', 'income-tax')->orderBy('date', 'desc')->latest()->paginate(5);
        $gst = Duedate::where('category', 'gst')->orderBy('date', 'desc')->latest()->paginate(5);
        $other = Duedate::where('category', 'other')->orderBy('date', 'desc')->latest()->paginate(5);
        
        $enquiryCount = Enquiry::whereNull('archive')->count();
        $archiveCount = Enquiry::whereNotNull('archive')->count();
        
        return view('pages.duedatesEdit')->with([
            'due_date' => $id,
            'category'=> $data['category'],
            "data" => $data,
            "income" => $income,
            "gst" => $gst,
            "other" => $other,
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
            'category' => '',
        ]);

        $myDate = strtotime($data['day'].'-'.$data['month'].'-'.$data['year']);

        $data['date'] = date('Y-m-d', $myDate);

        Duedate::create($data);

        return redirect()->route('due-dates.index', ['category'=> $data['category']])->with([
            "success" => "Due date has been added"
        ]);

    }

    public function update($id, Request $request) {

        $entry = Duedate::find($id);

        $data = $request->validate([
            'day' => 'required|numeric|between:1,31',
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric|between:2020,2100',
            'title' => 'required|max:255',
            'message' => 'required|min:5',
            'category' => '',
        ]);

        $myDate = strtotime($data['day'].'-'.$data['month'].'-'.$data['year']);

        $data['date'] = date('Y-m-d', $myDate);

        $entry->update($data);

        return redirect()->route('due-dates.index', ['category'=> $data['category']])->with([
            "success" => "Due date has been added"
        ]);

    }


    public function destroy($id) {
        $entry = Duedate::find($id);
        $entry->delete();
        return redirect()->back()->with('danger', 'Entry deleted');
    }
}
