@extends('layouts.AdminMaster')

@push('style')
    <link rel="stylesheet" href="{{asset(mix('backend/vendors/css/forms/select/select2.min.css'))}}">
    <link rel="stylesheet" href="{{asset(mix('backend/vendors/css/editors/quill/katex.min.css'))}}">
    <link rel="stylesheet" href="{{asset(mix('backend/vendors/css/editors/quill/monokai-sublime.min.css'))}}">
    <link rel="stylesheet" href="{{asset(mix('backend/vendors/css/editors/quill/quill.snow.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{asset(mix('backend/css/base/plugins/forms/form-quill-editor.css'))}}">
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
                            <form action="javascript:;" class="mt-2">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-2">
                                            <input
                                                    type="text"
                                                    naem="title"
                                                    class="h-input"
                                                    placeholder="Название Услуги"
                                            />
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <div class="border rounded p-2">
                                            <h4 class="mb-1">Featured Image</h4>
                                            <div class="d-flex flex-column flex-md-row">
                                                <img
                                                        src="{{asset('images/slider/03.jpg')}}"
                                                        id="blog-feature-image"
                                                        class="rounded me-2 mb-1 mb-md-0"
                                                        width="170"
                                                        height="110"
                                                        alt="Blog Featured Image"
                                                />
                                                <div class="featured-info">
                                                    <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                    <p class="my-50">
                                                        <a href="#" id="blog-image-text">C:\fakepath\banner.jpg</a>
                                                    </p>
                                                    <div class="d-inline-block">
                                                        <input class="form-control" type="file" id="blogCustomFile" accept="image/*"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-50">
                                        <button type="submit" class="btn btn-primary me-1">Save Changes</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
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
    <script src="{{asset(mix('backend/vendors/js/editors/quill/katex.min.js'))}}"></script>
    <script src="{{asset(mix('backend/vendors/js/editors/quill/highlight.min.js'))}}"></script>
    <script src="{{asset(mix('backend/vendors/js/editors/quill/quill.min.js'))}}"></script>

    <script src="{{asset(mix('backend/js/scripts/pages/page-blog-edit.js'))}}"></script>

@endpush