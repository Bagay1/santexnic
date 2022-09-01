@extends('layouts.AdminMaster')

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endpush

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 my-2">
                    <a href="{{route('services.create')}}" class="btn btn-primary">Создать услугу</a>
                    <form class="d-inline-block" action="{{route('importServices')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning">Импорт услуг</button>
                    </form>

                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Название усуги</th>
                        <th>Цены</th>
                        <th>Действия</th>
                        <th>Активность</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->price_id}}</td>
                            <td>
                                <a href="{{route('services.edit' , $item->id)}}" class="btn btn-sm btn-primary d-inline-block"><i class="bi bi-pencil-square"></i></a>
                                <form class="d-inline-block" action="{{route('services.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger d-inline-block"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>

                            <td>

                                <form action="{{route('servicess.active', $item->id)}}" class="align-content-center" method="post">
                                    <div class="row">
                                        <div class="col-8">
                                            @method('PUT')
                                            @csrf
                                            <select class="form-select" name="active" id="">
                                                <option value="{{$item->active}}">
                                                    @if($item->active == 1)
                                                        Вкл
                                                    @else
                                                        Выкл
                                                    @endif
                                                </option>
                                                <option value="0">Выкл</option>
                                                <option value="1">Вкл</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-success btn-sm mx-1"><i class="bi bi-save"></i></button>
                                        </div>
                                    </div>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush