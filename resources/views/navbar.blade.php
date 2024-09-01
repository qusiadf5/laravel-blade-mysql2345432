
<style>
    /* تنسيق الأقسام الجديدة */
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        box-sizing: border-box;
        max-width: 1200px;
        margin: 0 auto;
    }
    path[stroke-linecap="round"][stroke-linejoin="round"] {
        display: none;
        margin: 0;
        padding: 0;
    }
    .container svg {
        display: none;
    }
        /* تأكد من أن الرابط حول الشعار لا يؤثر على تنسيق الشعار */
.logo a {
    display: block; /* تأكد من أن الرابط يتصرف ككتلة لتسهيل التنسيق */
    text-decoration: none; /* إزالة أي تنسيق افتراضي من الرابط */
}

.logo img {
    display: block; /* إزالة أي مسافات إضافية حول الصورة */
    max-width: 100%; /* التأكد من أن الصورة تتناسب مع العنصر الحاوي */
    height: auto; /* الحفاظ على نسبة العرض إلى الارتفاع للصورة */
}

/* يمكنك ضبط الحواف والمسافات حسب الحاجة */
.logo {
    margin: 0;
    padding: 0;
}
    .section-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
        width: 100%;
        flex-wrap: wrap;
    }
    .section-box {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        flex: 1;
        min-width: 280px;
        max-width: 100%;
        box-sizing: border-box;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .section-box h2 {
        font-size: 1.2em;
        color: #333;
        margin-bottom: 15px;
        border-bottom: 2px solid #ffc414;
        padding-bottom: 10px;
        width: 80%;
        margin: 0 auto;
    }
    .section-box .section-content {
        margin-top: 15px;
    }
    /* تنسيق الأزرار */
    .section-box button,
    .section-box input[type="submit"],
    .section-box a {
        background-color: #ffc414;
        color: #333;
        padding: 10px 20px;
        font-size: 1.1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        display: inline-block;
        text-decoration: none;
    }
    .section-box button:hover,
    .section-box input[type="submit"]:hover,
    .section-box a:hover {
        background-color: #ffcd4e;
    }
    .section-box button:focus,
    .section-box input[type="submit"]:focus,
    .section-box a:focus {
        outline: none;
        box-shadow: 0 0 5px #ffc414;
    }
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
    }
    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        max-width: 400px;
        width: 90%;
        position: relative;
    }
    .modal-content h2 {
        margin: 0;
        font-size: 1.5em;
        margin-bottom: 20px;
    }
    .modal-content button {
        background-color: #ffc414;
        color: #333;
        padding: 10px 20px;
        font-size: 1.1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }
    .modal-content button:hover {
        background-color: #ffcd4e;
    }
    /* زر الإغلاق */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 1.5em;
        cursor: pointer;
    }
    .close-btn:hover {
        color: red;
    }
    /* التنسيق التفاعلي للشاشات الصغيرة */
    @media (max-width: 768px) {
        .section-row {
            flex-direction: column;
            align-items: center;
        }
        .section-box {
            width: 100%;
            max-width: 100%;
        }
        .section-box h2 {
            width: 100%;
        }
    }
    @media (max-width: 480px) {
        .section-box {
            padding: 15px;
        }
        .section-box h2 {
            font-size: 1em;
            padding-bottom: 8px;
        }
        .section-box button,
        .section-box input[type="submit"],
        .section-box a {
            font-size: 1em;
            padding: 8px 15px;
        }
    }
</style>


<!-- resources/views/navbar.blade.php -->
<div class="header">
    <div class="right">
        <div class="logo">
            <a href="{{ url('/') }}"> <!-- رابط الصفحة الرئيسية -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
            </a>
        </div>
        <div class="box_search">
            <input class="search_input" id="search_input" type="text" placeholder="Search ...">
            <ion-icon id="opne_search" name="search"></ion-icon>
            <ion-icon id="close_search" name="close"></ion-icon>
        </div>
    </div>

    <div class="left">
        <div class="nav" id="nav">
            <li><a class="active" href="{{ url('/') }}">الصفحة الرئيسية</a></li>
            <li><a href="{{ url('/library') }}">المكتبة</a></li>
            <li><a href="{{ url('/posts') }}">مقالات</a></li>
            <li><a class="post_book" href="javascript:void(0)" onclick="openModal()">ردود على المخالفين</a></li>
            <li><a href="{{ url('/about') }}">من نحن</a></li>

            @guest
                <a href="{{ route('login') }}" class="div login">تسجيل الدخول</a>
            @endguest

            @auth
                <a href="/profile" class="div account">
                    <div class="cover"><img src="{{ asset('assets/img/profile.jpg') }}" alt="profile"></div>
                    <h3 class="name">حسـابى</h3>
                </a>

                <a href="{{ route('logout') }}"
                    class="div logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    تسجيل الخروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>

        <div class="action">
            <!-- أيقونة الإشعارات -->
            <div class="div notifications" id="notifications">
                <ion-icon name="notifications"></ion-icon>
            </div>
            
            <!-- القائمة المنسدلة -->
            <div class="dropdown_notifications" id="dropdown_notifications">
                <div>قريبا ..</div>
            </div>
        
            <div class="icon_side">
                <ion-icon id="menu" name="menu"></ion-icon>
                <ion-icon id="close" name="close"></ion-icon>
            </div>
        </div>
        
        
    </div>
</div>

<!-- نافذة منبثقة -->
<div id="modal" class="modal">
    <div class="modal-content">
        <h2>قريباً...</h2>
        <button onclick="closeModal()">إغلاق</button>
    </div>
</div>

<style>
    /* تصميم النافذة المنبثقة */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
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

    /* عندما تكون النافذة مفتوحة */
    .modal.show {
        opacity: 1;
    }

    .modal.show .modal-content {
        transform: translateY(0);
        opacity: 1;
    }

</style>

<script>
    // فتح النافذة المنبثقة
    function openModal() {
        const modal = document.getElementById("modal");
        modal.style.display = "flex";
        setTimeout(() => {
            modal.classList.add("show");
        }, 10); // تأخير صغير لضمان تطبيق التغيير في الأنيميشن
    }

    // إغلاق النافذة المنبثقة
    function closeModal() {
        const modal = document.getElementById("modal");
        modal.classList.remove("show");
        setTimeout(() => {
            modal.style.display = "none";
        }, 500); // تأخير حتى انتهاء الأنيميشن قبل تغيير display
    }
</script>
<script>
    // الاستماع للنقر على أيقونة الإشعارات
    document.getElementById('notifications').addEventListener('click', function(event) {
        event.stopPropagation(); // منع إغلاق الدروب داون عند النقر على الأيقونة
        const dropdown = document.getElementById('dropdown_notifications');
        dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block'; // تبديل حالة العرض
    });

    // إغلاق الدروب داون عند النقر خارجها
    window.addEventListener('click', function() {
        const dropdown = document.getElementById('dropdown_notifications');
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        }
    });
</script>
