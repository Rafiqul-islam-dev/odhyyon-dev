@extends('fontend.layout.masterLayout')
@section('content')

    <main class="main">
        <!--=================News Header=============-->
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsEvent">
                            <div class="header-image">
                                <img src="{{ asset('image/fontend/img/events/event5.jpeg') }}" alt="">
                            </div>
                            <div class="admin">
                                <div class="admin-event">
                                    <div class="admin-details">
                                        <p>Admin | November 2, 2021</p>
                                        <p>1/3</p>
                                    </div>
                                    <h4>We’re leading software professionals to success,</h4>
                                    <a href="">Read More <img src="{{ asset('image/fontend/img/arrow-right.svg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================News List=============-->
        <section class="container">
            <div class="card newsEventCard">
                @foreach ($news as $iteam)


                    <div class="card-content">
                        <img src="{{ URL::to($iteam->image) }}" alt="">
                        <div class="card-details">
                            <span>Admin | {{ date('M-d-Y', strtotime($iteam->created_at)) }}</span>
                            <p>{{ $iteam->title }}</p>
                            <a class="readMore" href="{{ $iteam->link }}" target="_blank">Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                                    <g transform="translate(-862 -372)">
                                        <g transform="translate(862 372)">
                                            <path class="a"
                                                d="M14,.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H14a.75.75,0,0,1,.75.75A.75.75,0,0,1,14,.75Z"
                                                transform="translate(5 12)" />
                                            <path class="a"
                                                d="M12,19.75a.75.75,0,0,1-.53-1.28L17.939,12,11.47,5.53A.75.75,0,0,1,12.53,4.47l7,7a.75.75,0,0,1,0,1.061l-7,7A.748.748,0,0,1,12,19.75Z" />
                                        </g>
                                        <rect class="b" width="24" height="24"
                                            transform="translate(862 372)" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

    </main>

@endsection
