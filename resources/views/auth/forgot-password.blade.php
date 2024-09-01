<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعادة تعيين كلمة المرور</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
        /* نافذة منبثقة */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transform: translateY(-50px);
            transition: transform 0.5s ease, opacity 0.5s ease;
            opacity: 0;
        }

        /* عند ظهور النافذة */
        .modal.show {
            opacity: 1;
        }

        .modal.show .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        /* تنسيق علامة الصح */
        .checkmark {
            font-size: 3rem;
            color: #28a745;
            margin-bottom: 10px;
        }

        /* إخفاء رسالة النجاح في الزاوية اليسرى العلوية */
        .alert {
            display: none !important;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="form" id="form_reset">
            <div class="img_login_signin">
                <img src="../assets/img/img_login_signin.png" alt="">
            </div>
            <form method="POST" action="{{ route('password.email') }}" id="forgotPasswordForm">
                @csrf
                <img class="logo" src="../assets/img/logo.png" alt="">
                <span class="title_page">إعادة تعيين كلمة المرور</span>
                <input id="email" type="email" name="email" required placeholder="البريد الالكتروني">
                <button class="btn_login" type="submit" style="background-color: var(--primary-color); color: white;">إرسال رابط إعادة تعيين كلمة المرور</button>
                <div class="back_home"><a href="/">الرجوع للصفحة الرئيسية</a></div>
            </form>
        </div>

        <!-- نافذة منبثقة لرسالة التأكيد -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <div class="checkmark">✔️</div>
                <h2>تم إرسال الرسالة بنجاح!</h2>
            </div>
        </div>
    </div>

    <script>
        // فتح النافذة المنبثقة
        function openSuccessModal() {
            const modal = document.getElementById("successModal");
            modal.style.display = "flex";
            setTimeout(() => {
                modal.classList.add("show");
            }, 10); // تأخير صغير لضمان تطبيق التغيير في الأنيميشن

            // إغلاق النافذة بعد 3 ثوانٍ
            setTimeout(() => {
                closeSuccessModal();
            }, 3000);
        }

        // إغلاق النافذة المنبثقة
        function closeSuccessModal() {
            const modal = document.getElementById("successModal");
            modal.classList.remove("show");
            setTimeout(() => {
                modal.style.display = "none";
            }, 500); // تأخير حتى انتهاء الأنيميشن قبل تغيير display
        }

        // عند إرسال النموذج بنجاح
        document.getElementById('forgotPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault(); // منع الإرسال الافتراضي

            // عرض النافذة المنبثقة
            openSuccessModal();

            // إرسال النموذج بعد عرض النافذة
            setTimeout(() => {
                this.submit(); // قم بإرسال النموذج بعد عرض النافذة
            }, 1000); // تأخير بسيط قبل الإرسال
        });
    </script>
</body>
</html>
