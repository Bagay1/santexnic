@extends('layouts.SiteMaster')

@push('meta')
    <meta name="title" content="{{$service->title}}">
    <meta name="description" content="{{$service->short_text}}">
@endpush

@section('content')

    <div class="offer-single">
        <div class="container">
            <div class="row">
                <div class="col-md-6  align-items-center">
                    <div class="head-services"> <h1 class="">{{$service->title}}</h1> </div>

                    <a href='' class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#mymodal">Вызвать специалиста <i class="icon-xs ms-2"
                                                                                                                                data-feather="arrow-right"></i></a>

                </div>

                <div class="col-md-6">
                    <div class="image-offer">
                        <img src="{{asset('storage/images/icon/'. $service->image)}}" alt="{{$service->title}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="col-md-12">
                {!! $service->text !!}
            </div>
        </div>
    </div>

    <div class="services" id="service">
        <x-servise-list></x-servise-list>
    </div>

@endsection