@extends('layouts.masterlayout')

@section('title', __('index.news_detail_title'))
@section('meta_description', __('index.news_detail_meta_description'))

@section('content')
@php
    $useEn = app()->getLocale() !== 'th';
    $title = $detail ? (($useEn && !empty($detail['headline_en'])) ? $detail['headline_en'] : $detail['headline']) : '';
    $body = $detail ? (($useEn && !empty($detail['detail_en'])) ? $detail['detail_en'] : $detail['detail']) : '';
    $placeholderImg = asset('img/NEWS (1).svg');
    $newsLogo = 'https://news.rbru.ac.th/img/logonews.jpg';
    $locale = app()->getLocale();
    $images = [];
    $files = [];
    foreach ($attachments as $file) {
        $name = $file['filename'] ?? '';
        if (preg_match('/\.(png|jpe?g|gif|webp)$/i', $name)) {
            $images[] = $file;
        } elseif (preg_match('/\.pdf$/i', $name)) {
            $files[] = $file;
        }
    }
@endphp

<div class="container-fluid px-0" style="background-color:#f2f2f2;">
    <section style="background-color:#e2e2e2;" class="py-4">
        <div class="container text-center">
            <h2 class="fw-bold text-dark mb-1">{{ __('index.news_detail_title') }}</h2>
            <p class="mb-0 text-dark">{{ __('index.faculty_name') }} {{ __('index.university_name') }}</p>
        </div>
    </section>
    <div style="background-color:#2f2f2f;">
        <div class="container py-2 text-white small">
            <a href="{{ url($locale) }}" class="text-white text-decoration-none fw-semibold">{{ __('index.home') }}</a>
            <span class="mx-2">/</span>
            <a href="{{ url($locale.'/news') }}" class="text-white text-decoration-none fw-semibold">{{ __('index.news') }}</a>
            <span class="mx-2">/</span>
            <span class="fw-semibold">{{ __('index.news_detail_title') }}</span>
        </div>
    </div>

    <div class="container py-5">
        @if(!$detail)
            <div class="text-muted text-center">{{ __('index.news_detail_not_found') }}</div>
        @else
            <div class="mb-4">
                <h3 class="fw-bold text-dark">{{ $title }}</h3>
                @if(!empty($detail['start']))
                    <small class="text-muted">{{ __('index.news_published', ['date' => $detail['start']]) }}</small>
                @endif
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body" style="line-height:1.8;">
                    {!! $body !!}
                </div>
            </div>

            @if(count($images) > 0)
                <div class="mb-4">
                    <h5 class="fw-semibold text-dark mb-3">{{ __('index.news_images') }}</h5>
                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-md-4 mb-3">
                                <div class="card border-0 shadow-sm">
                                    @php
                                        $img = $image['filename'] ?? '';
                                        if (!$img || $img === $newsLogo) {
                                            $img = $placeholderImg;
                                        }
                                    @endphp
                                    <img src="{{ $img }}" class="w-100" style="object-fit:cover;height:220px;" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(count($files) > 0)
                <div class="mb-4">
                    <h5 class="fw-semibold text-dark mb-3">{{ __('index.news_attachments') }}</h5>
                    <div class="d-flex flex-column gap-2">
                        @foreach($files as $index => $file)
                            @php
                                $path = $file['filename'] ?? '';
                                $basename = basename(parse_url($path, PHP_URL_PATH) ?? '');
                                $label = $file['detail'] ?? $basename;
                            @endphp
                            <div class="d-flex justify-content-between align-items-center p-2 bg-white border rounded">
                                <div>
                                    <small class="text-muted">{{ __('index.news_attachment_item', ['number' => $index + 1]) }}</small>
                                    <div class="fw-semibold">{{ $label }}</div>
                                </div>
                                <a href="{{ $path }}" target="_blank" rel="noreferrer" class="btn btn-sm text-white" style="background-color:#4b4b4b;">{{ __('index.download') }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection
