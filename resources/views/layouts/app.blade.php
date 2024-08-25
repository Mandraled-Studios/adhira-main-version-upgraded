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
    <link rel="preload" href="/assets/Gilroy-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/Gilroy-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/Gilroy-Bold.woff2" as="font" type="font/woff2" crossorigin>
        
    <!-- Font Awesome 4 -->
    <link rel="stylesheet"
    src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <!-- Own Style -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @yield('pagestyles')
    
    <!-- Own Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    
</head>
<body class = "general">
    <div id="app">
        <header>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-3 col-lg-2 col-sm-4 col-5">
                        <img src="images/Logo.svg" alt="" class="img-fluid">
                    </div>
    
                    <div class="col-md-6 col-sm-8 col-7">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-sm-4 col-4">
                                <div class="lan-Selection">
                                    <p>Language</p>
                                    <span><a href="#">ENG</a></span> | <span><a href="#">TAM</a></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-8">
                                <img src="images/Gst&income.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End Here -->
    
        <!-- Navbar Start Here -->
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container">
                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarAdhira">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse order-0 order-md-1 order-sm-1 order-lg-0" id="navBarAdhira">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/#aboutUsSection" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="/#ourServicesSection" class="nav-link">Our Services</a></li>
                        <li class="nav-item"><a href="/clients" class="nav-link">Our Clients</a></li>
                        <li class="nav-item"><a href="/calculator" class="nav-link">Calculator</a></li>
                        <li class="nav-item"><a href="/#contactUsSection" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
    
                <!-- Navbar Contact -->
                <div class="header-contact ms-auto text-end order-1 order-md-0 order-sm-0 order-lg-1 d-xl-block">
                    <div class="contactSet">
                        <i class="bi bi-telephone"></i>
                        <a href="tel:0422 4954176" class="landLine">0422 4954176</a>
                        <i class="bi bi-envelope" id="offMialIcon"></i>
                        <a href="mailto:info@adhiraassociates.com" class="offMail">info@adhiraassociates.com</a>
                    </div>
                </div>
    
    
            </div>
        </nav>
        <!-- Navbar End Here -->

        <main class="">
            @yield('content')
        </main>

        <!-- Footer Start Here -->
        <footer>
            <div class="container">
                <div class="footerBlock">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-3">
                            <div class="footerlogo">
                                <img src="./images/footerLogo.svg" alt="footerLogo" class="img-fluid d-block mx-md-auto">
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-9">
                            <div class="quicklinksBlock">
                                <div class="row">
                                    <div class="col-lg col-md-12 col-sm-4 col-6" id="mainQuickLinks">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Our Team</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md col-sm-4 col-6">
                                        <ul>
                                            <li><a href="#">GST</a></li>
                                            <li><a href="#">Income Tax</a></li>
                                            <li><a href="#">TDS/ TCS</a></li>
                                            <li><a href="#">Book Keepings</a></li>
                                        </ul>
                                    </div>


                                    <div class="col-md col-sm-4 col-6">
                                        <ul>
                                            <li><a href="#">ROC</a></li>
                                            <li><a href="#">Project Planning</a></li>
                                            <li><a href="#">Project Funding</a></li>
                                            <li><a href="#">Startup Consulting</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md col-sm-4 col-6">
                                        <ul>
                                            <li><a href="#">FSSAI</a></li>
                                            <li><a href="#">Digital Signature</a></li>
                                            <li><a href="#">PAN|TAN|Firm Reg</a></li>
                                            <li><a href="#">Internal Auditing</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md col-sm-4 col-6">
                                        <ul>
                                            <li><a href="#">ESI & PF</a></li>
                                            <li><a href="#">Stock Auditing</a></li>
                                            <li><a href="#">Import Export Code</a></li>
                                            <li><a href="#">LUT Registration</a></li>
                                        </ul>
                                    </div>


                                    <div class="col-md col-sm-4 col-6">
                                        <ul>
                                            <li><a href="#">Payroll</a></li>
                                            <li><a href="#">Non Residents</a></li>
                                            <li><a href="#">Corporate Service</a></li>
                                            <li><a href="#">Corporate Finance</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copymainblock">
                    <div class="row justify-content-between">

                        <div class="col-sm-6 col-12">
                            <div class="copyrightblock">
                                copyrights 2022 & All Rights Reserved For www.adhiraassociates.com
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="designblock">
                                Design & Developed by <a href="#">MaghizhmadhiMediaWorks</a> & <a
                                    href="#">MandraledStudios.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </footer>
        <!-- Footer End Here -->
    </div>

    @yield('pagescripts')
</body>
</html>
