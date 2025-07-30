<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <!-- โลโก้ -->
        <div style="width: 40%; margin: 0; padding: 0;">
    <a href="/" class="d-flex align-items-center p-1 rounded text-decoration-none"
       style="background-color: #565656; margin-left: 0;">
        <img src="{{ asset('template/assets/img/law.png') }}" alt="Logo"
             style="height: 70px; width: auto; object-fit: contain;" class="me-2">
        <h1 class="sitename m-0 text-white fs-5">{{ __('index.faculty_name') ?? 'คณะนิติศาสตร์' }}</h1>
    </a>
</div>

        <!-- เมนูหลัก -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/about">{{ __('index.about') }}</a></li>
                <li><a href="/our"> {{ __('index.curriculum') }}</a></li>
                <li><a href="/qa">{{ __('index.qa') }}</a></li>
                <li><a href="#">{{ __('index.research') }}</a></li>
                <li><a href="#">{{ __('index.academic') }}</a></li>
                <li><a href="#">{{ __('index.alumni') }}</a></li>
                <li class="dropdown">
                    <a href="#"><span>{{ __('index.dean') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">สายตรง 1</a></li>
                        <li><a href="#">สายตรง 2</a></li>
                    </ul>
                </li>
                <li><a href="#">{{ __('index.ad') }}</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- ปุ่มสลับภาษา -->
        <div class="dropdown text-end p-2">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                🌐 {{ strtoupper(app()->getLocale()) }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'th']) }}">🇹🇭 ไทย</a></li>
                <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a>
                </li>
            </ul>
        </div>

    </div>
</header>
