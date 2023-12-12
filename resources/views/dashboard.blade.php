<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع التعداد</title>

    <link rel="stylesheet" href="../package-lock/bootstrap/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{ $total }}
    <div class="container my-5">
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-secondary" href="{{ route('logout') }}">تسجيل خروج</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-4">إحصائيات</h1>
                <div class="row">
                    <div class="col-md-4">
                        <h4>اجمالي النسمات: <strong>{{ $total }}</strong></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>اجمالي الذكور: <strong>{{ $male }}</strong></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>اجمالي الأناث: <strong>{{ $female }}</strong></h4>
                    </div>
                </div>
            </div>
        </div>

        @if ($SimilarityNumber > 1)
        <div class="card mt-4">
            <div class="card-body bg-warning">
                <h2 class="card-title mb-4">تحذير</h2>
                <h5><strong>انتباه: </strong>هناك {{ $SimilarityNumber}} سجلات مشبوهة</h5>
            </div>
        </div>
        @endif

        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title mb-4">جميع السجلات</h2>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>التسلسل</th>
                            <th>أسم مسؤول الاسرة</th>
                            <th>رقم الهاتف</th>
                            <th>أتخاذ اجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="{{ $item->color }}">{{ $loop->index + 1  }}</td>
                            <td class="{{ $item->color }}">{{ $item->Leader }}</td>
                            <td class="{{ $item->color }}">{{ $item->Phone_Number }}</td>
                            <td class="{{ $item->color }}">
                                <a class="btn btn-primary" href="/showfamile/{{ $item->id }}">عرض التفاصيل</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>

    <footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
        &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank" href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
            4 You</a>, كل الحقوق محفوظة.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>