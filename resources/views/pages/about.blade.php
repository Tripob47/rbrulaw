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
                                        คณบดีคณะนิติศาสตร์
                                    </div>
                                    <div class="card-body">
                                        {{-- รูปอยู่บนสุด --}}
                                        <img src="{{ asset('template/assets/img/about/1.png') }}" alt="Dean"
                                            class="img-fluid rounded mb-3 mx-auto d-block"
                                            style="width: 180px; height: 180px; object-fit: contain;>

                                            <h5 class="card-title">อาจารย์ทรัพยสิทธิ์
                                        เกิดในมงคล</h5>
                                        <p class="card-text fw-bold">คณบดีคณะนิติศาสตร์</p>
                                        <hr>
                                        <ul class="list-unstyled text-start small">
                                            <li><i class="bi bi-mortarboard-fill me-2 text-primary"></i>นิติศาสตร์มหาบัณฑิต
                                                (น.ม) มหาวิทยาลัยรามคำแหง</li>
                                            <li><i class="bi bi-mortarboard-fill me-2 text-primary"></i>นิติศาสตร์บัณฑิต
                                                (น.บ) มหาวิทยาลัยสุโขทัยธรรมาธิราช</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- แท็บเมนูซ้าย --}}
                        <div class="row">
                            <div class="col-md-4">
                                <nav class="nav nav-pills flex-column text-start gap-2">
                                    <button class="btn btn-outline-primary w-100 active" id="HR_board-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_board" type="button" role="tab"
                                        aria-controls="HR_board" aria-selected="true">โครงสร้างผู้บริหาร</button>

                                    <button class="btn btn-outline-primary w-100" id="HR_instructor_law-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_instructor_law" type="button"
                                        role="tab" aria-controls="HR_instructor_law"
                                        aria-selected="false">คณาจารย์คณะนิติศาสตร์</button>

                                    <button class="btn btn-outline-primary w-100" id="HR_instructor_HR-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_instructor_HR" type="button"
                                        role="tab" aria-controls="HR_instructor_HR"
                                        aria-selected="false">อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรบัณฑิต</button>

                                    <button class="btn btn-outline-primary w-100" id="HR_instructor_HR2-tab"
                                        data-bs-toggle="tab" data-bs-target="#HR_instructor_HR2" type="button"
                                        role="tab" aria-controls="HR_instructor_HR2"
                                        aria-selected="false">อาจารย์ผู้รับผิดชอบหลักสูตรนิติศาสตรมหาบัณฑิต</button>

                                    <button class="btn btn-outline-primary w-100" id="HR_staff-tab" data-bs-toggle="tab"
                                        data-bs-target="#HR_staff" type="button" role="tab"
                                        aria-controls="HR_staff" aria-selected="false">บุคลากรสายสนับสนุน</button>
                                </nav>
                            </div>

                            {{-- การ์ดแสดงข้อมูลขวา (2 คอลัมน์) --}}
                            <div class="col-md-8">
                                <div class="row g-4 justify-content-start">
                                    {{-- การ์ด 2 อันแถวแรก --}}
                                    <div class="col-md-6 col-lg-6">
                                        <div class="card shadow-sm h-100 text-center">
                                            <img src="{{ asset('template/assets/img/about/2.png') }}" alt="อ.ชญานาภา"
                                                class="card-img-top rounded mx-auto d-block"
                                                style="width: auto; max-width: 100%; height: 180px; object-fit: contain;">
                                            <div class="card-body">
                                                <h6 class="fw-bold mb-1">ผศ. กุลปราณี กุลวิทิต</h6>
                                                <p class="mb-1"><strong>ตำแหน่ง:</strong>
                                                    รองคณบดีฝ่ายบริหารและกิจการนักศึกษา</p>
                                                <p class="mb-1"><strong>E-Mail:</strong> <a
                                                        href="mailto:kulpranee.s@rbru.ac.th">kulpranee.s@rbru.ac.th</a></p>
                                                <ul class="mb-0 small list-unstyled text-start mx-auto"
                                                    style="max-width: 280px;">
                                                    <li>นิติศาสตรบัณฑิต (น.บ.) มหาวิทยาลัยราชภัฏรำไพพรรณี</li>
                                                    <li>นิติศาสตรมหาบัณฑิต (น.ม.) สาขากฎหมายมหาชน มหาวิทยาลัยศรีปทุม</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="card shadow-sm h-100 text-center">
                                            <img src="{{ asset('template/assets/img/about/3.3.jpg') }}" alt="อ.ชญานาภา"
                                                class="card-img-top rounded mx-auto d-block"
                                                style="width: auto; max-width: 100%; height: 180px; object-fit: contain;">
                                            <div class="card-body">
                                                <h6 class="fw-bold mb-1">อาจารย์ ชญานาภา ลมัยวงษ์</h6>
                                                <p class="mb-1"><strong>ตำแหน่ง:</strong> รองคณบดีฝ่ายบริการวิชาการ</p>
                                                <p class="mb-1"><strong>E-Mail:</strong> <a
                                                        href="mailto:sky_orchid@hotmail.com">sky_orchid@hotmail.com</a></p>
                                                <ul class="mb-0 small list-unstyled text-start mx-auto"
                                                    style="max-width: 280px;">
                                                    <li>นิติศาสตรบัณฑิต (น.บ.) เกียรตินิยมอันดับ 2 มหาวิทยาลัยธรรมศาสตร์
                                                    </li>
                                                    <li>นิติศาสตรมหาบัณฑิต (น.ม.) กฎหมายธุรกิจ (ภาคภาษาอังกฤษ) ม.ธรรมศาสตร์
                                                    </li>
                                                    <li>เนติบัณฑิตไทย (นบท.) สำนักอบรมศึกษากฎหมายแห่งเนติบัณฑิตยสภา</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- สถานที่ตั้ง -->
                                    <div class="tab-pane fade" id="location" role="tabpanel"
                                        aria-labelledby="location-tab">
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
                                                            <li><strong>{{ __('index.tel') }}:</strong> 086-4403210</li>
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

                                </div> <!-- end tab content -->
                            </div> <!-- end container -->
    </section>

@endsection
