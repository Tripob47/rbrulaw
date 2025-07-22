 <header id="header" class="header d-flex align-items-center sticky-top">
     <div class="container-fluid container-xl position-relative d-flex align-items-center">

         <a href="/" class="logo d-flex align-items-center me-auto">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.png" alt=""> -->
             <h1 class="sitename">คณะนิติศาสตร์</h1>
         </a>

         <nav id="navmenu" class="navmenu">
             <ul>
                 <li><a href="/" class="active">เกี่ยวกับคณะ<br></a></li>
                 <li><a href="/about">หลักสูตรคณะนิติศาสตร์</a></li>
                 <li><a href="#">งานประกันคุณภาพ</a></li>
                 <li><a href="#">บทความ/งานวิจัย</a></li>
                 <li><a href="#">งานวิชาการ</a></li>
                 <li><a href="#">ศิษย์เก่า</a></li>
                 <li class="dropdown"><a href="#"><span>สายตรงคณบดี</span> <i
                             class="bi bi-chevron-down toggle-dropdown"></i></a>
                     <ul>
                         <li><a href="#">Dropdown 1</a></li>
                         <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                     class="bi bi-chevron-down toggle-dropdown"></i></a>
                             <ul>
                                 <li><a href="#">Deep Dropdown 1</a></li>
                                 <li><a href="#">Deep Dropdown 2</a></li>
                                 <li><a href="#">Deep Dropdown 3</a></li>
                                 <li><a href="#">Deep Dropdown 4</a></li>
                                 <li><a href="#">Deep Dropdown 5</a></li>
                             </ul>
                         </li>
                         <li><a href="#">Dropdown 2</a></li>
                         <li><a href="#">Dropdown 3</a></li>
                         <li><a href="#">Dropdown 4</a></li>
                     </ul>
                 </li>
                 {{-- <li><a href="contact.html">Contact</a></li> --}}
             </ul>
             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>
         <div class="dropdown text-end p-2">
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        🌐 {{ strtoupper(app()->getLocale()) }}
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'th']) }}">🇹🇭 ไทย</a></li>
        <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a></li>
    </ul>

 </header>
