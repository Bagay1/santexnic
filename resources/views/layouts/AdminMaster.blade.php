<!doctype html>
<html lang="en">
<head>
    @include('partials.admin.meta')
</head>
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

@include('partials.admin.header')

@include('partials.admin.sidebar')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>

@include('partials.admin.footer')
@include('partials.admin.scripts')
</body>
</html>
