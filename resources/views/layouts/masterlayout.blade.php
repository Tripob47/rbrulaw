<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('index.faculty_name'))</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }
        .navbar-nav .nav-link.active {
            color: #0d6efd;
        }
        .btn-language {
            background-color: #f8f9fa;
        }
    </style>

    @stack('styles')
</head>
<body>

    {{-- Header --}}
    <header class="navbar navbar-expand-xl sticky-top bg-white shadow-sm">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            {{-- Logo --}}
            <a href="/" class="d-flex align-items-center p-1 rounded text-decoration-none" style="background-color: #565656;">
                <img src="{{ asset('template/assets/img/law.png') }}" alt="Logo" style="height: 70px; object-fit: contain;" class="me-2">
                <h1 class="sitename m-0 text-white fs-5">{{ __('index.faculty_name') }}</h1>
            </a>

            {{-- Hamburger Button (Mobile) --}}
            <button class="navbar-toggler d-xl-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1"></i>
            </button>

            {{-- Navigation Menu --}}
            <nav id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
                    <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/">{{ __('index.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/about">{{ __('index.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/courses">{{ __('index.courses') }}</a></li>
                    <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/research">{{ __('index.research') }}</a></li>
                    <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="/contact">{{ __('index.contact') }}</a></li>
                </ul>
            </nav>

            {{-- Language Switcher --}}
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

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-light text-center text-muted py-3 mt-5">
        <div class="container">
            <small>&copy; {{ now()->year }} {{ __('index.faculty_name') }}. All rights reserved.</small>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
