@extends('layouts.AuthMaster')


@push('style')
    <link rel="stylesheet" href="{{asset('backend/css/base/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/base/pages/authentication.css')}}">
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Login basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{route('site.index')}}" class="brand-logo">
                                <h2 class="brand-text text-primary ms-1">Сантехника</h2>
                            </a>
                            <form class="auth-login-form mt-2" action="/login" method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label for="login-email" class="form-label">nickname</label>
                                    <input type="text" class="form-control" id="nick" name="nick" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus />
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>
                                        <a href="auth-forgot-password-basic.html">
                                            <small>Забыли пароль?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                                        <label class="form-check-label" for="remember-me">Запомнить меня</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="4">Войти</button>
                            </form>

                            <p class="text-center mt-2">
                                <span>В первые здесь?</span>
                                <a href="/register">
                                    <span>Создать аккаунт</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Login basic -->
                </div>
            </div>

        </div>
    </div>
@endsection