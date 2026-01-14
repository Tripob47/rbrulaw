@extends('layouts.masterlayout')

@section('title', __('index.evaluation_results'))
@section('meta_description', __('index.qa_evaluation_meta_description'))

@section('content')
    @include('components.qa.header', ['title' => __('index.evaluation_results')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{ __('index.qa_performance_title') }}</h5>
                    @php
                        $qaRateDir = public_path('QARATE');
                        $qaRateFiles = [];

                        if (is_dir($qaRateDir)) {
                            $files = glob($qaRateDir . DIRECTORY_SEPARATOR . '*.pdf');
                            if ($files !== false) {
                                foreach ($files as $filePath) {
                                    $fileName = basename($filePath);
                                    $fileYear = pathinfo($fileName, PATHINFO_FILENAME);

                                    $qaRateFiles[] = [
                                        'year' => $fileYear,
                                        'url' => 'QARATE/' . $fileName,
                                    ];
                                }
                            }
                        }

                        usort($qaRateFiles, function ($a, $b) {
                            return strcmp($b['year'], $a['year']);
                        });
                    @endphp

                    @if (!empty($qaRateFiles))
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <tbody>
                                    @foreach ($qaRateFiles as $file)
                                        <tr>
                                            <td class="align-middle w-75">
                                                {{ __('index.qa_performance_year', ['year' => $file['year']]) }}
                                            </td>
                                            <td class="align-middle text-center w-25">
                                                <a href="{{ asset($file['url']) }}" class="btn btn-warning btn-sm"
                                                    target="_blank" rel="noopener">
                                                    <i class="fa fa-download"></i> {{ __('index.download') }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted mb-0">{{ __('index.qa_no_performance_files') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
