@extends('layouts.masterlayout')

@section('title', __('index.academic_services'))
@section('meta_description', __('index.service_meta_description'))

@section('content')
<section class="section">
    <div class="container">
        <h1 class="mb-3">{{ __('index.academic_services') }}</h1>
        <p class="mb-0">{{ __('index.coming_soon') }}</p>
    </div>
</section>
@endsection
