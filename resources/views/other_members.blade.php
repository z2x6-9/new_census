<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع التعداد</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div id="dynamic-forms" class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">معلومات باقي افراد الأسرة</h1>
                <form class="form-container card shadow mb-5" method="POST" action="/members">
                    @csrf
                    <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-4">الفرد الأول</h4>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="Name" class="form-control mb-3" id="floatingInput"
                            placeholder="الأسم الثلاثي مع اللقب" required>
                        <label for="floatingInput">الأسم الثلاثي مع اللقب</label>
                    </div>

                    <div class="form-floating">
                        <input type="date" name="Date_Of_Birth" class="form-control mb-3" id="floatingInput"
                            placeholder="تاريخ الميلاد" required>
                        <label for="floatingInput">تاريخ الميلاد</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="Academic_Achievement" class="form-control mb-3" id="floatingInput" placeholder="التحصيل الدراسي"
                            required>
                        <label for="floatingInput">التحصيل الدراسي</label>
                    </div>

                    <div class="mb-3">
                        <select name="Relationship" class="form-select p-3" id="gender" required>
                            <option value="" selected disabled>موقعه من الأسرة</option>
                            <option value="أخ">أخ</option>
                            <option value="أخت">أخت</option>
                            <option value="أبن">أبن</option>
                            <option value="أبنة">أبنة</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select name="Gender" class="form-select p-3" id="gender" required>
                            <option value="" selected disabled>الجنس</option>
                            <option value="ذكر">ذكر</option>
                            <option value="انثى">انثى</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-danger" onclick="removeForm(this)"
                        style="display: none;">إزالة الفرد</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="submit" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">هل أنت متأكد؟</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            هل أنت متأكد من أنه ليس لديك أي أفراد آخرين في العائلة لإضافتهم؟
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">تراجع</button>
                            <button type="submit" class="btn btn-primary">تسليم</button>

                        </div>
                    </div>
                </div>
            </div>
            <input type="number" name="number" value="{{ $number }}" style="display: none">
            </form>
        </div>
        <div class="text-center mt-4 mb-5">
            <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal"
                data-bs-target="#submit">تسليم</button>
            <button type="button" class="btn btn-primary" onclick="addNewForm()">إضافة فرد جديد</button>
        </div>
    </div>
    </div>

    <script>
function addNewForm() {
    var formContainer = $('.form-container:first').clone();
    formContainer.find('input').val('');
    formContainer.find('button').show();
    $('#dynamic-forms').append(formContainer);
}

function removeForm(button) {
    $(button).parent().parent().remove();
}

function submitForms() {
    // احصل على جميع النماذج الديناميكية
    var forms = $('#dynamic-forms').children();

    // قم بتكرارها وإرسال بيانات كل نموذج إلى قاعدة البيانات
    for (var i = 0; i < forms.length; i++) {
        var form = $(forms[i]);

        // احصل على بيانات النموذج
        var data = form.serialize();

        // أرسل البيانات إلى قاعدة البيانات
        $.post('/api/submit', data);
    }
}

    </script>

    <footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
        &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank"
            href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
            4 You</a>, كل الحقوق محفوظة.
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
