@extends('fontend.layout.masterLayout')
@section('content')

    <main class="main">
        <!--==================== Clients Header ====================-->
        <section id="clientspage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-header">
                            <h2>Stories That Defined Our Success</h2>
                            <p>Odhyyon ERP is proud to impact over 500+ educational <br> institutions-all around Bangladesh.
                            </p>
                        </div>
                    </div>
                </div>
        </section>

        <!--==================== Clients Content ====================-->
        <section class="container versity-tab-link">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs clients-tabs">
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#institutions">All
                        Institutions</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#study">case study</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content university-content">
                <div id="institutions" class="tab-pane show active">
                    <div class="versity-content">
                        @foreach ($clients as $item)
                            @if ($item->is_caseStudy == 0)
                                <div class="versity-content-card">
                                    <div class="virsity-card-image">
                                        <img src="{{ URL::to($item->image) }}" alt="">
                                    </div>
                                    <h6>{{ $item->title }}</h6>
                                    <p>{{ $item->description }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div id="study" class="tab-pane">
                    <p>
                    <div class="versity-content">
                        @foreach ($clients as $item)
                            @if ($item->is_caseStudy == 1)
                                <div class="versity-content-card">
                                    <div class="virsity-card-image">
                                        <img src="{{ URL::to($item->image) }}" alt="">
                                    </div>
                                    <span>{{ $item->priceType == 1 ? 'Pay per Student' : 'Monthly Subscription' }}</span>
                                    <h6>{{ $item->title }}</h6>
                                    <p>{{ $item->description }}</p>
                                    <a href="{{ route('moreDetailsClients', $item->id) }}">Read More <img
                                            src="{{ asset('image/fontend/img/arrow-right.svg') }}" alt=""></a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </section>

    </main>

@endsection
