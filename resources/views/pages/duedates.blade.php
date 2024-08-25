@extends('layouts.admin')

@if ($_GET['category'] == "income-tax")
    @section('selected2')
        selected
    @endsection
@elseif ($_GET['category'] == "gst")
    @section('selected3')
        selected
    @endsection
@elseif ($_GET['category'] == "other")
    @section('selected4')
        selected
    @endsection
@endif

@section('content')
<div class="row g-0">
    <div class="col-6 p-0">
        <section id="postBlockSection">
            <h1 class = "admin mb-5"> {{ $_GET['category'] == "income-tax" ? "Income Tax" : ($_GET['category'] == "gst" ? "GST" : "Other")}}  <span> - Due Date Reminder</span> </h1>
            
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
            <form action="/due-dates" method="POST">
                @csrf
                <div class="postMainBlock">
                    <div class="row mb-4">
                        <div class="col">
                            <select name="day" id="day" class="form-control">
                                <option value=""> Enter Date </option>
                                <option {{ date('d', strtotime(old('day')))=='1' ? 'selected' : null }} value="1"> 1 </option>
                                <option {{ date('d', strtotime(old('day')))=='2' ? 'selected' : null }} value="2"> 2 </option>
                                <option {{ date('d', strtotime(old('day')))=='3' ? 'selected' : null }} value="3"> 3 </option>
                                <option {{ date('d', strtotime(old('day')))=='4' ? 'selected' : null }} value="4"> 4 </option>
                                <option {{ date('d', strtotime(old('day')))=='5' ? 'selected' : null }} value="5"> 5 </option>
                                <option {{ date('d', strtotime(old('day')))=='6' ? 'selected' : null }} value="6"> 6 </option>
                                <option {{ date('d', strtotime(old('day')))=='7' ? 'selected' : null }} value="7"> 7 </option>
                                <option {{ date('d', strtotime(old('day')))=='8' ? 'selected' : null }} value="8"> 8 </option>
                                <option {{ date('d', strtotime(old('day')))=='9' ? 'selected' : null }} value="9"> 9 </option>
                                <option {{ date('d', strtotime(old('day')))=='10' ? 'selected' : null }} value="10"> 10 </option>
                                <option {{ date('d', strtotime(old('day')))=='11' ? 'selected' : null }} value="11"> 11 </option>
                                <option {{ date('d', strtotime(old('day')))=='12' ? 'selected' : null }} value="12"> 12 </option>
                                <option {{ date('d', strtotime(old('day')))=='13' ? 'selected' : null }} value="13"> 13 </option>
                                <option {{ date('d', strtotime(old('day')))=='14' ? 'selected' : null }} value="14"> 14 </option>
                                <option {{ date('d', strtotime(old('day')))=='15' ? 'selected' : null }} value="15"> 15 </option>
                                <option {{ date('d', strtotime(old('day')))=='16' ? 'selected' : null }} value="16"> 16 </option>
                                <option {{ date('d', strtotime(old('day')))=='17' ? 'selected' : null }} value="17"> 17 </option>
                                <option {{ date('d', strtotime(old('day')))=='18' ? 'selected' : null }} value="18"> 18 </option>
                                <option {{ date('d', strtotime(old('day')))=='19' ? 'selected' : null }} value="19"> 19 </option>
                                <option {{ date('d', strtotime(old('day')))=='20' ? 'selected' : null }} value="20"> 20 </option>
                                <option {{ date('d', strtotime(old('day')))=='21' ? 'selected' : null }} value="21"> 21 </option>
                                <option {{ date('d', strtotime(old('day')))=='22' ? 'selected' : null }} value="22"> 22 </option>
                                <option {{ date('d', strtotime(old('day')))=='23' ? 'selected' : null }} value="23"> 23 </option>
                                <option {{ date('d', strtotime(old('day')))=='24' ? 'selected' : null }} value="24"> 24 </option>
                                <option {{ date('d', strtotime(old('day')))=='25' ? 'selected' : null }} value="25"> 25 </option>
                                <option {{ date('d', strtotime(old('day')))=='26' ? 'selected' : null }} value="26"> 26 </option>
                                <option {{ date('d', strtotime(old('day')))=='27' ? 'selected' : null }} value="27"> 27 </option>
                                <option {{ date('d', strtotime(old('day')))=='28' ? 'selected' : null }} value="28"> 28 </option>
                                <option {{ date('d', strtotime(old('day')))=='29' ? 'selected' : null }} value="29"> 29 </option>
                                <option {{ date('d', strtotime(old('day')))=='30' ? 'selected' : null }} value="30"> 30 </option>
                                <option {{ date('d', strtotime(old('day')))=='31' ? 'selected' : null }} value="31"> 31 </option>
                            </select>
                            @error('day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <select name="month" id="month" class="form-control">
                                <option value=""> Select Month </option>
                                <option {{ date('m', strtotime(old('month')))=='1' ? 'selected' : null }} value="1"> January </option>
                                <option {{ date('m', strtotime(old('month')))=='2' ? 'selected' : null }} value="2"> February </option>
                                <option {{ date('m', strtotime(old('month')))=='3' ? 'selected' : null }} value="3"> March </option>
                                <option {{ date('m', strtotime(old('month')))=='4' ? 'selected' : null }} value="4"> April </option>
                                <option {{ date('m', strtotime(old('month')))=='5' ? 'selected' : null }} value="5"> May </option>
                                <option {{ date('m', strtotime(old('month')))=='6' ? 'selected' : null }} value="6"> June </option>
                                <option {{ date('m', strtotime(old('month')))=='7' ? 'selected' : null }} value="7"> July </option>
                                <option {{ date('m', strtotime(old('month')))=='8' ? 'selected' : null }} value="8"> August </option>
                                <option {{ date('m', strtotime(old('month')))=='9' ? 'selected' : null }} value="9"> September </option>
                                <option {{ date('m', strtotime(old('month')))=='10' ? 'selected' : null }} value="10"> October </option>
                                <option {{ date('m', strtotime(old('month')))=='11' ? 'selected' : null }} value="11"> November </option>
                                <option {{ date('m', strtotime(old('month')))=='12' ? 'selected' : null }} value="12"> December </option>
                            </select>
                            @error('month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <select name="year" id="year" class="form-control">
                                <option value=""> Enter Year </option>
                                <option {{ date('d', strtotime(old('year')))=='2021' ? 'selected' : null }} value="2021"> 2021 </option>
                                <option {{ date('d', strtotime(old('year')))=='2022' ? 'selected' : null }} value="2022"> 2022 </option>
                                <option {{ date('d', strtotime(old('year')))=='2023' ? 'selected' : null }} value="2023"> 2023 </option>
                                <option {{ date('d', strtotime(old('year')))=='2024' ? 'selected' : null }} value="2024"> 2024 </option>
                                <option {{ date('d', strtotime(old('year')))=='2025' ? 'selected' : null }} value="2025"> 2025 </option>
                                <option {{ date('d', strtotime(old('year')))=='2026' ? 'selected' : null }} value="2026"> 2026 </option>
                                <option {{ date('d', strtotime(old('year')))=='2027' ? 'selected' : null }} value="2027"> 2027 </option>
                                <option {{ date('d', strtotime(old('year')))=='2028' ? 'selected' : null }} value="2028"> 2028 </option>
                                <option {{ date('d', strtotime(old('year')))=='2029' ? 'selected' : null }} value="2029"> 2029 </option>
                                <option {{ date('d', strtotime(old('year')))=='2030' ? 'selected' : null }} value="2030"> 2030 </option>
                                <option {{ date('d', strtotime(old('year')))=='2031' ? 'selected' : null }} value="2031"> 2031 </option>
                                <option {{ date('d', strtotime(old('year')))=='2032' ? 'selected' : null }} value="2032"> 2032 </option>
                                <option {{ date('d', strtotime(old('year')))=='2033' ? 'selected' : null }} value="2033"> 2033 </option>
                                <option {{ date('d', strtotime(old('year')))=='2034' ? 'selected' : null }} value="2034"> 2034 </option>
                                <option {{ date('d', strtotime(old('year')))=='2035' ? 'selected' : null }} value="2035"> 2035 </option>
                                <option {{ date('d', strtotime(old('year')))=='2036' ? 'selected' : null }} value="2036"> 2036 </option>
                                <option {{ date('d', strtotime(old('year')))=='2037' ? 'selected' : null }} value="2037"> 2037 </option>
                                <option {{ date('d', strtotime(old('year')))=='2038' ? 'selected' : null }} value="2038"> 2038 </option>
                                <option {{ date('d', strtotime(old('year')))=='2039' ? 'selected' : null }} value="2039"> 2039 </option>
                                <option {{ date('d', strtotime(old('year')))=='2040' ? 'selected' : null }} value="2040"> 2040 </option>
                            </select>
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" placeholder="Enter Title" />
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Enter Message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3">
                            <input type="hidden" name="category" value="{{$_GET['category']}}" />
                        </div>

                        <div class="col-9">
                            <button type="submit" class="proceedBtn">PROCEED TO POST</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <div class="col-6 p-0">
        <section id="previewBlockSection">
            <h1 class = "admin">Preview<span> - Date Reminder</span> </h1>


            <nav id="dueDate-Nav">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link {{ $_GET['category'] == "income-tax" ? ' active' : NULL }}" id="nav-income-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-income" type="button" role="tab" aria-controls="nav-income"
                        aria-selected="true">Income Tax</button>
                    <button class="nav-link {{ $_GET['category'] == "gst" ? ' active' : NULL }}" id="nav-gst-tab" data-bs-toggle="tab" data-bs-target="#nav-gst"
                        type="button" role="tab" aria-controls="nav-gst" aria-selected="false">GST</button>
                    <button class="nav-link {{ $_GET['category'] == "other" ? ' active' : NULL }}" id="nav-other-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-other" type="button" role="tab" aria-controls="nav-other"
                        aria-selected="false">Other Services</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade {{ $_GET['category'] == "income-tax" ? ' show active' : NULL }}" id="nav-income" role="tabpanel"
                    aria-labelledby="nav-income-tab">
                    <div class="dueDate-list">
                        @foreach ( $income as $inc)    
                            <div class="dueDate-block">
                                <div class = "dueDate-Wrap h-100">
                                    <div class="d-flex h-100">
                                        <a class="edit d-flex justify-content-center align-items-center h-100" href="/due-dates/{{$inc->id}}/edit"> <span> Edit </span>  </a>
                                        <form class="h-100" action="/due-dates/{{$inc->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete h-100"> Delete </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="px-4 py-3">
                                    <div class="dueDate-Date">
                                        <h6> {{date('d M', strtotime($inc->date)) }} - </h6>
                                    </div>
                                    <div class="dueDate-topic">
                                        <h6> {{$inc->title}}</h6>
                                    </div>
                                    <p class="dueDate-message"> {{$inc->message}} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class = "p-3">
                        {{$income->appends(['category' => 'income-tax'])->links()}}
                    </div>
                </div>

                <div class="tab-pane fade {{ $_GET['category'] == "gst" ? ' show active' : NULL }}" id="nav-gst" role="tabpanel" aria-labelledby="nav-gst-tab">
                    <div class="dueDate-list">
                        @foreach ( $gst as $gst_entry)
                        <div class="dueDate-block">
                            <div class = "dueDate-Wrap h-100">
                                <div class="d-flex h-100">
                                    <a class="d-flex edit h-100 justify-content-center align-items-center" href="/due-dates/{{$gst_entry->id}}/edit"> <span> Edit </span>  </a>
                                    <form class="h-100" action="/due-dates/{{$gst_entry->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete h-100"> Delete </button>
                                    </form>
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <div class="dueDate-Date">
                                    <h6> {{date('d M', strtotime($gst_entry->date)) }} - </h6>
                                </div>
                                <div class="dueDate-topic">
                                    <h6> {{$gst_entry->title}}</h6>
                                </div>
                                <p class="dueDate-message"> {{$gst_entry->message}} </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class = "p-3">
                        {{$gst->appends(['category' => 'gst'])->links()}}
                    </div>
                </div>

                <div class="tab-pane fade {{ $_GET['category'] == "other" ? ' show active' : NULL }}" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                    <div class="dueDate-list">
                        @foreach ( $other as $other_entry)
                        <div class="dueDate-block">
                            <div class = "dueDate-Wrap h-100">
                                <div class="d-flex h-100">
                                    <a class="d-flex edit h-100 justify-content-center align-items-center" href="/due-dates/{{$other_entry->id}}/edit"> <span> Edit </span>  </a>
                                    <form class="h-100" action="/due-dates/{{$other_entry->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete h-100"> Delete </button>
                                    </form>
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <div class="dueDate-Date">
                                    <h6> {{date('d M Y', strtotime($other_entry->date)) }} - </h6>
                                </div>
                                <div class="dueDate-topic">
                                    <h6> {{$other_entry->title}}</h6>
                                </div>
                                <p class="dueDate-message"> {{$other_entry->message}} </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class = "p-3">
                        {{$other->appends(['category' => 'other'])->links()}}
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
