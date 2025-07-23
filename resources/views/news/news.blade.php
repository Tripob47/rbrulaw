@extends('layouts.masterlayout')

@section('title', 'ข่าวทั้งหมด')

@section('content')
<section id="news" class="section">
    {{-- เมนูหมวดข่าว --}}
    <nav class="navmenu mb-4">
        <ul>
            <li><a href="#">{{ __('index.news_activities') }}</a></li>
            <li><a href="#">{{ __('index.news_seminar') }}</a></li>
            <li><a href="#">{{ __('index.news_job') }}</a></li>
            <li><a href="#">{{ __('index.news_procurement') }}</a></li>
        </ul>
    </nav>

    {{-- หัวข้อ --}}
    <div class="section-title mb-4" data-aos="fade-up">
        <p>ข่าวทั้งหมด</p>
    </div>

    {{-- แสดงข่าว --}}
    <div class="row" id="news-list">
        <!-- ข่าวจะถูกเพิ่มด้วย JavaScript -->
    </div>
</section>
@endsection

{{-- ดึงข้อมูลข่าวผ่าน API --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    axios.get('https://news.rbru.ac.th/newsrb_json')
        .then(function (response) {
            const newsItems = response.data;
            const newsList = document.getElementById('news-list');

            newsItems.forEach(news => {
                const col = document.createElement('div');
                col.className = 'col-lg-4 col-md-6 d-flex align-items-stretch mb-4';

                const title = decodeHtml(news.topic);
                const detail = stripHtml(decodeHtml(news.detail)).substring(0, 120) + '...';

                col.innerHTML = `
                    <div class="course-item">
                        <img src="${news.img_title}" class="img-fluid" alt="${title}">
                        <div class="course-content">
                            <h3><a href="#">${title}</a></h3>
                            <p>${detail}</p>
                        </div>
                    </div>
                `;

                newsList.appendChild(col);
            });
        })
        .catch(function (error) {
            console.error('โหลดข่าวไม่สำเร็จ:', error);
        });

    // แปลง HTML entities เช่น &quot; &lt; &gt;
    function decodeHtml(html) {
        const txt = document.createElement("textarea");
        txt.innerHTML = html;
        return txt.value;
    }

    // ลบแท็ก HTML
    function stripHtml(html) {
        const tmp = document.createElement("div");
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || "";
    }
});
</script>
@endpush
