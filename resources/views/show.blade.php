@extends('layout.main-layout')

@section('content')
    <section class="wrapper">
        <div class="container row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-light card-has-bg click-col" style="background-image:url('{{ $comics->thumb }}');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0">{{ $comics->title }}</h4>
                            <small><i class="far fa-clock"></i>{{ date('Y-m-d', strtotime($comics->sale_date)) }}</small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="my-0 text-light d-block">{{ $comics->series }}</h6>
                                    <small>{{ $comics->price }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center">
        <a href="{{ route('home') }}">
            Indietro </a>
    </div>
@endsection
