@extends('layouts.masterlayout')

@section('title', __('index.faculty'))

@section('content')
    @include('components.qa.header', ['title' => __('index.faculty')])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <h2 class="text-center mb-4">แผนคณะ</h2>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-info text-white">แผนกลยุทธ์ ๕ ปี</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" target="_blank">ปรับปรุง ปีงบประมาณ ๒๕๖๑</a></li>
                            <li class="list-group-item"><a href="#" target="_blank">ปรับปรุง ปีงบประมาณ ๒๕๖๒</a></li>
                            <li class="list-group-item"><a href="{{ asset('file/plan/63.pdf') }}" target="_blank">ปรับปรุง ปีงบประมาณ ๒๕๖๓</a></li>
                            <li class="list-group-item"><a href="{{ asset('file/plan/64.pdf') }}" target="_blank">ปรับปรุง ปีงบประมาณ ๒๕๖๔</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-info text-white">แผนปฏิบัติราชการ</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" target="_blank">แผนปฏิบัติราชการ ปี ๒๕๖๑</a></li>
                            <li class="list-group-item"><a href="#" target="_blank">แผนปฏิบัติราชการ ปี ๒๕๖๒</a></li>
                            <li class="list-group-item"><a href="{{ asset('file/gov/62.pdf') }}" target="_blank">แผนปฏิบัติราชการ ปี ๒๕๖๓</a></li>
                            <li class="list-group-item"><a href="{{ asset('file/gov/s64.pdf') }}" target="_blank">แผนปฏิบัติราชการ ปี ๒๕๖๔</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-success text-white">แผนการจัดการความรู้</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" target="_blank">ปีงบประมาณ ๒๕๖๑</a></li>
                            <li class="list-group-item"><a href="#" target="_blank">ปีงบประมาณ ๒๕๖๒</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-success text-white">แผนพัฒนาคุณภาพ ระดับหลักสูตร</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" target="_blank">แผนพัฒนาคุณภาพ ระดับหลักสูตร</a></li>
                            <li class="list-group-item"><a href="#" target="_blank">แผนพัฒนาคุณภาพ ระดับระดับหลักสูตร</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-warning text-dark">แผนพัฒนาบุคลากร</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ asset('file/dev/63.pdf') }}" target="_blank">แผนพัฒนาบุคลากรรายบุคคล ประจำปีงบประมาณ ๒๕๖๓</a></li>
                            <li class="list-group-item"><a href="{{ asset('file/dev/63_2.pdf') }}" target="_blank">แผนบริหารและพัฒนาทรัพยากรบุคคล ๕ ปี พ.ศ. ๒๕๖๐-๒๕๖๔ ปรับปรุงงบประมาณ ๒๕๖๓</a></li>
                            <li class="list-group-item"><a href="{{ asset('file/dev/64.pdf') }}" target="_blank">แผนบริหารและพัฒนาทรัพยากรบุคคล ๕ ปี พ.ศ. ๒๕๖๐-๒๕๖๔ ปรับปรุงงบประมาณ ๒๕๖๔</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-warning text-dark">แผนบริหารความเสี่ยง</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" target="_blank">ประจำปีงบประมาณ ๒๕๖๑</a></li>
                            <li class="list-group-item"><a href="#" target="_blank">ประจำปีงบประมาณ ๒๕๖๒</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-danger text-white">แผนงบประมาณ</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" target="_blank">แผนงบประมาณ ประจำปีงบประมาณ ๒๕๖๓</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-danger text-white">แผนกลยุทธ์ทางการเงิน</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ asset('file/finace/63.pdf') }}" target="_blank">แผนกลยุทธ์ทางการเงิน ประจำปีงบประมาณ ๒๕๖๓</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
