@extends('layouts.masterlayout')

@section('title', __('index.knowledge_management_plan'))

@section('content')
    @include('components.qa.header', ['title' => __('index.knowledge_management_plan')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <h2 class="text-center mb-4">แนวปฏิบัติด้านการจัดการความรู้ (KM)</h2>

            @php
                $kmSections = [
                    'ปีการศึกษา 2563' => [
                        ['label' => 'เทคนิคการสอนนักศึกษาให้มีคุณภาพ การให้คำปรึกษาและรักษาอัตราคงอยู่ของนักศึกษา', 'file' => 'QA_file/2564/km03_1.pdf'],
                        ['label' => 'เทคนิคการใช้งานวิจัยเพื่อขอกำหนดตำแหน่งทางวิชาการ', 'file' => 'QA_file/2564/km04_1.pdf'],
                    ],
                    'ปีการศึกษา 2562' => [
                        ['label' => 'แนวปฏิบัติที่ดีในการจัดการเรียนรู้ฐานสมรรถนะ', 'file' => 'QA_file/2563/km01.pdf'],
                        ['label' => 'แนวปฏิบัติที่ดีในการใช้สถิติเพื่อการวิจัย', 'file' => 'QA_file/2563/km02.pdf'],
                    ],
                    'ปีการศึกษา 2561' => [
                        ['label' => 'เทคนิคการเขียนข้อเสนองานวิจัยทางด้านวิทยาศาสตร์แบบบูรณาการ', 'file' => 'QA_file/2561/km01.pdf'],
                        ['label' => 'เทคนิคการจัดการเรียนรู้วิทยาศาสตร์', 'file' => 'QA_file/2561/km02.pdf'],
                        ['label' => 'มคอ.3', 'file' => 'QA_file/2561/mko3.pdf'],
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($kmSections as $year => $items)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-warning text-dark">{{ $year }}</div>
                            <ul class="list-group list-group-flush">
                                @foreach ($items as $item)
                                    <li class="list-group-item">
                                        <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                        <a href="{{ asset($item['file']) }}" target="_blank">{{ $item['label'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
