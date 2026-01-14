@extends('layouts.masterlayout')

@section('title', __('index.alumni_list_title'))
@section('meta_description', __('index.alumni_list_meta_description'))

@section('content')
<div class="container my-4">

    <!-- เมนูภาค -->
    <ul class="nav nav-pills mb-3" id="program-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="normal-tab" data-bs-toggle="pill" data-bs-target="#normal" type="button" role="tab">{{ __('index.p') }}</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="special-tab" data-bs-toggle="pill" data-bs-target="#special" type="button" role="tab">{{ __('index.p2') }}</button>
        </li>
    </ul>

    <!-- เนื้อหา -->
    <div class="tab-content" id="program-tabContent">
        <!-- ภาคปกติ -->
        <div class="tab-pane fade show active" id="normal" role="tabpanel">
            <select class="form-select mb-3" id="alumni-year" onchange="showAlumniList()">
                <option value="" selected disabled>{{ __('index.b') }}</option>
                <option value="50">2550</option>
                <option value="51">2551</option>
                <option value="52">2552</option>
                <option value="53">2553</option>
            </select>

            <div class="card">
                <div class="card-body">
                    <ul id="alumni-list" class="mb-0"></ul>
                </div>
            </div>
        </div>

        <!-- ภาคพิเศษ -->
        <div class="tab-pane fade" id="special" role="tabpanel">
            <select class="form-select mb-3" id="special-year" onchange="showSpecialList()">
                <option value="" selected disabled>{{ __('index.b2') }}</option>
                <option value="40">{{ __('index.class_label', ['number' => 40]) }}</option>
                <option value="41">{{ __('index.class_label', ['number' => 41]) }}</option>
            </select>

            <div class="card">
                <div class="card-body">
                    <ul id="special-list" class="mb-0"></ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript --}}
