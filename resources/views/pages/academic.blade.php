@extends('layouts.masterlayout')

@section('title', __('index.academic'))

@section('content')
@include('components.page-header', [
    'title' => __('index.academic'),
    'breadcrumbs' => [
        ['label' => __('index.home'), 'url' => url(app()->getLocale())],
        ['label' => __('index.academic')],
    ],
])
    <section class="section py-4">
        <div class="container" data-aos="fade-up">
            <h2 class="mb-4"><i class="bi bi-mortarboard-fill me-2"></i>{{ __('index.academic') }}</h2>

            <div class="row">
                <!-- การเปิดหมู่เรียน -->
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-primary">
                                <i class="bi bi-journal-plus me-2"></i>{{ __('index.course_opening') }}
                            </h5>
                            <ul class="mb-0">
                                <li><a href="#"
                                        class="text-decoration-none">{{ __('index.course_opening_process') }}</a></li>
                                <li><a href="#" class="text-decoration-none">{{ __('index.course_opening_form') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- การเทียบโอน -->
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success">
                                <i class="bi bi-arrow-left-right me-2"></i>{{ __('index.credit_transfer') }}
                            </h5>
                            <ol>
                                <li>{{ __('index.credit_transfer_rules') }}
                                    <ul>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.regulation_2553') }}</a></li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.regulation_2561') }}</a></li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.regulation_2562') }}</a></li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.regulation_2563') }}</a></li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.regulation_2564') }}</a></li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.announcement_2553') }}</a></li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.announcement_2561') }}</a></li>
                                    </ul>
                                </li>
                                <li>{{ __('index.credit_transfer_process') }}
                                    <ul>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.credit_transfer_step') }}</a>
                                        </li>
                                        <li><a href="#"
                                                class="text-decoration-none">{{ __('index.credit_transfer_form') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- การขอแก้ I -->
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-warning">
                                <i class="bi bi-pencil-square me-2"></i>{{ __('index.grade_i_correction') }}
                            </h5>
                            <ul>
                                <li><a href="#" class="text-decoration-none">{{ __('index.grade_i_step') }}</a></li>
                                <li><a href="#" class="text-decoration-none">{{ __('index.grade_i_guide') }}</a></li>
                                <li><a href="#" class="text-decoration-none">{{ __('index.grade_i_form') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- เอกสารดาวน์โหลด -->
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-danger">
                                <i class="bi bi-download me-2"></i>{{ __('index.downloads') }}
                            </h5>
                            <ul>
                                <li><a href="#" class="text-decoration-none">{{ __('index.room_request_form') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
