<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'law')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('template/assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&family=Raleway:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">


    @stack('styles')
</head>

<body>

    @include('components.navbar')

<!-- Main Content -->
<main class="my-4">
    @yield('content')
</main>
<div class="container-fluid" style="background-color:#eaeaea;">
     <br>
     <div class="col-12">
       <div class="row">
         <div class="col-12 col-md-3 d-none d-md-block ">
           <div id="myCarousel" class="carousel slide bg-inverse  ml-auto mr-auto" data-ride="carousel">
             <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1" class=""></li>
               <li data-target="#myCarousel" data-slide-to="2" class=""></li>
             </ol>

             <div class="carousel-inner" role="listbox">
               <div class="carousel-item active">
                 <img class="d-block" src="{{ asset('template\assets\img\hero-bg.jpg') }}" width="100%" alt="First slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block" src="{{ asset('template\assets\img\events-item-1.jpg') }}" width="100%" alt="Second slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block" src="{{ asset('template\assets\img\events-item-2.jpg') }}" width="100%" alt="Third slide">
               </div>
               {{-- <div class="carousel-item">
                 <img class="d-block" src="{{ asset('template\assets\img\course-details.jpg') }}" width="100%" alt="">
               </div> --}}
             </div>
             <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
           </div>

         </div>

         <div class="col-6 col-md-3">
           <h5>เว็บไซต์ที่เกี่ยวข้อง</h5>
           <ul class="list-unstyled text-small">
             <li><a class="text-muted" href="https://www.rbru.ac.th/rbru-title/index.php">มหาวิทยาลัยราชภัฏรำไพพรรณี</a></li>

             <li><a class="text-muted" href="#">.....</a></li>
           </ul>
         </div>
         <div class="col-6 col-md-3">
           <h5>หน่วยงานที่เกี่ยวข้อง</h5> 
           <ul class="list-unstyled text-small">
             <li><a class="text-muted" href="https://www.facebook.com/%E0%B8%AA%E0%B9%82%E0%B8%A1%E0%B8%AA%E0%B8%A3%E0%B8%AF%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%99%E0%B8%B4%E0%B8%95%E0%B8%B4%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-Student-Union-Education-565859993519315/?eid=ARDZyMijJRqhfiX-I-oBkC8ew5Hp3J3igfCe7Lca0SlXm-Jh6aKR5NzfAFIsC0fMEC8IlFBJDChwIE4L">สโมสร คณะนิติศาสตร์</a></li>
             <li><a class="text-muted" href="https://www.facebook.com/685807988286256/photos/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%99%E0%B8%B4%E0%B8%95%E0%B8%B4%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%A0%E0%B8%B1%E0%B8%8F%E0%B8%A3%E0%B8%B3%E0%B9%84%E0%B8%9E%E0%B8%9E%E0%B8%A3%E0%B8%A3%E0%B8%93%E0%B8%B5-%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%A8%E0%B8%B4%E0%B8%A9%E0%B8%A2%E0%B9%8C%E0%B9%80%E0%B8%81%E0%B9%88%E0%B8%B2%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%AA%E0%B8%99%E0%B9%83%E0%B8%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%A0%E0%B8%B2%E0%B8%84%E0%B8%84/814741782059542/">วิชาการ คณะนิติศาสตร์</a></li>
             <li><a class="text-muted" href="https://www.facebook.com/1518998248202258/photos/a.1566779926757423/1616028728499209/?type=3">ศิษย์เก่า คณะนิติศาสตร์</a></li>
             <li><a class="text-muted" href="#">.....</a></li>
             <li><a class="text-muted" href="#">.....</a></li>
           </ul>
         </div>
         <div class="col-6 col-md-3">
           <h5>แผนที่</h5>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.742855704637!2d102.10150901481882!3d12.664857991057625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310482f7e183187f%3A0xdcafb204e364bb28!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lij4Liz4LmE4Lie4Lie4Lij4Lij4LiT4Li1!5e0!3m2!1sth!2sth!4v1551853012498" width="260" height="160" frameborder="0" style="border:0" allowfullscreen=""></iframe>
         </div>

       </div><br>
     </div>
   </div>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} MySite. All rights reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

    <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
<script>
  AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
