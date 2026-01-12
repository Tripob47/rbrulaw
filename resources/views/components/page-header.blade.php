@php
    $pageTitle = $title ?? '';
    $pageSubtitle = $subtitle ?? (__('index.faculty_name') . ' ' . __('index.university_name'));
    $locale = app()->getLocale();
    $crumbs = $breadcrumbs ?? [
        ['label' => __('index.home'), 'url' => url($locale)],
        ['label' => $pageTitle],
    ];
@endphp

<section style="background-color:#e2e2e2;" class="py-4">
    <div class="container text-center">
        <h2 class="fw-bold text-dark mb-1">{{ $pageTitle }}</h2>
        <p class="mb-0 text-dark">{{ $pageSubtitle }}</p>
    </div>
</section>

<div style="background-color:#2f2f2f;">
    <div class="container py-2 text-white small">
        @foreach ($crumbs as $index => $crumb)
            @if (!empty($crumb['url']))
                <a href="{{ $crumb['url'] }}" class="text-white text-decoration-none fw-semibold">{{ $crumb['label'] }}</a>
            @else
                <span class="fw-semibold">{{ $crumb['label'] }}</span>
            @endif
            @if ($index < count($crumbs) - 1)
                <span class="mx-2">/</span>
            @endif
        @endforeach
    </div>
</div>
