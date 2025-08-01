<header class="navbar navbar-expand-xl sticky-top bg-white shadow-sm">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        {{-- โลโก้ --}}
        <a href="/" class="d-flex align-items-center p-1 rounded text-decoration-none"
            style="background-color: #565656;">
            <img src="{{ asset('template/assets/img/law.png') }}" alt="Logo" style="height: 70px; object-fit: contain;"
                class="me-2">
            <h1 class="sitename m-0 text-white fs-5">{{ __('index.faculty_name') }}</h1>
        </a>

        {{-- ปุ่ม Hamburger สำหรับมือถือ --}}
        <button class="navbar-toggler d-xl-none border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        {{-- เมนูหลัก --}}
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/">{{ __('index.home') }}</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/about">{{ __('index.about') }}</a>
                </li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/courses">{{ __('index.courses') }}</a>
                </li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold"
                        href="/research">{{ __('index.research') }}</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/contact">{{ __('index.contact') }}</a>
                </li>
            </ul>

            {{-- เปลี่ยนภาษา --}}
            <div class="dropdown text-end p-2">
                <button class="btn btn-sm btn-language dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    🌐 {{ strtoupper(app()->getLocale()) }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'th']) }}">🇹🇭 ไทย</a></li>
                    <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
