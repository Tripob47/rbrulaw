@extends('layouts.masterlayout')

@section('title', __('index.km_plan'))
@section('meta_description', __('index.qa_km_meta_description'))

@section('content')
    @include('components.qa.header', ['title' => __('index.km_plan')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="text-center">
                <h4>{{ __('index.km_title') }}</h4>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.km_plan_title') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_8/qa62_8_4.pdf" target="_blank">{{ __('index.km_plan_2564') }}</a></li>
                                <li><a href="qa62/qa62_8/qa62_8_3.pdf" target="_blank">{{ __('index.km_plan_2563') }}</a></li>
                                <li><a href="qa62/qa62_8/qa62_8_1.pdf" target="_blank">{{ __('index.km_plan_2562') }}</a></li>
                                <li><a href="document_rule/law_km/km_60.pdf" target="_blank">{{ __('index.km_plan_2560') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('index.km_results_title') }}</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_km/reaction_km/re-_km_64.pdf" target="_blank">{{ __('index.km_results_2564') }}</a></li>
                                <li><a href="document_rule/law_km/reaction_km/re-_km_63.pdf" target="_blank">{{ __('index.km_results_2563') }}</a></li>
                                <li><a href="document_rule/law_km/reaction_km/re_km_62.pdf" target="_blank">{{ __('index.km_results_2562') }}</a></li>
                                <li><a href="document_rule/law_km/reaction_km/re_km_60.pdf" target="_blank">{{ __('index.km_results_2561') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="http://www2.rbru.ac.th/LearnPark/" target="_blank">{{ __('index.learning_park_title') }}</a>
                            </h5>
                            <ul class="small mb-0">
                                @php
                                    $researchItems = (array) __('index.research_items');
                                    $graduatesItems = (array) __('index.graduates_items');
                                @endphp
                                <li><a href="https://www2.rbru.ac.th/LearnPark/index.php?p=show&type_id=&No=3092" target="_blank">{{ __('index.research_title') }}</a></li>
                                <li>
                                    <a href="document_rule/law_lean_park/re01.pptx" target="_blank">{{ $researchItems[0] ?? '' }}</a><br>
                                    <a href="document_rule/law_lean_park/re02.pdf" target="_blank">{{ $researchItems[1] ?? '' }}</a><br>
                                    <a href="document_rule/law_lean_park/re03.pdf" target="_blank">{{ $researchItems[2] ?? '' }}</a>
                                </li>
                                <li class="mt-3"><a href="https://www2.rbru.ac.th/LearnPark/index.php?p=show&type_id=&No=3092" target="_blank">{{ __('index.graduates_title') }}</a></li>
                                <li>
                                    <a href="document_rule/law_lean_park/pro01.pptx" target="_blank">{{ $graduatesItems[0] ?? '' }}</a><br>
                                    <a href="document_rule/law_lean_park/pro02.pdf" target="_blank">{{ $graduatesItems[1] ?? '' }}</a><br>
                                    <a href="document_rule/law_lean_park/แนวปฏิบัติที่ดีเรื่องการพัฒนาการเรียนการสอนในรูปแบบออนไลน์.pdf" target="_blank">{{ $graduatesItems[2] ?? '' }}</a><br>
                                    <a href="document_rule/law_lean_park/แนวปฏิบัติที่ดีเรื่องผลลัพธ์การเรียนรู้ของหลักสูตร.pdf" target="_blank">{{ $graduatesItems[3] ?? '' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
