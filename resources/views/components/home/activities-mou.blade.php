<!-- Activities Carousel + MOU (kept original layout) -->
<section id="trainers-index" class="section trainers-index mt-4" style="background-color:#f2f2f2;">
    <div class="container">
        <div class="row d-flex flex-row">
            <div class="col-sm-12 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <h1 class="mb-4">{{ __('index.activities') }}</h1>
                <div id="activityCarousel" class="carousel slide w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @if(count($activities) > 0)
                            @foreach($activities as $index => $item)
                                <button type="button" data-bs-target="#activityCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></button>
                            @endforeach
                        @else
                            <button type="button" data-bs-target="#activityCarousel" data-bs-slide-to="0" class="active"></button>
                        @endif
                    </div>
                    <div class="carousel-inner">
                        @if(count($activities) > 0)
                            @foreach($activities as $index => $item)
                                @php
                                    $title = ($useEn && !empty($item['topic_en'])) ? $item['topic_en'] : ($item['topic'] ?? '');
                                    $img = $item['image'] ?? $placeholderImg;
                                    if (!$img) {
                                        $img = $placeholderImg;
                                    }
                                @endphp
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="position-relative">
                                    <img src="{{ $img }}" class="d-block w-100" style="height:320px;object-fit:cover;" alt="" onerror="this.onerror=null;this.src='{{ $placeholderImg }}';">
                                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background:linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.75) 100%);">
                                            <div class="text-white fw-semibold">{{ \Illuminate\Support\Str::limit($title, 100) }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <div class="position-relative">
                                    <img src="{{ $placeholderImg }}" class="d-block w-100" style="height:320px;object-fit:cover;" alt="" onerror="this.onerror=null;this.src='{{ $placeholderImg }}';">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background:linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.75) 100%);">
                                        <div class="text-white fw-semibold">ยังไม่มีภาพกิจกรรม</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#activityCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#activityCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <div class="text-center mt-3">
                    <a href="{{ url('/activities') }}" class="btn text-white fw-bold me-2 mb-2" style="background-color:#4b4b4b;">
                        <i class=""></i> {{ __('index.more') ?? 'อ่านเพิ่มเติม' }}
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <h1 class="mb-3">{{ __('index.Cooperate') }}</h1>
                <ul class="list-unstyled mou-list">
                    <li>
                        <a href="https://www.law.rbru.ac.th/sar63/mou02.pdf" target="_blank">
                            สํานักงานศาลปกครอง ทําบันทึกข้อตกลง (MOU) ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                        </a>
                    </li><br>
                    <li>
                        <a href="https://www.law.rbru.ac.th/sar63/mou01.pdf" target="_blank">
                            สํานักงานศาลรัฐธรรมนูญ ทําบันทึกข้อตกลง (MOU) ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                        </a>
                    </li><br>
                    <li>
                        <a href="https://www.law.rbru.ac.th/sar66/mou1_66.pdf" target="_blank">
                            สำนักงานคณะกรรมการคุ้มครองผู้บริโภค ทําบันทึกข้อตกลง (MOU)
                            ร่วมกับมหาวิทยาลัยราชภัฏรําไพพรรณี
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
