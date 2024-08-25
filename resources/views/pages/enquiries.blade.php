@extends('layouts.admin')

@if (!isset($_GET['type']))
    @section('selected6')
        selected
    @endsection
@elseif ($_GET['type'] == "archived")
    @section('selected7')
        selected
    @endsection
@endif

@section('content')

<div class="row g-0">
    <div class="col-7 px-0">
        <section class="enquiryListoutSection">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p> {{ Session::get('success') }} </p>
                </div>
            @endif
            @if (Session::has('danger'))
                <div class="alert alert-danger">
                    <p> {{ Session::get('danger') }} </p>
                </div>
            @endif
            <div class="row justify-content-between align-items-center">
                <div class="col-11">
                    <h1 class = "admin"> {{ isset($_GET['type']) ? ($_GET['type'] == "archived" ? "Archived" : "") : ""}} <span> Enquiry Messages </span> </h1>
                </div>
                <div class="col-1">
                    <div class="sortBy">
                        <div class="dropdown dropstart">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Date</a></li>
                                <li><a class="dropdown-item" href="#">Week</a></li>
                                <li><a class="dropdown-item" href="#">Month</a></li>
                                <li><a class="dropdown-item" href="#">Year</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @isset($_GET['type'])
                @if ($_GET['type']=='archived')
                    <div class="dueDate-list enquiryListBlock">
                        @foreach ($archived as $enquiry)
                            <div class="dueDate-block enquiryList">
                                <div class = "dueDate-Wrap h-100">
                                    <div class="d-flex h-100">
                                        <a class="d-flex edit h-100 justify-content-center align-items-center" href="/enquiries/{{$enquiry->id}}?type=archived"> <span> View Message </span>  </a>
                                        <form class="h-100" action="/enquiries/{{$enquiry->id}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="archive" value = "0" />
                                            <button type="submit" class="delete h-100"> Unarchive </button>
                                        </form>
                                    </div>
                                </div>
                                <div class=" row g-0 d-flex justify-content-between align-items-center mb-2">
                                    <div class=" col-xxl-10 col-9 enquireReason">
                                        <h3 class="enquiredName d-inline"> {{$enquiry->name}}
                                            <span>
                                                <h5 class="enquiredFor d-inline"> | Enquiry For - <span class = "text-capitalize"> {{str_replace('-', ' ', $enquiry->category)}} </span> </h5>
                                            </span>
                                        </h3>
                                    </div>

                                    <div class="col-xxl-2 col-3">
                                        <h6 class="enquiredDate">{{date('d M, Y', strtotime($enquiry->created_at))}}</h6>
                                    </div>
                                </div>
                                <p> {{$enquiry->message}} </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="p-3">
                        {{$enquiries->appends(['type' => 'archived'])->links()}}
                    </div>
                @endif
                    
            @else
                <div class="dueDate-list enquiryListBlock">
                    @foreach ($enquiries as $enquiry)
                    <div class="dueDate-block enquiryList">
                        <div class = "dueDate-Wrap h-100">
                            <div class="d-flex h-100">
                                <a class="d-flex edit h-100 justify-content-center align-items-center" href="/enquiries/{{$enquiry->id}}"> <span> View Message </span>  </a>
                                <form class="h-100" action="/enquiries/{{$enquiry->id}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="archive" value = "1" />
                                    <button type="submit" class="delete h-100"> Archive </button>
                                </form>
                            </div>
                        </div>
                        <div class=" row g-0 d-flex justify-content-between align-items-center mb-2">
                            <div class=" col-xxl-10 col-9 enquireReason">
                                <h3 class="enquiredName d-inline"> {{$enquiry->name}}
                                    <span>
                                        <h5 class="enquiredFor d-inline"> | Enquiry For - <span class = "text-capitalize"> {{str_replace('-', ' ', $enquiry->category)}} </span> </h5>
                                    </span>
                                </h3>
                            </div>

                            <div class="col-xxl-2 col-3">
                                <h6 class="enquiredDate">{{date('d M, Y', strtotime($enquiry->created_at))}}</h6>
                            </div>
                        </div>
                        <p> {{$enquiry->message}} </p>
                    </div>
                    @endforeach
                </div>
                <div class="p-3">
                    {{$enquiries->links()}}
                </div>
            @endisset
        </section>
    </div>

    <div class="col-5 px-0">
        <section class="enquiryPreviewSection">
            <h1>Preview<span>-Email Enquiry</span> </h1>

            <div class="enquiryPreviewBlock">
                <h3 class="enquiredName">Click On View Message</h3>
                <h5 class="enquiredFor d-inline"><span>To see </span> - Full Details</h5>
            </div>
        </section>
    </div>
</div>
@endsection
