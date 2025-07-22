 <header id="header" class="header d-flex align-items-center sticky-top">
     <div class="container-fluid container-xl position-relative d-flex align-items-center">

         <a href="/" class="logo d-flex align-items-center me-auto">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.png" alt=""> -->
             <h1 class="sitename">คณะนิติศาสตร์</h1>
         </a>

         <nav id="navmenu" class="navmenu">
             <ul>
                 <li><a href="/">
                         <p>{{ __('index.about') }}</p><br>
                     </a></li>
                 <li><a href="/about">{{ __('index.curriculum') }}</a></li>
                 <li><a href="#">{{ __('index.qa') }}</a></li>
                 <li><a href="#">{{ __('index.research') }}</a></li>
                 <li><a href="#">{{ __('index.academic') }}</a></li>
                 <li><a href="#">{{ __('index.alumni') }}</a></li>
                 <li class="dropdown"><a href="#"><span>{{ __('index.dean') }}</span></a>

                     {{-- class="bi bi-chevron-down toggle-dropdown"></i></a>
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
             </ul> --}}
                     <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>
         <div class="dropdown text-end p-2">
             <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                 🌐 {{ strtoupper(app()->getLocale()) }}
             </button>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'th']) }}">🇹🇭 ไทย</a>
                 </li>
                 <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">🇬🇧 English</a>
                 </li>
             </ul>
         </div>


 </header>
