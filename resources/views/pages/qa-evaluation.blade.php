@extends('layouts.masterlayout')

@section('title', 'ผลการประเมิน')

@section('content')
    @include('components.qa.header', ['title' => 'ผลการประเมิน'])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">ผลการดำเนินงานของคณะนิติศาสตร์</h5>
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
                                                ผลการดำเนินงานของคณะนิติศาสตร์ ปี {{ $file['year'] }}
                                            </td>
                                            <td class="align-middle text-center w-25">
                                                <a href="{{ asset($file['url']) }}" class="btn btn-warning btn-sm"
                                                    target="_blank" rel="noopener">
                                                    <i class="fa fa-download"></i> ดาวน์โหลด
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted mb-0">ไม่พบไฟล์ผลการดำเนินงาน</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
