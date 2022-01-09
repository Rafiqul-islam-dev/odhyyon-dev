@extends('fontend.layout.masterLayout')
@section('content')

    <main class="main">
        <!--==================== Clients Header ====================-->
        <section id="clientspage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-header">
                            <h2>{{ $clients->title }}</h2>

                        </div>
                    </div>
                </div>
        </section>



    </main>

@endsection
