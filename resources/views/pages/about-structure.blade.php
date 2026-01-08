@extends('layouts.masterlayout')

@section('title', __('index.Structure'))

@section('content')
    @include('components.about.header', ['title' => __('index.Structure')])

    @php
        $dean = [
            'name' => 'อาจารย์ทรัพยสิทธิ์ เกิดในมงคล',
            'position' => 'คณบดีคณะนิติศาสตร์',
            'image' => 'lawimg/Srapsit.jpg',
            'degrees' => [
                'นิติศาสตร์มหาบัณฑิต (น.ม) มหาวิทยาลัยรามคำแหง',
                'นิติศาสตร์บัณฑิต (น.บ) มหาวิทยาลัยสุโขทัยธรรมาธิราช',
            ],
        ];

        $academicStaff = [
            ['name' => 'อาจารย์ทรัพยสิทธิ์ เกิดในมงคล', 'position' => 'คณบดีคณะนิติศาสตร์', 'image' => 'lawimg/Srapsit.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์กุลปราณี กุลวิทิต', 'position' => 'รองคณบดีฝ่ายกิจการนักศึกษา', 'image' => 'lawimg/Kulpranee.jpg'],
            ['name' => 'อาจารย์ ดร.วิศิษศักดิ์ เนืองนอง', 'position' => 'รองคณบดีฝ่ายบริการวิชาการและประธานหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Visitsak.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ ดร.อาทิตยา โภคสุทธิ์', 'position' => 'ผู้ช่วยคณบดีด้านวิจัย', 'image' => 'lawimg/Athitaya.jpg'],
            ['name' => 'อาจารย์ ดร.ทัศนีย์ เงินสุข', 'position' => 'ผู้ช่วยคณบดีด้านวิชาการและประกันคุณภาพการศึกษา', 'image' => 'lawimg/tassanee.jpg'],
            ['name' => 'อาจารย์ ดร.ภูวดล ดำสนิท', 'position' => 'ผู้ช่วยคณบดีด้านทำนุบำรุงศิลปวัฒนธรรม', 'image' => 'lawimg/Phuwadol.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ ดร.ฐิติรัตน์ อิทธิมีชัย', 'position' => 'ประธานหลักสูตรนิติศาสตรบัณฑิต', 'image' => 'lawimg/Thitirat.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์พรรณรัตน์ โสธรประภากร', 'position' => 'อาจารย์ประจำคณะนิติศาสตร์', 'image' => 'lawimg/Phanarat.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ชินะกานต์ แสงอำนาจ', 'position' => 'อาจารย์ประจำคณะนิติศาสตร์', 'image' => 'lawimg/Chinakan.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ ทรงพร ประมาณ', 'position' => 'อาจารย์ประจำคณะนิติศาสตร์', 'image' => 'lawimg/Songphorn.jpg'],
            ['name' => 'อาจารย์ชญานาภา ลมัยวงษ์', 'position' => 'อาจารย์ประจำคณะนิติศาสตร์ (ลาศึกษาต่อ)', 'image' => 'lawimg/Chanapha.jpg'],
        ];

        $bachelorCommittee = [
            ['name' => 'ผู้ช่วยศาสตราจารย์ ดร.ฐิติรัตน์ อิทธิมีชัย', 'position' => 'ประธานหลักสูตรนิติศาสตรบัณฑิต', 'image' => 'lawimg/Thitirat.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์กุลปราณี กุลวิทิต', 'position' => 'อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรบัณฑิต', 'image' => 'lawimg/Kulpranee.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ทรงพร ประมาณ', 'position' => 'อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรบัณฑิต', 'image' => 'lawimg/Songphorn.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์พรรณรัตน์ โสธรประภากร', 'position' => 'อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรบัณฑิต', 'image' => 'lawimg/Phanarat.jpg'],
            ['name' => 'อาจารย์ ดร.ทัศนีย์ เงินสุข', 'position' => 'อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรบัณฑิต', 'image' => 'lawimg/tassanee.jpg'],
        ];

        $masterCommittee = [
            ['name' => 'อาจารย์ ดร.วิศิษศักดิ์ เนืองนอง', 'position' => 'ประธานหลักสูตรนิติศาสตรมหาบัณฑิต/อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Visitsak.jpg'],
            ['name' => 'อาจารย์ ดร.ภูวดล ดำสนิท', 'position' => 'อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Phuwadol.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ ดร.อาทิตยา โภคสุทธิ์', 'position' => 'อาจารย์ประจำหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Athitaya.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์ทรงพร ประมาณ', 'position' => 'อาจารย์ประจำหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Songphorn.jpg'],
            ['name' => 'ผู้ช่วยศาสตราจารย์พรรณรัตน์ โสธรประภากร', 'position' => 'อาจารย์ประจำหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Phanarat.jpg'],
            ['name' => 'อ.ดร.ศุนงค์นุช ศรีวิพันธ์', 'position' => 'อาจารย์ประจำหลักสูตรนิติศาสตรมหาบัณฑิต', 'image' => 'lawimg/Sunongnush.jpg'],
        ];

        $supportStaff = [
            ['name' => 'นางสาวภัคภร แซ่ห่าน', 'position' => 'รักษาการหัวหน้าสำนักงานคณบดีคณะนิติศาสตร์', 'image' => 'lawimg/phakphon.jpg'],
            ['name' => 'นางกาญจลักษณ์ พรรครัตน์', 'position' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'image' => 'lawimg/KarnJanaluck.jpg'],
            ['name' => 'นางสาวปิยธิดา ทิพจินดา', 'position' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'image' => 'lawimg/piyathida.jpg'],
            ['name' => 'นางสาวฉวีวรรณ รัตนมิตร', 'position' => 'บรรณารักษ์', 'image' => 'lawimg/Chaweewan.jpg'],
            ['name' => 'นางสาวปัทมา นิลมาศ', 'position' => 'แม่บ้านคณะนิติศาสตร์', 'image' => 'lawimg/Patthama.jpg'],
            ['name' => 'นางสาวสมจิตร สุวรรณา', 'position' => 'แม่บ้านคณะนิติศาสตร์', 'image' => 'lawimg/SomJitt.jpg'],
            ['name' => 'นางสาวขนิษฐา สุทธิกุล', 'position' => 'แม่บ้านคณะนิติศาสตร์', 'image' => 'lawimg/Kanittha.jpg'],
        ];
    @endphp

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.about.nav')

            <style>
                .structure-card {
                    border: 1px solid #e6e6e6;
                    border-radius: 16px;
                    box-shadow: 0 10px 22px rgba(0, 0, 0, 0.06);
                    overflow: hidden;
                }
                .structure-photo {
                    width: 220px;
                    height: 220px;
                    object-fit: cover;
                    object-position: center top;
                    border-radius: 16px;
                    border: 2px solid #f0f0f0;
                }
                .structure-card .card-body {
                    padding-top: 16px;
                }
            </style>

            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6">
                    <div class="card structure-card text-center">
                        <div class="card-header bg-dark text-white">
                            {{ $dean['position'] }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($dean['image']) }}" alt="{{ $dean['name'] }}"
                                class="structure-photo mb-3 mx-auto d-block">

                            <h5 class="card-title">{{ $dean['name'] }}</h5>
                            <p class="card-text fw-bold">{{ $dean['position'] }}</p>
                            <hr>
                            <ul class="list-unstyled text-start small">
                                @foreach ($dean['degrees'] as $degree)
                                    <li>
                                        <i class="bi bi-mortarboard-fill me-2 text-primary"></i>
                                        {{ $degree }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <nav class="nav nav-pills flex-column text-start gap-2 sticky-nav">
                        <button class="btn btn-outline-dark text-start active" id="HR_board-tab"
                            data-bs-toggle="tab" data-bs-target="#HR_board" type="button" role="tab"
                            aria-controls="HR_board" aria-selected="true">{{ __('index.management_structure') }}</button>

                        <button class="btn btn-outline-dark text-start" id="HR_instructor_law-tab"
                            data-bs-toggle="tab" data-bs-target="#HR_instructor_law" type="button" role="tab"
                            aria-controls="HR_instructor_law" aria-selected="false">{{ __('index.llb_responsible') }}</button>

                        <button class="btn btn-outline-dark text-start" id="HR_instructor_HR-tab"
                            data-bs-toggle="tab" data-bs-target="#HR_instructor_HR" type="button" role="tab"
                            aria-controls="HR_instructor_HR" aria-selected="false">{{ __('index.llm_responsible') }}</button>

                        <button class="btn btn-outline-dark text-start" id="HR_staff-tab"
                            data-bs-toggle="tab" data-bs-target="#HR_staff" type="button" role="tab"
                            aria-controls="HR_staff" aria-selected="false">{{ __('index.support_staff') }}</button>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="HR_board" role="tabpanel"
                            aria-labelledby="HR_board-tab">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                @foreach ($academicStaff as $person)
                                    <div class="col">
                                        <div class="card h-100 d-flex flex-column structure-card">
                                            <img src="{{ asset($person['image']) }}"
                                                class="structure-photo mx-auto d-block mt-3"
                                                alt="{{ $person['name'] }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title text-center">{{ $person['name'] }}</h5>
                                                <p class="card-text mb-1 text-center text-muted">
                                                    {{ $person['position'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="HR_instructor_law" role="tabpanel"
                            aria-labelledby="HR_instructor_law-tab">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                @foreach ($bachelorCommittee as $person)
                                    <div class="col">
                                        <div class="card h-100 d-flex flex-column structure-card">
                                            <img src="{{ asset($person['image']) }}"
                                                class="structure-photo mx-auto d-block mt-3"
                                                alt="{{ $person['name'] }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title text-center">{{ $person['name'] }}</h5>
                                                <p class="card-text mb-1 text-center text-muted">
                                                    {{ $person['position'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="HR_instructor_HR" role="tabpanel"
                            aria-labelledby="HR_instructor_HR-tab">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                @foreach ($masterCommittee as $person)
                                    <div class="col">
                                        <div class="card h-100 d-flex flex-column structure-card">
                                            <img src="{{ asset($person['image']) }}"
                                                class="structure-photo mx-auto d-block mt-3"
                                                alt="{{ $person['name'] }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title text-center">{{ $person['name'] }}</h5>
                                                <p class="card-text mb-1 text-center text-muted">
                                                    {{ $person['position'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="HR_staff" role="tabpanel" aria-labelledby="HR_staff-tab">
                            <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-start">
                                @foreach ($supportStaff as $person)
                                    <div class="col">
                                        <div class="card h-100 d-flex flex-column structure-card">
                                            <img src="{{ asset($person['image']) }}"
                                                class="structure-photo mx-auto d-block mt-3"
                                                alt="{{ $person['name'] }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title text-center">{{ $person['name'] }}</h5>
                                                <p class="card-text mb-1 text-center text-muted">
                                                    {{ $person['position'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
