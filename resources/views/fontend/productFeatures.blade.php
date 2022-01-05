@extends('fontend.layout.masterLayout')
@section('content')

    <main class="main">
        <!--==================== Product Header ====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-header text-center">
                            <h2>The Features of Odhyyon <br> Designed to Make Lives Better</h2>
                            <p>User-friendly features designed for simple education management system in your campus.</p>
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
                                <p>Get your students enrolled online, all from admission process to background information.
                                </p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a href="">ID
                                            Card</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Certification</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Admission Process</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Student Promotion </a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Student’s Background Information </a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord">
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
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
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-right">
                                <h3>Features of</h3>
                                <h2>Attendance Management </h2>
                                <p>See if the students are doing well with their attendance, even though your childhood
                                    memories say otherwise.</p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Student Tracing System</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Auto-Alert Notification</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Daily Attendance Management</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Weekly/Monthly Attendance Report</a></li>

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
                                <h2>Exam & Result Management</h2>
                                <p>No more hassle in the exam hall, now exams will be monitored & published online</p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Script Assessment & Result</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Custom Patterns and Boards</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Subject-wise Categorization</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Online Marking & Grading System</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Schedule Feature for Publishing Results</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord" data-aos="fade-left">
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
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
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-left">
                                <h3>Features of</h3>
                                <h2>Fees Management</h2>
                                <p>Pay your fees anywhere with features like due payments, fees history and fine
                                    calculations.</p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Fees History</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Fine Calculations</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Quick Fees Receipt</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a href="">Due
                                            Fees Follow up</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Transport, canteen & other fees</a></li>
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
                                <h2>Accounts Management </h2>
                                <p>One-stop accounting management for all departments in your institution.</p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Transaction</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Balance Sheet</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Monthly ledger</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Report Generation</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Income expense report</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord" data-aos="fade-left">
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
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
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-left">
                                <h3>Features of</h3>
                                <h2>SMS Notifications</h2>
                                <p>Send messages necessary to reach the recipient, as early as possible. </p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Class absence Alert</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Miss period</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a href="">Due
                                            payment follow-up</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Monthly Progress Report</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Administrative Notifications</a></li>
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
                                <h2>Report Generation</h2>
                                <p>No more documents on papers- now your management will be paperless, and of course online.
                                </p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Student Record</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Exam Brief Report</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Performance Report</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Class Fees Generation</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Academic Result Report</a></li>
                                </ul>
                            </div>
                            <div class="feature-prdoucts-item-dashbord" data-aos="fade-left" data-aos-duration="6000"
                                data-aos-delay="450">
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
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
                            <div class="feature-prdoucts-item-dashbord-right" data-aos="fade-right" data-aos-duration="4000"
                                data-aos-delay="250">
                                <img src="{{ asset('image/fontend/img/StudentDashboard.jpg') }}" alt="">
                                <img src="{{ asset('image/fontend/img/studentdashbord1.jpg') }}" alt="">
                            </div>
                            <div class="feature-prdoucts-item feature-prdoucts-item-right" data-aos="fade-left"
                                data-aos-duration="6000" data-aos-delay="450">
                                <h3>Features of</h3>
                                <h2>HR & Payroll Management</h2>
                                <p>Manage staff and teachers more effectively and precisely, with a subtle HR & Payroll
                                    management system. </p>
                                <ul>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""> <a
                                            href="">Staff Performance Report</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Teachers Leave Management</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Attendance Progress Report</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Multi-campus management system</a></li>
                                    <li><img src="{{ asset('image/fontend/img/featureicon.svg') }}" alt=""><a
                                            href="">Access to every department & their Database</a></li>
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
                            <h2>Questions That You Might Wonder<span>(FAQs)</span></h2>
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
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is Odhyyon?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Odhyyon ERP, the brainchild of ADDIE Soft Ltd. is the leading education
                                            management system in Bangladesh, reigning over 14 years since inception. Odhyyon
                                            ERP covers everything you need to manage educational institutions while
                                            connecting students, parents, admins and teachers in one single platform.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>2</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How long has Odhyyon been in the market?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Odhyyon was launched in 2008, right after our Honorable Prime Minister declared
                                            her dream goals to bring Digital Bangladesh 2021. ADDIE Soft Ltd. first launched
                                            the desktop version of Odhyyon, later on added more features gradually and
                                            renovating the software much user-friendly.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="number">
                                        <p>3</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Can you conduct online classes via Odhyyon?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, of course. Odhyyon ERP makes learning digital, by covering everything in
                                            your institution online. From classes, exams, attendance to staff management-
                                            Odhyyon ERP does it online so you can get access anytime, anywhere.
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
                        <h2>Words That Move Us </h2>
                    </div>
                </div>
                <div class="well-wisher">
                    <div class="well-wisher-person text-center">
                        <div class="wisher-image">
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
        <section>
            <div class="container">

                <div class="well-wisher well-wisher-end">
                    <div class="well-wisher-person text-center">
                        <div class="wisher-image">
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
                            <img src="{{ asset('image/fontend/img/Parents-image1.png') }}" alt="">
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
