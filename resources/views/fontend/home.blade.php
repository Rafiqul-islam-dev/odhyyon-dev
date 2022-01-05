@extends('fontend.layout.masterLayout')
@section('content')
    <header class="header" id="header">
        <div class="container hero-container">

            <div class="row">
                <div class="col-md-12">
                    <div class="swaipe-banner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide banner-swiper">
                                <div class="swiper-text">

                                    <h4> <span>#1</span> One-Stop Education Management Software in Bangladesh </h4>
                                    <h1>Manage <span class="typeAnimation">Parents</span><br>From anywhere</h1>
                                    <p>Simplifying Education Management over 500+ Institutions for the past 14 years</p>

                                    <div class="banner-button">
                                        <a class="sign-up" href="">Sign up Free <img
                                                src="{{ asset('image/fontend/img/arrow-right-white.svg') }}" alt=""></a>
                                        <a href="" class="watchBtn"><img
                                                src="{{ asset('image/fontend/img/play-filled.svg') }}" alt=""> Watch
                                            Video</a>
                                    </div>

                                </div>
                                <div class="swiper-image">
                                    <img src="{{ asset('image/fontend/img/parents-img.png') }}" alt="">
                                    <div class="imgcard">
                                        <img class="cardAttendanc"
                                            src="{{ asset('image/fontend/img/Attendancecard.svg') }}" alt="">
                                        <img class="cardFees" src="{{ asset('image/fontend/img/FeesCard.svg') }}"
                                            alt="">
                                        <img class="cardResult" src="{{ asset('image/fontend/img/Resultcard.svg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide banner-swiper">
                                <div class="swiper-text">
                                    <h4> <span>#1</span> One-Stop Education Management Software in Bangladesh </h4>
                                    <h1>Manage <span class="typeAnimation">Teacher</span><br>From anywhere</h1>
                                    <p>Simplifying Education Management over 500+ Institutions for the past 14 years</p>
                                    <div class="banner-button">
                                        <a class="sign-up" href="">Sign up Free <img
                                                src="{{ asset('image/fontend/img/arrow-right-white.svg') }}" alt=""></a>
                                        <a href="" class="watchBtn"><img
                                                src="{{ asset('image/fontend/img/play-filled.svg') }}" alt=""> Watch
                                            Video</a>
                                    </div>
                                </div>
                                <div class="swiper-image">
                                    <img src="{{ asset('image/fontend/img/Teacher.png') }}" alt="">
                                    <div class="imgcard">
                                        <img class="cardAttendanc"
                                            src="{{ asset('image/fontend/img/Attendancecard.svg') }}" alt="">
                                        <img class="cardFees" src="{{ asset('image/fontend/img/FeesCard.svg') }}"
                                            alt="">
                                        <img class="cardResult" src="{{ asset('image/fontend/img/Resultcard.svg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="award">
                        <div class="award-item">
                            <p>Proud Member</p>
                            <img src="{{ asset('image/fontend/img/proud.svg') }}" alt="">
                        </div>
                        <div class="award-item">
                            <p>Award & Accolades</p>
                            <img src="{{ asset('image/fontend/img/award.svg') }}" alt="">
                        </div>
                        <div class="award-item">
                            <p>Certification</p>
                            <img src="{{ asset('image/fontend/img/certificate.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <!--==================== WHY ODHYYON ====================-->
        <section class="odhyyon-erp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="impact-header header-title">
                            <h2>Things You Can Do with <span>Odhyyon ERP </span> </h2>
                            <p>Odhyyon Connects Teachers, Parents, Students, and Admins- all in one place. </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="inpact-erp">
                            <div class="impact-odhyyon">
                                <img src="{{ asset('image/fontend/img/impact1.png') }}" alt="">
                                <p>Making Teaching Better </p>

                                <div class="impact-odhyyon-overly">
                                    <ul>
                                        <li>Easy <span>student attendance</span></a></li>
                                        <li><span>Online marking</span> & grading</a></li>
                                        <li>Fast Communication <span> with Parents </span></a></li>
                                        <li>Access to <span>Dashboard & Analytics </span></a></li>
                                        <li>Single Forum with <span>Students & Parents</span> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="impact-odhyyon">
                                <img src="{{ asset('image/fontend/img/impact2.png') }}" alt="">
                                <p>Making Learning Easier</p>

                                <div class="impact-odhyyon-overly">
                                    <ul>
                                        <li>Online <span>Homework</span></a></li>
                                        <li>Access to Notice, <span>News & Calendars</span></a></li>
                                        <li>Access to all updates online, <span>in the absence</span></a></li>
                                        <li>Online Class Schedules, <span>Exam Dates & Results</span></a></li>
                                        <li>Analytics for <span>study progress</span> and improvement potential </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="impact-odhyyon">
                                <img src="{{ asset('image/fontend/img/impact3.png') }}" alt="">
                                <p>Making Parenting Stress-Free </p>

                                <div class="impact-odhyyon-overly">
                                    <ul>
                                        <li>Connection to School, <span>anytime</span> easily</a></li>
                                        <li>Communicate <span>instantly</span> with Teachers </a></li>
                                        <li>Join Online <span>Parent Activities</span></a></li>
                                        <li>Access to <span>Parents Forum </span></a></li>
                                        <li>Less <span>Travel</span>, More Time</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="impact-odhyyon">
                                <img src="{{ asset('image/fontend/img/impact4.png') }}" alt="">
                                <p>Making Administration Super-Easy</p>

                                <div class="impact-odhyyon-overly">
                                    <ul>
                                        <li>Access to <span>User-Friendly</span> Interface </a></li>
                                        <li>Access to Department <span>Performance & Score </span></a></li>
                                        <li>Send Notice or <span>Messages</span>, Instantly</a></li>
                                        <li>Generate, <span>Import & Export</span> Automated Report </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CODE FEATURE ====================-->

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="core-header header-title">
                            <h2> <span>Core features</span> of ODHYYON</h2>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="core-feature-iteam-tab align-items-start">
                            <div class="nav core-feature-iteam flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Student Enrollment</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Attendance Management</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">Exam & Result
                                    Management</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">Fees Management</button>
                            </div>
                            <div class="core-feature-iteam-tab-img tab-content" id="v-pills-tabContent">
                                <img class="image-one active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab"
                                    src="{{ asset('image/fontend/img/dasbord/acDashbord.png') }}" alt="">
                                <img class="image-two" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab"
                                    src="{{ asset('image/fontend/img/dasbord/attDashbord.png') }}" alt="">
                                <img class="image-three" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab"
                                    src="{{ asset('image/fontend/img/dasbord/feshDashbord.png') }}" alt="">
                                <img class="image-foure" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab"
                                    src="{{ asset('image/fontend/img/dasbord/stuDashbord.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="another-feature-iteam-tab align-items-start">
                            <div class="another-feature-iteam-tab-img tab-content" id="v-pills-tabContent">
                                <img class="image-one active" id="v-pills-home1" role="tabpanel"
                                    aria-labelledby="v-pills-home1-tab"
                                    src="{{ asset('image/fontend/img/dasbord/acDashbord.png') }}" alt="">
                                <img class="image-two" id="v-pills-profile1" role="tabpanel"
                                    aria-labelledby="v-pills-profile1-tab"
                                    src="{{ asset('image/fontend/img/dasbord/attDashbord.png') }}" alt="">
                                <img class="image-three" id="v-pills-messages1" role="tabpanel"
                                    aria-labelledby="v-pills-messages1-tab"
                                    src="{{ asset('image/fontend/img/dasbord/feshDashbord.png') }}" alt="">
                                <img class="image-foure" id="v-pills-settings1" role="tabpanel"
                                    aria-labelledby="v-pills-settings1-tab"
                                    src="{{ asset('image/fontend/img/dasbord/stuDashbord.png') }}" alt="">
                            </div>
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home1" type="button" role="tab" aria-controls="v-pills-home1"
                                    aria-selected="true">Student Enrollment</button>
                                <button class="nav-link" id="v-pills-profile1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile1" type="button" role="tab"
                                    aria-controls="v-pills-profile1" aria-selected="false">Attendance
                                    Management</button>
                                <button class="nav-link" id="v-pills-messages1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages1" type="button" role="tab"
                                    aria-controls="v-pills-messages1" aria-selected="false">Exam & Result
                                    Management</button>
                                <button class="nav-link" id="v-pills-settings1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings1" type="button" role="tab"
                                    aria-controls="v-pills-settings1" aria-selected="false">Fees Management</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== PRODUCTS ====================-->
        <section>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper app-swaipe mySwiper">
                            <div class="swiper-wrapper app-swiper-wrapper">
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree1.png') }}" />
                                </div>
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree1.png') }}" />
                                </div>
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree2.png') }}" />
                                </div>
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree3.png') }}" />
                                </div>
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree1.png') }}" />
                                </div>
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree2.png') }}" />
                                </div>
                                <div class="swiper-slide app-slider">
                                    <img src="{{ asset('image/fontend/img/appscree3.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="googlePlayStore">
                            <div class="download">
                                <h3>Download</h3>
                                <img src="{{ asset('image/fontend/img/Logo.svg') }}" alt=""> <span>Mobile App</span>
                            </div>
                            <div class="playStoreLink">
                                <img class="googlelink" src="{{ asset('image/fontend/img/playstore.svg') }}" alt="">
                                <img class="qrcode" src="{{ asset('image/fontend/img/odhyyon-app-QR.svg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Education ====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="education-header header-title">
                            <h2>Features That Make <span>Education Easier</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="educarion-part">
                            <div class="education-proudct">
                                <div class="education-product-item">
                                    <img src="{{ asset('image/fontend/img/pay2fee.png') }}" alt="">
                                    <h3>Pay2Fee</h3>
                                    <p>Pay all Your Kids Admission Fees, with just a phone tap. </p>
                                </div>
                                <div class="education-product-item">
                                    <img src="{{ asset('image/fontend/img/smstant.png') }}" alt="">
                                    <h3>SMS Tant</h3>
                                    <p>All The Important Notices- flies over to your smartphone </p>
                                </div>
                                <div class="education-product-item">
                                    <img src="{{ asset('image/fontend/img/uppistit.png') }}" alt="">
                                    <h3>Uposthit</h3>
                                    <p>Get to know the student’s attendance, even when they bunk classes. </p>
                                </div>
                                <div class="education-product-item">
                                    <img src="{{ asset('image/fontend/img/eabodon.png') }}" alt="">
                                    <h3>E-abedon</h3>
                                    <p>Apply For Your Kid’s Admission- Anywhere </p>
                                </div>
                            </div>
                            <div class="education-app">
                                <div class="app-slider-mobile productslider">
                                    <div class="app-slider-img">
                                        <img src="{{ asset('image/fontend/img/Mobile_App.png') }}" alt="">
                                    </div>
                                    <div class="app-slider-img">
                                        <img src="{{ asset('image/fontend/img/Mobile_App.png') }}" alt="">
                                    </div>
                                    <div class="app-slider-img">
                                        <img src="{{ asset('image/fontend/img/Mobile_App.png') }}" alt="">
                                    </div>
                                    <div class="app-slider-img">
                                        <img src="{{ asset('image/fontend/img/Mobile_App.png') }}" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!--==================== TESTMONIAL ====================-->
        <section id="testominol">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testmonial">
                            <div class="testmonial-video">
                                <div class="video-button">
                                    <img src="{{ asset('image/fontend/img/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="testmonial-clints">
                                <div class="clients-iteam">
                                    <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="testominol-img">
                                    <p>Our School has been using Odhyyon ERP for the past 2 years, and we’ve received
                                        outstanding results in our education management. With a paperless administration, we
                                        now can do almost everything online, that makes things much easier to inspire our
                                        students to learn more</p>
                                    <h4>Md. Aminul Islam</h4>
                                    <h5>Senior Teacher</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== OUR PROMITED CLIENTS ====================-->


        <!--==================== E-BROCHURE ====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="e-broucure">
                            <div class="e-broucure-header">
                                <img src="{{ asset('image/fontend/img/e-book.png') }}" alt="">
                                {{-- <iframe frameborder='false' width='100%' height='360' title='Odhyyon Brochure'
                                    src='http://ebrochure.odhyyon.com/' type='text/html' allowfullscreen='true'
                                    scrolling='no' marginwidth='0' marginheight='0'></iframe> --}}
                            </div>
                            <div class="e-broucure-content">
                                <div class="brouchure-inner">
                                    <h3>See Everything We Offer in <span>ODHYYON</span> in this <span>e-Brochure.</span>
                                    </h3>
                                    <a href="">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== WITH US ====================-->
        <section class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sucription">
                            <div class="sucription-iteam">
                                <h3>Get Access to all Updates & </h3>
                                <h4>Notices on Your Fingertips</h4>
                            </div>
                            <div class="sucription-iteam sucription-email">
                                <form action="">
                                    <input type="email" placeholder="enter your email address">
                                    <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
