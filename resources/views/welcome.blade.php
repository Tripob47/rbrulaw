@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')

<!-- Hero Section -->
<div class="position-relative">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="d-block w-100 img-fluid"
                    style="max-height: 600px; object-fit: cover;" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('template/assets/img/events-item-1.jpg') }}" class="d-block w-100 img-fluid"
                    style="max-height: 600px; object-fit: cover;" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('template/assets/img/events-item-2.jpg') }}" class="d-block w-100 img-fluid"
                    style="max-height: 600px; object-fit: cover;" alt="Slide 3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Faculty Info Section -->
<section id="about" class="about section py-5">
    <div class="container">
        <div class="row gy-4">
            <!-- Video -->
            <div class="col-12 col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zSkSv_Oh4ZM"
                        title="คณะนิติศาสตร์ มหาวิทยาลัยราชภัฏรำไพพรรณี" allowfullscreen
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" frameborder="0">
                    </iframe>
                </div>
            </div>

            <!-- Info -->
            <div class="col-12 col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h2 class="fw-bold">{{ __('index.faculty_name') }}</h2>
                <h5 class="text-secondary mb-3">นิติล้ำเลิศ ก่อเกิดบัณฑิต มีจิตคุณธรรม</h5>

                <ul class="list-unstyled">
                    <li class="mb-3 d-flex justify-content-between align-items-center border-bottom pb-2">
                        <h6 class="mb-0">หลักสูตร ปริญญาตรี</h6>
                        <a href="#" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</a>
                    </li>
                    <li class="mb-3 d-flex justify-content-between align-items-center border-bottom pb-2">
                        <h6 class="mb-0">หลักสูตร ปริญญาโท</h6>
                        <a href="#" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</a>
                    </li>
                </ul>

                <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                    <a href="#" class="btn text-dark fw-bold" style="background-color: #FFDE63;">
                        <i class="bi bi-camera-video-fill me-1"></i> VDO
                    </a>
                    <a href="#" class="btn text-dark fw-bold" style="background-color: #F8F3CE;">
                        <i class="bi bi-cloud-arrow-down-fill me-1"></i> โบชัวร์คณะ
                    </a>
                    <a href="#" class="btn text-dark fw-bold" style="background-color: #FFB4B4;">
                        <i class="bi bi-youtube me-1"></i> Law Channel
                    </a>
                    <a href="#" class="btn text-dark fw-bold" style="background-color: #D7D7D7;">
                        <i class="bi bi-shield-check me-1"></i> การประกันคุณภาพ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5" style="background-color:#CACACA;">
    <div class="container">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs flex-wrap fs-5 gap-2 mb-4" id="newsTab" role="tablist">
            @php
                $tabs = [
                    'activities' => 'index.news_activities',
                    'seminar' => 'index.news_seminar',
                    'job' => 'index.news_job',
                    'procurement' => 'index.news_procurement'
                ];
            @endphp
            @foreach ($tabs as $id => $label)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $id }}-tab"
                        data-bs-toggle="tab" data-bs-target="#{{ $id }}" type="button" role="tab"
                        aria-controls="{{ $id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        {{ __($label) }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tab Contents -->
        <div class="tab-content" id="newsTabContent">
            @foreach ($tabs as $id => $label)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $id }}" role="tabpanel"
                    aria-labelledby="{{ $id }}-tab">
                    <div class="row">
                        @php
                            $itemCount = ['activities' => 6, 'seminar' => 4, 'job' => 3, 'procurement' => 2][$id];
                        @endphp
                        @for ($i = 0; $i < $itemCount; $i++)
                            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="card shadow-sm border-0 w-100 h-100">
                                    <img src="{{ asset('template/assets/img/course-' . ($loop->index + 1) . '.jpg') }}"
                                        class="card-img-top img-fluid" alt="">
                                    <div class="card-body text-start">
                                        <h5 class="card-title mb-0">
                                            {{ __('index.' . $id) }} {{ $i + 1 }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Carousel + MOU Section -->
<section id="trainers-index" class="section trainers-index mt-4">
    <div class="container">
        <div class="row gy-4">
            <!-- Left: Carousel -->
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <h2 class="mb-4">{{ __('index.activities') }}</h2>
                <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('template/assets/img/hero-bg.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('template/assets/img/events-item-1.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('template/assets/img/events-item-2.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn text-dark fw-bold" style="background-color: #FFDE63;">
                        {{ __('index.more') }}
                    </a>
                </div>
            </div>

            <!-- Right: MOU -->
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <h2 class="mb-3">{{ __('index.Cooperate') }}</h2>
                <ul class="list-unstyled small">
                    <li class="mb-3">
                        <a href="https://www.law.rbru.ac.th/sar63/mou02.pdf" target="_blank">
                            สํานักงานศาลปกครอง ทำบันทึกข้อตกลงร่วมกับมหาวิทยาลัยราชภัฏรำไพพรรณี
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="https://www.law.rbru.ac.th/sar63/mou01.pdf" target="_blank">
                            สํานักงานศาลรัฐธรรมนูญ ทำบันทึกข้อตกลงร่วมกับมหาวิทยาลัยราชภัฏรำไพพรรณี
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="https://www.law.rbru.ac.th/sar66/mou1_66.pdf" target="_blank">
                            สำนักงานคณะกรรมการคุ้มครองผู้บริโภค ทำบันทึกข้อตกลงร่วมกับมหาวิทยาลัยราชภัฏรำไพพรรณี
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
