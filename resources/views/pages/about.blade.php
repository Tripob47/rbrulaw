@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')

    <!-- Page Title -->
    @include('layouts.img') <!-- ภาพพื้นหลังหรือแบนเนอร์ -->

    <nav class="breadcrumbs w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container text-white">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="index.html" class="text-white">{{ __('index.faculty_name') }}</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ __('index.about') }}</li>
            </ol>
        </div>
    </nav>

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">

            <!-- Nav Tabs -->
            <ul class="nav nav-tabs fs-5 gap-3 mb-4 justify-content-center" id="newsTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history"
                        type="button" role="tab" aria-controls="history" aria-selected="true">
                        <i class="bi bi-clock-history me-1"></i> {{ __('index.history') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button"
                        role="tab" aria-controls="vision" aria-selected="false">
                        <i class="bi bi-eye-fill me-1"></i> {{ __('index.vision') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="strategies-tab" data-bs-toggle="tab" data-bs-target="#strategies"
                        type="button" role="tab" aria-controls="strategies" aria-selected="false">
                        <i class="bi bi-gear-fill me-1"></i> {{ __('index.Strategies') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="structure-tab" data-bs-toggle="tab" data-bs-target="#structure"
                        type="button" role="tab" aria-controls="structure" aria-selected="false">
                        <i class="bi bi-diagram-3-fill me-1"></i> {{ __('index.Structure') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location-tab" data-bs-toggle="tab" data-bs-target="#location"
                        type="button" role="tab" aria-controls="location" aria-selected="false">
                        <i class="bi bi-geo-alt-fill me-1"></i> {{ __('index.Location') }}
                    </button>
                </li>
            </ul>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var triggerTabList = [].slice.call(document.querySelectorAll('#newsTab button[data-bs-toggle="tab"]'))
                    var bsTabs = triggerTabList.map(function(triggerEl) {
                        return new bootstrap.Tab(triggerEl)
                    })

                    // ถ้า URL มี hash ให้เปิด tab ตาม hash
                    var hash = window.location.hash
                    if (hash) {
                        var triggerEl = document.querySelector('#newsTab button[data-bs-target="' + hash + '"]')
                        if (triggerEl) {
                            var tab = bootstrap.Tab.getInstance(triggerEl)
                            if (!tab) {
                                tab = new bootstrap.Tab(triggerEl)
                            }
                            tab.show()
                        }
                    }

                    // เมื่อเปลี่ยน tab ให้เปลี่ยน hash ใน URL ด้วย (ไม่โหลดหน้าใหม่)
                    triggerTabList.forEach(function(triggerEl) {
                        triggerEl.addEventListener('shown.bs.tab', function(event) {
                            history.replaceState(null, null, event.target.getAttribute('data-bs-target'))
                        })
                    })
                })
            </script>

            <!-- Tab Content -->
            <div class="tab-content" id="newsTabContent">

                <!-- ประวัติ -->
                <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-md-6 col-lg-4 text-center">
                            <img class="img-fluid rounded shadow-sm"
                                src="{{ asset('template/assets/img/logo_lawnew62.png') }}" alt="logo"
                                style="max-width: 180px;">
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h3 class="card-title mb-3"><i class="bi bi-journal-text me-2"></i>{{ __('index.history') }}
                            </h3>
                            <blockquote class="blockquote fst-italic border-start border-4 ps-3 text-muted">
                                {{ __('index.op') }}
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- วิสัยทัศน์ ปรัชญา -->
                <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-header bg-primary text-white">
                                    <i class="bi bi-eye-fill me-2"></i> {{ __('index.vision_title') }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ __('index.vision_text') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-header bg-secondary text-white">
                                    <i class="bi bi-lightbulb-fill me-2"></i> {{ __('index.philosophy_title') }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ __('index.philosophy_text') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-header bg-info text-white">
                                    <i class="bi bi-person-badge-fill me-2"></i> {{ __('index.identity_title') }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ __('index.identity_text') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-header bg-warning text-dark">
                                    <i class="bi bi-star-fill me-2"></i> {{ __('index.uniqueness_title') }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ __('index.uniqueness_text') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-check2-circle me-2"></i> {{ __('index.desired_attributes_title') }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ __('index.desired_attributes_text') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- กลยุทธ์ -->
                <div class="tab-pane fade" id="strategies" role="tabpanel" aria-labelledby="strategies-tab">
                    <h2 class="mb-4 text-center">{{ __('index.title') }}</h2>

                    @foreach (['strategy1', 'strategy2', 'strategy3'] as $strategy)
                        <div class="card shadow-sm mb-4 border-0">
                            <div class="card-header bg-light text-dark fw-bold fs-5">
                                {{ __('index.' . $strategy . '_title') }}
                            </div>
                            <div class="card-body">
                                <p>{{ __('index.' . $strategy . '_desc') }}</p>
                                <ol class="ps-3">
                                    @foreach (__('index.' . $strategy . '_actions') as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- โครงสร้าง -->
                <div class="tab-pane fade" id="structure" role="tabpanel" aria-labelledby="structure-tab">
                    <div class="container py-4">

                        {{-- การ์ดคณบดี (กึ่งกลาง) --}}
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 col-lg-6">
                                <div class="card shadow text-center">
                                    <div class="card-header bg-dark text-white">
                                        {{ __('index.dean_position') }}
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('template/assets/img/about/1.png') }}" alt="Dean"
                                            class="img-fluid rounded mb-3 mx-auto d-block"
                                            style="width: 400px; height: 400px; object-fit: contain;">

                                        <h5 class="card-title">{{ __('index.dean_name') }}</h5>
                                        <p class="card-text fw-bold">{{ __('index.dean_position') }}</p>
                                        <hr>
                                        <ul class="list-unstyled text-start small">
                                            <li>
                                                <i class="bi bi-mortarboard-fill me-2 text-primary"></i>
                                                {{ __('index.dean_degree_1') }}
                                            </li>
                                            <li>
                                                <i class="bi bi-mortarboard-fill me-2 text-primary"></i>
                                                {{ __('index.dean_degree_2') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- แท็บเมนูซ้าย --}}
                        <div class="row">
                            <div class="col-md-3">
                                <nav class="nav nav-pills flex-column text-start gap-2 sticky-nav">
                                    <button class="btn btn-outline-dark text-start active" id="HR_board-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_board" type="button" role="tab"
                                        aria-controls="HR_board"
                                        aria-selected="true">{{ __('index.management_structure') }}</button>

                                    <button class="btn btn-outline-dark text-start" id="HR_instructor_law-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_instructor_law" type="button"
                                        role="tab" aria-controls="HR_instructor_law"
                                        aria-selected="false">{{ __('index.lecturers') }}</button>

                                    <button class="btn btn-outline-dark text-start" id="HR_instructor_HR-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_instructor_HR" type="button"
                                        role="tab" aria-controls="HR_instructor_HR"
                                        aria-selected="false">{{ __('index.llb_responsible') }}</button>

                                    <button class="btn btn-outline-dark text-start" id="HR_instructor_HR2-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_instructor_HR2" type="button"
                                        role="tab" aria-controls="HR_instructor_HR2"
                                        aria-selected="false">{{ __('index.llm_responsible') }}</button>

                                    <button class="btn btn-outline-dark text-start" id="HR_staff-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_staff" type="button" role="tab"
                                        aria-controls="HR_staff"
                                        aria-selected="false">{{ __('index.support_staff') }}</button>
                                </nav>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <!-- โครงสร้างผู้บริหาร -->
                                    @php
                                        $hr_board = [
                                            [
                                                'image' => '2.png',
                                                'email' => 'kulpranee.s@rbru.ac.th',
                                                'key' => 'hr_1',
                                            ],
                                            [
                                                'image' => '3.3.jpg',
                                                'email' => 'sky_orchid@hotmail.com',
                                                'key' => 'hr_2',
                                            ],
                                            [
                                                'image' => '4.jpg',
                                                'email' => '-',
                                                'key' => 'hr_3',
                                            ],
                                            [
                                                'image' => '5.jpg',
                                                'email' => 'dr.thatsanee@gmail.com',
                                                'key' => 'hr_4',
                                            ],
                                            [
                                                'image' => '6.jpg',
                                                'email' => 'athidtaya.gym@gmail.com',
                                                'key' => 'hr_5',
                                            ],
                                            [
                                                'image' => '7.png',
                                                'email' => '-',
                                                'key' => 'hr_6',
                                            ],
                                        ];
                                    @endphp

                                    {{-- เฉพาะใน tab HR_board --}}
                                    <div class="tab-pane fade show active" id="HR_board" role="tabpanel"
                                        aria-labelledby="HR_board-tab">
                                        <div class="row row-cols-1 row-cols-md-2 g-4">
                                            @foreach ($hr_board as $person)
                                                <div class="col">
                                                    <div class="card h-100 d-flex flex-column shadow-sm">
                                                        <img src="{{ asset('template/assets/img/about/' . $person['image']) }}"
                                                            class="card-img-top mx-auto d-block"
                                                            alt="{{ __('index.' . $person['key'] . '.name') }}"
                                                            style="width: 14rem; height: auto;">
                                                        <div class="card-body d-flex flex-column">
                                                            <h5 class="card-title text-center">
                                                                {{ __('index.' . $person['key'] . '.name') }}</h5>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.position') }}:</strong>
                                                                {{ __('index.' . $person['key'] . '.position') }}
                                                            </p>
                                                            <p class="card-text mb-1"><strong>E-Mail:</strong>
                                                                @if ($person['email'] !== '-')
                                                                    <a
                                                                        href="mailto:{{ $person['email'] }}">{{ $person['email'] }}</a>
                                                                @else
                                                                    <span class="text-muted">-</span>
                                                                @endif
                                                            </p>
                                                            <hr>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.education') }}:</strong>
                                                            </p>
                                                            <ul class="ps-3 mb-1">
                                                                @foreach (__('index.' . $person['key'] . '.degrees') as $degree)
                                                                    <li>{{ $degree }}</li>
                                                                @endforeach
                                                            </ul>

                                                            @if ($person['key'] === 'hr_6')
                                                                <div class="mt-auto d-flex gap-2">
                                                                    <a href="#" class="btn btn-primary">Research</a>
                                                                    <a href="#"
                                                                        class="btn btn-secondary">Contract</a>
                                                                </div>
                                                            @else
                                                                <p class="card-text mt-auto"><strong>Research
                                                                        Contract</strong></p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>




                                    {{-- <div class="tab-pane fade" id="HR_instructor_law" role="tabpanel"
                                        aria-labelledby="HR_instructor_law-tab">
                                        <div class="row g-4 justify-content-start">
                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/2.1.png') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="ผู้ช่วยศาสตราจารย์ พรรณรัตน์ โสธรประภากร"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">ผู้ช่วยศาสตราจารย์ พรรณรัตน์
                                                            โสธรประภากร</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            ผู้ช่วยศาสตราจารย์</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <span
                                                                class="text-muted">tuk3399@hotmail.com</span></p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยรามคำแหง</li>
                                                            <li>รัฐประศาสนศาสตรมหาบัณฑิต (รป.ม.) สาขาการจัดการสาธารณะ
                                                                มหาวิทยาลัยเกษมบัณฑิต</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายมหาชน
                                                                มหาวิทยาลัยรามคำแหง</li>
                                                        </ul>
                                                        <div class="d-flex gap-2">
                                                            <a href="#" class="btn btn-primary">Research</a>
                                                            <a href="#" class="btn btn-secondary">Contract</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/2.2.jpg') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="ผู้ช่วยศาสตราจารย์ ฐิติรัตน์ อิทธิมีชัย"
                                                        style="width: 14rem; height: auto;">

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">ผู้ช่วยศาสตราจารย์ ฐิติรัตน์
                                                            อิทธิมีชัย</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            ประธานหลักสูตรนิติศาสตรบัณฑิต</p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยธรรมศาสตร์</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขา กฏหมายเพื่อการพัฒนา
                                                                มหาวิทยาลัยรามคำแหง</li>
                                                            <li>เนติบัณฑิตไทย (นบท.) สำนักอบรมศึกษากฏหมายแห่งเนติบัณฑิตสภา
                                                            </li>
                                                        </ul>
                                                        <div class="d-flex gap-2">
                                                            <a href="#" class="btn btn-primary">Research</a>
                                                            <a href="#" class="btn btn-secondary">Contract</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/2.3.png') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="ผู้ช่วยศาสตราจารย์ ชินะกานต์ แสงอำนาจ"
                                                        style="width: 14rem; height: auto;">
                                                    <!-- ปรับ path รูปให้ตรงกับไฟล์จริง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">ผู้ช่วยศาสตราจารย์ ชินะกานต์
                                                            แสงอำนาจ</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            อาจารย์ผู้รับผิดชอบหลักสูตร</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <span
                                                                class="text-muted">zhinakarn.s@rbru.ac.th</span></p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยรามคำแหง</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายระหว่างประเทศ
                                                                มหาวิทยาลัยรามคำแหง</li>
                                                        </ul>
                                                        <div class="d-flex gap-2">
                                                            <a href="#" class="btn btn-primary w-50">Research</a>
                                                            <a href="#" class="btn btn-secondary w-50">Contract</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/2.png') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="ผู้ช่วยศาสตราจารย์ กุลปราณี กุลวิทิต"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">ผู้ช่วยศาสตราจารย์ กุลปราณี
                                                            กุลวิทิต</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            รองคณบดีฝ่ายบริหารและบริการวิชาการ</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong>
                                                            <a
                                                                href="mailto:kulpranee.s@rbru.ac.th">kulpranee.s@rbru.ac.th</a>
                                                        </p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยราชภัฏรำไพพรรณี</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายมหาชน มหาวิทยาลัยศรีปทุม
                                                            </li>
                                                        </ul>

                                                        <!-- ปุ่ม Research และ Contract -->
                                                        <div class="d-flex gap-2">
                                                            <a href="#" class="btn btn-primary w-50">Research</a>
                                                            <a href="#" class="btn btn-secondary w-50">Contract</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/4.jpg') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="อาจารย์ ดร.วิศิษศักดิ์ เนืองนอง"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">อาจารย์ ดร.วิศิษศักดิ์ เนืองนอง
                                                        </h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            ผู้ช่วยคณบดีฝ่ายวางแผนและศิลปวัฒนธรรม</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <span
                                                                class="text-muted">-</span></p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>ปริญญานิติศาสตรบัณฑิต 2553</li>
                                                            <li>ปริญญานิติศาสตรมหาบัณฑิต 2555</li>
                                                            <li>ปริญญานิติศาสตรดุษฎีบัณฑิต 2560</li>
                                                        </ul>
                                                        <div class="text-center mt-3">
                                                            <button type="button"
                                                                class="btn btn-outline-primary">Research Contract</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/5.jpg') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="อาจารย์ ดร.ทัศนีย์ เงินสุข"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">อาจารย์ ดร.ทัศนีย์ เงินสุข</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            อาจารย์ผู้รับผิดชอบหลักสูตร</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <a
                                                                href="mailto:dr.thatsanee@gmail.com">dr.thatsanee@gmail.com</a>
                                                        </p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยรามคำแหง</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายมหาชน
                                                                มหาวิทยาลัยรามคำแหง</li>
                                                            <li>ครุศาสตร์อุตสาหกรรมดุษฎีบัณฑิต (เทคโนโลยีการศึกษา)
                                                                สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                                                        </ul>
                                                        <p class="card-text"><strong>Research Contract</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/2.5.jpg') }}"
                                                        class="card-img-top mx-auto d-block" alt="อาจารย์ ทรงพร ประมาณ"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">อาจารย์ ทรงพร ประมาณ</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong> อาจารย์</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <span
                                                                class="text-muted">-</span></p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยรามคำแหง</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายระหว่างประเทศ
                                                                มหาวิทยาลัยรามคำแหง</li>
                                                        </ul>
                                                        <p class="card-text text-center mt-3">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-sm">Research
                                                                Contract</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/6.jpg') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="อาจารย์ อาทิตยา โภคสุทธิ์"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">อาจารย์ อาทิตยา โภคสุทธิ์</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            ผู้ช่วยคณบดีฝ่ายงานวิจัยและพัฒนา</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <a
                                                                href="mailto:athidtaya.gym@gmail.com">athidtaya.gym@gmail.com</a>
                                                        </p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยรังสิต</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายมหาชน มหาวิทยาลัยรังสิต
                                                            </li>
                                                        </ul>
                                                        <p class="card-text text-center mt-3">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-sm">Research
                                                                Contract</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/3.3.jpg') }}"
                                                        class="card-img-top mx-auto d-block"
                                                        alt="อาจารย์ ชญานาภา ลมัยวงษ์"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">อาจารย์ ชญานาภา ลมัยวงษ์</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            อาจารย์ผู้รับผิดชอบหลักสูตร</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <a
                                                                href="mailto:sky_orchid@hotmail.com">sky_orchid@hotmail.com</a>
                                                        </p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) เกียรตินิยมอันดับ 2
                                                                มหาวิทยาลัยธรรมศาสตร์</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายธุรกิจ (ภาคภาษาอังกฤษ)
                                                                มหาวิทยาลัยธรรมศาสตร์</li>
                                                            <li>เนติบัณฑิตไทย (นบท.) สำนักอบรมศึกษากฎหมายแห่งเนติบัณฑิตยสภา
                                                            </li>
                                                        </ul>
                                                        <p class="card-text text-center mt-3">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-sm">Research
                                                                Contract</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="card shadow-sm w-auto" style="max-width: 100%;">
                                                    <img src="{{ asset('template/assets/img/about/7.png') }}"
                                                        class="card-img-top mx-auto d-block" alt="อาจารย์ ดร.ภูวดล ดำสนิท"
                                                        style="width: 14rem; height: auto;"> <!-- รูปอยู่ตรงกลาง -->

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">อาจารย์ ดร.ภูวดล ดำสนิท</h5>
                                                        <p class="card-text mb-1"><strong>ตำแหน่ง:</strong>
                                                            อาจารย์ผู้รับผิดชอบหลักสูตร</p>
                                                        <p class="card-text mb-1"><strong>E-Mail:</strong> <span
                                                                class="text-muted">-</span></p>
                                                        <hr>
                                                        <p class="card-text mb-1"><strong>วุฒิการศึกษา:</strong></p>
                                                        <ul class="ps-3 mb-1">
                                                            <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยหอการค้าไทย</li>
                                                            <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายมหาชน มหาวิทยาลัยตาปี
                                                            </li>
                                                            <li>นิติศาสตรดุษฎีบัณฑิต (น.ด.) มหาวิทยาลัยปทุมธานี</li>
                                                        </ul>
                                                        <p class="card-text text-center mt-3">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-sm">Research
                                                                Contract</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}

                                    @php
                                        $hr_instructors = [
                                            [
                                                'image' => '2.1.png',
                                                'email' => 'tuk3399@hotmail.com',
                                                'key' => 'hr_instructor_1',
                                            ],
                                            ['image' => '2.2.jpg', 'email' => '-', 'key' => 'hr_instructor_2'],
                                            [
                                                'image' => '2.3.png',
                                                'email' => 'zhinakarn.s@rbru.ac.th',
                                                'key' => 'hr_instructor_3',
                                            ],
                                            [
                                                'image' => '2.png',
                                                'email' => ' kulpranee.s@rbru.ac.th',
                                                'key' => 'hr_instructor_4',
                                            ],
                                            ['image' => '4.jpg', 'email' => '-', 'key' => 'hr_instructor_5'],
                                            [
                                                'image' => '5.jpg',
                                                'email' => 'dr.thatsanee@gmail.com',
                                                'key' => 'hr_instructor_6',
                                            ],
                                            ['image' => '7.png', 'email' => '-', 'key' => 'hr_instructor_7'],
                                            ['image' => '2.5.jpg', 'email' => '-', 'key' => 'hr_instructor_8'],
                                            [
                                                'image' => '6.jpg',
                                                'email' => 'athidtaya.gym@gmail.com',
                                                'key' => 'hr_instructor_9',
                                            ],
                                            [
                                                'image' => '3.3.jpg',
                                                'email' => 'sky_orchid@hotmail.com',
                                                'key' => 'hr_instructor_10',
                                            ],
                                        ];
                                    @endphp

                                    <div class="tab-pane fade" id="HR_instructor_law" role="tabpanel"
                                        aria-labelledby="HR_instructor_law-tab">
                                        <div class="row row-cols-1 row-cols-md-2 g-4">
                                            @foreach ($hr_instructors as $person)
                                                <div class="col">
                                                    <div class="card h-100 d-flex flex-column shadow-sm"
                                                        style="max-width: 100%;">
                                                        <img src="{{ asset('template/assets/img/about/' . $person['image']) }}"
                                                            class="card-img-top mx-auto d-block"
                                                            alt="{{ __('index.' . $person['key'] . '.name') }}"
                                                            style="width: 14rem; height: auto;">
                                                        <div class="card-body d-flex flex-column">
                                                            <h5 class="card-title text-center">
                                                                {{ __('index.' . $person['key'] . '.name') }}</h5>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.position') }}:</strong>
                                                                {{ __('index.' . $person['key'] . '.position') }}
                                                            </p>
                                                            <p class="card-text mb-1">
                                                                <strong>E-Mail:</strong>
                                                                @if ($person['email'] !== '-')
                                                                    <a
                                                                        href="mailto:{{ $person['email'] }}">{{ $person['email'] }}</a>
                                                                @else
                                                                    <span class="text-muted">-</span>
                                                                @endif
                                                            </p>
                                                            <hr>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.education') }}:</strong>
                                                            </p>
                                                            <ul class="ps-3 mb-1">
                                                                @foreach (__('index.' . $person['key'] . '.degrees') as $degree)
                                                                    <li>{{ $degree }}</li>
                                                                @endforeach
                                                            </ul>
                                                            <p class="card-text text-center mt-auto">
                                                                <a href="#"
                                                                    class="btn btn-outline-primary btn-sm">{{ __('index.research_contract') }}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>



                                    <!-- ผู้รับผิดชอบ น.บ. -->
                                    @php
                                        $hr_instructors = [
                                            [
                                                'image' => '2.2.jpg',
                                                'email' => '-',
                                                'key' => 'hr_instructor_1',
                                            ],
                                            [
                                                'image' => '5.jpg',
                                                'email' => 'dr.thatsanee@gmail.com',
                                                'key' => 'hr_instructor_2',
                                            ],
                                            [
                                                'image' => '3.3.jpg',
                                                'email' => 'sky_orchid@hotmail.com',
                                                'key' => 'hr_instructor_3',
                                            ],
                                            [
                                                'image' => '2.3.png',
                                                'email' => 'zhinakarn.s@rbru.ac.th',
                                                'key' => 'hr_instructor_4',
                                            ],
                                            [
                                                'image' => '2.png',
                                                'email' => 'kulpranee.s@rbru.ac.th',
                                                'key' => 'hr_instructor_5',
                                            ],
                                        ];
                                    @endphp

                                    <div class="tab-pane fade" id="HR_instructor_HR" role="tabpanel"
                                        aria-labelledby="HR_instructor_HR-tab">
                                        <div class="row row-cols-1 row-cols-md-2 g-4">
                                            @foreach ($hr_instructors as $person)
                                                <div class="col">
                                                    <div class="card h-100 d-flex flex-column shadow-sm"
                                                        style="max-width: 100%;">
                                                        <img src="{{ asset('template/assets/img/about/' . $person['image']) }}"
                                                            class="card-img-top mx-auto d-block"
                                                            alt="{{ __('index.' . $person['key'] . '.name') }}"
                                                            style="width: 14rem; height: auto;">
                                                        <div class="card-body d-flex flex-column">
                                                            <h5 class="card-title text-center">
                                                                {{ __('index.' . $person['key'] . '.name') }}</h5>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.position') }}:</strong>
                                                                {{ __('index.' . $person['key'] . '.position') }}
                                                            </p>
                                                            <p class="card-text mb-1"><strong>E-Mail:</strong>
                                                                @if ($person['email'] !== '-')
                                                                    <a
                                                                        href="mailto:{{ $person['email'] }}">{{ $person['email'] }}</a>
                                                                @else
                                                                    <span class="text-muted">-</span>
                                                                @endif
                                                            </p>
                                                            <hr>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.education') }}:</strong>
                                                            </p>
                                                            <ul class="ps-3 mb-1">
                                                                @foreach (__('index.' . $person['key'] . '.degrees') as $degree)
                                                                    <li>{{ $degree }}</li>
                                                                @endforeach
                                                            </ul>
                                                            <p class="card-text text-center mt-auto">
                                                                <a href="#"
                                                                    class="btn btn-outline-primary btn-sm">{{ __('index.research_contract') }}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>


                                    <!-- ผู้รับผิดชอบ น.ม. -->
                                    @php
                                        $hr_instructors2 = [
                                            [
                                                'image' => '4.jpg',
                                                'email' => '-',
                                                'key' => 'hr_instructor2_1',
                                            ],
                                            [
                                                'image' => '7.png',
                                                'email' => '-',
                                                'key' => 'hr_instructor2_2',
                                            ],
                                            [
                                                'image' => '6.jpg',
                                                'email' => 'athidtaya.gym@gmail.com',
                                                'key' => 'hr_instructor2_3',
                                            ],
                                        ];
                                    @endphp

                                    <div class="tab-pane fade" id="HR_instructor_HR2" role="tabpanel"
                                        aria-labelledby="HR_instructor_HR2-tab">
                                        <div class="row row-cols-1 row-cols-md-2 g-4">
                                            @foreach ($hr_instructors2 as $person)
                                                <div class="col">
                                                    <div class="card h-100 d-flex flex-column shadow-sm"
                                                        style="max-width: 100%;">
                                                        <img src="{{ asset('template/assets/img/about/' . $person['image']) }}"
                                                            class="card-img-top mx-auto d-block"
                                                            alt="{{ __('index.' . $person['key'] . '.name') }}"
                                                            style="width: 14rem; height: auto;">
                                                        <div class="card-body d-flex flex-column">
                                                            <h5 class="card-title text-center">
                                                                {{ __('index.' . $person['key'] . '.name') }}</h5>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.position') }}:</strong>
                                                                {{ __('index.' . $person['key'] . '.position') }}
                                                            </p>
                                                            <p class="card-text mb-1"><strong>E-Mail:</strong>
                                                                @if ($person['email'] !== '-')
                                                                    <a
                                                                        href="mailto:{{ $person['email'] }}">{{ $person['email'] }}</a>
                                                                @else
                                                                    <span class="text-muted">(โปรดระบุ)</span>
                                                                @endif
                                                            </p>
                                                            <hr>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.education') }}:</strong>
                                                            </p>
                                                            <ul class="ps-3 mb-1">
                                                                @foreach (__('index.' . $person['key'] . '.degrees') as $degree)
                                                                    <li>{{ $degree }}</li>
                                                                @endforeach
                                                            </ul>
                                                            <p class="card-text text-center mt-auto">
                                                                <a href="#"
                                                                    class="btn btn-outline-primary btn-sm">{{ __('index.research_contract') }}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>


                                    @php
                                        $hr_staff = [
                                            [
                                                'image' => '4.1.jpg',
                                                'email' => '-',
                                                'key' => 'hr_staff_1',
                                            ],
                                            [
                                                'image' => '4.2.jpg',
                                                'email' => '-',
                                                'key' => 'hr_staff_2',
                                            ],
                                            [
                                                'image' => '4.3.jpg',
                                                'email' => '-',
                                                'key' => 'hr_staff_3',
                                            ],
                                            [
                                                'image' => '4.4.jpg',
                                                'email' => '-',
                                                'key' => 'hr_staff_4',
                                            ],
                                        ];
                                    @endphp

                                    <div class="tab-pane fade" id="HR_staff" role="tabpanel"
                                        aria-labelledby="HR_staff-tab">
                                        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-start">
                                            @foreach ($hr_staff as $person)
                                                <div class="col">
                                                    <div class="card shadow-sm h-100 d-flex flex-column w-auto"
                                                        style="max-width: 100%;">
                                                        <img src="{{ asset('template/assets/img/about/' . $person['image']) }}"
                                                            class="card-img-top mx-auto d-block"
                                                            alt="{{ __('index.' . $person['key'] . '.name') }}"
                                                            style="width: 14rem; height: auto;">
                                                        <div class="card-body d-flex flex-column">
                                                            <h5 class="card-title text-center">
                                                                {{ __('index.' . $person['key'] . '.name') }}</h5>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.position') }}:</strong>
                                                                {{ __('index.' . $person['key'] . '.position') }}
                                                            </p>
                                                            <p class="card-text mb-1">
                                                                <strong>E-Mail:</strong>
                                                                @if ($person['email'] !== '-')
                                                                    <a
                                                                        href="mailto:{{ $person['email'] }}">{{ $person['email'] }}</a>
                                                                @else
                                                                    <span class="text-muted">-</span>
                                                                @endif
                                                            </p>
                                                            <hr>
                                                            <p class="card-text mb-1">
                                                                <strong>{{ __('index.education') }}:</strong>
                                                            </p>
                                                            <ul class="ps-3 mb-1">
                                                                @foreach (__('index.' . $person['key'] . '.degrees') as $degree)
                                                                    <li>{{ $degree }}</li>
                                                                @endforeach
                                                            </ul>
                                                            <p class="card-text text-center mt-auto">
                                                                <a href="#"
                                                                    class="btn btn-outline-primary btn-sm">{{ __('index.research_contract') }}</a>
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
                </div>


                <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-header bg-info text-white">
                                        <i class="bi bi-building me-2"></i>
                                        {{ __('index.location_title') }}
                                    </div>
                                    <div class="card-body">
                                        <p>{{ __('index.university_name') }}</p>
                                        <p>{{ __('index.address_th') }}</p>
                                        <p>{{ __('index.address_en') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-header bg-info text-white">
                                        <i class="bi bi-telephone-fill me-2"></i>
                                        {{ __('index.admin_structure') }}
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li><strong>{{ __('index.tel') }}:</strong> 086-4403210
                                            </li>
                                            <li><strong>{{ __('index.fax') }}:</strong> 039-471417</li>
                                            <li><strong>{{ __('index.email') }}:</strong>
                                                <a href="mailto:law@rbru.ac.th">law@rbru.ac.th</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

@endsection
