@extends('layouts.masterlayout')

@section('title', __('index.qa_title'))
@section('meta_description', __('index.qa_meta_description'))

@section('content')
    @include('components.qa.header', ['title' => __('index.qa_title')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="text-center">
                <h4>{{ __('index.qa_ti') }}</h4>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.qa_manuals') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_menu/menu_2559.pdf" target="_blank">{{ __('index.qa_manual_2549') }}</a></li>
                                <li><a href="document_rule/law_menu/menu_2560.pdf" target="_blank">{{ __('index.qa_manual_2560') }}</a></li>
                                <li><a href="sar61/qa/QA2561.pdf" target="_blank">{{ __('index.qa_manual_2561') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.faculty_level') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="#" target="_blank">{{ __('index.sar_reports') }}</a></li>
                                <li><a href="sar62/fac/report01_57.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2557') }}</a></li>
                                <li><a href="sar62/fac/sar01_58.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2558') }}</a></li>
                                <li><a href="sar62/fac/report01_59.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2559') }}</a></li>
                                <li><a href="sar62/fac/report01_60.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2560') }}</a></li>
                                <li><a href="sar62/fac/report01_61_1_final.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2561') }}</a></li>
                                <li><a href="sar62/fac/report01_62_edit.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2562') }}</a></li>
                                <li class="mt-3"><a href="#" target="_blank">{{ __('index.evaluation_reports') }}</a></li>
                                <li><a href="sar62/fac/report02_57.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2557') }}</a></li>
                                <li><a href="sar62/fac/report01_58.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2558') }}</a></li>
                                <li><a href="sar62/fac/report02_59.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2559') }}</a></li>
                                <li><a href="sar62/fac/report02_60.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2560') }}</a></li>
                                <li><a href="sar62/program/1.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2561') }}</a></li>
                                <li><a href="sar62/program/62.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2562') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.program_level') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="#" target="_blank">{{ __('index.sar_reports') }}</a></li>
                                <li><a href="sar62/program/report01_57.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2557') }}</a></li>
                                <li><a href="sar62/program/sar01_58.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2558') }}</a></li>
                                <li><a href="sar62/program/sar01_59.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2559') }}</a></li>
                                <li><a href="sar62/program/60_sar.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2560') }}</a></li>
                                <li><a href="sar62/program/sar61_final.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2561') }}</a></li>
                                <li><a href="sar62/program/61_sar.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2562') }}</a></li>
                                <li><a href="sar62/program/63_sar.pdf" target="_blank">&nbsp;{{ __('index.academic_year_2563') }}</a></li>
                                <li class="mt-3"><a href="#" target="_blank">{{ __('index.evaluation_reports') }}</a></li>
                                <li><a href="sar62/fac/report02_57.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2557') }}</a></li>
                                <li><a href="sar62/program/report01_58.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2558') }}</a></li>
                                <li><a href="sar62/program/report01_59.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2559') }}</a></li>
                                <li><a href="sar62/program/report01_60.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2560') }}</a></li>
                                <li><a href="sar62/program/report02_1.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2561') }}</a></li>
                                <li><a href="sar62/program/report03_1.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2562') }}</a></li>
                                <li><a href="sar62/program/report03_2.pdf" target="_blank">&nbsp; {{ __('index.academic_year_2563') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
