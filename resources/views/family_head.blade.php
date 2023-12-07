<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع التعداد</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">معلومات مسؤول الأسرة</h1>

                <form method="POST" action="{{ route('famile.store') }}">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="Leader" class="form-control mt-3" id="floatingInput" placeholder="الأسم الثلاثي مع اللقب" required>
                        <label for="floatingInput">الأسم الثلاثي مع اللقب</label>
                        @error('Leader')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="date" name="Date_Of_Birth" class="form-control mt-3" id="floatingInput" placeholder="تاريخ الميلاد" required>
                        <label for="floatingInput">تاريخ الميلاد</label>
                        @error('Date_Of_Birth')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="Living" class="form-control mt-3" id="Living" placeholder="تاريخ الميلاد" required>
                        <label for="Living">السكن الحالي</label>
                        @error('Living')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="number" name="Phone_Number" inputmode="numeric" class="form-control mt-3" id="floatingInput" placeholder="رقم الهاتف" required>
                        <label for="floatingInput">رقم الهاتف</label>
                        @error('Phone_Number')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="Academic_Achievement" class="form-control mt-3" id="floatingInput" placeholder="التحصيل الدراسي" required>
                        <label for="floatingInput">التحصيل الدراسي</label>
                        @error('Academic_Achievement')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <select class="form-select p-3" name="Gender" id="gender" required>
                            <option value="" selected disabled>الجنس</option>
                            <option value="ذكر">ذكر</option>
                            <option value="انثى">انثى</option>
                        </select>
                        @error('Gender')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-center mt-4 mb-5">
                        <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#submit">تسليم</button>
                        <input type="submit" name="submit1" value="لدي المزيد من أفراد الأسرة" class="btn btn-primary">
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="submit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">هل أنت متأكد؟</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    هل أنت متأكد من أنه ليس لديك أي أفراد آخرين في العائلة لإضافتهم؟
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">تراجع</button>
                                    <input type="submit" name="submit2" value="تسليم" class="btn btn-primary" />

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
        &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank" href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
            4 You</a>, كل الحقوق محفوظة.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>