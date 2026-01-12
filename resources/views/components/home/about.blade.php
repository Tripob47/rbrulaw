<!-- Faculty Info / About Section (kept from original structure) -->
<section id="about" class="about section" style="background-color:#f2f2f2;">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zSkSv_Oh4ZM"
                        title="{{ __('index.law_faculty_video_title') }}" allowfullscreen
                        loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" frameborder="0">
                    </iframe>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ asset('form_download/present_law.pdf') }}" class="btn text-white fw-bold me-2 mb-2 home-quick-btn" style="background-color:#5a5a5a;" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-cloud-arrow-down-fill me-1"></i> {{ __('index.brochure') }}
                    </a>
                    <a href="#" class="btn text-white fw-bold me-2 mb-2 home-quick-btn" style="background-color:#6a6a6a;">
                        <i class="bi bi-youtube me-1"></i> {{ __('index.law_channel') }}
                    </a>
                    <a href="{{ url(app()->getLocale().'/qa') }}" class="btn text-white fw-bold mb-2 home-quick-btn" style="background-color:#7a7a7a;">
                        <i class="bi bi-shield-check me-1"></i> {{ __('index.qa_button') }}
                    </a>
                </div>
            </div>

            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h1>{{ __('index.faculty_name') }}</h1>
                <p class="fst-italic">
                <h4>{{ __('index.slogan') }}</h4>
                </p>
                <ul>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex justify-content-between align-items-center border-bottom pb-2">
                            <h6>{{ __('index.bachelor_degree') }}</h6>
                            <a href="#" class="btn btn-sm btn-outline-dark">{{ __('index.view_details') }}</a>
                        </li>
                        <li class="mb-2 d-flex justify-content-between align-items-center border-bottom pb-2">
                            <h6>{{ __('index.master_degree') }}</h6>
                            <a href="#" class="btn btn-sm btn-outline-dark">{{ __('index.view_details') }}</a>
                        </li>
                    </ul>
                </ul>
                <div class="mt-3 featured-services featured-services--compact">
                    <div class="row g-2">
                        <div class="col-6 col-md-3">
                            <a href="https://admission.rbru.ac.th/" class="card-link" target="_blank" rel="noopener noreferrer">
                                <div class="card-box">
                                    <img alt="{{ __('index.apply') }}" class="card-bg" src="{{ asset('img/hotmenu/register.jpg') }}" loading="lazy" decoding="async">
                                    <div class="card-overlay"></div>
                                    <div class="card-inner">
                                        <i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                                        <h3>{{ __('index.apply') }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a href="{{ url(app()->getLocale().'/our') }}" class="card-link">
                                <div class="card-box">
                                    <img alt="หลักสูตร คณะนิติศาสตร์" class="card-bg" src="{{ asset('img/hotmenu/caouse.jpg') }}" loading="lazy" decoding="async">
                                    <div class="card-overlay"></div>
                                    <div class="card-inner">
                                        <i class="bi bi-journal-text" aria-hidden="true"></i>
                                        <h3>
                                            <span class="d-block">หลักสูตร</span>
                                            <span class="d-block">คณะนิติศาสตร์</span>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a href="{{ url(app()->getLocale().'/service') }}" class="card-link">
                                <div class="card-box">
                                    <img alt="{{ __('index.academic_services') }}" class="card-bg" src="{{ asset('img/hotmenu/service.jpg') }}" loading="lazy" decoding="async">
                                    <div class="card-overlay"></div>
                                    <div class="card-inner">
                                        <i class="bi bi-people-fill" aria-hidden="true"></i>
                                        <h3>{{ __('index.academic_services') }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card-box">
                                <img alt="{{ __('index.online_services') }}" class="card-bg" src="{{ asset('img/hotmenu/e-service.jpg') }}" loading="lazy" decoding="async">
                                <div class="card-overlay"></div>
                                <div class="hover-links-overlay">
                                    <div class="hover-links">
                                        <a href="https://www.rbru.ac.th/student" target="_blank" rel="noopener noreferrer" class="hover-link-btn">นักศึกษา</a>
                                        <a href="https://www.rbru.ac.th/staff" target="_blank" rel="noopener noreferrer" class="hover-link-btn">บุคลากร</a>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <i class="bi bi-person-plus-fill" aria-hidden="true"></i>
                                    <h3>{{ __('index.online_services') }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
