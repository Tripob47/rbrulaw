@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')
    @include('layouts.img')

    {{-- Breadcrumbs --}}
    <nav class="breadcrumbs w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container text-white">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="index.html" class="text-white">{{ __('index.faculty_name') }}</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ __('index.qa') }}</li>
            </ol>
        </div>
    </nav>

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">

            {{-- Nav Tabs --}}
            <ul class="nav nav-tabs fs-5 gap-3 mb-4 justify-content-center" id="qaTab" role="tablist">
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
                    <button class="nav-link" id="evaluation-tab" data-bs-toggle="tab" data-bs-target="#evaluation" type="button"
                        role="tab" aria-controls="evaluation" aria-selected="false">
                        {{ __('index.evaluation') }}
                    </button>
                </li>
            </ul>

            {{-- Tab Content --}}
            <div class="tab-content" id="qaTabContent">

                {{-- QA Tab --}}
                <div class="tab-pane fade show active" id="qa" role="tabpanel" aria-labelledby="qa-tab">

                    <h2 class="text-center mb-4">{{ __('index.qa_title') }}</h2>

                    <div class="row g-4">
                        {{-- QA Manuals --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <i class="bi bi-journal-text me-2"></i> {{ __('index.qa_manuals') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                        <a href="#">{{ __('index.qa_manual_2549') }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                        <a href="#">{{ __('index.qa_manual_2560') }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                        <a href="#">{{ __('index.qa_manual_2561') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- Faculty Level Reports --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-building me-2"></i> {{ __('index.faculty_level') }}
                                </div>
                                <div class="card-body">
                                    <h5><i class="bi bi-file-earmark-text me-1"></i> {{ __('index.sar_reports') }}</h5>
                                    <ul class="list-unstyled ms-3">
                                        @for ($year = 2557; $year <= 2562; $year++)
                                            <li>
                                                <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                                <a href="#">{{ __('index.academic_year_'.$year) }}</a>
                                            </li>
                                        @endfor
                                    </ul>

                                    <h5 class="mt-3"><i class="bi bi-bar-chart-fill me-1"></i> {{ __('index.evaluation_reports') }}</h5>
                                    <ul class="list-unstyled ms-3">
                                        @for ($year = 2557; $year <= 2562; $year++)
                                            <li>
                                                <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                                <a href="#">{{ __('index.academic_year_'.$year) }}</a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Program Level Reports --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-header bg-info text-white">
                                    <i class="bi bi-journal-bookmark me-2"></i> {{ __('index.program_level') }}
                                </div>
                                <div class="card-body">
                                    <h5><i class="bi bi-file-earmark-text me-1"></i> {{ __('index.sar_reports') }}</h5>
                                    <ul class="list-unstyled ms-3">
                                        @for ($year = 2557; $year <= 2563; $year++)
                                            <li>
                                                <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                                <a href="#">{{ __('index.academic_year_'.$year) }}</a>
                                            </li>
                                        @endfor
                                    </ul>

                                    <h5 class="mt-3"><i class="bi bi-bar-chart-fill me-1"></i> {{ __('index.evaluation_reports') }}</h5>
                                    <ul class="list-unstyled ms-3">
                                        @for ($year = 2557; $year <= 2563; $year++)
                                            <li>
                                                <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                                <a href="#">{{ __('index.academic_year_'.$year) }}</a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> {{-- End QA Tab --}}

                {{-- KM Tab --}}
                <div class="tab-pane fade" id="km" role="tabpanel" aria-labelledby="km-tab">
                    <h2 class="text-center mb-4">{{ __('index.km_title') }}</h2>

                    <div class="row g-4">
                        {{-- KM Plans --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-warning text-dark">
                                    <i class="bi bi-list-check me-2"></i> {{ __('index.km_plan_title') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="#">{{ __('index.km_plan_2564') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.km_plan_2563') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.km_plan_2562') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.km_plan_2560') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- KM Results --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-warning text-dark">
                                    <i class="bi bi-bar-chart-line me-2"></i> {{ __('index.km_results_title') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="#">{{ __('index.km_results_2564') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.km_results_2563') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.km_results_2562') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.km_results_2561') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt-4">
                        {{-- Learning Park Research --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-secondary text-white">
                                    <i class="bi bi-flower1 me-2"></i> {{ __('index.research_title') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (__('index.research_items') as $item)
                                        <li class="list-group-item"><a href="#">{{ $item }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- Learning Park Graduates --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-secondary text-white">
                                    <i class="bi bi-mortarboard-fill me-2"></i> {{ __('index.graduates_title') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (__('index.graduates_items') as $item)
                                        <li class="list-group-item"><a href="#">{{ $item }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> {{-- End KM Tab --}}

                {{-- Faculty Plan Tab --}}
                <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                    <h2 class="text-center mb-4">{{ __('index.faculty') }}</h2>

                    <div class="row g-4">
                        {{-- Strategic Plan --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-info text-white">
                                    <i class="bi bi-clipboard-check me-2"></i> {{ __('index.strategic_plan_title') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @for ($i = 1; $i <= 7; $i++)
                                        <li class="list-group-item"><a href="#">{{ __('index.strategic_plan_'.$i) }}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                        {{-- Operation Plan --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-info text-white">
                                    <i class="bi bi-kanban-fill me-2"></i> {{ __('index.operation_plan_title') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @for ($i = 1; $i <= 8; $i++)
                                        <li class="list-group-item"><a href="#">{{ __('index.operation_plan_'.$i) }}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt-4">
                        {{-- Quality Development Plans --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-gear-wide-connected me-2"></i>
                                    {{ __('index.quality_development_plan') }} {{ __('index.faculty_level') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @for ($year = 2558; $year <= 2563; $year++)
                                        <li class="list-group-item"><a href="#">{{ __('index.faculty_plan_'.$year) }}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-gear-wide-connected me-2"></i>
                                    {{ __('index.quality_development_plan') }} {{ __('index.program_level') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2558', '2560', '2561', '2562', '2563'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.program_plan_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt-4">
                        {{-- Personnel Development Plan --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-warning text-dark">
                                    <i class="bi bi-people-fill me-2"></i> {{ __('index.personnel_development_plan') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2561','2562','2563','2564'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.personnel_plan_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- Risk Management Plan --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-warning text-dark">
                                    <i class="bi bi-shield-fill-check me-2"></i> {{ __('index.risk_management_plan') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2561','2562','2563','2564'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.risk_plan_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt-4">
                        {{-- Budget Plan --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-danger text-white">
                                    <i class="bi bi-cash-stack me-2"></i> {{ __('index.budget_plan') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="#">{{ __('index.budget_plan_2559') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.financial_strategy_2562') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.financial_strategy_2563') }}</a></li>
                                    <li class="list-group-item"><a href="#">{{ __('index.financial_strategy_2564') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- Academic Service Plan --}}
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-danger text-white">
                                    <i class="bi bi-building-check me-2"></i> {{ __('index.academic_service_plan') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2562','2563','2564'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.academic_service_plan_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> {{-- End Plan Tab --}}

                {{-- Evaluation Tab --}}
                <div class="tab-pane fade" id="evaluation" role="tabpanel" aria-labelledby="evaluation-tab">
                    <h2 class="text-center mb-4">{{ __('index.evaluation_title') }}</h2>

                    <div class="row g-4">
                        {{-- Internal Evaluation Reports --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-info text-white">
                                    <i class="bi bi-people-fill me-2"></i> {{ __('index.internal_evaluation') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2557', '2558', '2559', '2560', '2561'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.evaluation_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- External Evaluation Reports --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-person-check-fill me-2"></i> {{ __('index.external_evaluation') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2558', '2559', '2560', '2561', '2562'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.evaluation_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- Evaluation Plans --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-header bg-warning text-dark">
                                    <i class="bi bi-clipboard-data-fill me-2"></i> {{ __('index.evaluation_plans') }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach (['2560', '2561', '2562', '2563'] as $year)
                                        <li class="list-group-item"><a href="#">{{ __('index.evaluation_plan_'.$year) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> {{-- End Evaluation Tab --}}
            </div>
        </div>
    </section>
@endsection
