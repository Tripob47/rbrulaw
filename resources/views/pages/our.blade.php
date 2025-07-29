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
    <div class="container my-5 text-center">
        <h1>หลักสูตร นิติศาสตร์บัณฑิต </h1>

        <div class="card mx-auto" style="width: 18rem;">
            <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                {{-- <h5 class="card-title">Card title</h5>
                <p class="card-text">หลักสูตร นิติศาสตร์บัณฑิต</p> --}}
                <a href="https://reg.rbru.ac.th/registrar2/program_info_1.asp?f_cmd=2&levelid=21&programid=102849&facultyid=7&departmentname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%EC&programname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%BA%D1%B3%B1%D4%B5&facultyname=%B9%D4%B5%D4%C8%D2%CA%B5%C3%EC&levelname=%BB%C3%D4%AD%AD%D2%B5%C3%D5+%284+%BB%D5%29"
                    class="btn btn-primary">หลักสูตร นิติศาสตร์บัณฑิต</a>
            </div>
        </div>
    </div>
    <h2> เพจ แนะนำสาขา</h2>

@endsection
