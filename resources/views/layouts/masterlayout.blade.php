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

<body>

    @include('components.navbar')

    <!-- Main Content -->
    <main class="my-4">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <div class="container-fluid bg-light py-4">
        <div class="row">
            <!-- Carousel -->
            <div class="col-12 col-md-3 d-none d-md-block">
                
            </div>

            <!-- Websites -->
            <div class="col-6 col-md-3">
                <h5>เว็บไซต์ที่เกี่ยวข้อง</h5>
                <ul class="list-unstyled">
                    <li><a class="text-muted"
                            href="https://www.rbru.ac.th/rbru-title/index.php">มหาวิทยาลัยราชภัฏรำไพพรรณี</a></li>
                    <li><a class="text-muted" href="#">.....</a></li>
                </ul>
            </div>

            <!-- Related Departments -->
            <div class="col-6 col-md-3">
                <h5>หน่วยงานที่เกี่ยวข้อง</h5>
                <ul class="list-unstyled">
                    <li><a class="text-muted" href="https://www.facebook.com/565859993519315/">สโมสร คณะนิติศาสตร์</a>
                    </li>
                    <li><a class="text-muted"
                            href="https://www.facebook.com/685807988286256/photos/814741782059542/">วิชาการ
                            คณะนิติศาสตร์</a></li>
                    <li><a class="text-muted"
                            href="https://www.facebook.com/1518998248202258/photos/a.1566779926757423/1616028728499209/">ศิษย์เก่า
                            คณะนิติศาสตร์</a></li>
                </ul>
            </div>

            <!-- Map -->
            <div class="col-12 col-md-3">
                <h5>แผนที่</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.742855704637!2d102.10150901481882!3d12.664857991057625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310482f7e183187f%3A0xdcafb204e364bb28!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lij4Liz4LmE4Lie4Lie4Lij4Lij4LiT4Li1!5e0!3m2!1sth!2sth!4v1551853012498"
                    width="260" height="160" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
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
</body>

</html>
