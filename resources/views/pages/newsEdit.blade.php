@extends('layouts.admin')

@section('selected1')
 selected
@endsection

@section('content')
<div class="row g-0">
    <div class="col-6 p-0">
        <section id="postBlockSection">
            <h1 class = "admin mb-5"> What's New?  <span> - Edit </span> </h1>
            
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p> News &amp; message has been modified. </p>
                </div>
            @endif
            @if (Session::has('danger'))
                <div class="alert alert-danger">
                    <p> News &amp; message has been deleted. </p>
                </div>
            @endif
            <form action="/whats-new/{{$news->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="postMainBlock">
                    <div class="row mb-4">
                        <div class="col">
                            <select name="day" id="day" class="form-control">
                                <option value=""> Enter Date </option>
                                <option {{ date('d', strtotime($news->date))=='1' ? 'selected' : null }} value="1"> 1 </option>
                                <option {{ date('d', strtotime($news->date))=='2' ? 'selected' : null }} value="2"> 2 </option>
                                <option {{ date('d', strtotime($news->date))=='3' ? 'selected' : null }} value="3"> 3 </option>
                                <option {{ date('d', strtotime($news->date))=='4' ? 'selected' : null }} value="4"> 4 </option>
                                <option {{ date('d', strtotime($news->date))=='5' ? 'selected' : null }} value="5"> 5 </option>
                                <option {{ date('d', strtotime($news->date))=='6' ? 'selected' : null }} value="6"> 6 </option>
                                <option {{ date('d', strtotime($news->date))=='7' ? 'selected' : null }} value="7"> 7 </option>
                                <option {{ date('d', strtotime($news->date))=='8' ? 'selected' : null }} value="8"> 8 </option>
                                <option {{ date('d', strtotime($news->date))=='9' ? 'selected' : null }} value="9"> 9 </option>
                                <option {{ date('d', strtotime($news->date))=='10' ? 'selected' : null }} value="10"> 10 </option>
                                <option {{ date('d', strtotime($news->date))=='11' ? 'selected' : null }} value="11"> 11 </option>
                                <option {{ date('d', strtotime($news->date))=='12' ? 'selected' : null }} value="12"> 12 </option>
                                <option {{ date('d', strtotime($news->date))=='13' ? 'selected' : null }} value="13"> 13 </option>
                                <option {{ date('d', strtotime($news->date))=='14' ? 'selected' : null }} value="14"> 14 </option>
                                <option {{ date('d', strtotime($news->date))=='15' ? 'selected' : null }} value="15"> 15 </option>
                                <option {{ date('d', strtotime($news->date))=='16' ? 'selected' : null }} value="16"> 16 </option>
                                <option {{ date('d', strtotime($news->date))=='17' ? 'selected' : null }} value="17"> 17 </option>
                                <option {{ date('d', strtotime($news->date))=='18' ? 'selected' : null }} value="18"> 18 </option>
                                <option {{ date('d', strtotime($news->date))=='19' ? 'selected' : null }} value="19"> 19 </option>
                                <option {{ date('d', strtotime($news->date))=='20' ? 'selected' : null }} value="20"> 20 </option>
                                <option {{ date('d', strtotime($news->date))=='21' ? 'selected' : null }} value="21"> 21 </option>
                                <option {{ date('d', strtotime($news->date))=='22' ? 'selected' : null }} value="22"> 22 </option>
                                <option {{ date('d', strtotime($news->date))=='23' ? 'selected' : null }} value="23"> 23 </option>
                                <option {{ date('d', strtotime($news->date))=='24' ? 'selected' : null }} value="24"> 24 </option>
                                <option {{ date('d', strtotime($news->date))=='25' ? 'selected' : null }} value="25"> 25 </option>
                                <option {{ date('d', strtotime($news->date))=='26' ? 'selected' : null }} value="26"> 26 </option>
                                <option {{ date('d', strtotime($news->date))=='27' ? 'selected' : null }} value="27"> 27 </option>
                                <option {{ date('d', strtotime($news->date))=='28' ? 'selected' : null }} value="28"> 28 </option>
                                <option {{ date('d', strtotime($news->date))=='29' ? 'selected' : null }} value="29"> 29 </option>
                                <option {{ date('d', strtotime($news->date))=='30' ? 'selected' : null }} value="30"> 30 </option>
                            </select>
                            @error('day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <select name="month" id="month" class="form-control">
                                <option {{ date('m', strtotime($news->date))=='1' ? 'selected' : null }} value="1"> January </option>
                                <option {{ date('m', strtotime($news->date))=='2' ? 'selected' : null }} value="2"> February </option>
                                <option {{ date('m', strtotime($news->date))=='3' ? 'selected' : null }} value="3"> March </option>
                                <option {{ date('m', strtotime($news->date))=='4' ? 'selected' : null }} value="4"> April </option>
                                <option {{ date('m', strtotime($news->date))=='5' ? 'selected' : null }} value="5"> May </option>
                                <option {{ date('m', strtotime($news->date))=='6' ? 'selected' : null }} value="6"> June </option>
                                <option {{ date('m', strtotime($news->date))=='7' ? 'selected' : null }} value="7"> July </option>
                                <option {{ date('m', strtotime($news->date))=='8' ? 'selected' : null }} value="8"> August </option>
                                <option {{ date('m', strtotime($news->date))=='9' ? 'selected' : null }} value="9"> September </option>
                                <option {{ date('m', strtotime($news->date))=='10' ? 'selected' : null }} value="10"> October </option>
                                <option {{ date('m', strtotime($news->date))=='11' ? 'selected' : null }} value="11"> November </option>
                                <option {{ date('m', strtotime($news->date))=='12' ? 'selected' : null }} value="12"> December </option>
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
                                <option {{ date('Y', strtotime($news->date))=='2021' ? 'selected' : null }} value="2021"> 2021 </option>
                                <option {{ date('Y', strtotime($news->date))=='2022' ? 'selected' : null }} value="2022"> 2022 </option>
                                <option {{ date('Y', strtotime($news->date))=='2023' ? 'selected' : null }} value="2023"> 2023 </option>
                                <option {{ date('Y', strtotime($news->date))=='2024' ? 'selected' : null }} value="2024"> 2024 </option>
                                <option {{ date('Y', strtotime($news->date))=='2025' ? 'selected' : null }} value="2025"> 2025 </option>
                                <option {{ date('Y', strtotime($news->date))=='2026' ? 'selected' : null }} value="2026"> 2026 </option>
                                <option {{ date('Y', strtotime($news->date))=='2027' ? 'selected' : null }} value="2027"> 2027 </option>
                                <option {{ date('Y', strtotime($news->date))=='2028' ? 'selected' : null }} value="2028"> 2028 </option>
                                <option {{ date('Y', strtotime($news->date))=='2029' ? 'selected' : null }} value="2029"> 2029 </option>
                                <option {{ date('Y', strtotime($news->date))=='2030' ? 'selected' : null }} value="2030"> 2030 </option>
                                <option {{ date('Y', strtotime($news->date))=='2031' ? 'selected' : null }} value="2031"> 2031 </option>
                                <option {{ date('Y', strtotime($news->date))=='2032' ? 'selected' : null }} value="2032"> 2032 </option>
                                <option {{ date('Y', strtotime($news->date))=='2033' ? 'selected' : null }} value="2033"> 2033 </option>
                                <option {{ date('Y', strtotime($news->date))=='2034' ? 'selected' : null }} value="2034"> 2034 </option>
                                <option {{ date('Y', strtotime($news->date))=='2035' ? 'selected' : null }} value="2035"> 2035 </option>
                                <option {{ date('Y', strtotime($news->date))=='2036' ? 'selected' : null }} value="2036"> 2036 </option>
                                <option {{ date('Y', strtotime($news->date))=='2037' ? 'selected' : null }} value="2037"> 2037 </option>
                                <option {{ date('Y', strtotime($news->date))=='2038' ? 'selected' : null }} value="2038"> 2038 </option>
                                <option {{ date('Y', strtotime($news->date))=='2039' ? 'selected' : null }} value="2039"> 2039 </option>
                                <option {{ date('Y', strtotime($news->date))=='2040' ? 'selected' : null }} value="2040"> 2040 </option>
                            </select>
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $news->title }}" name="title" placeholder="Enter Title" />
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Enter Message">{{ $news->message }}</textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3"></div>

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

            <div class="row justify-content-between align-items-center">
                <div class="col-11">
                    <h1>Preview <span> - Table Index</span> </h1>
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

            <div class="row">
                <div class="col-12">

                    <div class="dueDate-list whatsNew-list">

                        @foreach ($allNews as $msg)
                        <div class="dueDate-block">
                            <div class = "dueDate-Wrap h-100">
                                <div class="d-flex h-100">
                                    <a class="d-flex edit h-100 justify-content-center align-items-center" href="/whats-new/{{$msg->id}}/edit"> <span> Edit </span>  </a>
                                    <form class="h-100" action="/whats-new/{{$msg->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete h-100"> Delete </button>
                                    </form>
                                </div>
                            </div>
                            <div class="whatsNew-block px-4 py-3">                              
                                <div class="row">
                                    <div class="col-9">
                                        <div class="whatsNew-topic">
                                            <h6>{{$msg->title}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="whatsNew-date">
                                            <h6>{{date('d M, Y', strtotime($msg->date)) }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <p class="whatsNew-message"> {{$msg->message}} </p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="p-3">
                        {{$allNews->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
