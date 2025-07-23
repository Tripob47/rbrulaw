@extends('layouts.masterlayout')

@section('title', 'ข่าวทั้งหมด')

@section('content')
<section id="news" class="section">
    <nav class="navmenu mb-4">
        <ul>
            <li><a href="#">{{ __('index.news_activities') }}</a></li>
            <li><a href="#">{{ __('index.news_seminar') }}</a></li>
            <li><a href="#">{{ __('index.news_job') }}</a></li>
            <li><a href="#">{{ __('index.news_procurement') }}</a></li>
        </ul>
    </nav>

    <div class="section-title mb-4" data-aos="fade-up">
        <p>ข่าวทั้งหมด</p>
    </div>

    <div class="row" id="news-list">
        <!-- ข่าวจะถูกเพิ่มด้วย JavaScript -->
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    axios.get('/api/news-proxy')
        .then(function (response) {
            const newsItems = response.data;
            const newsList = document.getElementById('news-list');

            newsItems.forEach(news => {
                const col = document.createElement('div');
                col.className = 'col-lg-4 col-md-6 d-flex align-items-stretch mb-4';

                col.innerHTML = `
                    <div class="course-item">
                        <img src="${news.img_title}" class="img-fluid" alt="${news.topic}">
                        <div class="course-content">
                            <h3><a href="#">${news.topic}</a></h3>
                            <p>${stripHtml(news.detail).substring(0, 100)}...</p>
                        </div>
                    </div>
                `;

                newsList.appendChild(col);
            });
        })
        .catch(function (error) {
            console.error('โหลดข่าวไม่สำเร็จ:', error);
        });

    function stripHtml(html) {
        let tmp = document.createElement("DIV");
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || "";
    }
});
</script>
@endpush
