@extends('layouts.masterlayout')

@section('title', __('index.research_fund'))

@section('content')
@include('layouts.img')
    <nav class="breadcrumbs w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container text-white">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">{{ __(key: 'index.faculty_name') }}</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ __('index.tp') }}</li>
            </ol>
        </div>
    </nav>
<div class="container py-5">
    <ul class="nav nav-tabs mb-4" id="researchFundTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active fw-semibold" id="fund-tab" data-bs-toggle="tab" data-bs-target="#fund" type="button" role="tab" aria-controls="fund" aria-selected="true">
                {{ __('index.research_fund') }}
            </button>
        </li>
    </ul>

    <div class="tab-content" id="researchFundTabContent">
        <div class="tab-pane fade show active" id="fund" role="tabpanel" aria-labelledby="fund-tab">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-primary fw-bold mb-3">{{ __('index.fund') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-cash-stack me-2"></i>{{ __('index.fund_2021') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-cash-stack me-2"></i>{{ __('index.fund_2018') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-cash-stack me-2"></i>{{ __('index.fund_2017') }}
                            </a>
                        </li>
                    </ul>

                    <h5 class="text-primary fw-bold mt-5 mb-3">{{ __('index.budget') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none link-hover-primary"><i class="bi bi-piggy-bank me-2"></i>{{ __('index.budget_2021') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none link-hover-primary"><i class="bi bi-piggy-bank me-2"></i>{{ __('index.budget_2020') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none link-hover-primary"><i class="bi bi-piggy-bank me-2"></i>{{ __('index.budget_2018') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none link-hover-primary"><i class="bi bi-piggy-bank me-2"></i>{{ __('index.budget_2017') }}</a></li>
                    </ul>

                    <h5 class="text-primary fw-bold mt-5 mb-3">{{ __('index.honor') }}</h5>
                    <ul class="list-unstyled">
                        @foreach(['2021','2020','2018','2017','2016'] as $year)
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-award me-2"></i>{{ __('index.honor_'.$year) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6">
                    <h5 class="text-primary fw-bold mb-3">{{ __('index.documents') }}</h5>
                    <ul class="list-unstyled">
                        @foreach(['plan','request_money','budget_plan','agreement','certificate','attachment','evaluation'] as $doc)
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-file-earmark-text me-2"></i>{{ __('index.doc_'.$doc) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <h5 class="text-primary fw-bold mt-5 mb-3">{{ __('index.legal_knowledge') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-journal-text me-2"></i>{{ __('index.legal_articles') }}
                            </a>
                        </li>
                    </ul>

                    <h5 class="text-primary fw-bold mt-5 mb-3">{{ __('index.utilization_2561') }}</h5>
                    <ul class="list-unstyled">
                        @foreach(['cert_utilization_2561_1','research_cert_2561_1','research_cert_2561_2'] as $item)
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-patch-check me-2"></i>{{ __('index.'.$item) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <h5 class="text-primary fw-bold mt-5 mb-3">{{ __('index.utilization_2563') }}</h5>
                    <ul class="list-unstyled">
                        @foreach(['research_cert_2563_1','research_cert_2563_2','research_cert_2563_3','research_cert_2563_4'] as $item)
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none link-hover-primary">
                                <i class="bi bi-patch-check me-2"></i>{{ __('index.'.$item) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.link-hover-primary:hover {
    color: #0d6efd !important;
    text-decoration: underline;
}
</style>
@endsection
