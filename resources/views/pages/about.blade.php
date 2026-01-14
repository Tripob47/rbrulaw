@extends('layouts.masterlayout')

@section('title', __('index.history'))
@section('meta_description', __('index.about_meta_description'))

@section('content')
    @include('components.about.header', ['title' => __('index.history')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.about.nav')

            <div class="row mb-4 justify-content-center">
                <div class="col-md-6 col-lg-4 text-center">
                    <img class="img-fluid rounded shadow-sm" src="{{ asset('template/assets/img/logo_lawnew62.png') }}"
                        alt="logo" style="max-width: 180px;">
                </div>
            </div>

            <style>
                .history-wrap {
                    background: #fff;
                    border-radius: 18px;
                    padding: 28px 30px;
                    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.06);
                    border: 1px solid #eee;
                }
                .history-title {
                    color: #1f2a3a;
                    font-weight: 700;
                }
                .history-text {
                    color: #444;
                    font-size: 1.05rem;
                    line-height: 1.9;
                }
                .history-rule {
                    height: 3px;
                    width: 72px;
                    background: #c7a44b;
                }
            </style>

            @php
                $historyText = trim((string) __('index.op'));
                $historyParagraphs = preg_split('/\\n\\s*\\n/', $historyText) ?: [$historyText];
            @endphp

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="history-wrap">
                        <h3 class="history-title mb-2">
                            <i class="bi bi-journal-text me-2"></i>{{ __('index.history') }}
                        </h3>
                        <div class="history-rule mb-3"></div>
                        @foreach ($historyParagraphs as $index => $paragraph)
                            <p class="history-text {{ $index === array_key_last($historyParagraphs) ? 'mb-0' : 'mb-3' }}">
                                {!! nl2br(e($paragraph)) !!}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
