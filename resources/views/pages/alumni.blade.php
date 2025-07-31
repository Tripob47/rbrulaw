@extends('layouts.masterlayout')

@section('title', __('index.academic'))

@section('content')
@include('layouts.img')
    <nav class="breadcrumbs w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container text-white">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">{{ __(key: 'index.faculty_name') }}</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ __('index.pp') }}</li>
            </ol>
        </div>
    </nav>
    <div class="container py-5">
        <h1 class="mb-4 text-center">{{ __('index.alumni') }}</h1>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ __('index.alumni_document') }}</h5>
                <p class="card-text">
                    <a href="{{ asset('documents/employment_survey_form.pdf') }}" target="_blank" class="text-decoration-none">
                        📄 {{ __('index.alumni_employment_survey') }}
                    </a>
                </p>
            </div>
        </div>

        {{-- รายชื่อสามารถใส่ได้ด้านล่างนี้แบบเป็น tab หรือ dropdown filter --}}
        {{-- ตัวอย่างปุ่มหรือ dropdown ก็รองรับภาษาได้เช่นกัน --}}
    </div>
@endsection