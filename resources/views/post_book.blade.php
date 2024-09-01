<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | نشر كتاب</title>
    <link rel="icon" href="../assets/img/logo.png">
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

    <div class="header">
        @include('navbar') <!-- إدراج الشريط العلوي الموحد -->
    </div>

    <div class="contaner_post_book">
        <h2 class="title_post">" نشر كتاب "</h2>
        <form id="addBookForm" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- انشاء كارد خارجى-->
            <span class="title_sec">غلاف الكتاب</span>
            <div class="cover"><input type="file" name="cover_image"></div>
            <input type="text" name="title" required placeholder="اسم الكتاب">
            <select name="category" required>
                <option selected disabled>اختار تصنيف الكتاب</option>
                <option value="التوحيد"> التوحيد</option>
                <option value="احاديث"> احاديث</option>
                <option value="ردود"> ردود</option>
            </select>
            <input type="text" name="author" required placeholder="المؤلف">
            <select name="section" required>
                <option selected disabled>اختار قسم الكتاب</option>
                <option value="دينى"> دينى</option>
                <option value="علمى"> علمى</option>
                <option value="تاريخى"> تاريخى</option>
            </select>
            <select name="language" required>
                <option selected disabled>اختار لغة الكتاب</option>
                <option value="العربية"> العربية</option>
                <option value="الانجليزية"> الانجليزية</option>
            </select>
            <input type="number" name="pages" required placeholder="عدد الصفحات">
            <input type="number" name="file_size" required placeholder="حجم الملف">
            <select name="file_type" required>
                <option selected disabled>اختار نوع الملف</option>
                <option value="PDF"> PDF</option>
                <option value="JPG"> JPG</option>
                <option value="PNG"> PNG</option>
            </select>
            <!-- حقل إدخال التاريخ مع JavaScript للتحقق من القيم المدخلة -->
<input type="date" name="publication_date" required min="1000-01-01" max="9999-12-31" id="publication_date" onblur="validateDate()">

<script>
    function validateDate() {
        const dateInput = document.getElementById('publication_date');
        const dateValue = dateInput.value;

        // تحقق من أن التاريخ ليس فارغًا
        if (dateValue === "") {
            alert("يرجى إدخال تاريخ صالح.");
            dateInput.value = ""; // إعادة تعيين القيمة في حالة الإدخال غير صالح
            return false;
        }

        // تحقق من أن السنة في النطاق المسموح
        const dateParts = dateValue.split("-");
        const year = parseInt(dateParts[0], 10);

        if (year < 1000 || year > 9999) {
            alert("السنة يجب أن تكون بين 1000 و9999.");
            dateInput.value = ""; // إعادة تعيين القيمة في حالة الإدخال غير صالح
            return false;
        }

        return true; // التاريخ صالح
    }
</script>
            <textarea name="description" required placeholder="وصف الكتاب ..."></textarea>
            <button type="submit">نشر الكتاب</button>
        </form>
    </div>

    <!-- نافذة منبثقة لرسالة التأكيد -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <div class="checkmark">✔️</div>
            <h2>تم نشر الكتاب بنجاح!</h2>
        </div>
    </div>

    <div class="footer">
        <p>Copyright © <span>Mohamed Mahmoud and اثر</span></p>
    </div>

    <script src="../assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
        document.getElementById('addBookForm').addEventListener('submit', function(event) {
            event.preventDefault(); // منع الإرسال الافتراضي

            // عرض النافذة المنبثقة
            openSuccessModal();

            // إرسال النموذج بعد عرض النافذة (إذا كان ذلك مطلوبًا)
            setTimeout(() => {
                this.submit(); // قم بإرسال النموذج بعد عرض النافذة
            }, 1000); // تأخير بسيط قبل الإرسال
        });
    </script>

</body>

</html>
