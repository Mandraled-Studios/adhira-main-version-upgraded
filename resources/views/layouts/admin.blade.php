<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdhiraAssociates - GST & Icometax Practitioners</title>
    <link rel="shortcut icon" href="images/fav.png">

    <!-- Boostrap Assets Start Here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Boostrap Assets End Here -->



    <!-- Google Font Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500,600,700&display=swap" rel="stylesheet">
    <!-- @Media Font Gilroy -->
    <link rel="preload" href="Gilroy-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="Gilroy-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="Gilroy-Bold.woff2" as="font" type="font/woff2" crossorigin>


    <!-- own Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    @yield('pagestyle')
    <link href = "css/admin.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Jquery Ui -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



</head>

<body class = "admin">

    <header id="header">
        <div class="forPos">
            <div class="arrowNav" id="toggle"><i class="bi bi-arrow-left"></i></div>

            <div class="d-flex flex-column justify-content-evenly align-items-start mainCont">


                <div class="logo">
                    <img src="/images/Logo.svg" alt="mainLogo" class="img-fluid mainLogo">
                    <img src="/images/minLogo.svg" alt="minLogo" class="img-fluid minLogo">
                </div>

                <nav id="navbar" class="navbar nav-menu">
                    <ul>

                        <li class="@yield('selected1')"><a href="/home" class="nav-link">
                                <div class="icon dashboard"></div>
                                <span class="label">Dashboard</span>
                            </a>
                            <div class="tooltips">Dashboard</div>
                        </li>

                        <h3 class="menu">Due Date</h3>
                        <li class="@yield('selected2')"><a href="/due-dates?category=income-tax" class="nav-link">
                                <div class="icon"></div>
                                <span class="label">income Tax</span>
                            </a>
                            <div class="tooltips">income Tax</div>
                        </li>

                        <li class="@yield('selected3')"><a href="/due-dates?category=gst" class="nav-link">
                                <div class="icon gst"></div>
                                <span class="label">Gst</span>
                            </a>
                            <div class="tooltips">Gst</div>
                        </li>

                        <li class="@yield('selected4')"><a href="/due-dates?category=other" class="nav-link">
                                <div class="icon other"></div>
                                <span class="label">Other Services</span>
                            </a>
                            <div class="tooltips">Others</div>
                        </li>

                        <h3 class="menu">What's New</h3>

                        <li class="@yield('selected5')"><a href="/whats-new" class="nav-link">
                                <div class="icon whats"></div>
                                <span class="label">What's New</span>
                                <div class="tooltips">Whats New</div>
                            </a></li>


                        <h3 class="menu">Enquiries</h3>

                        <li class="@yield('selected6')"><a href="/enquiries" class="nav-link">
                                <span class="badge bg-success">{{$enquiryCount}}</span>
                                <span class="label">Messages</span>
                            </a>
                            <div class="tooltips">Messages</div>
                        </li>
                        <li class="@yield('selected7')">
                            <a href="/enquiries?type=archived" class="nav-link">
                                <span class="badge bg-primary">{{$archiveCount}}</span>
                                <span class="label">Archived</span>
                            </a>
                            <div class="tooltips">Archived</div>
                        </li>

                        <h3 class="menu"> Account </h3>
                        <li> 
                            <form class = "admin-logout" action="{{route('logout')}}" method="POST">
                                @csrf
                                <input class="logoutBtn" type="submit" value="Logout" />
                            </form>
                        </li>
                    </ul>

                </nav>


                <div class="copyrights">
                    &copy; Copyrights 2021
                </div>
            </div>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <script>
        const toggle = document.getElementById('toggle');
        const nav = document.getElementById('header');
        const right = document.getElementById('main');
        toggle.addEventListener('click', function () {
    
            nav.classList.toggle('activeHeader')
            main.classList.toggle('mainActive')
        });
    </script>
    @yield('pagescript')

</body>

</html>