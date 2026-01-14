@extends('layouts.masterlayout')

@section('title', __('index.Location'))
@section('meta_description', __('index.about_location_meta_description'))

@section('content')
    @include('components.about.header', ['title' => __('index.Location')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.about.nav')

            <style>
                .location-card {
                    border: 1px solid #e6e6e6;
                    border-radius: 16px;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0 10px 22px rgba(0, 0, 0, 0.06);
                }
                .location-header {
                    background: #1f1f1f;
                    color: #fff;
                    border-bottom: 1px solid #e6e6e6;
                    font-weight: 700;
                    position: relative;
                }
                .location-header::after {
                    content: "";
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 48px;
                    height: 3px;
                    background: #c7a44b;
                }
                .location-icon {
                    color: #c7a44b;
                }
                .location-text {
                    color: #444;
                }
            </style>

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="card location-card h-100">
                        <div class="card-header location-header">
                            <i class="bi bi-building me-2 location-icon"></i>
                            {{ __('index.location_title') }}
                        </div>
                        <div class="card-body location-text">
                            <p class="mb-1">{{ __('index.university_name') }}</p>
                            <p class="mb-0">{{ __('index.address_th') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card location-card h-100">
                        <div class="card-header location-header">
                            <i class="bi bi-telephone-fill me-2 location-icon"></i>
                            {{ __('index.admin_structure') }}
                        </div>
                        <div class="card-body location-text">
                            <ul class="list-unstyled mb-0">
                                <li><strong>{{ __('index.tel') }}:</strong> 086-4403210</li>
                                <li><strong>{{ __('index.fax') }}:</strong> 039-471417</li>
                                <li><strong>{{ __('index.email') }}:</strong>
                                    <a href="mailto:law@rbru.ac.th">law@rbru.ac.th</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card location-card">
                        <div class="card-header location-header">
                            <i class="bi bi-geo-alt-fill me-2 location-icon"></i> {{ __('index.map') }}
                        </div>
                        <div class="card-body">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9235.146887787103!2d102.10671!3d12.664307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3104836d7aa27027%3A0xc17fd9cfcf9773e4!2z4LiE4LiT4Liw4LiZ4Li04LiV4Li04Lio4Liy4Liq4LiV4Lij4LmMIOC4reC4suC4hOC4suC4o-C5gOC4o-C4teC4ouC4meC4o-C4p-C4oSAo4LiV4Li24LiBIDEwKQ!5e1!3m2!1sth!2sus!4v1767862556365!5m2!1sth!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
