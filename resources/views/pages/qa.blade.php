@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')
    @include('layouts.img')
    <div class="page-title position-relative">
        <nav class="breadcrumbs position-absolute bottom-0 start-0 w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container text-white">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">คณะนิติศาสตร์</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">หลักสูตรประจำคณะที่เปิดสอน</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="about" class="py-5" style="background-color:#CACACA; width: 100%;">
        <div class="container">
            <!-- Nav Tabs -->
            <ul class="nav nav-tabs fs-5 gap-3 mb-3 justify-content-center" id="qaTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="qa-tab" data-bs-toggle="tab" data-bs-target="#qa" type="button"
                        role="tab" aria-controls="qa" aria-selected="true">
                        {{ __('index.quality_assurance') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="km-tab" data-bs-toggle="tab" data-bs-target="#km" type="button"
                        role="tab" aria-controls="km" aria-selected="false">
                        {{ __('index.knowledge_management_plan') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plan-tab" data-bs-toggle="tab" data-bs-target="#plan" type="button"
                        role="tab" aria-controls="plan" aria-selected="false">
                        {{ __('index.faculty') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="evaluation-tab" data-bs-toggle="tab" data-bs-target="#evaluation"
                        type="button" role="tab" aria-controls="evaluation" aria-selected="false">
                        {{ __('index.evaluation') }}
                    </button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="qaTabContent">

                <!-- QA Tab -->
                <div class="tab-pane fade show active" id="qa" role="tabpanel" aria-labelledby="qa-tab">
                    <h2 class="text-center mb-4">{{ __('index.qa_title') }}</h2>

                    <h4>{{ __('index.qa_manuals') }}</h4>
                    <ul>
                        <li>{{ __('index.qa_manual_2549') }}</li>
                        <li>{{ __('index.qa_manual_2560') }}</li>
                        <li>{{ __('index.qa_manual_2561') }}</li>
                    </ul>

                    <div class="row mt-5">
                        <!-- ฝั่งซ้าย: ระดับคณะ -->
                        <div class="col-md-6">
                            <h4 class="text-center">{{ __('index.faculty_level') }}</h4>

                            <h5>{{ __('index.sar_reports') }}</h5>
                            <ul>
                                <li>{{ __('index.academic_year_2557') }}</li>
                                <li>{{ __('index.academic_year_2558') }}</li>
                                <li>{{ __('index.academic_year_2559') }}</li>
                                <li>{{ __('index.academic_year_2560') }}</li>
                                <li>{{ __('index.academic_year_2561') }}</li>
                                <li>{{ __('index.academic_year_2562') }}</li>
                            </ul>

                            <h5>{{ __('index.evaluation_reports') }}</h5>
                            <ul>
                                <li>{{ __('index.academic_year_2557') }}</li>
                                <li>{{ __('index.academic_year_2558') }}</li>
                                <li>{{ __('index.academic_year_2559') }}</li>
                                <li>{{ __('index.academic_year_2560') }}</li>
                                <li>{{ __('index.academic_year_2561') }}</li>
                                <li>{{ __('index.academic_year_2562') }}</li>
                            </ul>
                        </div>

                        <!-- ฝั่งขวา: ระดับหลักสูตร -->
                        <div class="col-md-6">
                            <h4 class="text-center">{{ __('index.program_level') }}</h4>

                            <h5>{{ __('index.sar_reports') }}</h5>
                            <ul>
                                <li>{{ __('index.academic_year_2557') }}</li>
                                <li>{{ __('index.academic_year_2558') }}</li>
                                <li>{{ __('index.academic_year_2559') }}</li>
                                <li>{{ __('index.academic_year_2560') }}</li>
                                <li>{{ __('index.academic_year_2561') }}</li>
                                <li>{{ __('index.academic_year_2562') }}</li>
                                <li>{{ __('index.academic_year_2563') }}</li>
                            </ul>

                            <h5>{{ __('index.evaluation_reports') }}</h5>
                            <ul>
                                <li>{{ __('index.academic_year_2557') }}</li>
                                <li>{{ __('index.academic_year_2558') }}</li>
                                <li>{{ __('index.academic_year_2559') }}</li>
                                <li>{{ __('index.academic_year_2560') }}</li>
                                <li>{{ __('index.academic_year_2561') }}</li>
                                <li>{{ __('index.academic_year_2562') }}</li>
                                <li>{{ __('index.academic_year_2563') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- KM Tab -->
                <div class="container">
                    <h2 class="mb-4 text-center">
                        {{ __('index.km_title') }}
                    </h2>

                    <div class="row justify-content-center">
                        <!-- คอลัมน์ซ้าย: แผนการจัดการความรู้ -->
                        <div class="col-12 col-md-6">
                            <h3>{{ __('index.km_plan_title') }}</h3>
                            <ul>
                                <li>{{ __('index.km_plan_2564') }}</li>
                                <li>{{ __('index.km_plan_2563') }}</li>
                                <li>{{ __('index.km_plan_2562') }}</li>
                                <li>{{ __('index.km_plan_2560') }}</li>
                            </ul>
                        </div>

                        <!-- คอลัมน์ขวา: ผลการดำเนินงาน -->
                        <div class="col-12 col-md-6">
                            <h3>{{ __('index.km_results_title') }}</h3>
                            <ul>
                                <li>{{ __('index.km_results_2564') }}</li>
                                <li>{{ __('index.km_results_2563') }}</li>
                                <li>{{ __('index.km_results_2562') }}</li>
                                <li>{{ __('index.km_results_2561') }}</li>
                            </ul>
                        </div>
                        <div class="container">
                            <h2 class="text-center mb-4">{{ __('index.learning_park_title') }}</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <h3>{{ __('index.research_title') }}</h3>
                                    <ul>
                                        @foreach (__('index.research_items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h3>{{ __('index.graduates_title') }}</h3>
                                    <ul>
                                        @foreach (__('index.graduates_items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Faculty Plan Tab -->
                <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                    <h2>{{ __('index.faculty_plan') }}</h2>
                    <p>{{ __('index.plan_description') }}</p>
                </div>

                <!-- Evaluation Tab -->
                <div class="tab-pane fade" id="evaluation" role="tabpanel" aria-labelledby="evaluation-tab">
                    <h2>{{ __('index.evaluation_results') }}</h2>
                    <p>{{ __('index.evaluation_description') }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
