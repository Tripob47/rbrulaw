<style>
    .qa-nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-bottom: 24px;
    }
    .qa-nav .btn {
        border-radius: 999px;
        padding: 8px 18px;
        font-weight: 600;
    }
    .qa-nav .btn.active {
        background-color: #1f2a3a;
        border-color: #1f2a3a;
        color: #fff;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
    }
</style>

<div class="qa-nav">
    <a href="{{ url('/qa') }}"
        class="btn btn-outline-dark {{ request()->is('qa') || request()->is('qa/quality') ? 'active' : '' }}">
        {{ __('index.quality_assurance') }}
    </a>
    <a href="{{ url('/qa/km') }}" class="btn btn-outline-dark {{ request()->is('qa/km') ? 'active' : '' }}">
        {{ __('index.knowledge_management_plan') }}
    </a>
    <a href="{{ url('/qa/plan') }}" class="btn btn-outline-dark {{ request()->is('qa/plan') ? 'active' : '' }}">
        {{ __('index.faculty') }}
    </a>
    <a href="{{ url('/qa/evaluation') }}" class="btn btn-outline-dark {{ request()->is('qa/evaluation') ? 'active' : '' }}">
        {{ __('index.evaluation') }}
    </a>
</div>
