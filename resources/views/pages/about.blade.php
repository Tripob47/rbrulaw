@extends('layouts.masterlayout')

@section('title', 'Welcome')

@section('content')

    <!-- Page Title -->
    @include('layouts.img')
    <div class="page-title position-relative">
        <nav class="breadcrumbs position-absolute bottom-0 start-0 w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container text-white">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">คณะนิติศาสตร์</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">เกี่ยวกับคณะ</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="about" class="py-5" style="background-color:#CACACA; width: 100%;">
    <div class="container">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs fs-5 gap-3 mb-3 justify-content-center" id="newsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history"
                    type="button" role="tab" aria-controls="history" aria-selected="true">
                    {{ __('index.history') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button"
                    role="tab" aria-controls="vision" aria-selected="false">
                    {{ __('index.vision') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="strategies-tab" data-bs-toggle="tab" data-bs-target="#strategies"
                    type="button" role="tab" aria-controls="strategies" aria-selected="false">
                    {{ __('index.Strategies') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="structure-tab" data-bs-toggle="tab" data-bs-target="#structure"
                    type="button" role="tab" aria-controls="structure" aria-selected="false">
                    {{ __('index.Structure') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="location-tab" data-bs-toggle="tab" data-bs-target="#location"
                    type="button" role="tab" aria-controls="location" aria-selected="false">
                    {{ __('index.Location') }}
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="newsTabContent">
            <!-- ประวัติ -->
            <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                <div class="row my-4">
                    <div class="col-lg-12 text-center">
                        <img class="img-fluid rounded" src="{{ asset('template/assets/img/course-1.jpg') }}" alt="logo" width="15%">
                    </div>
                </div>
                <hr>
                <h3>{{ __('index.history') }}</h3>
                <i class="fa fa-quote-left fa-2x fa-pull-left"></i>
                <h6 class="text-justify">
                    {{ __('index.op') }}
                </h6>
                <hr>
            </div>

            <!-- วิสัยทัศน์ ปรัชญา -->
            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                <h3>{{ __('index.vision_title') }}</h3>
                <p>{{ __('index.vision_text') }}</p>

                <h3>{{ __('index.philosophy_title') }}</h3>
                <p>{{ __('index.philosophy_text') }}</p>

                <h3>{{ __('index.identity_title') }}</h3>
                <p>{{ __('index.identity_text') }}</p>

                <h3>{{ __('index.uniqueness_title') }}</h3>
                <p>{{ __('index.uniqueness_text') }}</p>

                <h3>{{ __('index.desired_attributes_title') }}</h3>
                <p>{{ __('index.desired_attributes_text') }}</p>
            </div>

            <!-- กลยุทธ์ -->
            <div class="tab-pane fade" id="strategies" role="tabpanel" aria-labelledby="strategies-tab">
                <div class="strategy-section">
                    <h2>{{ __('index.title') }}</h2>

                    <div class="mb-4">
                        <h4>{{ __('index.strategy1_title') }}</h4>
                        <p>{{ __('index.strategy1_desc') }}</p>
                        <ol>
                            @foreach (__('index.strategy1_actions') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="mb-4">
                        <h4>{{ __('index.strategy2_title') }}</h4>
                        <p>{{ __('index.strategy2_desc') }}</p>
                        <ol>
                            @foreach (__('index.strategy2_actions') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="mb-4">
                        <h4>{{ __('index.strategy3_title') }}</h4>
                        <p>{{ __('index.strategy3_desc') }}</p>
                        <ol>
                            @foreach (__('index.strategy3_actions') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>

            <!-- โครงสร้าง -->
            <div class="tab-pane fade" id="structure" role="tabpanel" aria-labelledby="structure-tab">
                <p>{{ __('index.structure_content') }}</p>
            </div>

            <!-- สถานที่ตั้ง -->
            <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                <div class="my-4">
                    <h3 class="mb-3">{{ __('index.location_title') }}</h3>
                    <p>{{ __('index.university_name') }}</p>
                    <p>{{ __('index.address_th') }}</p>
                    <p>{{ __('index.address_en') }}</p>

                    <h3 class="mt-5 mb-3">{{ __('index.admin_structure') }}</h3>
                    <ul class="list-unstyled">
                        <li><strong>{{ __('index.tel') }}:</strong> 086-4403210</li>
                        <li><strong>{{ __('index.fax') }}:</strong> 039-471417</li>
                        <li><strong>{{ __('index.email') }}:</strong> <a href="mailto:law@rbru.ac.th">law@rbru.ac.th</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
