<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index() {
        $enquiries = Enquiry::whereNull("archive")->paginate(7);
        $archived = Enquiry::whereNotNull("archive")->paginate(7);

        $enquiryCount = Enquiry::whereNull('archive')->count();
        $archiveCount = Enquiry::whereNotNull('archive')->count();

        return view('pages.enquiries')->with([
            "enquiries" => $enquiries,
            "archived" => $archived,
            "enquiryCount" => $enquiryCount,
            "archiveCount" => $archiveCount
        ]);
    }

    public function show($id) {
        $enquiries = Enquiry::whereNull("archive")->paginate(7);
        $archived = Enquiry::whereNotNull("archive")->paginate(7);
        $thisEnquiry = Enquiry::findOrFail($id);
        
        $enquiryCount = Enquiry::whereNull('archive')->count();
        $archiveCount = Enquiry::whereNotNull('archive')->count();

        return view('pages.enquiriesShow')->with([
            "enquiries" => $enquiries,
            "archived" => $archived,
            "thisEnquiry" => $thisEnquiry,
            "enquiryCount" => $enquiryCount,
            "archiveCount" => $archiveCount
        ]);
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => '',
            'phone' => 'sometimes|max:13',
            'category' => 'required',
            'archive' => ''
        ]);

        Enquiry::create($data);

        if(isset($data['phone']) || isset($data['message'])) {
            return redirect()->back()->with([
                "success2" => "Your enquiry has been submitted. Please expect a callback soon."
            ]);
        } else {
            return redirect()->back()->with([
                "success" => "Your enquiry has been submitted. Please expect a callback soon."
            ]);
        }

    }

    public function update($id, Request $request) {
        $enquiry = Enquiry::findOrFail($id);

        $enquiry->archive = $request->archive == 1 ? date('Y-m-d H:i:s') : NULL;
        $enquiry->save();

        $message = $request->archive == 1 ? "to archive" : "out of archive";
        
        return redirect()->back()->with([
            "success" => "Enquiry message moved ".$message
        ]);

    }
}
