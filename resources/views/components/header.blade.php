    <section id="header-page" class="home-header">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content-all">
                        <div class="header-content-inner">
                            <div class="hedar-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('image/fontend/img/Logo.svg') }}"
                                        alt=""></a>
                                <button class="humberger" onclick="myFunction()"><img
                                        src="{{ asset('image/fontend/img/humberger.svg') }}"
                                        alt="mobile-menu"></button>

                            </div>
                            <div class="hedar-menu">
                                <ul>
                                    <li><a href="{{ route('Product-Features') }}">Product Features</a></li>
                                    <li><a href="{{ route('Pricing') }}">Pricing</a></li>
                                    <li><a href="{{ route('Clients') }}">Clients</a></li>
                                    <li><a href="{{ route('News-Events') }}">News & Events</a></li>
                                    <li><a href="{{ route('About-us') }}">About us</a></li>
                                </ul>
                            </div>
                            <div class="hedar-contact">
                                <a href="{{ route('Contact-us') }}">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
