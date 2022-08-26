@extends('layouts.AdminMaster')


@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('about.store')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-6">
                            <div class="form-group my-1">
                                <label for="">Телефон компании</label>
                                <input class="form-control" type="text" name="tel" value="{{$phone ?? ''}}">
                            </div>
                            <div class="form-group my-1">
                                <label for="">Адрес компании</label>
                                <textarea class="form-control" name="companyadress" id="editor1" cols="30" rows="10">{{$companyadress ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('js/ckeditor4/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>

@endpush