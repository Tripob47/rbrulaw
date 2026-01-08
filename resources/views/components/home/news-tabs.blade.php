<!-- News Section (kept original tab structure) -->
<section class="py-5" style="background-color:#e3e3e3; width: 100%;">
    <div class="container">
        <style>
            .home-news-tabs-wrap {
                background: #f3f3f3;
                border-radius: 999px;
                padding: 6px;
                display: inline-flex;
                box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.08);
            }
            .home-news-tabs {
                gap: 6px;
                border-bottom: 0;
            }
            .home-news-tabs .nav-link {
                border: 0;
                border-radius: 999px;
                padding: 8px 18px;
                color: #2b2b2b !important;
                font-weight: 600;
                background-color: transparent;
                transition: background-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
            }
            .home-news-tabs .nav-link:hover,
            .home-news-tabs .nav-link:focus {
                background-color: #dedede !important;
                color: #101010 !important;
                outline: 0;
            }
            .home-news-tabs .nav-link.active {
                background-color: #1f2a3a !important;
                color: #fff !important;
                box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
            }
            .home-news-card {
                border-radius: 14px;
                overflow: hidden;
                transition: transform 0.25s ease, box-shadow 0.25s ease;
            }
            .home-news-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 14px 30px rgba(0, 0, 0, 0.16);
            }
            .home-news-card:hover .home-news-img {
                transform: scale(1.03);
            }
            .home-news-img {
                transition: transform 0.25s ease;
            }
        </style>
        <div class="text-center mb-3">
            <div class="home-news-tabs-wrap">
                <ul class="nav nav-tabs fs-5 home-news-tabs" id="newsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">
                    ข่าวสาร
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="training-tab" data-bs-toggle="tab" data-bs-target="#training" type="button" role="tab" aria-controls="training" aria-selected="false">
                    ข่าวอบรม
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">
                    รางวัลเชิดชูเกียรติ
                </button>
            </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="newsTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    @forelse($newsGeneral as $item)
                        @php
                            $title = ($useEn && !empty($item['headline_en'])) ? $item['headline_en'] : ($item['headline'] ?? '');
                            $img = $item['url'] ?? '';
                            if (!$img || $img === $newsLogo) {
                                $img = $placeholderImg;
                            }
                        @endphp
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ url('/detailsnew/'.$item['org_no']) }}" class="text-decoration-none w-100">
                                <div class="card shadow-sm border-0 w-100 h-100 home-news-card">
                                    <img src="{{ $img }}" class="card-img-top img-fluid home-news-img" style="object-fit:cover;height:220px;" alt="">
                                    <div class="card-body text-start">
                                        <h5 class="card-title mb-0">{{ \Illuminate\Support\Str::limit($title, 100) }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-muted text-center py-4" style="min-height:25dvh;">ยังไม่มีข่าวใหม่ขณะนี้</p>
                    @endforelse
                </div>
            </div>

            <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab">
                <div class="row">
                    @forelse($newsTraining as $item)
                        @php
                            $title = ($useEn && !empty($item['headline_en'])) ? $item['headline_en'] : ($item['headline'] ?? '');
                            $img = $item['url'] ?? '';
                            if (!$img || $img === $newsLogo) {
                                $img = $placeholderImg;
                            }
                        @endphp
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ url('/detailsnew/'.$item['org_no']) }}" class="text-decoration-none w-100">
                                <div class="card shadow-sm border-0 w-100 h-100 home-news-card">
                                    <img src="{{ $img }}" class="card-img-top img-fluid home-news-img" style="object-fit:cover;height:220px;" alt="">
                                    <div class="card-body text-start">
                                        <h5 class="card-title mb-0">{{ \Illuminate\Support\Str::limit($title, 100) }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-muted text-center py-4" style="min-height:25dvh;">ยังไม่มีข่าวใหม่ขณะนี้</p>
                    @endforelse
                </div>
            </div>

            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                <div class="row">
                    @forelse($newsAwards as $item)
                        @php
                            $title = ($useEn && !empty($item['headline_en'])) ? $item['headline_en'] : ($item['headline'] ?? '');
                            $img = $item['url'] ?? '';
                            if (!$img || $img === $newsLogo) {
                                $img = $placeholderImg;
                            }
                        @endphp
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ url('/detailsnew/'.$item['org_no']) }}" class="text-decoration-none w-100">
                                <div class="card shadow-sm border-0 w-100 h-100 home-news-card">
                                    <img src="{{ $img }}" class="card-img-top img-fluid home-news-img" style="object-fit:cover;height:220px;" alt="">
                                    <div class="card-body text-start">
                                        <h5 class="card-title mb-0">{{ \Illuminate\Support\Str::limit($title, 100) }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-muted text-center py-4" style="min-height:25dvh;">ยังไม่มีข่าวใหม่ขณะนี้</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="text-center mt-2">
            <a href="{{ url('/news') }}" class="btn text-white fw-bold" style="background-color:#4b4b4b;">
                {{ __('index.more') ?? 'อ่านเพิ่มเติม' }}
            </a>
        </div>
    </div>
</section>
