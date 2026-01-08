@extends('layouts.masterlayout')

@section('title', __('index.vision'))

@section('content')
    @include('components.about.header', ['title' => __('index.vision')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.about.nav')

            <style>
                .vision-card {
                    border: 1px solid #e4e4e4;
                    border-radius: 14px;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
                }
                .vision-header {
                    background: #1f1f1f;
                    color: #fff;
                    border-bottom: 1px solid #e4e4e4;
                    font-weight: 700;
                    position: relative;
                }
                .vision-header::after {
                    content: "";
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 48px;
                    height: 3px;
                    background: #c7a44b;
                }
                .vision-icon {
                    color: #c7a44b;
                }
                .vision-text {
                    color: #444;
                }
            </style>

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="card h-100 vision-card">
                        <div class="card-header vision-header">
                            <i class="bi bi-eye-fill me-2 vision-icon"></i> {{ __('index.vision_title') }}
                        </div>
                        <div class="card-body">
                            <p class="card-text vision-text">{{ __('index.vision_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 vision-card">
                        <div class="card-header vision-header">
                            <i class="bi bi-lightbulb-fill me-2 vision-icon"></i> {{ __('index.philosophy_title') }}
                        </div>
                        <div class="card-body">
                            <p class="card-text vision-text">{{ __('index.philosophy_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 vision-card">
                        <div class="card-header vision-header">
                            <i class="bi bi-person-badge-fill me-2 vision-icon"></i> {{ __('index.identity_title') }}
                        </div>
                        <div class="card-body">
                            <p class="card-text vision-text">{{ __('index.identity_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 vision-card">
                        <div class="card-header vision-header">
                            <i class="bi bi-star-fill me-2 vision-icon"></i> {{ __('index.uniqueness_title') }}
                        </div>
                        <div class="card-body">
                            <p class="card-text vision-text">{{ __('index.uniqueness_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card vision-card">
                        <div class="card-header vision-header">
                            <i class="bi bi-check2-circle me-2 vision-icon"></i> {{ __('index.desired_attributes_title') }}
                        </div>
                        <div class="card-body">
                            <p class="card-text vision-text">{{ __('index.desired_attributes_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
