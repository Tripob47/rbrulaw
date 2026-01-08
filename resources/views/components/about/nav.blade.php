<style>
    .about-nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-bottom: 24px;
    }
    .about-nav .btn {
        border-radius: 999px;
        padding: 8px 18px;
        font-weight: 600;
    }
    .about-nav .btn.active {
        background-color: #1f2a3a;
        border-color: #1f2a3a;
        color: #fff;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
    }
</style>

<div class="about-nav">
    <a href="{{ url('/about/history') }}"
        class="btn btn-outline-dark {{ request()->is('about/history') || request()->is('about') ? 'active' : '' }}">
        <i class="bi bi-clock-history me-1"></i> {{ __('index.history') }}
    </a>
    <a href="{{ url('/about/vision') }}"
        class="btn btn-outline-dark {{ request()->is('about/vision') ? 'active' : '' }}">
        <i class="bi bi-eye-fill me-1"></i> {{ __('index.vision') }}
    </a>
    <a href="{{ url('/about/strategies') }}"
        class="btn btn-outline-dark {{ request()->is('about/strategies') ? 'active' : '' }}">
        <i class="bi bi-gear-fill me-1"></i> {{ __('index.Strategies') }}
    </a>
    <a href="{{ url('/about/structure') }}"
        class="btn btn-outline-dark {{ request()->is('about/structure') ? 'active' : '' }}">
        <i class="bi bi-diagram-3-fill me-1"></i> {{ __('index.Structure') }}
    </a>
    <a href="{{ url('/about/location') }}"
        class="btn btn-outline-dark {{ request()->is('about/location') ? 'active' : '' }}">
        <i class="bi bi-geo-alt-fill me-1"></i> {{ __('index.Location') }}
    </a>
</div>
