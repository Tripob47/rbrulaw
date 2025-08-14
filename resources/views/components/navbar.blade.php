<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <!-- โลโก้ -->
        <div class="d-flex align-items-center" style="flex: 0 0 auto;">
            <a href="/" class="d-flex align-items-center p-1 rounded text-decoration-none"
                style="background-color: #565656;">
                <img src="{{ asset('template/assets/img/law.png') }}" alt="Logo"
                    style="height: 70px; width: auto; object-fit: contain;" class="me-2">
                <h1 class="sitename m-0 text-white fs-5">{{ __('index.faculty_name') ?? 'คณะนิติศาสตร์' }}</h1>
            </a>
        </div>

        <!-- เมนูหลัก -->
        <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color: #565656; flex: 1;">
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
                            <li><a class="dropdown-item" href="https://news.rbru.ac.th/">{{ __('index.news_system') }}</a></li>
                            <li><a class="dropdown-item" href="https://news.rbru.ac.th/">{{ __('index.gallery_system') }}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- ปุ่มสลับภาษา -->
        <div class="dropdown text-end p-2" style="flex: 0 0 auto;">
            <button class="btn btn-sm btn-language dropdown-toggle" type="button" data-bs-toggle="dropdown">
                🌐 {{ strtoupper(app()->getLocale()) }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'th']) }}">🇹🇭 ไทย</a></li>
                <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a></li>
            </ul>
        </div>

    </div>

    <style>
        .navbar-nav {
            flex-wrap: nowrap; /* ไม่ให้เมนูตัดบรรทัด */
        }

        .navbar-nav .nav-item {
            white-space: nowrap; /* ไม่ให้ข้อความตัดบรรทัด */
        }

        .navbar-nav .nav-link {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

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
</header>
