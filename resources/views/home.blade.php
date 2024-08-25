@extends('layouts.admin')

@section('selected1')
selected
@endsection
@section('content')
<div class="row">
    <div class="col">
        <div class="mainDashboardBlock">
            <div class="d-flex justify-content-end mb-5">
                <a href="/home?filter=week" class="mr-2"> This Week &nbsp; | </a>
                <a href="/home?filter=month" class="mr-2"> This Month &nbsp; | </a>
                <a href="/home?filter=year" class="mr-2"> This Year &nbsp; | </a>
                <a href="/home"> In Total </a>
            </div>
            
            <!-- SortBy Start Here -->
            {{--
            <div class="col-12">
                <div class="sortbyBlock">
                    <div class="row">

                        <div class="col-8">

                        </div>
                        <div class="col text-align-right">
                            Sort By : <a href="#">Date | </a> <a href="#">Week | </a> <a href="#">Month |
                            </a>
                            <a href="#">Year</a>
                        </div>
                    </div>
                </div>
            </div>
            --}}
            <!-- SortBy End Here -->


            <div class="row mb-4">
                <!-- Statistics Row Start Here -->
                <div class="col">
                    <div class="statics">
                        <div class="count">
                            <h4> {{$enquiryCount}} </h4>
                            <h6 class="byTime"> - {{isset($_GET['filter'])?"This ":"In "}} {{isset($_GET['filter']) ? $_GET['filter'] : "Total" }} </h6>
                        </div>
                        <div class="box">
                            <h5 class="countLabel">General Enquiries</h5>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="statics">
                        <div class="count">
                            <h4> {{count($news)}} </h4>
                            <h6 class="byTime"> - {{isset($_GET['filter'])?"This ":"In "}} {{isset($_GET['filter']) ? $_GET['filter'] : "Total" }}</h6>
                        </div>
                        <div class="box whatsNew">
                            <h5 class="countLabel">What's New Posts</h5>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="statics">
                        <div class="count">
                            <h4> {{count($income)}} </h4>
                            <h6 class="byTime">- {{isset($_GET['filter'])?"This ":"In "}} {{isset($_GET['filter']) ? $_GET['filter'] : "Total" }}</h6>
                        </div>
                        <div class="box incomeTax">
                            <h5 class="countLabel">Income Tax Posts</h5>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="statics">
                        <div class="count">
                            <h4> {{count($gst)}} </h4>
                            <h6 class="byTime"> - {{isset($_GET['filter'])?"This ":"In "}} {{isset($_GET['filter']) ? $_GET['filter'] : "Total" }}</h6>
                        </div>
                        <div class="box gstTax">
                            <h5 class="countLabel">GST Posts</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- Statistics Row End Here -->

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p> {{Session::get('success')}} </p>
                </div>
            @endif

            <div class="row">

                <div class="col-12">
                    <div class="enquiryMainBlock">
                        <div class="row">
                            <!-- enquiryMainBlock Row Start Here  -->

                            <div class="col-12">
                                <div class="cardHeader">
                                    <div class="row">
                                        <div class="col-12">
                                            Recent Enquiries
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach ($enquiries as $enquiry)
                            <div class="col-12">
                                <div class="enquiredBy">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <div class="enquiredName d-inline">{{$enquiry->name}}
                                                <span>
                                                    <div class="enquiredFor d-inline">
                                                        <span>| Enquiry For </span> - <span class = "text-capitalize"> {{str_replace('-', ' ', $enquiry->category)}} </span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="enquiredDate">{{date('d M, Y', strtotime($enquiry->created_at))}}1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div> <!-- MainDashBoardBlock End Here -->
                    </div>
                </div>

                <div class="col-12">
                    <div class="dueMainBlock">
                        <div class="row">
                            <!-- dueMainBlock Row Start Here  -->

                            <div class="col-12">
                                <div class="cardHeader">
                                    <div class="row">
                                        <div class="col-4">
                                            Admin Name
                                        </div>
                                        <div class="col-6">
                                            Email
                                        </div>
                                        <div class="col-2">
                                            Status
                                        </div>
                                    </div>
                                </div><!-- Card Header End Here -->
                            </div>

                            @foreach ( $admins as $admin)
                            <div class="col-12">
                                <div class="postedBy">
                                    <div class="row" style="word-wrap:break-word">
                                        <div class="col-4">

                                            <div class="postCatogry">
                                                {{$admin->name}}
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="postByPerson">
                                                {{$admin->email}}
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="postByTime">
                                                <div class = "d-flex align-items-center">
                                                    <div class="badge rounded-pill {{ $admin->isActive ? 'bg-primary' : 'bg-danger'}}"> 
                                                        {{ $admin->isActive ? 'Active' : 'Locked'}} 
                                                    </div>
                                                    <form action="/admin/{{$admin->id}}" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="status" value="{{$admin->isActive?0:1}}">
                                                        <input type="submit" value="{{$admin->isActive?'Lock':'Unlock'}}" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- postedBy End Here -->
                            </div>
                            @endforeach


                        </div> <!-- dueMainBlock Row End Here  -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('pagestyle')
    <link rel="stylesheet" href="/dashboard.css" type="text/css">
@endsection
