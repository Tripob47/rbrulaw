@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background position-relative">
        <!-- Carousel -->
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
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
        </div>

        <!-- Text & Button -->
        <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
            <h2 data-aos="fade-up">Learning Today,<br>Leading Tomorrow</h2>
            <p data-aos="fade-up" data-aos-delay="100">We are team of talented designers making websites with Bootstrap</p>
            <div class="mt-4" data-aos="fade-up" data-aos-delay="200">
                <a href="courses.html" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Main Content + Sidebar Layout -->
    <div class="container my-5">
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
                            <h3>นิติล้ำเลิศ ก่อเกิดบัณฑิต มีจิตคุณธรรม</h3>
                            </p>
                            <ul>
                                <ul class="list-unstyled">
                                    <li class="mb-2 d-flex justify-content-between align-items-center border-bottom pb-2">
                                        <span>📘 หนังสือรับรองหลักสูตร โดย เนติบัณฑิต</span>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            ดูรายละเอียด
                                        </a>
                                    </li>
                                    <li class="mb-2 d-flex justify-content-between align-items-center border-bottom pb-2">
                                        <span>📕 หนังสือรับรองหลักสูตร โดย สภาทนาย</span>
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
                                <a href="#" class="btn btn-warning text-dark fw-bold me-2 mb-2">
                                    <i class="bi bi-camera-video-fill me-1"></i> VDO
                                </a>

                                <a href="#" class="btn btn-danger text-white fw-bold me-2 mb-2">
                                    <i class="bi bi-youtube me-1"></i> Law Channel
                                </a>

                                <a href="#" class="btn btn-info text-white fw-bold me-2 mb-2">
                                    <i class="bi bi-cloud-arrow-down-fill me-1"></i> โบชัวร์คณะ
                                </a>

                                <a href="#" class="btn btn-primary text-white fw-bold mb-2">
                                    <i class="bi bi-shield-check me-1"></i> การประกันคุณภาพ
                                </a>
                            </div>


                        </div>

                    </div>

                </div>

            </section><!-- /About Section -->

            <!-- Nav Tabs -->
            <section id="courses" class="courses section">
                <nav id="navmenu1" class="navmenu mb-4">
                    <ul class="nav fs-5 gap-3"> <!-- fs-5 = font-size ใหญ่ขึ้น -->
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('index.news_activities') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('index.news_seminar') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('index.news_job') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('index.news_procurement') }}</a></li>
                    </ul>
                </nav>


                <!-- Popular Courses -->
                <div class="section-title mb-4" data-aos="fade-up">
                    <p>{{ __('index.news') }}</p>
                </div>

                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="course-item">
                                <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="img-fluid" alt="">
                                <div class="course-content">
                                    <h3><a href="course-details.html">Website Design</a></h3>
                                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                        dolores dolorem tempore.</p>
                                    <p class="category">more</p>
                                    <div class="trainer d-flex justify-content-between align-items-center mt-2">
                                        <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </section>

            <!-- Trainers -->
            <section id="trainers-index" class="section trainers-index mt-4">
                <div class="row">
                    <h1>{{ __('index.activities') }}</h1>
                    <!-- Carousel ด้านซ้าย -->
                    <div class="col-lg-6 col-md-12 d-flex flex-column" data-aos="fade-up" data-aos-delay="300">
                        <!-- Carousel อยู่ด้านบน -->
                        <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('template/assets/img/hero-bg.jpg') }}" class="d-block w-100"
                                        alt="Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('template/assets/img/events-item-1.jpg') }}" class="d-block w-100"
                                        alt="Slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('template/assets/img/events-item-2.jpg') }}" class="d-block w-100"
                                        alt="Slide 3">
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

                        <!-- ปุ่มอยู่ด้านล่าง carousel -->
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-primary btn-lg">{{ __('index.more') }}</button>
                        </div>
                    </div>


                    <!-- เนื้อหาส่วนที่ 2 ด้านขวา -->
                    <div class="col-lg-6 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <h1>ความร่วมมือ/MOU</h1>
                            <ul>
                                <a href="#">
                                    <li>สํานักงานศาลปกครอง ทําบันทึกข้อตกลง (MOU) ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                                        โดยมีคณะนิติศาสตร์ เป็นศูนย์กลาง</li>
                                </a>
                                <br>
                                <a href="#">
                                    <li>สํานักงานศาลรัฐธรรมนูญ ทําบันทึกข้อตกลง (MOU)
                                        ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี โดยมีคณะนิติศาสตร์ เป็นศูนย์กลาง</li>
                                </a>
                                <br>
                                <a href="#">
                                    <li>สำนักงานคณะกรรมการคุ้มครองผู้บริโภค สำนักนายกรัฐมนตรี ทําบันทึกข้อตกลง (MOU)
                                        ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี โดยมีคณะนิติศาสตร์ เป็นศูนย์กลาง</li>
                                </a>
                                <br>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Sidebar -->

        </div>
    </div>

@endsection
