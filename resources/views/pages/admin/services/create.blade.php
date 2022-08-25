@extends('layouts.AdminMaster')

@push('style')
    <link rel="stylesheet" href="{{asset(mix('backend/vendors/css/forms/select/select2.min.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{asset(mix('backend/css/base/pages/page-blog.css'))}}">
@endpush

@section('content')

    <div class="content-body">
        <div class="blog-edit-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="{{route('services.store')}}" class="mt-2" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <div class="mb-2">
                                            <input type="text" name="title" class="h-input" placeholder="Название Услуги"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="mb-2">
                                            <input type="text" name="price_id" class="h-input" placeholder="Цена"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="mb-2">
                                            <textarea class="form-control" name="text" id="editor1" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-50">
                                    <button type="submit" class="btn btn-primary me-1">Сохранить</button>
                                    <button type="reset" class="btn btn-outline-secondary">Сбросить</button>
                                </div>
                        </form>
                        </div>
                        <!--/ Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset(mix('backend/vendors/js/forms/select/select2.full.min.js'))}}"></script>
{{--    <script src="{{asset(mix('backend/vendors/js/editors/quill/katex.min.js'))}}"></script>--}}
{{--    <script src="{{asset(mix('backend/vendors/js/editors/quill/highlight.min.js'))}}"></script>--}}
{{--    <script src="{{asset(mix('backend/vendors/js/editors/quill/quill.min.js'))}}"></script>--}}
    <script src="{{asset('js/ckeditor4/ckeditor.js')}}"></script>
    <script>
            CKEDITOR.replace('editor1');

            createServices.onsubmit = async (e)=>{
                e.preventDefault();

                let response = await fetch('{{route('services.store')}}' , {
                    method: 'post',
                    body: new FormData(createServices)
                })

                let result = await response.json()
                console.log(result.message);

            }


    </script>

    <script src="{{asset(mix('backend/js/scripts/pages/page-blog-edit.js'))}}"></script>

@endpush