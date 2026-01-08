@extends('layouts.masterlayout')

@section('title', __('index.evaluation'))

@section('content')
    @include('components.qa.header', ['title' => __('index.evaluation')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <h2 class="text-center mb-4">ข้อมูลนักศึกษาและบุคลากร</h2>

            <div class="text-center mb-4">
                <a href="https://sites.google.com/rbru.ac.th/datasci62/qualifications" target="_blank" class="text-decoration-none">
                    <h4 class="mb-2">ข้อมูลคุณสมบัตินักศึกษา</h4>
                </a>
            </div>

            <div class="text-center mb-4">
                <img class="img-fluid rounded shadow-sm" src="{{ asset('images/sar_teacher.jpg') }}" alt="ข้อมูลบุคลากร" style="max-width: 1000px;">
            </div>

            <div class="text-center mb-4">
                <a href="https://sites.google.com/rbru.ac.th/datasci62/academic-position" target="_blank" class="text-decoration-none">
                    <h4 class="mb-2">ตำแหน่งทางวิชาการ</h4>
                </a>
            </div>

            <div class="text-center">
                <img class="img-fluid rounded shadow-sm" src="{{ asset('images/sar_teacher2.jpg') }}" alt="ตำแหน่งทางวิชาการ" style="max-width: 1000px;">
            </div>
        </div>
    </section>
@endsection
