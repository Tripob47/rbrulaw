{{-- @extends('layouts.masterlayout')

@section('title', 'news')

@section('content')
<section id="courses" class="courses section">
    <nav id="navmenu1" class="navmenu mb-4">
        <ul>
            <li><a href="#">{{ __('index.news_activities') }}</a></li>
            <li><a href="#">{{ __('index.news_seminar') }}</a></li>
            <li><a href="#">{{ __('index.news_job') }}</a></li>
            <li><a href="#">{{ __('index.news_procurement') }}</a></li>
        </ul>
    </nav>

    <div class="section-title mb-4" data-aos="fade-up">
        <p>ข่าวล่าสุด</p>
    </div>

    <div class="row">
        @forelse($news as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="course-item">
                    <img src="{{ $item['img_title'] ?? asset('template/assets/img/default.jpg') }}" class="img-fluid" alt="">
                    <div class="course-content">
                        <h3 class="mt-2">{{ strip_tags(html_entity_decode($item['topic'])) }}</h3>
                        <p>{!! \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($item['detail'])), 150) !!}</p>
                        <p class="category">ปี {{ $item['year'] ?? '-' }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>ไม่มีข่าวแสดง</p>
        @endforelse
    </div>
</section>
@endsection --}}
