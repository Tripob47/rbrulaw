@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
    <!-- สไลด์รูปภาพพื้นหลัง -->
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

    <!-- ข้อความและปุ่ม -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
        <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
        <p data-aos="fade-up" data-aos-delay="200">
            We are team of talented designers making websites with Bootstrap
        </p>
        <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="courses.html" class="btn btn-primary">Get Started</a>
        </div>
    </div>
</section>

    <section id="counts" class="section counts light-background">

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <h1>{{ __('index.law') }}</h1>

            </div>

        </div>

    </section>
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Courses</h2>
            <p>Popular Courses</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="course-item">
                        <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <h3><a href="course-details.html">Website Design</a></h3>
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere
                                quia quae dolores dolorem tempore.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">more</p>
                            </div>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->



            </div>

        </div>

    </section>
    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

        <div class="container">

            <div class="row">



                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('template/assets/img/course-1.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro
                                des clara
                            </h4>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Trainers Index Section -->
    <section>
        <h1>{{ __('index.welcome') }}</h1>
        <p>{{ __('index.about') }}</p>
        <p>{{ __('index.contact') }}</p>
    </section>

@endsection
