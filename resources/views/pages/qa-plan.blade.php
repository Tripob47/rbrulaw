@extends('layouts.masterlayout')

@section('title', 'แผนคณะนิติศาสตร์')

@section('content')
    @include('components.qa.header', ['title' => 'แผนคณะนิติศาสตร์'])

    <section id="about" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            @include('components.qa.nav')

            <div class="text-center">
                <h4>แผนคณะนิติศาสตร์</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนกลยุทธ์ 5 ปี</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_strategic_plan/strategic_57-61_02.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2557-2561 (ฉบับปรับปรุง 2559)</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_57-61_01.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2557-2561 (ฉบับปรับปรุง 2562)</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_57-61.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2557-2561</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_60-64.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2560-2564 (ฉบับปรับปรุง 2561)</a></li>
                                <li><a href="qa62/qa62_2/qa62_2_1.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2560-2564 (ฉบับปรับปรุง 2562)</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_60-64_2.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2560-2564 (ปี 2563)</a></li>
                                <li><a href="document_rule/law_strategic_plan/strategic_60-64_3.pdf" target="_blank">แผนกลยุทธ์ 5 ปี ประจำปี 2560-2564 (ปี 2564)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนปฏิบัติราชการ</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_action_plan/actionplan_57.pdf" target="_blank">แผนปฏิบัติราชการ 2557</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_58.pdf" target="_blank">แผนปฏิบัติราชการ 2558</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_59.pdf" target="_blank">แผนปฏิบัติราชการ 2559 (ครั้งที่ 2)</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_60.pdf" target="_blank">แผนปฏิบัติราชการ 2560 (ปรับปรุงจากการ SWOT)</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_61.pdf" target="_blank">แผนปฏิบัติราชการ 2561</a></li>
                                <li><a href="qa62/qa62_3/qa62_3_1.pdf" target="_blank">แผนปฏิบัติราชการ 2562</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_63_3.pdf" target="_blank">แผนปฏิบัติราชการ 2563</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_64_1.pdf" target="_blank">แผนปฏิบัติราชการ 2564</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนพัฒนาคุณภาพ ระดับคณะ</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_quality/faculty/quality_58.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับคณะ ประจำปี 2558</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_59.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับคณะ ประจำปี 2559</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_60.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับคณะ ประจำปี 2560</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_61.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับคณะ ประจำปี 2561</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_62.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับคณะ ประจำปี 2562</a></li>
                                <li><a href="document_rule/law_quality/faculty/quality_63.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับคณะ ประจำปี 2563</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนพัฒนาคุณภาพ ระดับหลักสูตร</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_quality/course/course_58.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับหลักสูตร ประจำปี 2558</a></li>
                                <li><a href="document_rule/law_quality/course/course_60.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับหลักสูตร ประจำปี 2560</a></li>
                                <li><a href="document_rule/law_quality/course/course_61.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับหลักสูตร ประจำปี 2561</a></li>
                                <li><a href="document_rule/law_quality/course/course_62.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับหลักสูตร ประจำปี 2562</a></li>
                                <li><a href="document_rule/law_quality/course/course_63.pdf" target="_blank">แผนพัฒนาคุณภาพ ระดับหลักสูตร ประจำปี 2563</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนพัฒนาบุคลากร</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_quality/staff/staff_61.pdf" target="_blank">แผนพัฒนาบุคลากร ประจำปีงบประมาณ 2561</a></li>
                                <li><a href="qa62/qa62_9/qa62_9_1.pdf" target="_blank">แผนบริหารและพัฒนาทรัพยากรบุคคล (สายวิชาการและสายสนับสนุน) 5 ปี (พ.ศ. 2560 2564) ประจำปีงบประมาณ 2562</a></li>
                                <li><a href="document_rule/law_teacher/teacher63.pdf" target="_blank">แผนบริหารและพัฒนาทรัพยากรบุคคล ประจำปีงบประมาณ 2563</a></li>
                                <li><a href="document_rule/law_teacher/teacher64.pdf" target="_blank">แผนบริหารและพัฒนาทรัพยากรบุคคล ประจำปีงบประมาณ 2564</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนบริหารความเสี่ยง</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_risk/risk_61.pdf" target="_blank">แผนบริหารความเสี่ยง ประจำปีงบประมาณ 2561</a></li>
                                <li><a href="qa62/qa62_7/qa62_7_1.pdf" target="_blank">แผนบริหารความเสี่ยง ประจำปีงบประมาณ 2562</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_63_2.pdf" target="_blank">แผนบริหารความเสี่ยง ประจำปีงบประมาณ 2563</a></li>
                                <li><a href="document_rule/law_action_plan/actionplan_64.pdf" target="_blank">แผนบริหารความเสี่ยง ประจำปีงบประมาณ 2564</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนงบประมาณ</h5>
                            <ul class="small mb-0">
                                <li><a href="document_rule/law_budget/butget_59.pdf" target="_blank">แผนงบประมาณ ประจำปีงบประมาณ 2559</a></li>
                                <li><a href="qa62/qa62_1/file1.pdf" target="_blank">แผนกลยุทธ์ทางการเงิน ปีงบประมาณ 2562</a></li>
                                <li><a href="qa62/qa62_1/file62_1.pdf" target="_blank">แผนกลยุทธ์ทางการเงิน ปีงบประมาณ 2563</a></li>
                                <li><a href="qa62/qa62_1/64file.pdf" target="_blank">แผนกลยุทธ์ทางการเงิน ปีงบประมาณ 2564</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนบริการวิชาการ</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_4/qa62_4_1.pdf" target="_blank">แผนบริการวิชาการ และแผนการใช้ประโยชน์จากการบริการวิชาการเพื่อให้เกิดผลต่อการพัฒนานักศึกษา ชุมชนหรือสังคม ประจำปีงบประมาณ 2562</a></li>
                                <li><a href="qa62/qa62_4/qa62_4_62_1.pdf" target="_blank">แผนบริการวิชาการ และแผนการใช้ประโยชน์จากการบริการวิชาการเพื่อให้เกิดผลต่อการพัฒนานักศึกษา ชุมชนหรือสังคม ประจำปีงบประมาณ 2563</a></li>
                                <li><a href="qa62/qa62_4/qa64_4_62_1.pdf" target="_blank">แผนบริการวิชาการ และแผนการใช้ประโยชน์จากการบริการวิชาการเพื่อให้เกิดผลต่อการพัฒนานักศึกษา ชุมชนหรือสังคม ประจำปีงบประมาณ 2564</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนทำนุบำรุงศิลปวัฒนธรรม</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_5/qa62_5_1.pdf" target="_blank">แผนทำนุบำรุงศิลปวัฒนธรรม ประจำปีการศึกษา 2561</a></li>
                                <li><a href="qa62/qa62_5/qa62_5_62.pdf" target="_blank">แผนทำนุบำรุงศิลปวัฒนธรรม ประจำปีการศึกษา 2562</a></li>
                                <li><a href="qa62/qa62_5/qa62_5_63.pdf" target="_blank">แผนทำนุบำรุงศิลปวัฒนธรรม ประจำปีการศึกษา 2563</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แผนพัฒนากิจกรรมนักศึกษา</h5>
                            <ul class="small mb-0">
                                <li><a href="qa62/qa62_6/qa62_6_1.pdf" target="_blank">แผนพัฒนากิจกรรมนักศึกษา ประจำปีการศึกษา 2561</a></li>
                                <li><a href="qa62/qa62_6/qa62_6_62_1.pdf" target="_blank">แผนพัฒนากิจกรรมนักศึกษา ประจำปีการศึกษา 2562</a></li>
                                <li><a href="qa62/qa62_6/qa62_6_63.pdf" target="_blank">แผนพัฒนากิจกรรมนักศึกษา ประจำปีการศึกษา 2563</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
