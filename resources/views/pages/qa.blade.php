@extends('layouts.masterlayout')

@section('title', __('index.quality_assurance'))

@section('content')
    @include('components.qa.header', ['title' => __('index.quality_assurance')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <h2 class="text-center mb-4">คณะกรรมการประกันคุณภาพ</h2>

            @php
                $qaFacultyCommittee = [
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับคณะ ปีการศึกษา ๒๕๖๑', 'file' => 'QA_file/2561/QA1_62.pdf'],
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับคณะ ปีการศึกษา ๒๕๖๒', 'file' => 'QA_file/2561/QA1_63.pdf'],
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับคณะ ปีการศึกษา ๒๕๖๓', 'file' => 'QA_file/2564/QA1_64.pdf'],
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับคณะ ปีการศึกษา ๒๕๖๓ (เพิ่มเติม)', 'file' => 'QA_file/2564/QA1_64_1.pdf'],
                ];
                $qaProgramCommittee = [
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับหลักสูตร ปีการศึกษา ๒๕๖๑', 'file' => 'QA_file/2561/QA2_62.pdf'],
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับหลักสูตร ปีการศึกษา ๒๕๖๒', 'file' => 'QA_file/2561/QA2_63.pdf'],
                    ['label' => 'คณะกรรมการประกันคุณภาพระดับหลักสูตร ปีการศึกษา ๒๕๖๓', 'file' => 'QA_file/2564/QA2_64.pdf'],
                ];
            @endphp

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-dark text-white">
                            ระดับคณะ
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($qaFacultyCommittee as $item)
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                    <a href="{{ asset($item['file']) }}" target="_blank">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-dark text-white">
                            ระดับหลักสูตร
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($qaProgramCommittee as $item)
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                    <a href="{{ asset($item['file']) }}" target="_blank">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center my-4">
                <img class="img-fluid rounded shadow-sm" src="{{ asset('images/qa62_1.jpg') }}" alt="QA" style="max-width: 900px;">
            </div>

            <h2 class="text-center mb-4">การประกันคุณภาพ (QA)</h2>

            @php
                $qaManuals = [
                    ['label' => 'คู่มือการประกันคุณภาพการศึกษาภายใน ประจำปีการศึกษา ๒๕๖๐', 'file' => '#'],
                    ['label' => 'คู่มือการประกันคุณภาพการศึกษาภายใน ประจำปีการศึกษา ๒๕๖๑', 'file' => '#'],
                    ['label' => 'คู่มือการประกันคุณภาพการศึกษาภายใน ประจำปีการศึกษา ๒๕๖๒', 'file' => 'file/manul/62.pdf'],
                    ['label' => 'คู่มือการประกันคุณภาพการศึกษาภายใน ประจำปีการศึกษา ๒๕๖๓', 'file' => 'file/manul/63.pdf'],
                ];
                $sarFaculty = [
                    ['label' => 'ประจำปีการศึกษา ๒๕๖๐', 'file' => '#'],
                    ['label' => 'ประจำปีการศึกษา ๒๕๖๑', 'file' => '#'],
                ];
                $sarFacultyResult = [
                    ['label' => 'ประจำปีการศึกษา ๒๕๖๐', 'file' => '#'],
                    ['label' => 'ประจำปีการศึกษา ๒๕๖๑', 'file' => '#'],
                ];
            @endphp

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-primary text-white">คู่มือการประกันคุณภาพ</div>
                        <ul class="list-group list-group-flush">
                            @foreach ($qaManuals as $item)
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                    <a href="{{ $item['file'] === '#' ? '#' : asset($item['file']) }}" target="_blank">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-success text-white">รายงานการประเมินตนเอง ระดับคณะ</div>
                        <ul class="list-group list-group-flush">
                            @foreach ($sarFaculty as $item)
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                    <a href="{{ $item['file'] === '#' ? '#' : asset($item['file']) }}" target="_blank">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-info text-white">รายงานผลการประเมินตนเอง ระดับคณะ</div>
                        <ul class="list-group list-group-flush">
                            @foreach ($sarFacultyResult as $item)
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                    <a href="{{ $item['file'] === '#' ? '#' : asset($item['file']) }}" target="_blank">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
