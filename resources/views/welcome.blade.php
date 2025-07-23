@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background position-relative">
    <!-- Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('template/assets/img/events-item-1.jpg') }}" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('template/assets/img/events-item-2.jpg') }}" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Slide 3">
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
        <div class="col-lg-9">
            <!-- Faculty Info -->
            <section id="counts" class="section counts light-background mb-4">
                <div data-aos="fade-up">
                    <h1>{{ __('index.faculty_name') }}</h1>
                </div>
            </section>

            <!-- Nav Tabs -->
            <section id="courses" class="courses section">
                <nav id="navmenu1" class="navmenu mb-4">
                    <ul>
                        <li><a href="#">{{ __('index.news_activities') }}</a></li>
                        <li><a href="#">{{ __('index.news_seminar') }}</a></li>
                        <li><a href="#">{{ __('index.news_job') }}</a></li>
                        <li><a href="#">{{ __('index.news_procurement') }}</a></li>
                    </ul>
                </nav>

                <!-- Popular Courses -->
                <div class="section-title mb-4" data-aos="fade-up">
                    <p>Popular Courses</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="img-fluid" alt="">
                            <div class="course-content">
                                <h3><a href="course-details.html">Website Design</a></h3>
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                                <p class="category">more</p>
                                <div class="trainer d-flex justify-content-between align-items-center mt-2">
                                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trainers -->
            <section id="trainers-index" class="section trainers-index mt-4">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-3 col-md-12 mt-4 mt-lg-0">
            <div class="text-center mb-3">
                <img src="{{ asset('images/logo_lawnew62.png') }}" class="img-fluid rounded" alt="Faculty Logo" width="50%">
            </div>

            <a href="{{ url('hotline/index.php?lang=' . request()->get('lang') . '&pg=Dean_hotline') }}" class="d-block mb-3">
                <div class="card">
                    <img src="{{ asset('images/hotline_law03.png') }}" class="card-img-top" alt="สายตรงคณบดี">
                </div>
            </a>

            <div class="embed-responsive embed-responsive-16by9 d-none d-md-block mb-2">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zSkSv_Oh4ZM" allowfullscreen></iframe>
            </div>

            <p class="text-muted text-center d-none d-md-block">นิติล้ำเลิศ ก่อเกิดบัณฑิต มีจิตคุณธรรม</p>

            <a href="#" class="btn btn-warning btn-sm btn-block mb-1" data-toggle="modal" data-target="#fms_VDO">
                <i class="fa fa-video-camera"></i> VDO
            </a>

            <a href="https://youtu.be/zSkSv_Oh4ZM" target="_blank" class="btn btn-danger btn-sm btn-block mb-1">
                <i class="fa fa-youtube-play"></i> Law Channel
            </a>

            <a href="{{ asset('form_download/present_law.pdf') }}" class="btn btn-info btn-sm btn-block mb-1">
                <i class="fa fa-cloud-download"></i> โบชัวร์คณะ
            </a>

            <a href="{{ url('law.php?ac=about_QA') }}" target="_blank" class="btn btn-primary btn-sm btn-block mb-1">
                การประกันคุณภาพ
            </a>

            <div class="mt-3">
                <a href="{{ asset('certificate/certificate.pdf') }}" target="_blank" class="d-block border mb-2 text-center">
                    <img src="{{ asset('images/iso/law_iso.jpg') }}" class="img-fluid mb-1" alt="">
                    หนังสือรับรองหลักสูตร โดย เนติบัณฑิต
                </a>
                <a href="{{ asset('images/iso/lawyer.png') }}" target="_blank" class="d-block border mb-2 text-center">
                    <img src="{{ asset('images/iso/lawyer.png') }}" class="img-fluid mb-1" alt="">
                    หนังสือรับรองหลักสูตร โดย สภาทนาย
                </a>
            </div>

            <!-- MOU -->
            <div class="mt-3">
                @php
                    $mous = [
                        ['file' => 'sar63/mou02.pdf', 'img' => 'images/mou/mou1.jpg', 'title' => 'ศาลรัฐธรรมนูญ'],
                        ['file' => 'sar63/mou01.pdf', 'img' => 'images/mou/Law_Slise55.jpg', 'title' => 'ศาลปกครอง'],
                        ['file' => 'sar66/mou1_66.pdf', 'img' => 'images/mou/mou3.jpg', 'title' => 'สำนักงานคุ้มครองผู้บริโภค'],
                    ];
                @endphp
                @foreach ($mous as $mou)
                    <a href="{{ asset($mou['file']) }}" target="_blank" class="btn btn-outline-primary btn-sm btn-block mb-2 text-left">
                        <h6 class="mb-1">MOU</h6>
                        <small>{{ $mou['title'] }}</small>
                        <img src="{{ asset($mou['img']) }}" class="img-fluid mt-2" alt="">
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection
