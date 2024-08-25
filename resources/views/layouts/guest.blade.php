<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdhiraAssociates - GST & Icometax Practitioners</title>
    <link rel="shortcut icon" href="images/fav.png">
    
    <!-- Boostrap Assets Start Here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <!-- Boostrap Assets End Here -->

    <!-- Jquery Ui -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <!-- Google Font Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- @Media Font Gilroy -->
    <link rel="preload" href="Gilroy-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="Gilroy-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="Gilroy-Bold.woff2" as="font" type="font/woff2" crossorigin>
        
    <!-- Font Awesome 4 -->
    <link rel="stylesheet"
    src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <!-- Own Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Own Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    
</head>
<body class = "general">
    <div id="app">    
        <main class="">
            @yield('content')
        </main>
    </div>

    @yield('pagestyles')
    @yield('pagescipts')
</body>
</html>
