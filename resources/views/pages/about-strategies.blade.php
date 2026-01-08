@extends('layouts.masterlayout')

@section('title', __('index.Strategies'))

@section('content')
    @include('components.about.header', ['title' => __('index.Strategies')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.about.nav')

            <style>
                .strategy-title {
                    color: #1f2a3a;
                    font-weight: 700;
                }
                .strategy-card {
                    border: 1px solid #e6e6e6;
                    border-radius: 16px;
                    background: #fff;
                    padding: 20px;
                    height: 100%;
                    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
                }
                .strategy-index {
                    width: 44px;
                    height: 44px;
                    border-radius: 50%;
                    background: #1f2a3a;
                    color: #fff;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    margin-bottom: 10px;
                }
                .strategy-head {
                    font-weight: 700;
                    color: #2b2b2b;
                }
                .strategy-desc {
                    color: #555;
                }
                .strategy-list {
                    padding-left: 18px;
                    color: #444;
                }
            </style>

            <div class="text-center mb-4">
            </div>

            <div class="row g-4">
                @foreach (['strategy1', 'strategy2', 'strategy3'] as $strategy)
                    <div class="col-12">
                        <div class="strategy-card">
                            <div class="strategy-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                            <div class="strategy-head mb-2">{{ __('index.' . $strategy . '_title') }}</div>
                            <p class="strategy-desc mb-3">{{ __('index.' . $strategy . '_desc') }}</p>
                            <ol class="strategy-list mb-0">
                                @foreach (__('index.' . $strategy . '_actions') as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
