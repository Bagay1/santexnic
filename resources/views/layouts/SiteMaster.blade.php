<!doctype html>
<html lang="en">
<head>
@include('partials.site.meta')
</head>
<body>

@include('partials.site.header')

@yield('content')


@include('partials.site.footer')

@include('partials.site.scripts')
</body>
</html>