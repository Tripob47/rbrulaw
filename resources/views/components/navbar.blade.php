<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <!-- โลโก้ -->
        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">{{ __('index.faculty_name') ?? 'คณะนิติศาสตร์' }}</h1>
        </a>

        <!-- เมนูหลัก -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/about" target="_blank">{{ __('index.about') }}</a></li>
                <li><a href="/our" target="_blank"> {{ __('index.curriculum') }}</a></li>
                <li><a href="#">{{ __('index.qa') }}</a></li>
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
                <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a></li>
            </ul>
        </div>

    </div>
</header>
