<div class="page-title position-relative">
        <!-- รูปใหญ่เต็มจอ -->
        <div class="position-relative">
    <img src="{{ asset('template/assets/img/course-1.jpg') }}" 
         class="img-fluid w-100" 
         alt="..." 
         style="height: 400px; object-fit: cover;">

    <!-- overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background-color: rgba(0, 0, 0, 0.4);">
    </div>

    <!-- ข้อความบน overlay -->
    
</div>


        <!-- ข้อความตรงกลางรูป -->
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="display-3 mb-1 text-shadow">{{ __('index.faculty_name') }}</h1>
            <h2 class="text-shadow">{{ __('index.university_name') }}</h2>
            <p class="text-shadow">{{ __('index.motto') }}</p>
        </div>

        <!-- Breadcrumb ทับอยู่ล่างรูป -->
        {{-- <nav class="breadcrumbs position-absolute bottom-0 start-0 w-100 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container text-white">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">คณะนิติศาสตร์</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">เกี่ยวกับคณะ</li>
                </ol>
            </div>
        </nav> --}}
    </div>