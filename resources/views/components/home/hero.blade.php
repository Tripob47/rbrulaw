<!-- Slide Carousel Full Width -->
<div class="position-relative">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="{{ __('index.slide_number', ['number' => 1]) }}"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="{{ __('index.slide_number', ['number' => 2]) }}"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="{{ __('index.slide_number', ['number' => 3]) }}"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carousel/Gemini_Generated_Image_cw284mcw284mcw28.png') }}" class="d-block w-100" style="height:600px; object-fit:cover;" alt="{{ __('index.slide_number', ['number' => 1]) }}" fetchpriority="high" decoding="async">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel/Gemini_Generated_Image_cw284mcw284mcw28 (1).png') }}" class="d-block w-100" style="height:600px; object-fit:cover;" alt="{{ __('index.slide_number', ['number' => 2]) }}" loading="lazy" decoding="async">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel/Gemini_Generated_Image_xe4lhwxe4lhwxe4l.png') }}" class="d-block w-100" style="height:600px; object-fit:cover;" alt="{{ __('index.slide_number', ['number' => 3]) }}" loading="lazy" decoding="async">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{ __('index.previous') }}</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{ __('index.next') }}</span>
        </button>
    </div>
</div>
