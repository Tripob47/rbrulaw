@extends('layouts.masterlayout')

@section('title', 'แผนการจัดการความรู้ (KM)')

@section('content')
    @include('components.qa.header', ['title' => 'แผนการจัดการความรู้ (KM)'])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="text-center">
                <h4>การจัดการความรู้ (KM) คณะนิติศาสตร์</h4>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนการจัดการความรู้ (KM)</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_8/qa62_8_4.pdf" target="_blank">แผนการจัดการความรู้ (KM) ประจำปี 2564</a></li>
                                <li><a href="qa62/qa62_8/qa62_8_3.pdf" target="_blank">แผนการจัดการความรู้ (KM) ประจำปี 2563</a></li>
                                <li><a href="qa62/qa62_8/qa62_8_1.pdf" target="_blank">แผนการจัดการความรู้ (KM) ประจำปี 2562</a></li>
                                <li><a href="document_rule/law_km/km_60.pdf" target="_blank">แผนการจัดการความรู้ (KM) ประจำปี 2560</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ผลการดำเนินงาน</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_km/reaction_km/re-_km_64.pdf" target="_blank">ผลการดำเนินงาน ประจำปีงบประมาณ 2564</a></li>
                                <li><a href="document_rule/law_km/reaction_km/re-_km_63.pdf" target="_blank">ผลการดำเนินงาน ประจำปีงบประมาณ 2563</a></li>
                                <li><a href="document_rule/law_km/reaction_km/re_km_62.pdf" target="_blank">ผลการดำเนินงาน ประจำปีงบประมาณ 2562</a></li>
                                <li><a href="document_rule/law_km/reaction_km/re_km_60.pdf" target="_blank">ผลการดำเนินงาน ประจำปีงบประมาณ 2561</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="http://www2.rbru.ac.th/LearnPark/" target="_blank">อุทยานแห่งการเรียนรู้</a>
                            </h5>
                            <ul class="small mb-0">
                                <li><a href="https://www2.rbru.ac.th/LearnPark/index.php?p=show&type_id=&No=3092" target="_blank">วิจัย</a></li>
                                <li>
                                    <a href="document_rule/law_lean_park/re01.pptx" target="_blank">แนวปฏิบัติที่ดี เรื่อง การพัฒนาการเรียนการสอน</a><br>
                                    <a href="document_rule/law_lean_park/re02.pdf" target="_blank">แนวปฏิบัติที่ดี เรื่อง การเสนองานวิจัยเพื่อขอตำแหน่งทางวิชาการ</a><br>
                                    <a href="document_rule/law_lean_park/re03.pdf" target="_blank">แนวปฏิบัติที่ดี เรื่อง แหล่งทุนวิจัย</a>
                                </li>
                                <li class="mt-3"><a href="https://www2.rbru.ac.th/LearnPark/index.php?p=show&type_id=&No=3092" target="_blank">ผลิตบัณฑิต</a></li>
                                <li>
                                    <a href="document_rule/law_lean_park/pro01.pptx" target="_blank">แนวปฏิบัติที่ดี เรื่อง การนำเสนองานวิจัยในต่างประเทศ</a><br>
                                    <a href="document_rule/law_lean_park/pro02.pdf" target="_blank">แนวปฏิบัติที่ดี เรื่อง การพัฒนาการเรียนการสอนรายวิชา กฏหมายภาษีอากร</a><br>
                                    <a href="document_rule/law_lean_park/แนวปฏิบัติที่ดีเรื่องการพัฒนาการเรียนการสอนในรูปแบบออนไลน์.pdf" target="_blank">แนวปฏิบัติที่ดี เรื่อง การพัฒนาการเรียนการสอนในรูปแบบออนไลน์</a><br>
                                    <a href="document_rule/law_lean_park/แนวปฏิบัติที่ดีเรื่องผลลัพธ์การเรียนรู้ของหลักสูตร.pdf" target="_blank">แนวปฏิบัติที่ดี เรื่อง ผลลัพธ์การเรียนรู้ของหลักสูตร</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
