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
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #565656;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-white" href="/about">{{ __('index.about') }}</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/our">{{ __('index.curriculum') }}</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/qa">{{ __('index.qa') }}</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/aeasearch">{{ __('index.research') }}</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/academic">{{ __('index.academic') }}</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="alumniDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('index.alumni') }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/alumni2">{{ __('index.alumni_directory') }}</a></li>
                    <li><a class="dropdown-item" href="/alumni">{{ __('index.employment_survey') }}</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white"
                    href="https://www.law.rbru.ac.th/hotline/index.php?lang=th&ac=Dean_hotline">
                    {{ __('index.dean') }}
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="adDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('index.ad') }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item"
                            href="https://news.rbru.ac.th/">{{ __('index.news_system') }}</a></li>
                    <li><a class="dropdown-item"
                            href="https://news.rbru.ac.th/">{{ __('index.gallery_system') }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


    </div>
    <!-- ปุ่มสลับภาษา -->
    <style>
        .btn-language {
            background-color: white;
            color: black;
            border: 1px solid #ccc;
        }

        .btn-language:hover {
            background-color: gold;
            color: black;
            border-color: gold;
        }

        .dropdown-menu a.dropdown-item:hover {
            background-color: gold;
            color: black;
        }
    </style>

    <div class="dropdown text-end p-2">
        <button class="btn btn-sm btn-language dropdown-toggle" type="button" data-bs-toggle="dropdown">
            🌐 {{ strtoupper(app()->getLocale()) }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'th']) }}">🇹🇭 ไทย</a></li>
            <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a></li>
        </ul>
    </div>


    </div>
</header>
