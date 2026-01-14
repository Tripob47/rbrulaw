@extends('layouts.masterlayout')

@section('title', __('index.pp'))
@section('meta_description', __('index.our_meta_description'))

@section('content')
@include('components.page-header', [
        'title' => __('index.pp'),
        'breadcrumbs' => [
            ['label' => __('index.home'), 'url' => url(app()->getLocale())],
            ['label' => __('index.pp')],
        ],
])
    <div class="container my-5 text-center">
        <h1>{{ __('index.o') }}</h1>

        <div class="container my-5 text-start">

            {{-- ปริญญาตรี --}}
            <div class="mb-5">
                <h3 class="mb-3">{{ __('index.bachelor') }}</h3>
                <div class="card shadow" style="max-width: 500px;">
                    <img src="{{ asset('template/assets/img/bachelor.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                            <a href="https://reg.rbru.ac.th/registrar2/program_info_1.asp?f_cmd=2&levelid=21&programid=106480&facultyid=7&departmentname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%EC&programname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%BA%D1%B3%B1%D4%B5&facultyname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%EC&levelname=%BB%C3%D4%AD%AD%D2%B5%C3%D5+%284+%BB%D5%29"
                                class="btn btn-warning">
                                {{ __('index.independent_study') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ปริญญาโท --}}
            <div>
                <h3 class="mb-3">{{ __('index.master') }}</h3>
                <div class="card shadow" style="max-width: 500px;">
                    <img src="{{ asset('template/assets/img/master.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                            <a href="https://reg.rbru.ac.th/registrar2/program_info_1.asp?avs347156218=56&levelid=&programid=105300&facultyid=7&programname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%C1%CB%D2%BA%D1%B3%B1%D4%B5&facultyname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%EC&levelname=%BB%C3%D4%AD%AD%D2%E2%B7"
                                class="btn btn-warning me-md-2">
                                {{ __('index.thesis') }}
                            </a>
                            <a href="https://reg.rbru.ac.th/registrar2/program_info_1.asp?avs347156218=60&levelid=&programid=105320&facultyid=7&programname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%C1%CB%D2%BA%D1%B3%B1%D4%B5&facultyname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%EC&levelname=%BB%C3%D4%AD%AD%D2%E2%B7"
                                class="btn btn-warning">
                                {{ __('index.independent_study') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>





    </div>

@endsection
