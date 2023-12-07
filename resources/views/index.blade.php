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
                <div class="text-center mb-4">
                    <h1>مرحباً بكم في موقع التعداد السكاني</h1>
                    <p class="lead">ساعدونا في جمع معلومات قيمة من خلال المشاركة في التعداد.</p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">التعليمات</h2>
                        <h5>إعداد المعلومات اللازمة:</h5>
                        <p class="card-text">
                            اجمع المعلومات الأساسية مثل الأسماء والأعمار والتفاصيل الأخرى ذات الصلة لجميع أفراد الأسرة
                            قبل ملء النموذج.
                        </p>

                        <h5>الأتصال بالإنترنت:</h5>
                        <p class="card-text">
                            تأكد من وجود اتصال إنترنت مستقر وآمن لمنع فقدان البيانات وانقطاعها أثناء إكمال النموذج.
                        </p>

                        <h5>استكمال النموذج:</h5>
                        <p class="card-text">
                            اقرأ كل سؤال بعناية وقدم معلومات دقيقة. استخدم الإرشادات المقدمة للمساعدة في الإجابة على
                            أسئلة محددة. </p>

                        <h5>أمن البيانات:</h5>
                        <p class="card-text">
                            خصوصيتك هي في غاية الأهمية. معلوماتك الشخصية محمية ولن يتم استخدامها إلا للأغراض الإحصائية.
                        </p>

                        <h5>آخر موعد للتقديم:</h5>
                        <p class="card-text">
                            أكمل نموذج التعداد قبل 1/6/2024 للتأكد من إدراج معلوماتك في التعداد النهائي. </p>
                        <p><strong>نشكركم على تعاونكم في إنجاح التعداد. مشاركتك أمر بالغ الأهمية لتشكيل مستقبل
                                مجتمعنا.</strong></p>
                    </div>
                </div>

                <div class="text-center mt-4 mb-5">
                    <a href="{{ route('index') }}" class="btn btn-primary">البدء</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
        &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank" href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
            4 You</a>, كل الحقوق محفوظة.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>