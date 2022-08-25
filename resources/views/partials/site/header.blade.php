
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="navbar">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="{{route('site.index')}}">
            <img src="{{asset('images/logo/key@4x.png')}}" alt="" class="logo-dark" height="28" />
            <img src="{{asset('images/logo/key@4x.png')}}" alt="" class="logo-light" height="28" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="" data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                @foreach($menu_top as $item)
                <li class="nav-item">
                    <a href="{{route($item['route'])}}" class="nav-link">{{$item['title']}}</a>
                </li>
                @endforeach
            </ul>
            <a href="/login" class="btn btn-sm rounded-pill nav-btn ms-lg-3">Личный кабинет</a>
        </div>
    </div>
    <!-- end container -->
</nav>