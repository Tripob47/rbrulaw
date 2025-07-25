@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')

    <!-- Hero Section -->
    <!-- Slide Carousel Full Width -->
    <div class="position-relative" style="background-color: aqua;">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="d-block w-100"
                        style="height:600px; object-fit:cover;" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('template/assets/img/events-item-1.jpg') }}" class="d-block w-100"
                        style="height:600px; object-fit:cover;" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('template/assets/img/events-item-2.jpg') }}" class="d-block w-100"
                        style="height:600px; object-fit:cover;" alt="Slide 3">
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <!-- Main Content + Sidebar Layout -->
    <div class="row">

        <!-- Main Content -->

        <!-- Faculty Info -->
        {{-- <section id="counts" class="section counts light-background mb-4">
                <div data-aos="fade-up">
                    <h1>{{ __('index.faculty_name') }}</h1>
                </div>
            </section> --}}
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/zSkSv_Oh4ZM"
                                title="คณะนิติศาสตร์ มหาวิทยาลัยราชภัฏรำไพพรรณี" allowfullscreen
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" frameborder="0">
                            </iframe>
                        </div>
                    </div>


                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h1>{{ __('index.faculty_name') }}</h1>
                        <p class="fst-italic">
                        <h4>นิติล้ำเลิศ ก่อเกิดบัณฑิต มีจิตคุณธรรม</h4>
                        </p>
                        <ul>
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex justify-content-between align-items-center border-bottom pb-2">
                                    <h6>หลักสูตร ปริญญาตรี</h6>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        ดูรายละเอียด
                                    </a>
                                </li>
                                <li class="mb-2 d-flex justify-content-between align-items-center border-bottom pb-2">
                                    <h6>หลักสูตร ปริญญาโท</h6>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        ดูรายละเอียด
                                    </a>
                                </li>
                            </ul>

                            {{-- <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                            storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li> --}}
                        </ul>
                        <div class="text-center">
                            <a href="#" class="btn text-dark fw-bold me-2 mb-2" style="background-color: #FFDE63;">
                                <i class="bi bi-camera-video-fill me-1"></i> VDO
                            </a>

                            <a href="#" class="btn text-dark  fw-bold me-2 mb-2" style="background-color: #F8F3CE;">
                                <i class="bi bi-cloud-arrow-down-fill me-1"></i> โบชัวร์คณะ
                            </a>

                            <a href="#" class="btn text-dark   fw-bold me-2 mb-2" style="background-color: #FFB4B4;">
                                <i class="bi bi-youtube me-1"></i> Law Channel
                            </a>


                            <a href="#" class="btn text-dark  fw-bold mb-2" style="background-color: #D7D7D7;">
                                <i class="bi bi-shield-check me-1"></i> การประกันคุณภาพ
                            </a>
                        </div>



                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Nav Tabs -->

        <div>
            <section id="about" class="py-5" style="background-color:#CACACA; width: 100%;">
                <!-- Nav Tabs -->
                <div class="container">
                    <ul class="nav nav-tabs fs-5 gap-3 mb-3" id="newsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="activities-tab" data-bs-toggle="tab"
                                data-bs-target="#activities" type="button" role="tab" aria-controls="activities"
                                aria-selected="true">
                                {{ __('index.news_activities') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seminar-tab" data-bs-toggle="tab" data-bs-target="#seminar"
                                type="button" role="tab" aria-controls="seminar" aria-selected="false">
                                {{ __('index.news_seminar') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="job-tab" data-bs-toggle="tab" data-bs-target="#job"
                                type="button" role="tab" aria-controls="job" aria-selected="false">
                                {{ __('index.news_job') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="procurement-tab" data-bs-toggle="tab"
                                data-bs-target="#procurement" type="button" role="tab" aria-controls="procurement"
                                aria-selected="false">
                                {{ __('index.news_procurement') }}
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Contents -->
                    <div class="tab-content" id="newsTabContent">
                        <!-- กิจกรรม -->
                        <div class="tab-pane fade show active" id="activities" role="tabpanel"
                            aria-labelledby="activities-tab" tabindex="0">
                            <div class="row">
                                @for ($i = 0; $i < 6; $i++)
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                                        data-aos-delay="100">
                                        <div class="course-item">
                                            <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="img-fluid"
                                                alt="">
                                            <div class="course-content">
                                                <h3><a href="#">กิจกรรม {{ $i + 1 }}</a></h3>
                                                <p>รายละเอียดกิจกรรมที่ {{ $i + 1 }} ที่น่าสนใจ
                                                    และเกี่ยวข้องกับนักศึกษา.</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- สัมมนา -->
                        <div class="tab-pane fade" id="seminar" role="tabpanel" aria-labelledby="seminar-tab"
                            tabindex="0">
                            <div class="row">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                                        data-aos-delay="100">
                                        <div class="course-item">
                                            <img src="{{ asset('template/assets/img/course-2.jpg') }}" class="img-fluid"
                                                alt="">
                                            <div class="course-content">
                                                <h3><a href="#">สัมมนา {{ $i + 1 }}</a></h3>
                                                <p>รายละเอียดสัมมนาที่น่าสนใจ เช่น กฎหมายหรือการพัฒนาวิชาชีพ.</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- รับสมัครงาน -->
                        <div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="job-tab"
                            tabindex="0">
                            <div class="row">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                                        data-aos-delay="100">
                                        <div class="course-item">
                                            <img src="{{ asset('template/assets/img/course-3.jpg') }}" class="img-fluid"
                                                alt="">
                                            <div class="course-content">
                                                <h3><a href="#">รับสมัครงาน {{ $i + 1 }}</a></h3>
                                                <p>ประกาศรับสมัครงานในสายกฎหมาย หรืองานราชการต่างๆ.</p>

                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- จัดซื้อจัดจ้าง -->
                        <div class="tab-pane fade" id="procurement" role="tabpanel" aria-labelledby="procurement-tab"
                            tabindex="0">
                            <div class="row">
                                @for ($i = 0; $i < 2; $i++)
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                                        data-aos-delay="100">
                                        <div class="course-item">
                                            <img src="{{ asset('template/assets/img/course-4.jpg') }}" class="img-fluid"
                                                alt="">
                                            <div class="course-content">
                                                <h3><a href="#">จัดซื้อจัดจ้าง {{ $i + 1 }}</a></h3>
                                                <p>ประกาศจัดซื้อจัดจ้างจากหน่วยงานคณะนิติศาสตร์.</p>
                                               
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trainers -->
            <section id="trainers-index" class="section trainers-index mt-4">
                <div class="container">
                    <div class="row d-flex flex-row"> <!-- แนวนอนตลอด -->

                        <!-- ซ้าย: Carousel -->
                        <div class="col-6" data-aos="fade-up" data-aos-delay="300">
                            <h1 class="mb-4">{{ __('index.activities') }}</h1>
                            <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0"
                                        class="active"></button>
                                    <button type="button" data-bs-target="#carouselExample"
                                        data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#carouselExample"
                                        data-bs-slide-to="2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('template/assets/img/hero-bg.jpg') }}" class="d-block w-100"
                                            alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('template/assets/img/events-item-1.jpg') }}"
                                            class="d-block w-100" alt="Slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('template/assets/img/events-item-2.jpg') }}"
                                            class="d-block w-100" alt="Slide 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <a href="#" class="btn text-dark fw-bold me-2 mb-2"
                                    style="background-color: #FFDE63;">
                                    <i class=""></i> {{ __('index.more') }}
                                </a>
                            </div>
                        </div>

                        <!-- ขวา: MOU -->
                        <div class="col-6 " data-aos="fade-up" data-aos-delay="300">
                            <h1 class="mb-4">{{ __('index.Cooperate') }}</h1>
                            <ul class="list-unstyled mou-list">
                                <li>
                                    <a href="https://www.law.rbru.ac.th/sar63/mou02.pdf" target="_blank">
                                        สํานักงานศาลปกครอง ทําบันทึกข้อตกลง (MOU) ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.law.rbru.ac.th/sar63/mou01.pdf" target="_blank">
                                        สํานักงานศาลรัฐธรรมนูญ ทําบันทึกข้อตกลง (MOU) ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.law.rbru.ac.th/sar66/mou1_66.pdf" target="_blank">
                                        สำนักงานคณะกรรมการคุ้มครองผู้บริโภค ทําบันทึกข้อตกลง (MOU)
                                        ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>






            <!-- Sidebar -->

        </div>

    @endsection
