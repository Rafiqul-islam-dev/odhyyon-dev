@extends('fontend.layout.masterLayout')
@section('content')

<main class="main">
        <!--==================== Priching Header ====================-->
        <section id="priching">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="priching-header text-center">
                            <h2>Choose the pricing plan that best suits your institutions</h2>
                            <p>Pick a price plan that’s right for you</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Priching Iteam ====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="priching-iteam-main">
                            <div class="prichingIteam">
                                <h3>Monthly Subscription</h3>
                                <img src="{{ asset ('image/fontend/img/monthlypay.svg')}}" alt="">
                                <p><span>25000</span> monthly</p>
                                <ul>
                                    <li>Installation Charge - 2000 Tk</li>
                                    <li>For 200 Students</li>
                                    <li>Free Student Database</li>
                                    <li>Free Support</li>
                                    <li>Free Updates</li>
                                </ul>
                                <a href="">Purchase <img src="{{ asset ('image/fontend/img/arrow-right.svg')}}" alt=""></a>
                            </div>
                            <div class="prichingIteam">
                                <h3>Pay per Student</h3>
                                <img src="{{ asset ('image/fontend/img/payperstd.svg')}}" alt="">
                                <p><span>15</span> monthly</p>
                                <ul>
                                    <li>Installation Charge - <b>FREE</b></li>
                                    <li>Non – Masking SMS : 10 SMS per student free</li>
                                    <li>Masking SMS: 5 SMS per student free</li>
                                    <li>Printer with Printing Service & Papers - <b>FREE</b></li>
                                    <li>Free Updates & Free Supports</li>
                                </ul>
                                <a href="">Purchase <img src="{{ asset ('image/fontend/img/arrow-right.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Priching Table ====================-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="price-table-header header-title">
                            <h2>Compare Plan with <span>best package</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pricing">
                            <div class="container">
                                <div class="pricing-table table-responsive">
                                    <table class="table">
                                        <!-- Heading -->
                                        <thead>
                                            <tr>
                                                <th style="text-align: left;">ODHYYON Education ERP Services</th>
                                                <th>
                                                    Monthly Subscription
                                                </th>
                                                <th>
                                                    Pay per Student
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-hdd-o"></i>
                                                        Learning Management System</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">

                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-shield"></i>
                                                        Student Database Management with Online/Offline Upload & Advance
                                                        Search features.</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        Student Attendance Management with Device Integration, Auto SMS
                                                        Notifications & Alerts.</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        Exam Management (Result, Tabulation, Merit List, Analytical
                                                        Reports, Grade Sheet etc.)</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        Fees Management with Online Payment Integration</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        Budget & Accounts</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        HR (Management, Teachers’ & Staffs’ Database ), Payroll & Leave
                                                        Management</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        Inventory with Stock Register, Requisition, Quotation & Disposal
                                                        Management.</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        E-Library Management (eBooks, Shared Video Class, Book Issue &
                                                        Return etc. )</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        E-Library Management (eBooks, Shared Video Class, Book Issue &
                                                        Return etc. )</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        E-Library Management (eBooks, Shared Video Class, Book Issue &
                                                        Return etc. )</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        E-Library Management (eBooks, Shared Video Class, Book Issue &
                                                        Return etc. )</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        E-Library Management (eBooks, Shared Video Class, Book Issue &
                                                        Return etc. )</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="ptable-title"><i class="fa fa-headphones"></i>
                                                        E-Library Management (eBooks, Shared Video Class, Book Issue &
                                                        Return etc. )</span></td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pricelast"><span class="ptable-title"><i
                                                            class="fa fa-headphones"></i>
                                                        Routine Management with Proxy Class Scheduling</span></td>
                                                <td class="pricelast">
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>
                                                <td class="pricelast">
                                                    <img src="{{ asset ('image/fontend/img/rightbutton.svg')}}" alt="">
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---=====================Calculate =====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calculate">
                            <div class="calculate-header header-title">
                                <h2><span>Calculate</span> Your Monthly Plan</h2>
                                <p>Pro plans are billed monthly according to the size of your students</p>
                            </div>
                            <div class="calculate-part">
                                <div class="calculateiteam">
                                    <p>How many students do you have</p>
                                    <div class="indupdata">
                                        <input type="text" placeholder="100" id="totalStu"> <span
                                            class="fixdamount"><span class="intuSign">X</span> 15<sub>tk</sub> </span>
                                    </div>
                                </div>
                                <div class="calculateiteam totalCalculate">
                                    <p id="result">5000 <span>tk</span></p>
                                </div>
                            </div>
                            <div class="calculateButton">
                                <input type="button" onClick="multiplyBy()" Value="Calculate" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--===================Payment System =================-->
        <section id="odhyyon-payment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bkashpay text-center">
                            <h5>Online payment Procedure</h5>
                            <p>You can pay any fee through</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="odhyyon-payment">
                            <div class="payment-clients">


                                <div class="payment-box">
                                    <a href="#">
                                        <img src="{{ asset ('image/fontend/img/bank/bkash.png')}}" class="d-block w-100">
                                    </a>
                                </div>


                                <div class="payment-box">
                                    <a href="#">
                                        <img src="{{ asset ('image/fontend/img/bank/rocket.png')}}" class="d-block w-100">
                                    </a>
                                </div>


                                <div class="payment-box">
                                    <a href="#">
                                        <img src="{{ asset ('image/fontend/img/bank/dbbl.jpg')}}" class="d-block w-100">
                                    </a>
                                </div>


                                <div class="payment-box">
                                    <a href="#">
                                        <img src="{{ asset ('image/fontend/img/bank/Sonali-Bank-logo.png')}}" class="d-block w-100">
                                    </a>
                                </div>

                            </div>
                            <div class="payment-clients-odhyyon">
                                <div class="payment-school">
                                    <img src="{{ asset ('image/fontend/img/vnscportal.png')}}" alt="">
                                </div>
                                <div class="payment-portal">
                                    <div class="bkashpay">
                                        <p>You can pay any fee through</p>
                                        <div class="detail">
                                            <h4>Parent's Portal</h4>
                                        </div>
                                        <img src="{{ asset ('image/fontend/img/odhyyon-portal-logo.png')}}" alt="" class="mb-4"> <br>
                                        <a target="blank" href="">View Details</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection