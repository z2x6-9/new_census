<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع التعداد</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            background-color: #fff;
            max-width: 330px;
            padding: 15px;
            border-radius: 1em;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto shadow">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-4 mt-3 fw-normal">الرجاء تسجيل الدخول</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="أسم المستخدم">
                <label for="floatingInput">أسم المستخدم</label>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">كلمة المرور</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="checkbox mb-4">
                <label>
                    <input type="checkbox" name="remember" value="remember-me"> تذكرني
                </label>
            </div>
            <input type="submit" class="w-100 btn btn-lg btn-primary mb-2" value="تسجيل الدخول">
        </form>
    </main>

    <footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
        &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank" href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
            4 You</a>, كل الحقوق محفوظة.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>