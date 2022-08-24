<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="../../../starter-kit/ltr/vertical-menu-template/"><span class="brand-logo">
                          </span>
                    <h2 class="brand-text">Админка</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach($sidebar as $item)
                @if(empty($item['downmenu']))
                    <li class="@if(url()->current() === route($item['route'])) active @else null @endif  nav-item"><a class="d-flex align-items-center" href="{{route($item['route'])}}"><i
                                    data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">{{$item['title']}}</span></a>
                    </li>
                @else

                    <li class="@if(url()->current() === route($item['route'])) active @else null @endif nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span
                                    class="menu-title text-truncate" data-i18n="Page Layouts">{{$item['title']}}</span></a>
                        @foreach($item['downmenu'] as $downitem)
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route($downitem['route'])}}"><i data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                                                                                 data-i18n="Collapsed Menu">{{$downitem['title']}}</span></a>
                                </li>
                            </ul>
                        @endforeach
                    </li>

                @endif
            @endforeach

        </ul>
    </div>
</div>