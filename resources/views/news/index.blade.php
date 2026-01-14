@extends('layouts.masterlayout')

@section('title', __('index.news'))
@section('meta_description', __('index.news_meta_description'))

@section('content')
@php
    $useEn = app()->getLocale() !== 'th';
    $placeholderImg = asset('img/NEWS (1).svg');
    $newsLogo = 'https://news.rbru.ac.th/img/logonews.jpg';
    $categoryLabel = [
        'general' => __('index.news_category_general'),
        'training' => __('index.news_category_training'),
        'awards' => __('index.news_category_awards'),
        'awards_teachers' => __('index.news_category_awards_teachers'),
        'awards_students' => __('index.news_category_awards_students'),
    ];
    $activeLabel = $categoryLabel[$category] ?? $categoryLabel['general'];
    $queryParams = request()->query();
    $locale = app()->getLocale();
    $newsUrl = url($locale.'/news');
@endphp

<div class="container-fluid px-0" style="background-color:#f2f2f2;">
    <section style="background-color:#e2e2e2;" class="py-4">
        <div class="container text-center">
            <h2 class="fw-bold text-dark mb-1">{{ __('index.news') }}</h2>
            <p class="mb-0 text-dark">{{ __('index.news_subtitle') }}</p>
        </div>
    </section>
    <div style="background-color:#2f2f2f;">
        <div class="container py-2 text-white small">
            <a href="{{ url($locale) }}" class="text-white text-decoration-none fw-semibold">{{ __('index.home') }}</a>
            <span class="mx-2">/</span>
            <span class="fw-semibold">{{ __('index.news') }}</span>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-9 order-2 order-lg-1">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between">
                        <div>
                            <div class="fw-semibold">{{ $activeLabel }}</div>
                            <small class="text-muted">{{ __('index.news_filter_hint') }}</small>
                        </div>
                        <form method="get" action="{{ $newsUrl }}" class="d-flex flex-column flex-sm-row gap-2">
                            <input type="hidden" name="category" value="{{ $category }}">
                            <input type="search" name="q" value="{{ $query }}" class="form-control" placeholder="{{ __('index.news_search_placeholder') }}">
                            <select name="year" class="form-select" style="max-width:160px;">
                                <option value="all">{{ __('index.news_all_years') }}</option>
                                @foreach($years as $value)
                                    <option value="{{ $value }}" @if($year == $value) selected @endif>{{ __('index.year_label', ['year' => $value]) }}</option>
                                @endforeach
                            </select>
                            <button class="btn text-white" style="background-color:#4b4b4b;" type="submit">{{ __('index.search') }}</button>
                        </form>
                    </div>
                </div>

                @if(count($items) === 0)
                    <div class="text-muted text-center py-4">{{ __('index.news_no_results') }}</div>
                @else
                    <div class="row">
                        @foreach($items as $item)
                            @php
                                $title = ($useEn && !empty($item['headline_en'])) ? $item['headline_en'] : $item['headline'];
                                $img = $item['image'] ?? ($item['url'] ?? '');
                                if (!$img || $img === $newsLogo) {
                                    $img = $placeholderImg;
                                }
                            @endphp
                            <div class="col-lg-4 col-md-6 mb-4">
                                <a href="{{ url($locale.'/detailsnew/'.$item['org_no']) }}" class="text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div style="height:210px; overflow:hidden; background-color:#f3f3f3;">
                                            <img src="{{ $img }}" alt="" class="card-img-top w-100 h-100" style="object-fit:cover;" onerror="this.onerror=null;this.src='{{ $placeholderImg }}';">
                                        </div>
                                        <div class="card-body">
                                            <div class="fw-semibold text-dark">{{ \Illuminate\Support\Str::limit($title, 100) }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    @if($totalPages > 1)
                        <div class="d-flex flex-wrap gap-2 justify-content-center mt-3">
                            @php
                                $prev = max(1, $page - 1);
                                $next = min($totalPages, $page + 1);
                            @endphp
                            <a class="btn btn-outline-dark btn-sm" href="{{ $newsUrl }}?{{ http_build_query(array_merge($queryParams, ['page' => $prev])) }}">{{ __('index.previous') }}</a>
                            @for($p = 1; $p <= $totalPages; $p++)
                                @php $isActive = $p === $page; @endphp
                                <a class="btn btn-sm {{ $isActive ? 'text-white' : 'btn-outline-dark' }}" style="{{ $isActive ? 'background-color:#4b4b4b;border-color:#4b4b4b;' : '' }}" href="{{ $newsUrl }}?{{ http_build_query(array_merge($queryParams, ['page' => $p])) }}">
                                    {{ $p }}
                                </a>
                            @endfor
                            <a class="btn btn-outline-dark btn-sm" href="{{ $newsUrl }}?{{ http_build_query(array_merge($queryParams, ['page' => $next])) }}">{{ __('index.next') }}</a>
                        </div>
                    @endif
                @endif
            </div>

            <div class="col-lg-3 order-1 order-lg-2">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="fw-semibold mb-3">{{ __('index.news_categories') }}</div>
                        <div class="d-lg-none">
                            <select class="form-select" onchange="location = this.value;">
                                @foreach($categoryLabel as $key => $label)
                                    <option value="{{ $newsUrl }}?{{ http_build_query(array_merge($queryParams, ['category' => $key, 'page' => 1])) }}" @if($category === $key) selected @endif>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-none d-lg-grid gap-2">
                            @foreach($categoryLabel as $key => $label)
                                @php $isActive = $category === $key; @endphp
                                <a class="btn text-start {{ $isActive ? 'text-white' : 'btn-outline-dark' }}" style="{{ $isActive ? 'background-color:#4b4b4b;border-color:#4b4b4b;' : '' }}" href="{{ $newsUrl }}?{{ http_build_query(array_merge($queryParams, ['category' => $key, 'page' => 1])) }}">
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
