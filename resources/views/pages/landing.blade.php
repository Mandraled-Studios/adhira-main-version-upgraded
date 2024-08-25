@extends('layouts.app')

@section('pagescripts')
<script>
    let services = {
        // GST
        gst: `<h3 class="serviceTitle">Goods Service Tax</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="serviceListModel">
                            <ul class="firstUlBlock">
                                <li> New GST Registration </li>
                                <li> Preparation and filing of monthly returns </li>
                                <li> Consultancy on various issues relating to GST </li>
                                <li> Consultancy on GST refunds for exports and SEZ </li>
                                <li> Consultancy on GST refunds for inverted duty structure </li>
                                <li> Preparation and filing of GST Annual returns </li> 
                                <li> GST Related Appeals </li>
                                <li> Preparation and filing of GST Audit reports </li>
                            </ul> 
                        </div>
                    </div>
                </div>`, 

        it: `
            <h3 class="serviceTitle">Income Tax</h3>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="serviceListModel">
                        <ul class="firstUlBlock">
                            <li> Filing of Income Tax and Wealth Tax returns.</li>
                            <li> Advance tax estimation. </li>
                            <li> Filing of bulk Income tax returns for employees of corporate & Government clients.</li>
                            <li> Tax Planning for Corporate and Non corporate. </li>
                            <li> Obtaining PAN for assesses employees etc. </li>
                            <li> Income Tax Refunds getting from Income tax department </li>
                            <li> Advice on future tax implications in respect of the potential acquisition. </li>
                            <li> Assessing the liability towards deferred taxes. Providing regular updates on amendments, circulars,
notifications & judgments. </li>
                            <li> Consultancy on various intricate matters pertaining to Income tax. </li>
                            <li> Designing / restructuring salary structure. </li>
                            <li> Effective tax management, tax planning, tax structuring and advisory services. </li>
                            <li> Expertise in complicated direct tax assessments. </li>
                            <li> Obtaining Advance tax Rulings. </li>
                            <li> Obtaining No Objection Certificates from Income tax department. </li>
                            <li> Opinions on the various Double Tax Avoidance Agreement related issues. </li>
                            <li> Representations before Income Tax Authorities for appeal, scrutiny, transfer pricing, TDS, rectification, assessment and other matters etc. </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="serviceListModel">
                        <ul>
                            <li>Taxation services for Foreign Entities and Non Residents</li>
                            <li>Tax Planning for Corporate and Non corporate.</li>
                            <li>Obtaining Advance tax Rulings.</li>
                            <li>Obtaining No Objection Certificates from Income tax department.</li>
                            <li>Obtaining PAN for assesses employees etc.</li>
                            <li>Opinions on the various Double Tax Avoidance Agreement related issues.</li>
                            <li>Special expertise in search, seizure and survey.</li>
                            <li>Settlement of various issues raised under FEMA.</li>
                            <li>Representations before Income Tax Authorities for appeal, scrutiny, transfer
                                pricing,
                                TDS,
                                rectification, assessment and other matters etc.</li>
                        </ul>
                    </div>
                </div>`,
        
        //Income Tax
        it2: "<div style = 'max-height: 400px; overflow-y: auto;'> <h3> Income Tax <div class ='underline'> </div> </h3> <ul> <li>Advance tax estimation.</li>" +
        "<li>Advice on future tax implications in respect of the potential acquisition.</li>" +
        "<li>Assessing the liability towards deferred taxes. Providing regular updates on amendments, circulars, notifications &amp; judgments.</li>" +
        "<li>Consultancy on various intricate matters pertaining to Income tax.</li>" +
        "<li>Designing / restructuring salary structure.</li>" +
        "<li>Effective tax management, tax planning, tax structuring and advisory services.</li>" +
        "<li>Expertise in complicated direct tax assessments.</li>" +
        "<li>Filing and pleading appeals under various provisions of IT Act.</li>" +
        "<li>Filing of Income Tax and Wealth Tax returns.</li>" +
        "<li>Filing Income tax returns for employees of corporate clients.</li>" +
        "<li>Taxation services for Foreign Entities and Non Residents</li>" +
        "<li>Tax Planning for Corporate and Non corporate.</li>" +
        "<li>Obtaining Advance tax Rulings.</li>" +
        "<li>Obtaining No Objection Certificates from Income tax department.</li>" +
        "<li>Obtaining PAN for assesses employees etc.</li>" +
        "<li>Opinions on the various Double Tax Avoidance Agreement related issues.</li>" +
        "<li>Representations before Income Tax Authorities for appeal, scrutiny, transfer pricing, TDS, rectification, assessment and other matters etc.</li>" +
        "<li>Special expertise in search, seizure and survey.</li>" + 
        "<li>Settlement of various issues raised under FEMA.</li> </ul> </div>", 
        
        //Book Keeping
        bk: `
            <h3 class="serviceTitle">Book Keeping</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="serviceListModel">
                        <ul class="firstUlBlock">
                            <li> Transactional Activities </li>
                            <li> Reconciliation Reporting </li>
                            <li> Activities Management </li>
                            <li> Financial Statements </li>
                            <li> Ledger Review </li>
                            <li> Payroll Processing.</li>
                        </ul>
                    </div>
                </div>
            </div>
        `, 
        
        //TDS & TCS
        tds: `<h3 class="serviceTitle"> TDS &amp; TCS </h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="serviceListModel">
                            <ul class="firstUlBlock">
                                <li> TDS & TCS Estimation. </li>
                                <li> Filing of TDS and TCS Return. </li>
                                <li> Refund or Revised TDS and TCS. </li>
                                <li> Closing all old TDS & TCS Demands </li>
                            </ul>
                        </div>
                    </div>
                </div>`, 
        
        //Project Funding
        pf: `
        <h3 class="serviceTitle">Project Planning &amp; Funding</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="serviceListModel">
                        <ul class="firstUlBlock">
                            <li>External Credit Borrowings (ECBs).</li>
                            <li>Private placement of Terms loans, working capital limits, etc.</li>
                            <li>Preparations of Project Reports.</li>
                            <li>Preparation of CMA data for bank loans.</li> 
                        </ul> 
                    </div>
                </div>
            </div>`, 
        
        // Startup Consulting
        sc: `<h3 class="serviceTitle">Startup Consulting</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="serviceListModel">
                            <ul class="firstUlBlock">
                                <li>Start-up Valuation</li>
                                <li>Start-up Business plan drafting</li>
                                <li>Start-up pitch deck</li>
                                <li>Vetting of Founder agreement/ Vetting agreement</li>
                                <li>DPIIT registration</li>
                                <li>Start-up Tax consulting (Angel Tax exemption)</li>
                            </ul> 
                        </div>
                    </div>
                </div>`, 
        
        //ROC Registration
        roc: `
        <h3 class="serviceTitle">ROC Registration</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="serviceListModel">
                        <ul class="firstUlBlock">
                            <li> All matters related with Registrar of Companies & Company Law Board </li>
                            <li> Corporate restructuring </li>
                            <li> Formation of company in India, viz Private Limited, Public Limited, wholly owned subsidiary company, LLP etc. </li>
                            <li> Maintenance & compliance of Statutory Records </li>
                            <li> Merger & acquisition </li>
                        </ul>
                    </div>
                </div>
            </div>`, 
        
        //Others
        oth: `<h3 class="serviceTitle">Others</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="serviceListModel">
                            <ul class="firstUlBlock">
                                <li> FSSAI Registration. </li>
                                <li> PAN, TAN & Firm Registration </li>
                                <li> Import & Export Code registration & Renewal </li>
                                <li> Letter of Undertaking (LUT) Registration & Renewal </li>
                                <li> Digital Signature </li>
                                <li> Internal Auditing </li>
                                <li> Stock Auditing </li>
                                <li> ESI & EPF Registration and Monthly return filing </li>
                                <li> New Trade Mark Registration </li>
                                <li> Old Sales Tax & Service Tax related Appeal and demand closing service </li>
                            </ul>
                        </div>
                    </div>
                </div>`
    };

    setTimeout(() => {
        let preloader = document.getElementById("mandra-preloader");
        preloader.parentNode.removeChild(preloader);
    }, 2000);

    function reveal() {
        var revealY = document.querySelectorAll(".revealY");
        var revealX = document.querySelectorAll(".revealX");
        var revealZ = document.querySelectorAll(".reveal-X");
        var windowHeight = window.innerHeight;
        var elementVisible = 150;

        for (var i = 0; i < revealY.length; i++) {  
            var elementTop = revealY[i].getBoundingClientRect().top;   
            if (elementTop < windowHeight - elementVisible) {
            revealY[i].classList.add("active");
            } else {
            revealY[i].classList.remove("active");
            }
        }

        for (var i = 0; i < revealX.length; i++) {
            var elementTop = revealX[i].getBoundingClientRect().top;
            if (elementTop < windowHeight - elementVisible) {
            revealX[i].classList.add("active");
            } else {
            revealX[i].classList.remove("active");
            }
        }

        for (var i = 0; i < revealZ.length; i++) {
            var elementTop = revealZ[i].getBoundingClientRect().top;
            if (elementTop < windowHeight - elementVisible) {
            revealZ[i].classList.add("active");
            } else {
            revealZ[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

    window.addEventListener("load", function(){
        Array.from(document.querySelectorAll("#ourService .ourServices-block a")).forEach(
            more => {
                more.addEventListener("click", function(ev){
                    ev.preventDefault();
                    createOverlay(more.dataset.id);
                }, false);
            }
        );
    }, false);

    function createOverlay(serv) {
        let overlay = document.createElement("div");
        overlay.id = "overlay";
        let overlayStyle = {
            position: "fixed",
            width: "100vw",
            height: "100vh",
            top: "0px",
            left: "0px",
            zIndex: "9999",
            background: "rgba(0,0,0,0.5)",
            display: "flex",
            justifyContent: "center",
            alignItems: "center"
        }
        Object.assign(overlay.style, overlayStyle);

        let popup = document.createElement("div");
        popup.id = "popup";
        popup.classList.add("popupModel");
        let popupStyle = {
            maxWidth: "90%",
            maxHeight: "80vh",
            position: "relative",
            background: "rgba(255,255,255)",
            boxShadow: "0px 0px 6px rgba(0,0,0,0.4)",
            borderRadius: "1rem"
        };

        let closeBtn = document.createElement("button");
        closeBtn.id = "closeBtn";
        closeBtn.innerHTML = "x";
        let closeBtnStyle = {
            position: "absolute",
            top: "4px",
            right: "4px",
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            background: "rgba(255,255,255)",
            width: "2.5rem",
            height: "2.5rem",
            fontSize: "1.3rem",
            color: "#111",
            border: "none"
        };

        // let headingStyle = {
        //     marginBottom: "2rem !important", 
        //     fontSize: "33px", 
        //     fontWeight: "bold", 
        //     fontFamily: "gilroyBold",
        //     position: "relative",
        //     paddingBottom: "2rem"
        // };

        let underlineStyle = {
            position: "absolute",
            content: "",
            display: "block",
            width: "50px",
            height: "4px",
            backgroundColor: "#FF9401",
            borderRadius: "2rem",
            margin: "0.6rem 0"
        };

        Object.assign(closeBtn.style, closeBtnStyle);
        popup.appendChild(closeBtn);

        popup.innerHTML += services[serv];
        //Object.assign(popup.querySelector(".serviceTitle").style, headingStyle);
        //Object.assign(popup.querySelector(".underline").style, underlineStyle);
        Object.assign(popup.style, popupStyle);

        overlay.appendChild(popup);
        document.body.appendChild(overlay);

        document.getElementById("closeBtn").addEventListener("click", function(){
            document.getElementById("overlay").parentNode.removeChild(document.getElementById("overlay"));
        }, false);
    }
</script>
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
<!-- Banner Start Here -->

<section class="bannerSection d-flex align-items-center">
    <div class="container d-flex align-items-center" id="bannerSet">
        <div class="row align-items-md-center justify-content-between">
            <div class="col-lg-6 col-xl-5">
                <div class="bannerContent">
                    <h5>here We are</h5>
                    <h1>Help You To</h1>
                    <h1 class="FoldHeading">Manage Your Tax</h1>
                    <p class="mainPara">We are committed to creating and sustaining long-term relationships which
                        drawn
                        on our
                        experience and expertise to help our clients achieve real success</p>
                    <!-- <button class="bannerButton">Explore</button> -->
                    <a href="#" class="bannerButton">Explore</a>
                </div>
            </div>

            <div class="col-lg-6 col-xl-5">
                <div class="heroenQuiryForm">
                    <h2 class="subHeading">Service Enquiry</h2>
                    <h3 class="subHeadingTwo">For Requesting Call Back<div class ='underline'> </div> </h3>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <p> {{Session::get('success')}} </p>
                        </div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger">
                            <p> {{Session::get('danger')}} </p>
                        </div>
                    @endif

                    <form action="/enquiries" method = "POST">
                        @csrf
                        <input type="text" name = "name" placeholder="Enter Your Name Here" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name = "email" placeholder="Enter Your Email Here" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name="phone" id="" placeholder="Enter Your Mobile No">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="selectItem">
                            <select id="ourServiceOptions" id="selectMenu" name = "category">
                                <option value="">Which Type Of Service You Need ? *</option>
                                <option value="income-tax">Income Tax</option>
                                <option value="gst">Gst</option>
                                <option value="book-keeping">Book Keepings</option>
                                <option value="tds-tcs">TDS & TCS</option>
                                <option value="project-planning">Project Planning & Funding</option>
                                <option value="startup">Startup Consulting</option>
                                <option value="other">Other Services</option>
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- <button class="bannerButton">Send Enquiry</button> -->
                        <input type = "submit" class="bannerButton enquiry" value="Send Enquiry">
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End Here -->


<!-- Due Date Section Start Here-->
<section class="duedateSection revealY">
    <div class="container">
        <div class="row">

            <div class="dueDate-info newDate-infoforLg">
                <img src="images/Group 51.svg" alt="Bell" class="img-fluid due-bell">
                <h2>Never miss due date</h2>
                <h3>with our reminder calender</h3>
                <p class="mainPara">Add your reminder in your mobile calender which is follow the table below to log
                    in
                    and add the due date in this feature you cannot miss your billing.</p>
            </div>

            <div class="col-lg-6">
                <div class="dueDate-info">
                    <img src="images/Group 51.svg" alt="Bell" class="img-fluid due-bell">
                    <h2>Never miss due date</h2>
                    <h3>with our reminder calender</h3>
                    <p class="mainPara">Add your reminder in your mobile calender which is follow the table below to
                        log in and add the due date in this feature you cannot miss your billing.</p>
                </div>

                <div class="whatsNew">
                    <div class="whatsNew-title d-flex justify-content-between align-items-center">
                        <h4>What's New ! <span>Reguler Updates</span> </h4>
                    </div>
                    <div class="whatsNew-list">
                        @foreach ( $news as $msg)
                        <div class="whatsNew-block">
                            <div class="whatsNew-Date">
                                <h6>{{date('d M Y', strtotime($msg->date))}} &nbsp; - &nbsp; </h6>
                            </div>
                            <div class="whatsNew-topic">
                                <h6> {{$msg->title}} </h6>
                            </div>
                            <p class="whatsNew-message">
                                {{$msg->message}}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- Due Date All -->
            <div class="col-lg-6">
                <div class="duedateMainBlock">
                    <div class="dueDate-title d-flex justify-content-between align-items-center">
                        <h4>Due Date Reminder <span>Jan 2022</span> </h4>
                    </div>
                </div>

                <nav id="dueDate-Nav">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-income-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-income" type="button" role="tab" aria-controls="nav-income"
                            aria-selected="true">Income Tax</button>
                        <button class="nav-link" id="nav-gst-tab" data-bs-toggle="tab" data-bs-target="#nav-gst"
                            type="button" role="tab" aria-controls="nav-gst" aria-selected="false">GST</button>
                        <button class="nav-link" id="nav-others-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-others" type="button" role="tab" aria-controls="nav-others"
                            aria-selected="false">Other Services</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-income" role="tabpanel"
                        aria-labelledby="nav-income-tab">

                        <div class="dueDate-list">
                            @foreach ($income as $inc)
                            <div class="dueDate-block">
                                <div class="dueDate-Date">
                                    <h6>{{date('d M Y', strtotime($inc->date))}} &nbsp; - &nbsp;</h6>
                                </div>
                                <div class="dueDate-topic">
                                    <h6> {{$inc->title}}</h6>
                                </div>
                                <p class="dueDate-message">{{$inc->message}} </p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-gst" role="tabpanel" aria-labelledby="nav-gst-tab">
                        <div class="dueDate-list">
                            @foreach ($gst as $tax)
                            <div class="dueDate-block">
                                <div class="dueDate-Date">
                                    <h6>{{date('d M Y', strtotime($tax->date))}} &nbsp; - &nbsp;</h6>
                                </div>
                                <div class="dueDate-topic">
                                    <h6> {{$tax->title}}</h6>
                                </div>
                                <p class="dueDate-message">{{$tax->message}} </p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab">
                        <div class="dueDate-list">
                            @foreach ($others as $other)
                            <div class="dueDate-block">
                                <div class="dueDate-Date">
                                    <h6>{{date('d M Y', strtotime($other->date))}} &nbsp; - &nbsp;</h6>
                                </div>
                                <div class="dueDate-topic">
                                    <h6> {{$other->title}}</h6>
                                </div>
                                <p class="dueDate-message">{{$other->message}} </p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Due Date Section End Here-->


<!-- AboutUs Start here -->
<section class="aboutUsSection" id="aboutUsSection">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 order-1 col-lg-0 px-0 revealX">
                <div class="aboutUsContent">
                    <h5>About</h5>
                    <h2>Adhira Associates</h2>
                    <p> Adhira Associates established in the year 2017 in Coimbatore 
                       is a top player in the category Income Tax & GST Consultants 
                       in the Coimbatore and provides an array of Audit and Consultancy 
                       services related to General accounting, Internal auditing, 
                       Accounting outsourcing, Income tax advisory, GST consultancy, 
                       Statutory Compliance Audit, Company law / secretarial services 
                       and Due- Diligence. </p>
                    <p> Over the course of its journey, this business has established a 
                        firm foothold in its industry. The belief that customer satisfaction 
                        is as important as their products and services, have helped this 
                        establishment garner a vast base of customers, which continues to 
                        grow by the day. This business employs individuals that are dedicated 
                        towards their respective roles and put in a lot of effort to achieve 
                        the common vision and larger goals of the company.</p>
                    <p> Our firm has established strategic alliances with professionals who 
                        can bring expertise to the table for our clients. Ultimately, our goal 
                        is to succeed by serving our clients to succeed in their businesses.</p>
                </div>
            </div>
            <div class="col-lg-5 order-0 order-lg-1 d-block px-0 reveal-X">
                <div class="aboutUsImage">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- AboutUs End here -->


<!-- Our Services Start here-->

<section class="ourServicesSection" id="ourServicesSection">
    .<div class="container">
        <h1 class="centerTitle">Our Services</h1>

        <div class="servicemain_block">
            <div class="row g-0" id="ourService">
                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center ">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/gsticon.svg" alt="GstIcon" class="img-fluid" id="original">
                                <img src="./images/gsticon_hover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>Goods & <br> Service Tax (GST)</h4>
                            </div>
                        </div>
                        <p>Goods and Services Tax is an indirect tax used in India on the supply of goods
                            and services....</p>
                        <a data-id="gst">Read More</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/incometax-icon.svg" alt="GstIcon" class="img-fluid"
                                    id="original">
                                <img src="./images/income-hover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>income <br> Tax</h4>
                            </div>
                        </div>
                        <p>The Incometax Department is a government agency undertaking direct tax collection of the
                            Gov of India. </p>
                        <a data-id="it">Read More</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/bookkeeping-icon.svg" alt="GstIcon" class="img-fluid"
                                    id="original">
                                <img src="./images/bookkeeping-hover.svg" alt=" GstIcon" class="img-fluid"
                                    id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>Book <br> Keepings
                            </div>
                        </div>
                        <p>Recording of financial transactions, and is part of the process of accounting in business
                            and other organizations.</p>
                        <a data-id="bk">Read More</a>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/tds-icon.svg" alt="GstIcon" class="img-fluid" id="original">
                                <img src="./images/tds-hover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>TDS & <br> TCS
                                </h4>
                            </div>
                        </div>
                        <p>TDS is deducted whenever a payment is due or made, whichever is earlier. TCS is collected
                            by the seller at the time of sale.</p>
                        <a data-id="tds">Read More</a>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/project-icon.svg" alt="GstIcon" class="img-fluid" id="original">
                                <img src="./images/project-hover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>Project Planning
                                    <br> & Funding
                                </h4>
                            </div>
                        </div>
                        <p>The process of determining project costs and developing a budget. Good financial planning
                            has many benefits.</p>
                        <a data-id="pf">Read More</a>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/startup-icon.svg" alt="GstIcon" class="img-fluid" id="original">
                                <img src="./images/startuphover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>Startup
                                    <br> Consulting
                                </h4>
                            </div>
                        </div>
                        <p>Someone who is brought in to a startup on a short term basis to help move a specific
                            aspect of the company forward.</p>
                        <a data-id="sc">Read More</a>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/roc-icon.svg" alt="GstIcon" class="img-fluid" id="original">
                                <img src="./images/roc-hover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>ROC Compliances
                                    <br>& Registration
                                </h4>
                            </div>
                        </div>
                        <p>The ROC is an office under the Indian Ministry of Corporate Affairs that deals with
                            administration of the Companies.</p>
                        <a data-id="roc">Read More</a>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-4 col-md-6 px-0 revealY">
                    <div class="ourServices-block">
                        <div class="row d-flex align-items-center">
                            <div class="img-block col-md-5 col-3">
                                <img src="./images/other-icon.svg" alt="GstIcon" class="img-fluid" id="original">
                                <img src="./images/other-hover.svg" alt="GstIcon" class="img-fluid" id="onhover">
                            </div>
                            <div class="col-7">
                                <h4>Other
                                    <br> Services
                                </h4>
                            </div>
                        </div>
                        <p>We also doing FSSAI, PAN, TAN &amp; Firm Registration, Import &amp; Export Code
                            registration & Renewal etc.....</p>
                        <a data-id="oth">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Our Services End here -->


<!-- Our Team Start here -->

<section class="ourTeamSection">
    .<div class="container revealX">
        <h1 class="centerTitle ourTeam">Our Team</h1>
        <p class="mainPara"> Adhira Associates., a Coimbatore based leading GST and Income Tax practitioner firm promoted by three young
 graduate aspiring to excel in the fields of Accounting, Auditing & Business Consultancy Services.
        </p>

        <div class="ourTeamMain_block">
            <div class="row">

                <div class="col-lg-4">
                    <div class="ourTeam-block">
                        <div class="teamImgBlock">
                            <img src="./images/Manoj_1.png" alt="" class="img-fluid">
                        </div>
                        <div class="teaminfoBlockOverlay">
                            <div class="specializationBlock">
                                <h4>B.Manojkumar M.com(FCA).,</h4>
                                <p>Senior Partner in M/s. Adhira Associates (GST and Income Tax practitioner) in Coimbatore.</p>
                                <h6>Areas of Specialization Includes,</h6>
                                <ul>
                                    <li> GST Consultation </li>
                                    <li> Direct Tax & Indirect Tax Consultation. </li>
                                    <li> Financial Planning. </li>
                                    <li> Book Keeping. </li>
                                    <li> Internal & Stock Audits. </li>
                                    <li> Company formation & ROC Consultation. </li>
                                    <li> TDS & TCS Consultation </li>
                                    <li> Department Appeal Consultation </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="ourTeam-block">
                        <div class="teamImgBlock">
                            <img src="./images/Harish_01.png" alt="" class="img-fluid">
                        </div>
                        <div class="teaminfoBlockOverlay">
                            <div class="specializationBlock">
                                <h4>B.Harishkumar B.com., CA (Inter).,</h4>
                                <p>Senior Partner in M/s. Adhira Associates (GST and Income Tax practitioner) in Coimbatore.</p>
                                <h6>Areas of Specialization Includes,</h6>
                                <ul>
                                    <li>GST Consultation </li>
                                    <li>Direct & Indirect Tax Consultation. </li>
                                    <li>Financial Planning. </li>
                                    <li>Book Keeping. </li>
                                    <li>Internal & Stock Audits. </li>
                                    <li>Company formation & ROC Consultation. </li>
                                    <li>Project Planning & Forecasting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="ourTeam-block">
                        <div class="teamImgBlock">
                            <img src="./images/Suresh_1.png" alt="" class="img-fluid">
                        </div>
                        <div class="teaminfoBlockOverlay">
                            <div class="specializationBlock">
                                <h4>S.Sureshkumar MBA., CA (Inter).,</h4>
                                <p>Senior Partner in M/s. Adhira Associates (GST and Income Tax practitioner) in Coimbatore.</p>
                                <h6>Areas of Specialization Includes, </h6>
                                <ul>
                                    <li>GST Consultation </li>
                                    <li> Direct & Indirect Tax Consultation. </li>
                                    <li> Financial Planning. </li>
                                    <li> Book Keeping. </li>
                                    <li>Internal & Stock Audits. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</section>

<!-- Our Team End here -->


<!-- CalltoAction Start Here -->

<section class="calltoActionSection">
    <div class="container">
        <div class="row justify-content-between align-items-center align-items-sm-end">
            <div class="col-12 col-sm-6">
                <h5>Have a Doubt !
                    In Your Business ?</h5>
                <h2>We Can Help You</h2>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-sm-end" id="calltoAction">
                <a href="#contactUsSection" class="bannerButton"> Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- CalltoAction End Here -->

<!-- Testimonial Start Here -->

<section class="testmonialSection revealY">
    <div id="carouselMobile" class="testmonialSection carousel slide py-0" data-bs-ride="carousel">
        <div class="container d-block d-lg-none">
            <h1 class="centerTitle testimonial">Testimonial</h1>
            <div class="testimonialMainblock carousel-inner px-5">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-10 mb-4">
                            <div class="testmonialBlock">
                                <h2>100% Accurate Dates</h2>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Parasuram <span>Business in Chemical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-10 mb-4">
                            <div class="testmonialBlock">
                                <h2>Without Late Fees</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Ilangovan <span>Business in Medical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-10 mb-4">
                            <div class="testmonialBlock">
                                <h2> Worry Free Management</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Parasuram <span>Business in Chemical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                    <div class="col-10 mb-4">
                        <div class="testmonialBlock">
                            <h2>Friendly Staff &amp; Team</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                commodi?
                                Fuga, expedita. </p>
                            <h6>Mr. Ilangovan <span>Business in Medical Profession</span></h6>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-10 mb-4">
                            <div class="testmonialBlock">
                                <h2> Affordable Prices </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Parasuram <span>Business in Chemical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                    <div class="col-10 mb-4">
                        <div class="testmonialBlock">
                            <h2> All Business At One Place </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                commodi?
                                Fuga, expedita. </p>
                            <h6>Mr. Ilangovan <span>Business in Medical Profession</span></h6>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <button style="filter: invert(1);" class="carousel-control-prev d-block d-lg-none" type="button" data-bs-target="#carouselMobile" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button style="filter: invert(1);" class="carousel-control-next d-block d-lg-none" type="button" data-bs-target="#carouselMobile" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="carouselTabPC" class="testmonialSection carousel slide py-0" data-bs-ride="carousel">
        <div class="container d-none d-lg-block">
            <h1 class="centerTitle testimonial">Testimonial</h1>
            <div class="testimonialMainblock carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 mb-4">
                            <div class="testmonialBlock">
                                <h2>100% Accurate Dates</h2>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Parasuram <span>Business in Chemical Profession</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-4">
                            <div class="testmonialBlock">
                                <h2>Without Late Fees</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Ilangovan <span>Business in Medical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 mb-4">
                            <div class="testmonialBlock">
                                <h2> Worry Free Management</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Parasuram <span>Business in Chemical Profession</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-4">
                            <div class="testmonialBlock">
                                <h2>Friendly Staff &amp; Team</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Ilangovan <span>Business in Medical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 mb-4">
                            <div class="testmonialBlock">
                                <h2> Affordable Prices </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Parasuram <span>Business in Chemical Profession</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-4">
                            <div class="testmonialBlock">
                                <h2> All Business At One Place </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab rem cumque aspernatur
                                    necessi laboriosam porro, at natus illo veritatis exercitationem consequatur
                                    commodi?
                                    Fuga, expedita. </p>
                                <h6>Mr. Ilangovan <span>Business in Medical Profession</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button style="filter: invert(1);" class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselTabPC" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button style="filter: invert(1);" class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselTabPC" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Testimonial End Here -->


<!-- Contact Start Here -->

<section class="contactSection" id="contactUsSection">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-6 col-xl-7 px-0 revealX">
                <div class="contactMainBlock">
                    <h1 class="centerTitle contact">Contact Us</h1>
                    <div class="contactForm">
                        @if (Session::has('success2'))
                            <div class="alert alert-success">
                                <p> {{Session::get('success2')}} </p>
                            </div>
                        @endif
                        @if (Session::has('danger2'))
                            <div class="alert alert-danger">
                                <p> {{Session::get('danger2')}} </p>
                            </div>
                        @endif
                        <form action="/enquiries" method = "POST">
                            @csrf
                            <div class="row">
                                <input type="text" name="name" id="" placeholder="Enter Your Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="email" name="email" id="" placeholder="Enter Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="text" name="phone" id="" placeholder="Enter Your Mobile No">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <select name="category" id="servicesList">
                                    <option value="">Which Type Of Service You Need ? *</option>
                                    <option value="income-tax">Income Tax</option>
                                    <option value="gst">Gst</option>
                                    <option value="book-keeping">Book Keepings</option>
                                    <option value="tds-tcs">TDS & TCS</option>
                                    <option value="project-planning">Project Planning & Funding</option>
                                    <option value="startup">Startup Consulting</option>
                                    <option value="other">Other Services</option>
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <textarea name="message" id="" cols="30" rows="10"
                                    placeholder="Describe Your Service Need here..."></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="bannerButton">SEND MESSAGE</button>
                            </div>
                            
                            <div class="row justify-content-between setOne">
                                <div class="col-md-6">
                                    <div class="mailblock">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-2">
                                                <i class="bi bi-envelope iconblock"></i>
                                            </div>
                                            <div class="col">
                                                <div class="infoblock">
                                                    <div class="label">Mail Us</div>
                                                    <div class="info">info@adhiraassociates.com</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="socialblock">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-2">
                                                <i class="bi bi-hand-thumbs-up iconblock"></i>
                                            </div>
                                            <div class="col">
                                                <div class="infoblock">
                                                    <div class="label">Follow Us</div>
                                                    <div class="info social">
                                                        <a style="color:white" href="https://www.google.com/search?q=adhira+associates&rlz=1C1JJTC_enIN971IN971&oq=adhira+associates&aqs=chrome..69i57j46i175i199i512j69i61j69i60l2.3664j0j7&sourceid=chrome&ie=UTF-8
"><i class="bi bi-google"></i> </a>
                                                        <a style="color:white" href="https://api.whatsapp.com/send?phone=+919944631910"> <i class="bi bi-whatsapp"></i> </a>
                                                        <a style="color:white" href="https://www.facebook.com/adhiraassociates.adhira.3"> <i class="bi bi-facebook"></i> </a>
                                                        <i class="bi bi-twitter"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between setTwo">
                                <div class="col-md-6">
                                    <div class="callblock">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-2">
                                                <i class="bi bi-telephone iconblock"></i>
                                            </div>
                                            <div class="col">
                                                <div class="infoblock">
                                                    <div class="label">Call Us</div>
                                                    <div class="info two">+0422-4954176 | 99446-99775 <br>
                                                        99446-99455 | 99446-99337</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="findblock">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-2">
                                                <i class="bi bi-geo-alt iconblock"></i>
                                            </div>
                                            <div class="col">
                                                <div class="infoblock">
                                                    <div class="label">Find Us</div>
                                                    <div class="info two">No.39-11, 2<span>nd</span> Floor, Ramanis Kalpavrukshaa Apartments,
                                                        11th Street, Tatabad,
                                                        Coimbatore 641012</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-5 px-0 reveal-X">
                <div class="mapMainBlock">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.2738938516272!2d76.96135131520234!3d11.018065057698747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70cb928798464a02!2zMTHCsDAxJzA1LjAiTiA3NsKwNTcnNDguNyJF!5e0!3m2!1sen!2sin!4v1649227497331!5m2!1sen!2sin" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


            </div>


        </div>
    </div>
</section>
<!-- Contact End Here -->

<!-- Back to top button -->
<button class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top" type="button" >
  <i class="bi bi-arrow-up"></i>
</button>

<!-- Whatsapp button -->
<a id="btn-whatsapp-fab" href="https://api.whatsapp.com/send?phone=+919944699775" >
  <i class="bi bi-whatsapp"></i>
</a>
@endsection

@section('pagestyles')
<link href = "css/style.css" rel="stylesheet" />
<style>
    html, body {
        width: 100vw;
        overflow-x: hidden;
    }

    #popup {
        padding: 2rem;
    }

    #popup ul {
        list-style: none; 
    }

    .dueDate-list {
        max-height: 685px;
    }

    .whatsNew-block h6, .dueDate-block h6{
        font-family: 'gilroyMedium' !important;
    }

    #popup ul li::before {
        content: "\2022";  
        color: #FF9401; 
        display: inline-block; 
        width: 1rem; 
        margin-left: -1rem; 
    }

    .popupOverlay {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0px;
            left: 0px;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .popupModel {
            padding: 60px 70px 60px 90px;
            border-radius: 20px;
            background: #fff;
            box-sizing: border-box;
            max-width: 75vw;
            height: auto;
            box-shadow: 0px 1px 4px rgba(0, 0, 0, .1);
            margin: 0 auto;
        }

        h3 {
            font-size: 2rem;
            margin-top: -5px !important;
            position: relative;
            font-family: 'gilroyBold' !important;
        }
        
        #popup h3.serviceTitle {
            margin-bottom: 30px !important;
        }

         #popup h3.serviceTitle + .row {
             overflow-y: auto;
             max-height: 60vh;
         }
         
        .serviceTitle::after {
            content: "";
            position: absolute;
            width: 56px;
            height: 5px;
            border-radius: 5px;
            background: #FD9700;
            left: 0%;
            bottom: -50%;
        }

        .serviceListModel ul {
            padding-left: 0px !important;
            margin-top: 0px !important;
            list-style-type: none;
        }

        .serviceListModel ul li {
            font-size: 0.969rem;
            font-weight: 400;
            margin-bottom: 20px !important;
            color: #757575;
        }

        .serviceListModel ul li::before {
            content: "\2022";
            color: #FD9700;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            height: 1em;
            margin-right: 20px
        }

        .serviceListModel ul li:first-child {
            margin-top: 63px;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f7ff !important;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(206, 206, 206);
            border-radius: 20px !important;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgb(182, 182, 182);
        }
        
        #btn-back-to-top {
            width: 60px;
            height: 60px;
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: #F80;
            color: white;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 7px rgba(0,0,0,0.2);
        }
        
        #btn-whatsapp-fab {
            width: 60px;
            height: 60px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #21BC53;
            color: white;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 7px rgba(0,0,0,0.2);
        }
        
        .teamImgBlock {
            border-radius: 8px 8px 0px 0px;
            overflow: hidden;
            z-index: 1;
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 35%, rgba(243, 251, 252, 1) 80%);
        }


        @media (max-width:1366px) and (min-width:1200px) {

            .popupModel {
                padding: 40px 50px 40px 60px;
                border-radius: 10px;
                max-width: 90vw;
            }

            .serviceListModel ul li {
                font-size: 0.969rem;
                margin-bottom: 10px !important;
            }
        }

        @media (max-width:1199px) and (min-width:992px) {

            h3 {
                font-size: 1.8rem;
            }

            .popupModel {
                padding: 45px 40px 25px 50px;
                border-radius: 10px;
                max-width: 85vw;
            }

            .serviceListModel ul li {
                font-size: 0.969rem;
                margin-bottom: 10px !important;
            }
        }


        @media (max-width:991px) and (min-width:768px) {

            h3 {
                font-size: 1.6rem;
            }

            .serviceTitle::after {
                height: 4px;
                bottom: -35%;
            }

            .popupModel {
                padding: 40px 40px 15px 40px;
                border-radius: 10px;
                max-width: 85vw;
            }

            .firstUlBlock {
                padding-top: 50px !important;
            }

            .serviceListModel ul li {
                font-size: 0.969rem;
                margin-bottom: 7px !important;
            }

            .serviceListModel ul li:first-child {
                margin-top: -10px;
            }

        }

        @media (max-width:767px) and (min-width:500px) {

            h3 {
                font-size: 1.6rem;
            }

            .serviceTitle::after {
                height: 4px;
                bottom: -35%;
            }

            .popupModel {
                padding: 40px 40px 15px 40px;
                border-radius: 10px;
                max-width: 90vw;
                max-height: 550px;
            }

            .firstUlBlock {
                padding-top: 50px !important;
            }

            .serviceListModel ul li {
                font-size: 0.969rem;
                margin-bottom: 7px !important;
            }

            .serviceListModel ul li:first-child {
                margin-top: -10px;
            }

            .serviceListModel ul li::before {
                margin-right: 8px
            }
        }


        @media (max-width:500px) and (min-width:320px) {

            h3 {
                font-size: 1.6rem;
            }

            .serviceTitle::after {
                height: 4px;
                bottom: -45%;
            }

            .popupModel {
                padding: 35px 28px 25px 28px;
                border-radius: 10px;
                max-width: 96vw;
                max-height: 600px;
            }

            .firstUlBlock {
                padding-top: 24px !important;
            }

            .serviceListModel ul li {
                font-size: 0.969rem;
                margin-bottom: 7px !important;
            }

            .serviceListModel ul li:first-child {
                margin-top: -10px;
            }

            .serviceListModel ul li::before {
                margin-right: 8px
            }
        }

    @media only screen and (min-width: 992px) {
        #popup {
            padding: 5rem;
        }
    }
</style>
<script>
    //Get the button
    function getButton() {
        var mybutton = document.getElementById("btn-back-to-top"); 
        
        if(!mybutton) {
            setTimeout(getButton, 500);
        } 
        else {
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction(mybutton);
            };
    
            // When the user clicks on the button, scroll to the top of the document
            mybutton.addEventListener("click", backToTop);
        }
    }
    
    function scrollFunction(mybutton) {
        if (
            document.body.scrollTop > 100 ||
            document.documentElement.scrollTop > 100
        ) {
            mybutton.style.display = "flex";
        } else {
            mybutton.style.display = "none";
        }
    }
    
    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    
    getButton();
</script>
@endsection



    
