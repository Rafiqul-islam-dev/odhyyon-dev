@extends('fontend.layout.masterLayout')
@section('content')

    <style>
        .errorText {
            font-size: 11px !important;
            color: #c00 !important;
            margin-top: 6px !important;
            margin-bottom: 0 !important;
        }

    </style>

    <main class="main">
        <!--==================== Contact Us Header ====================-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contacts-us">
                            <div class="clients-logo">
                                <h3>Trusted By</h3>
                                <div class="all-cliet-logo">
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/bkash.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/ebl.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/islamibank.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/Group 43893.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/jamuna.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/rocket.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/southbank (1).png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/trustbank.png') }}" alt="">
                                    </div>
                                    <div class="clients-image">
                                        <img src="{{ asset('image/fontend/img/bank/UCB.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="contacts-us-details">
                                    <p>What can we help with?</p>
                                    <h3>Contact Us</h3>
                                    <h5>+8809612223343</h5>
                                    <h5>+8809612223343</h5>
                                    <ul>
                                        <li><a href=""><img src="{{ asset('image/fontend/img/facebook.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href=""><img src="{{ asset('image/fontend/img/twiter.svg') }}" alt=""></a>
                                        </li>
                                        <li><a href=""><img src="{{ asset('image/fontend/img/instagram.svg') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clients-form">
                                <p>Fill with you information</p>
                                @if (Session::get('message'))
                                    <p style="text-align: center;background: #3edfc9;padding: 5px 0">
                                        {{ Session::get('message') }}</p>
                                @endif
                                <form action="{{ route('inquery') }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="fastName" id="inputEmail4"
                                                placeholder="First name*" value="{{ old('fastName') }}">
                                            @error('fastName')
                                                <p class="errorText">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">

                                            <input type="text" class="form-control" name="lastName" id="inputPassword4"
                                                placeholder="Last name*" value="{{ old('lastName') }}">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="phone" id="inputAddress"
                                                placeholder="Phone Number" value="{{ old('phone') }}">
                                        </div>
                                        <div class="col-12">

                                            <input type="email" class="form-control" name="email" id="inputAddress"
                                                placeholder="Email Address*" value="{{ old('email') }}">
                                            @error('email')
                                                <p class="errorText">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12">

                                            <input type="text" class="form-control" name="companyName" id="inputAddress2"
                                                placeholder="Company name*" value="{{ old('companyName') }}">
                                            @error('companyName')
                                                <p class="errorText">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <textarea placeholder="How can we help?*" name="message"
                                                value="{{ old('message') }}"></textarea>
                                            @error('message')
                                                <p class="errorText">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Sign in <img
                                                    src="{{ asset('image/fontend/img/arrow-right.svg') }}"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===================Google Map=================-->
        <section>
            <div class="row">
                <div class="col-lg-12">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8913383377703!2d90.3730111!3d23.751254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b5c0672177%3A0xdbfbb8a26cd5c386!2sADDIE%20Soft%20Ltd.!5e0!3m2!1sen!2sus!4v1639475101148!5m2!1sen!2sus"
                            width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="map-text">
                            <h3>Our Location</h3>
                            <p>2nd Floor, House #23(Old-660), Road #11 (Old-32 Dhaka), 1209</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
