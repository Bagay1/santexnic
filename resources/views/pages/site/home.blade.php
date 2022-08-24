@extends('layouts.SiteMaster')
@section('content')
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-5">Качественный сервис сантехнических услуг в Уфе</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4"> <img src="{{asset('images/offer/offer1 @4x.png')}}" class="img-fluid my-1" alt=""></div>
                                <div class="col-8"><h2>Срочная помощь сантехника </h2></div>
                            </div>


                            <p>Для срочно вызова достаточно нажать на кнопку</p>
                            <a class="btn btn-warning container-fluid text-black" href="tel:{{$phone ?? '+79174152977'}}"><i class="bi bi-phone-fill"></i> {{$phone ?? '+79174152977'}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <img src="{{asset('images/offer/bathwomen@4x.png')}}" class="img-fluid rounded-lg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="services">


    </div>
@endsection