<script>
    const alumniData = {
        "50": [
            "1. นายกฤษณะ น้อยกร",
            "2. นางสาวจินตนา ดวงผัด",
            "3. นางสาวชนิดา สังข์น้อย",
            "4. นายธนาคาร วิภารัตน์",
            "5. นายธนารักษ์ ภูเสวต์",
            "6. นางสาวมาศญาณี ทานงาม",
            "7. นางสาววรัญญา ทสามนต์",
            "8. นางสาวสิริพา ฮายีมา",
            "9. นางสาวสุพีพร เขาหนองบัว",
            "10. นายอรรถพล จิระกาญจนากิจ",
            "11. นางสาวกิ่งกาญจนา ปะถานะ",
            "12. นายแก่นชัย พงษ์เพ็ชร",
            "13. นายณัฐพล แสงสีแก้ว",
            "14. นางสาวปรียานุช ขวัญอยู่",
            "15. นางสาวปาหนัน กอมณี",
            "16. นายพงศ์ชัย ครองศิริ",
            "17. นายพงษ์พิสุทธิ์ จันทมาลา",
            "18. นายพีรพงษ์ พงษ์สิทฺถาวร",
            "19. นายมารุต รวยสิน",
            "20. นางสาววรรณ จรรยาคุณ",
            "21. นายวานิชย์ บุญยิ่งยงชัย",
            "22. นางสาววิภาวรรณ วัลย์ศิริธรรมา",
            "23. นายศุภรัตน์ เจริญศรี",
            "24. นายสุขสรรค์ โคตรสิงห์",
            "25. นางสาวสุชาวดี สุวรรณวงษ์ทอง"
        ],
        "51": [
            "1. นางสาวจริยา รัตนเกิด",
            "2. นายจักรินทร์ ทองเย็น",
            "3. นางสาวจันจิรา ภาคสุข",
            "4. นางสาวจารุวรรณ วงจันทร์",
            "5. นางสาวจิราพร นาเกลือ",
            "6. นางสาวชุติมา บุญเรือง",
            "7. นายฐปนวัตน์ สมตระกูล",
            "8. นายธนกร ปานนิล",
            "9. นายนภดล บุญอินทร์",
            "10. นายนฤพนธ์ โชติเพิ่ม",
            "11. นายปฏิวัติ ประเสริฐพงษ์",
            "12. นางสาวปาริชาติ บุญจันทร์",
            "13. นายภาคภูมิ เผื่อนภูษิต",
            "14. นางสาวภาวินีย์ วงศ์นาป่า",
            "15. นางสาววิชุดา ตันวีระกุล",
            "16. นายศตรวรรษ ชะระสัย",
            "17. นางสาวสมฤดี โพธิ์อุปถัมภ์",
            "18. นางสาวสาวิตรี ยาดี",
            "19. นางสาวสุกัญญา สอนคำวงค์",
            "20. นางสาวสุดารัตน์ ศรีเสริม",
            "21. นางสาวสุทธิดา เชาว์อารีย์",
            "22. นางสาวสุนันทา พรงาม",
            "23. นายสุริยา บัวใหญ่",
            "24. นางสาวอารีรัตน์ ศักดาเพชรศิริ",
            "25. นางสาวเอรินทร์ บุตรชา"
        ],
        "52": [
            "1. นายจตุพร นิยมพฤกษ์",
            "2. นางสาวชุติกาญจน์ ลอยลิ่ว",
            "3. นายธำรงชัย ชินวัฒน์",
            "4. นางสาวนันทอง เพิ่มมงคล",
            "5. นายพัชรพงษ์ วัชรเสถียร",
            "6. นางสาวประภัสสร นิยมศิลป์",
            "7. นางสาววนิดา พระจันทร์",
            "8. นายวธัญญู มณีเกศแก้ว",
            "9. นางสาวสร้อยสุดา จันทร์หยวก",
            "10. นายวัชรพงษ์ โพธิภักดิ์",
            "11. นางสาววัชรี ทองพันศรี"
        ],
        "53": [
            "1. นายกิตติบดี หงษ์มาก",
            "2. นายณัฐภัทร สมบรม",
            "3. นางสาวธันยา จุนเจริญ",
            "4. นายนนทวัช ประหยัด",
            "5. นายนัฐศักดิ์ เหล่าลือรัตน์",
            "6. นางสาวบุษกร สมหวัง",
            "7. นางสาวพรทิพย์ วะณะชีพ",
            "8. นายพลากร อนาพร",
            "9. นายยศศรุต นิตยะ",
            "10. นายรัชชัย มั่งคั่ง",
            "11. นายวงศกร สุขล้วน",
            "12. นางสาวแพรภคภร วิศิษฎ์เวศิน",
            "13. นายวิชาญ ทำไร่",
            "14. นางสาวสิริกร รัตนะ",
            "15. นางสาวสิริพร สุขก้อง",
            "16. นางสาวสรัสนันท์ ไข่มุกข์",
            "17. นายสาธิต งามเสงี่ยม",
            "18. นายสุจินดา สุวรรณราษฎร์",
            "19. นายสุรศักดิ์ ปะกิเสนัง",
            "20. นางสาวฐิติชญาณ์ หารสูงเนิน",
            "21. นายอนุวัต เจริญรูป",
            "22. นายอภิสิทธิ์ จิตรราช",
            "23. นางสาวอิงดาว ฤทธี",
            "24. นายเอกราช บุตรพรหม",
            "25. นายพิชิต จันทร์หอม",
            "26. นายเจษฎา เมตไตรยรัตน์",
            "27. นายณัฐวุฒิ คุณชาติ",
            "28. นายศุภพงษ์ เล็กยิ้ม",
            "29. นางสาวหงส์ฟ้า แสนละมุล",
            "30. นางสาวอมิลดา กระแสชล"
        ]
    };

    const specialData = {
        "40": [
            "1. นางสาวกุ้ง ชุ่มมะเริง",
            "2. นางสาวกุลชญา คงสมใจ",
            "3. นางสาวกุลธิดา ชุ่มจิตต์",
            "4. นางสาวสาวิตรี อุทาหรณ์"
        ],
        "41": [
            "1. ร้อยตำรวจโท นที สวัสดิ์วารี",
            "2. นายนิธิศ ผดุงลักษณ์",
            "3. นายพรเทพ สำราญพิษ",
            "4. ดาบตำรวจ วัลลภ ปร่ำนาค",
            "5. นายวิภาคร์ พอกระโทก",
            "6. นายสามารถ เขตสว่าง"
        ]
    };

    function showAlumniList() {
        const year = document.getElementById("alumni-year").value;
        const list = alumniData[year] || [];
        const ul = document.getElementById("alumni-list");
        ul.innerHTML = "";
        list.forEach(name => {
            const li = document.createElement("li");
            li.textContent = name;
            ul.appendChild(li);
        });
    }

    function showSpecialList() {
        const year = document.getElementById("special-year").value;
        const list = specialData[year] || [];
        const ul = document.getElementById("special-list");
        ul.innerHTML = "";
        list.forEach(name => {
            const li = document.createElement("li");
            li.textContent = name;
            ul.appendChild(li);
        });
    }
</script>
@endsection
