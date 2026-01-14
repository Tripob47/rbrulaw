@extends('layouts.masterlayout')

@section('title', __('index.faculty_plan'))
@section('meta_description', __('index.qa_plan_meta_description'))

@section('content')
    @include('components.qa.header', ['title' => __('index.faculty_plan')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="text-center">
                <h4>{{ __('index.faculty_plan') }}</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.strategic_plan_title') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_strategic_plan/strategic_57-61_02.pdf" target="_blank">{{ __('index.strategic_plan_1') }}</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_57-61_01.pdf" target="_blank">{{ __('index.strategic_plan_2') }}</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_57-61.pdf" target="_blank">{{ __('index.strategic_plan_3') }}</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_60-64.pdf" target="_blank">{{ __('index.strategic_plan_4') }}</a></li>
                                <li><a href="qa62/qa62_2/qa62_2_1.pdf" target="_blank">{{ __('index.strategic_plan_5') }}</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_60-64_2.pdf" target="_blank">{{ __('index.strategic_plan_6') }}</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_60-64_3.pdf" target="_blank">{{ __('index.strategic_plan_7') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.operation_plan_title') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_action_plan/actionplan_57.pdf" target="_blank">{{ __('index.operation_plan_1') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_58.pdf" target="_blank">{{ __('index.operation_plan_2') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_59.pdf" target="_blank">{{ __('index.operation_plan_3') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_60.pdf" target="_blank">{{ __('index.operation_plan_4') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_61.pdf" target="_blank">{{ __('index.operation_plan_5') }}</a></li>
                                <li><a href="qa62/qa62_3/qa62_3_1.pdf" target="_blank">{{ __('index.operation_plan_6') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_63_3.pdf" target="_blank">{{ __('index.operation_plan_7') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_64_1.pdf" target="_blank">{{ __('index.operation_plan_8') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.quality_development_plan') }} {{ __('index.faculty_levels') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_quality/faculty/quality_58.pdf" target="_blank">{{ __('index.faculty_plan_2558') }}</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_59.pdf" target="_blank">{{ __('index.faculty_plan_2559') }}</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_60.pdf" target="_blank">{{ __('index.faculty_plan_2560') }}</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_61.pdf" target="_blank">{{ __('index.faculty_plan_2561') }}</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_62.pdf" target="_blank">{{ __('index.faculty_plan_2562') }}</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_63.pdf" target="_blank">{{ __('index.faculty_plan_2563') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.quality_development_plan') }} {{ __('index.program_levels') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_quality/course/course_58.pdf" target="_blank">{{ __('index.program_plan_2558') }}</a></li>
                                <li><a href="document_rule/law_quality/course/course_60.pdf" target="_blank">{{ __('index.program_plan_2560') }}</a></li>
                                <li><a href="document_rule/law_quality/course/course_61.pdf" target="_blank">{{ __('index.program_plan_2561') }}</a></li>
                                <li><a href="document_rule/law_quality/course/course_62.pdf" target="_blank">{{ __('index.program_plan_2562') }}</a></li>
                                <li><a href="document_rule/law_quality/course/course_63.pdf" target="_blank">{{ __('index.program_plan_2563') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.personnel_development_plan') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_quality/staff/staff_61.pdf" target="_blank">{{ __('index.personnel_plan_2561') }}</a></li>
                                <li><a href="qa62/qa62_9/qa62_9_1.pdf" target="_blank">{{ __('index.personnel_plan_2562') }}</a></li>
                                <li><a href="document_rule/law_teacher/teacher63.pdf" target="_blank">{{ __('index.personnel_plan_2563') }}</a></li>
                                <li><a href="document_rule/law_teacher/teacher64.pdf" target="_blank">{{ __('index.personnel_plan_2564') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.risk_management_plan') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_risk/risk_61.pdf" target="_blank">{{ __('index.risk_plan_2561') }}</a></li>
                                <li><a href="qa62/qa62_7/qa62_7_1.pdf" target="_blank">{{ __('index.risk_plan_2562') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_63_2.pdf" target="_blank">{{ __('index.risk_plan_2563') }}</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_64.pdf" target="_blank">{{ __('index.risk_plan_2564') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.budget_plan') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_budget/butget_59.pdf" target="_blank">{{ __('index.budget_plan_2559') }}</a></li>
                                <li><a href="qa62/qa62_1/file1.pdf" target="_blank">{{ __('index.financial_strategy_2562') }}</a></li>
                                <li><a href="qa62/qa62_1/file62_1.pdf" target="_blank">{{ __('index.financial_strategy_2563') }}</a></li>
                                <li><a href="qa62/qa62_1/64file.pdf" target="_blank">{{ __('index.financial_strategy_2564') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.academic_service_plan') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_4/qa62_4_1.pdf" target="_blank">{{ __('index.academic_service_plan_2562') }}</a></li>
                                <li><a href="qa62/qa62_4/qa62_4_62_1.pdf" target="_blank">{{ __('index.academic_service_plan_2563') }}</a></li>
                                <li><a href="qa62/qa62_4/qa64_4_62_1.pdf" target="_blank">{{ __('index.academic_service_plan_2564') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.culture_maintenance_plan') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_5/qa62_5_1.pdf" target="_blank">{{ __('index.culture_maintenance_plan_2561') }}</a></li>
                                <li><a href="qa62/qa62_5/qa62_5_62.pdf" target="_blank">{{ __('index.culture_maintenance_plan_2562') }}</a></li>
                                <li><a href="qa62/qa62_5/qa62_5_63.pdf" target="_blank">{{ __('index.culture_maintenance_plan_2563') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.student_activity_plan') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_6/qa62_6_1.pdf" target="_blank">{{ __('index.student_activity_plan_2561') }}</a></li>
                                <li><a href="qa62/qa62_6/qa62_6_62_1.pdf" target="_blank">{{ __('index.student_activity_plan_2562') }}</a></li>
                                <li><a href="qa62/qa62_6/qa62_6_63.pdf" target="_blank">{{ __('index.student_activity_plan_2563') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
