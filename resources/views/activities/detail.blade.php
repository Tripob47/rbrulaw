@extends('layouts.masterlayout')

@section('title', __('index.activities_detail_title'))
@section('meta_description', __('index.activities_meta_description'))

@section('content')
@php
    $useEn = app()->getLocale() !== 'th';
    $title = $detail ? (($useEn && !empty($detail['topic_en'])) ? $detail['topic_en'] : $detail['topic']) : '';
    $placeholderImg = asset('img/NEWS (1).svg');
    $locale = app()->getLocale();
@endphp

<div class="container-fluid px-0" style="background-color:#f2f2f2;">
    <section style="background-color:#e2e2e2;" class="py-4">
        <div class="container text-center">
            <h2 class="fw-bold text-dark mb-1">{{ __('index.activities_detail_title') }}</h2>
            <p class="mb-0 text-dark">{{ __('index.activities_subtitle') }}</p>
        </div>
    </section>
    <div style="background-color:#2f2f2f;">
        <div class="container py-2 text-white small">
            <a href="{{ url($locale) }}" class="text-white text-decoration-none fw-semibold">{{ __('index.home') }}</a>
            <span class="mx-2">/</span>
            <a href="{{ url($locale.'/activities') }}" class="text-white text-decoration-none fw-semibold">{{ __('index.activities') }}</a>
            <span class="mx-2">/</span>
            <span class="fw-semibold">{{ __('index.activities_detail_title') }}</span>
        </div>
    </div>

    <div class="container py-5">
        @if(!$detail)
            <div class="text-muted text-center">{{ __('index.activities_detail_not_found') }}</div>
        @else
            <div class="mb-4">
                <h3 class="fw-bold text-dark">{{ $title }}</h3>
                @if(!empty($detail['year']))
                    <small class="text-muted">{{ __('index.year_label', ['year' => $detail['year']]) }}</small>
                @endif
            </div>

            @if(!empty($detail['detail_text']))
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body" style="line-height:1.8;">
                        {{ $detail['detail_text'] }}
                    </div>
                </div>
            @endif

            @if(count($images) > 0)
                <div>
                    <h5 class="fw-semibold text-dark mb-3">{{ __('index.activities') }}</h5>
                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-md-4 mb-3">
                                <div class="card border-0 shadow-sm">
                                @php
                                    $img = $image['name_photo'] ?? '';
                                    if (!$img) {
                                        $img = $placeholderImg;
                                    }
                                @endphp
                                <img src="{{ $img }}" class="w-100" style="object-fit:cover;height:220px;" alt="" onerror="this.onerror=null;this.src='{{ $placeholderImg }}';">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-muted">{{ __('index.activities_no_images') }}</div>
            @endif
        @endif
    </div>
</div>
@endsection
