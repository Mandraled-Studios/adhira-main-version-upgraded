@extends('layouts.app')

@section('pagescripts')
<script>
setTimeout(() => {
        let preloader = document.getElementById("mandra-preloader");
        preloader.parentNode.removeChild(preloader);
    }, 2000);
</script>
@endsection

@section('pagestyles')
<link href = "css/style.css" rel="stylesheet" />
@endsection

@section('content')
<!-- Preloader Starts Here -->
<div id = "mandra-preloader" class="preloader-container">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
</div>
<!-- Preloader Ends Here-->
<h1 style = "color:#232323" class = "my-5 text-center"> This page is under construction </h1>
@endsection