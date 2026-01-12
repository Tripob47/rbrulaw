@extends('layouts.masterlayout')

@section('title', 'ภาพกิจกรรม')

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
            <h2 class="fw-bold text-dark mb-1">ภาพกิจกรรม</h2>
            <p class="mb-0 text-dark">รวมภาพกิจกรรมจากคณะนิติศาสตร์</p>
        </div>
    </section>
    <div style="background-color:#2f2f2f;">
        <div class="container py-2 text-white small">
            <a href="{{ url($locale) }}" class="text-white text-decoration-none fw-semibold">{{ __('index.home') }}</a>
            <span class="mx-2">/</span>
            <span class="fw-semibold">ภาพกิจกรรม</span>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-9 order-2 order-lg-1">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between">
                        <div>
                            <div class="fw-semibold">ปีที่แสดงผล</div>
                            <small class="text-muted">{{ $year ? 'ปี '.$year : 'ยังไม่มีข้อมูลปี' }}</small>
                        </div>
                        <form method="get" action="{{ $activitiesUrl }}" class="d-flex flex-column flex-sm-row gap-2">
                            <input type="hidden" name="year" value="{{ $year }}">
                            <input type="search" name="q" value="{{ $query }}" class="form-control" placeholder="ค้นหาหัวข้อกิจกรรม">
                            <button class="btn text-white" style="background-color:#4b4b4b;" type="submit">ค้นหา</button>
                        </form>
                    </div>
                </div>

                @if(count($items) === 0)
                    <div class="text-muted text-center py-4">ไม่พบภาพกิจกรรมในปีที่เลือก</div>
                @else
                    <div class="row">
                        @foreach($items as $item)
                            @php
                                $title = ($useEn && !empty($item['topic_en'])) ? $item['topic_en'] : $item['topic'];
                                $img = $item['image'] ?? '';
                                if (!$img) {
                                    $img = $placeholderImg;
                                }
                            @endphp
                            <div class="col-lg-3 col-md-6 mb-4">
                                <a href="{{ url($locale.'/detailsactivity/'.$item['no']) }}" class="text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="ratio ratio-3x2">
                                            <img src="{{ $img }}" alt="" class="w-100 h-100" style="object-fit:cover;height:210px;" onerror="this.onerror=null;this.src='{{ $placeholderImg }}';">
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
                            <a class="btn btn-outline-dark btn-sm" href="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['page' => $prev])) }}">ก่อนหน้า</a>
                            @for($p = 1; $p <= $totalPages; $p++)
                                @php $isActive = $p === $page; @endphp
                                <a class="btn btn-sm {{ $isActive ? 'text-white' : 'btn-outline-dark' }}" style="{{ $isActive ? 'background-color:#4b4b4b;border-color:#4b4b4b;' : '' }}" href="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['page' => $p])) }}">
                                    {{ $p }}
                                </a>
                            @endfor
                            <a class="btn btn-outline-dark btn-sm" href="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['page' => $next])) }}">ถัดไป</a>
                        </div>
                    @endif
                @endif
            </div>

            <div class="col-lg-3 order-1 order-lg-2">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="fw-semibold mb-3">กรองปี</div>
                        <div class="d-lg-none">
                            <select class="form-select" onchange="location = this.value;">
                                @foreach($years as $value)
                                    <option value="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['year' => $value, 'page' => 1])) }}" @if($year == $value) selected @endif>
                                        ปี {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-none d-lg-grid gap-2">
                            @foreach($years as $value)
                                @php $isActive = $year == $value; @endphp
                                <a class="btn text-start {{ $isActive ? 'text-white' : 'btn-outline-dark' }}" style="{{ $isActive ? 'background-color:#4b4b4b;border-color:#4b4b4b;' : '' }}" href="{{ $activitiesUrl }}?{{ http_build_query(array_merge($queryParams, ['year' => $value, 'page' => 1])) }}">
                                    ปี {{ $value }}
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
