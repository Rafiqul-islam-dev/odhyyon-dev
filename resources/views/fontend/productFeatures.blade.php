@extends('fontend.layout.masterLayout')
@section('content')

<main class="main">
        <!--==================== Product Header ====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-header text-center">
                            <h2>Discover All of ODHYYON Features</h2>
                            <p>We’re leading software professionals to success, one connection at a time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==============product Feature ===============-->
        <section class="product-nav-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-nav">
                            <ul>
                                <li class="activeProduct"><a href="#Enrollment">Student Enrollment</a></li>
                                <li><a href="#Attendance">Attendance Management</a></li>
                                <li><a href="#Exam">Exam & Result Management</a></li>
                                <li><a href="#Fees">Fees Management</a></li>
                                <li><a href="#Accounts">Accounts Management</a></li>
                                <li><a href="#SMS">SMS Notifications</a></li>
                                <li><a href="#Report">Report Generation</a></li>
                                <li><a href="#HR">HR & Payroll Management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================Feature Of Products====================-->

        <section id="Enrollment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details">
                            <div class="feature-prdoucts-item">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================Feature Of Products====================-->
        <section id="Attendance">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details" data-aos="fade-left">
                            <div class="feature-prdoucts-item-dashbord-right">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-right">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====================Feature Of Products====================-->

        <section id="Exam">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details">
                            <div class="feature-prdoucts-item" data-aos="fade-right">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord" data-aos="fade-left">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================Feature Of Products====================-->
        <section id="Fees">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details" data-aos="fade-right">
                            <div class="feature-prdoucts-item-dashbord-right">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-left">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================Feature Of Products====================-->

        <section id="Accounts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details">
                            <div class="feature-prdoucts-item" data-aos="fade-right">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord" data-aos="fade-left">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================Feature Of Products====================-->
        <section id="SMS">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details">
                            <div class="feature-prdoucts-item-dashbord-right" data-aos="fade-right">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-left">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====================Feature Of Products====================-->

        <section id="Report">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details">
                            <div class="feature-prdoucts-item" data-aos="fade-right" data-aos-duration="4000"
                                data-aos-delay="250">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord" data-aos="fade-left" data-aos-duration="6000"
                                data-aos-delay="450">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================Feature Of Products====================-->
        <section id="HR">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-product-details">
                            <div class="feature-prdoucts-item-dashbord-right" data-aos="fade-right"
                                data-aos-duration="4000" data-aos-delay="250">
                                <img src="{{ asset ('image/fontend/img/StudentDashboard.jpg')}}" alt="">
                                <img src="{{ asset ('image/fontend/img/studentdashbord1.jpg')}}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-left"
                                data-aos-duration="6000" data-aos-delay="450">
                                <h3>Features of</h3>
                                <h2>Student Enrollment</h2>
                                <p>We’re leading software professionals to success, one connection at a time.</p>
                                <ul>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""> <a href="">Student Entry</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Student List</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Advance search</a></li>
                                    <li><img src="{{ asset ('image/fontend/img/featureicon.svg')}}" alt=""><a href="">Certificate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================FAQ Question==================-->

        <section id="faqQuestion">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq-question header-title">
                            <h2>Frequently Asked Questions <span>(FAQs)</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="faqQuestion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>1</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Replace you question here?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We’re leading software professionals to success, We’re leading software
                                            professionals to success, one connection at a
                                            time. We’re leading software professionals to success, one connection at a
                                            time.We’re leading software professionals to
                                            success, one connection at a time. one connection at a time.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>2</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Replace you question here?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We’re leading software professionals to success, We’re leading software
                                            professionals to success, one connection at a
                                            time. We’re leading software professionals to success, one connection at a
                                            time.We’re leading software professionals to
                                            success, one connection at a time. one connection at a time.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>3</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Replace you question here?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We’re leading software professionals to success, We’re leading software
                                            professionals to success, one connection at a
                                            time. We’re leading software professionals to success, one connection at a
                                            time.We’re leading software professionals to
                                            success, one connection at a time. one connection at a time.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>4</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingFoure">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFoure"
                                            aria-expanded="false" aria-controls="collapseFoure">
                                            Replace you question here?
                                        </button>
                                    </h2>
                                    <div id="collapseFoure" class="accordion-collapse collapse"
                                        aria-labelledby="headingFoure" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We’re leading software professionals to success, We’re leading software
                                            professionals to success, one connection at a
                                            time. We’re leading software professionals to success, one connection at a
                                            time.We’re leading software professionals to
                                            success, one connection at a time. one connection at a time.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>5</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Replace you question here?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We’re leading software professionals to success, We’re leading software
                                            professionals to success, one connection at a
                                            time. We’re leading software professionals to success, one connection at a
                                            time.We’re leading software professionals to
                                            success, one connection at a time. one connection at a time.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Wisher ====================-->
        <section>
            <div class="container">
                <div class="col-lg-12">
                    <div class="wisher-header header-title">
                        <h2>Kind Words from our <span>Well wishers</span></h2>
                    </div>
                </div>
                <div class="well-wisher">
                    <div class="well-wisher-person text-center">
                        <div class="wisher-image">
                            <img src="{{ asset ('image/fontend/img/Parents-image1.png')}}" alt="">
                        </div>
                        <h4>Md. Aminul Islam</h4>
                        <h5>Senior Teacher</h5>
                        <h6>Viqarunnisa Noon School & College</h6>
                        <p>We’re leading software professionals to success, We’re leading software professionals to
                            success, one connection at a
                            time. We’re leading software professionals to success, one connection at a time.We’re
                            leading software professionals to
                            success, one connection at a time. one connection at a time.</p>
                    </div>
                    <div class="well-wisher-person well-wisher-person-two text-center">
                        <div class="wisher-image">
                            <img src="{{ asset ('image/fontend/img/Parents-image1.png')}}" alt="">
                        </div>
                        <h4>Md. Aminul Islam</h4>
                        <h5>Senior Teacher</h5>
                        <h6>Viqarunnisa Noon School & College</h6>
                        <p>We’re leading software professionals to success, We’re leading software professionals to
                            success, one connection at a
                            time. We’re leading software professionals to success, one connection at a time.We’re
                            leading software professionals to
                            success, one connection at a time. one connection at a time.
                        </p>
                    </div>
                    <div class="well-wisher-person text-center">
                        <div class="wisher-image">
                            <img src="{{ asset ('image/fontend/img/Parents-image1.png')}}" alt="">
                        </div>
                        <h4>Md. Aminul Islam</h4>
                        <h5>Senior Teacher</h5>
                        <h6>Viqarunnisa Noon School & College</h6>
                        <p>We’re leading software professionals to success, We’re leading software professionals to
                            success, one connection at a
                            time. We’re leading software professionals to success, one connection at a time.We’re
                            leading software professionals to
                            success, one connection at a time. one connection at a time.
                        </p>
                    </div>
                    <div class="well-wisher-person well-wisher-person-two text-center">
                        <div class="wisher-image">
                            <img src="{{ asset ('image/fontend/img/Parents-image1.png')}}" alt="">
                        </div>
                        <h4>Md. Aminul Islam</h4>
                        <h5>Senior Teacher</h5>
                        <h6>Viqarunnisa Noon School & College</h6>
                        <p>We’re leading software professionals to success, We’re leading software professionals to
                            success, one connection at a
                            time. We’re leading software professionals to success, one connection at a time.We’re
                            leading software professionals to
                            success, one connection at a time. one connection at a time.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection