@extends('layouts.masterlayout')

@section('title', __('index.activities'))
@section('meta_description', __('index.activities_meta_description'))

@section('content')
@php
    $useEn = app()->getLocale() !== 'th';
    $queryParams = request()->query();
    $placeholderImg = asset('img/NEWS (1).svg');
    $locale = app()->getLocale();
    $activitiesUrl = url($locale.'/activities');
@endphp

<div class="container-fluid px-0" style="background-color:#f2f2f2;">
    <section style="background-color:#e2e2e2;" class="py-4">
        <div class="container text-center">
            <h2 class="fw-bold text-dark mb-1">{{ __('index.activities') }}</h2>
            <p class="mb-0 text-dark">{{ __('index.activities_subtitle') }}</p>
        </div>
    </section>
    <div style="background-color:#2f2f2f;">
        <div class="container py-2 text-white small">
            <a href="{{ url($locale) }}" class="text-white text-decoration-none fw-semibold">{{ __('index.home') }}</a>
            <span class="mx-2">/</span>
            <span class="fw-semibold">{{ __('index.activities') }}</span>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-9 order-2 order-lg-1">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between">
                        <div>
                            <div class="fw-semibold">{{ __('index.activities_year_label') }}</div>
                            <small class="text-muted">
                                {{ $year ? __('index.year_label', ['year' => $year]) : __('index.no_year_data') }}
                            </small>
                        </div>
                        <form method="get" action="{{ $activitiesUrl }}" class="d-flex flex-column flex-sm-row gap-2">
                            <input type="hidden" name="year" value="{{ $year }}">
                            <input type="search" name="q" value="{{ $query }}" class="form-control" placeholder="{{ __('index.activities_search_placeholder') }}">
                            <button class="btn text-white" style="background-color:#4b4b4b;" type="submit">{{ __('index.search') }}</button>
                        </form>
                    </div>
                </div>

                @if(count($items) === 0)
                    <div class="text-muted text-center py-4">{{ __('index.activities_no_results') }}</div>
                @else
                    <div class="row" data-activities-grid>
                        @foreach($items as $item)
                            @php
                                $title = ($useEn && !empty($item['topic_en'])) ? $item['topic_en'] : $item['topic'];
                                $img = $item['image'] ?? '';
                                if (!$img) {
                                    $img = $placeholderImg;
                                }
                            @endphp
                            <div class="col-lg-4 col-md-6 mb-4" data-activity-card>
                                <a href="{{ url($locale.'/detailsactivity/'.$item['no']) }}" class="text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div style="height:210px; overflow:hidden; background-color:#f3f3f3;">
                                            <img src="{{ $img }}" alt="" class="card-img-top w-100 h-100" style="object-fit:cover;" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $placeholderImg }}';">
                                        </div>
                                        <div class="card-body">
                                            <div class="fw-semibold text-dark">{{ \Illuminate\Support\Str::limit($title, 100) }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex flex-wrap gap-2 justify-content-center mt-3" id="activities-pagination"></div>
                @endif
            </div>

            <div class="col-lg-3 order-1 order-lg-2">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="fw-semibold mb-3">{{ __('index.activities_filter_year') }}</div>
                        <div class="d-lg-none">
                            <select class="form-select" onchange="location = this.value;">
                                @foreach($years as $value)
                                    <option value="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['year' => $value])) }}" @if($year == $value) selected @endif>
                                        {{ __('index.year_label', ['year' => $value]) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-none d-lg-grid gap-2">
                            @foreach($years as $value)
                                @php $isActive = $year == $value; @endphp
                                <a class="btn text-start {{ $isActive ? 'text-white' : 'btn-outline-dark' }}" style="{{ $isActive ? 'background-color:#4b4b4b;border-color:#4b4b4b;' : '' }}" href="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['year' => $value])) }}">
                                    {{ __('index.year_label', ['year' => $value]) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
        var grid = document.querySelector('[data-activities-grid]');
        var items = grid ? Array.prototype.slice.call(grid.querySelectorAll('[data-activity-card]')) : [];
        var pagination = document.getElementById('activities-pagination');
        if (!grid || !pagination || items.length === 0) {
            return;
        }

        var desktopMq = window.matchMedia('(min-width: 992px)');
        var tabletMq = window.matchMedia('(min-width: 768px)');
        var currentPage = 1;

        function getPerPage() {
            if (desktopMq.matches) {
                return 9;
            }
            if (tabletMq.matches) {
                return 6;
            }
            return 4;
        }

        function render() {
            var perPage = getPerPage();
            var totalPages = Math.max(1, Math.ceil(items.length / perPage));
            if (currentPage > totalPages) {
                currentPage = totalPages;
            }
            var start = (currentPage - 1) * perPage;
            var end = start + perPage;
            items.forEach(function (item, idx) {
                item.style.display = idx >= start && idx < end ? '' : 'none';
            });

            pagination.innerHTML = '';
            if (totalPages <= 1) {
                return;
            }

            function addButton(label, page, disabled, active) {
                var btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'btn btn-sm ' + (active ? 'text-white' : 'btn-outline-dark');
                if (active) {
                    btn.style.backgroundColor = '#4b4b4b';
                    btn.style.borderColor = '#4b4b4b';
                }
                btn.textContent = label;
                if (disabled) {
                    btn.disabled = true;
                    btn.classList.add('disabled');
                }
                btn.addEventListener('click', function () {
                    currentPage = page;
                    render();
                    window.scrollTo({ top: grid.offsetTop - 80, behavior: 'smooth' });
                });
                pagination.appendChild(btn);
            }

            addButton(@json(__('index.previous')), Math.max(1, currentPage - 1), currentPage === 1, false);
            for (var p = 1; p <= totalPages; p += 1) {
                addButton(String(p), p, false, p === currentPage);
            }
            addButton(@json(__('index.next')), Math.min(totalPages, currentPage + 1), currentPage === totalPages, false);
        }

        render();
        var onResize = function () {
            render();
        };
        if (desktopMq.addEventListener) {
            desktopMq.addEventListener('change', onResize);
            tabletMq.addEventListener('change', onResize);
        } else if (desktopMq.addListener) {
            desktopMq.addListener(onResize);
            tabletMq.addListener(onResize);
        }
    })();
</script>
@endsection
