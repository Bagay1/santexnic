@extends('layouts.SiteMaster')

@push('meta')
    <meta name="title" content="{{$service->title}}">
    <meta name="description" content="{{$service->text}}">
@endpush

@section('content')

    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{$service->title}}</h1>
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