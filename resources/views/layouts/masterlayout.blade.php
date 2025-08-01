<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Law Faculty')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">



    <!-- อื่น ๆ เช่น Bootstrap, app.css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- Other Vendor CSS -->
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('template/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">



    @stack('styles')

</head>

</head>

<body>

    @include('components.navbar')

    <!-- Main Content -->
    <main class="">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <div class="container-fluid py-4" style="background-color: #DDDAD0;">
        <div class="container d-flex justify-content-center">
            <div class="row w-100 justify-content-between" style="max-width: 1200px;">
                <!-- Carousel -->
                <div class="col-12 d-none d-md-block">
                    <!-- (Carousel เนื้อหา) -->
                </div>

                <!-- Websites -->
                <div class="col-6 col-md-3">

                    <h5>เว็บไซต์ที่เกี่ยวข้อง</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-muted">
                                <h6>ข้อมูลติดต่อคณะนิติศาสตร์</h6>
                            </a></li>
                        <li><a class="text-muted">โทรศัพย์ : 09843xxxx</a></li>
                        <li><a class="text-muted" href="#">
                                <h6>Follow us : นิติ</h6>
                            </a></li>
                        <div class="d-flex gap-3">
                            <a href="https://www.facebook.com/yourpage" target="_blank" class="text-primary fs-4">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/yourchannel" target="_blank" class="text-danger fs-4">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a href="https://www.instagram.com/youraccount" target="_blank" class="text-danger fs-4">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="mailto:info@example.com" class="text-dark fs-4">
                                <i class="bi bi-envelope-fill"></i>
                            </a>
                        </div>
                        <br>
                        <h5>เว็บไซต์มหาวิทยาลัย</h5>
                        <li><a class="text-muted"
                                href="https://www.rbru.ac.th/rbru-title/index.php">มหาวิทยาลัยราชภัฏรำไพพรรณี</a></li>

                    </ul>

                </div>

                <!-- Related Departments -->
                <div class="col-6 col-md-3">
                    <h5>หน่วยงานที่เกี่ยวข้อง</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-muted" href="https://www.facebook.com/565859993519315/">สโมสร
                                คณะนิติศาสตร์</a></li>
                        <li><a class="text-muted"
                                href="https://www.facebook.com/685807988286256/photos/814741782059542/">วิชาการ
                                คณะนิติศาสตร์</a></li>
                        <li><a class="text-muted"
                                href="https://www.facebook.com/1518998248202258/photos/a.1566779926757423/1616028728499209/">ศิษย์เก่า
                                คณะนิติศาสตร์</a></li>
                        <!-- Follow Us -->


                    </ul>
                </div>

                <!-- Map -->
                <div class="col-12 col-md-3 ms-md-auto mt-4 mt-md-0">
                    <h5>แผนที่</h5>
                    <div class="text-md-end">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1946.381477254082!2d102.1055742161645!3d12.66354147358423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3104836d7aa27027%3A0xc17fd9cfcf9773e4!2z4LiE4LiT4Liw4LiZ4Li04LiV4Li04Lio4Liy4Liq4LiV4Lij4LmMIOC4reC4suC4hOC4suC4o-C5gOC4o-C4teC4ouC4meC4o-C4p-C4oSAo4LiV4Li24LiBIDEwKQ!5e0!3m2!1sth!2sus!4v1753758980006!5m2!1sth!2sus"
                            width="260" height="160" frameborder="0" style="border:0;" allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} คณะนิติศาสตร์. สงวนลิขสิทธิ์
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Init -->
    <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>

    @stack('scripts')
    <!-- Bootstrap 5 JS + Popper -->



</body>

</html>