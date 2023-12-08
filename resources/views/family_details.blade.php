<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع التعداد</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <style>
        .card-text{
            font-size: large;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">
                    عائلة:
                    <span>{{ $Leader->Leader }}</span>
                </h1>
                <div class="d-flex justify-content-between mb-3">
                    <a class="btn btn-outline-primary" href="/dashboard">الرجوع</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        حذف
                    </button>
                </div>
                <!-- Family Head Section -->
                <div class="card mb-4">
                    <div class="card-header fw-bold">
                        <h4>معلومات مسؤول الأسرة</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">الأسم الثلاثي مع اللقب: {{ $Leader->Leader }}</p>
                        <p class="card-text">تاريخ الميلاد: {{ $Leader->Date_Of_Birth }}</p>
                        <p class="card-text">رقم الهاتف: {{ $Leader->Phone_Number }}</p>
                        <p class="card-text">التحصيل الدراسي: {{ $Leader->Academic_Achievement }}</p>
                        <p class="card-text">الجنس: {{ $Leader->Gender }}</p>
                    </div>
                </div>

                <!-- Family Members Section -->
                <div class="card mb-4">
                    <div class="card-header fw-bold">
                        <h4>بقية أفراد الأسرة</h4>
                    </div>
                    <div class="card-body">
                        <!-- Family Member 1 -->
                        @foreach ($members as $member)

                        <div class="mb-3">
                            <h5 class="mb-3">الفرد {{ $loop->index + 1  }}</h5>
                            <p class="card-text">الأسم الثلاثي مع اللقب: {{ $member->Name }}</p>
                            <p class="card-text">تاريخ الميلاد: {{ $member->Date_Of_Birth }}</p>
                            <p class="card-text">التحصيل الدراسي: {{ $member->Academic_Achievement }}</p>
                            <p class="card-text">موقعه من الأسرة: {{ $member->Relationship }}</p>
                            <p class="card-text">الجنس: {{ $member->Gender }}</p>
                            <hr>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">هل أنت متأكد؟</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    هل أنت متأكد أنك تريد حذف هذه العائلة بكل أفرادها؟
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">تراجع</button>
                    <a href="/user/delete/{{ $Leader->id }}"><button type="button" class="btn btn-danger">حذف</button></a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
        &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank" href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
            4 You</a>, كل الحقوق محفوظة.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>