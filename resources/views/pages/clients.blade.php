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
<style>
    .ourClientsSection {
            padding: 60px 0px;
            color: #fff;
        }


        .ourClientsSection .centerTitle {
            color: #202124 !important;
        }

        .centerTitle.ourClients::before {
            content: "Our Clients" !important;
        }

        .clientsBlock {
            margin-top: 80px !important;
        }

        .clientsBlock ul {
            padding: 0px !important;
        }

        .clientsBlock ul li {
            color: #202124 !important;
            list-style-type: none;
            line-height: 35px !important;
        }

        @media (max-width:1199px) and (min-width:992px) {
            .centerTitle::before {
                font-size: 112px;
            }
        }

        @media (max-width:991px) and (min-width:768px) {
            .centerTitle::before {
                font-size: 90px;
                left: 0px;
                right: 0px;
                bottom: -30px;
            }
        }

        @media (max-width:767px) and (min-width:400px) {
            .centerTitle::before {
                font-size: 80px;
                left: 0px;
                right: 0px;
                bottom: -10px;
            }
        }

</style>
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

<!-- ourClients Section Start Here -->
<div class="py-5">
    <section class="ourClientsSection">
        <div class="container">
            <h1 class="centerTitle ourClients">Our Clients</h1>

            <div class="clientsBlock">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <ul>
                            <li>Aerospace, defence & security</li>
                            <li>Agriculture & Agro Products</li>
                            <li>Automotive</li>
                            <li>Banking & capital markets</li>
                            <li>Banking & Financial Services</li>
                            <li>Chemicals</li>
                            <li>Construction and Real Estate</li>
                            <li>Consultancy services</li>

                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <ul>
                            <li>Domestic Charity Org</li>
                            <li>International Charity Org</li>
                            <li>Education Institutions</li>
                            <li>Energy, utilities & mining</li>
                            <li>Foreign Direct investments</li>
                            <li>Healthcare</li>
                            <li>Hospitality & Leisure</li>
                            <li>Industrial Manufacturing</li>


                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <ul>
                            <li>Media & Entertainment</li>
                            <li>Oil and gas Sector</li>
                            <li>Overseas Direct investment</li>
                            <li>& Joint Ventures</li>
                            <li>Pharmaceuticals & life sciences</li>
                            <li>Private Equity</li>
                            <li>Retail & Consumer</li>
                            <li>Software & Services</li>

                        </ul>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <ul>
                            <li>Special Economic Zones</li>
                            <li>Telecommunication</li>
                            <li>Transport Sector</li>
                            <li>Transportation & logistics</li>
                            <li>Wholesale Trading</li>
                            <li>Insurance & Wealth Management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ourClients Section End Here -->
@endsection