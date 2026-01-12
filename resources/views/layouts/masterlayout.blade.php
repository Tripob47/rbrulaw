<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $defaultTitle = __('index.site_title', [
            'faculty' => __('index.faculty_name'),
            'university' => __('index.university_name'),
        ]);
        $metaTitle = trim($__env->yieldContent('title', $defaultTitle));
        $metaDescription = trim($__env->yieldContent('meta_description', __('index.meta_description')));
        $metaImage = trim($__env->yieldContent('meta_image', asset('template/assets/img/course-1.jpg')));
        $locale = app()->getLocale();
        $segments = request()->segments();
        if (!empty($segments) && in_array($segments[0], ['th', 'en'])) {
            array_shift($segments);
        }
        $cleanPath = implode('/', $segments);
        $canonicalUrl = url($locale . ($cleanPath !== '' ? '/' . $cleanPath : ''));
        $ogLocale = $locale === 'th' ? 'th_TH' : 'en_US';
        $alternateLocale = $locale === 'th' ? 'en_US' : 'th_TH';
        $alternateTh = url('th' . ($cleanPath !== '' ? '/' . $cleanPath : ''));
        $alternateEn = url('en' . ($cleanPath !== '' ? '/' . $cleanPath : ''));
    @endphp

    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <link rel="alternate" hreflang="th" href="{{ $alternateTh }}">
    <link rel="alternate" hreflang="en" href="{{ $alternateEn }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $metaImage }}">
    <meta property="og:site_name" content="{{ __('index.faculty_name') }} {{ __('index.university_name') }}">
    <meta property="og:locale" content="{{ $ogLocale }}">
    <meta property="og:locale:alternate" content="{{ $alternateLocale }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $metaImage }}">
    <meta name="theme-color" content="#1f2a3a">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => __('index.faculty_name') . ' ' . __('index.university_name'),
            'url' => url('/'),
            'logo' => asset('template/assets/img/favicon.png'),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => __('index.faculty_name'),
            'url' => url('/'),
            'inLanguage' => $locale === 'th' ? 'th-TH' : 'en-US',
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">


    <!-- อื่น ๆ เช่น Bootstrap, app.css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <!-- Favicon -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">



    @stack('styles')

</head>

<body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
    <!-- Bootstrap 5 JS + Popper -->
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

</body>

</html>
