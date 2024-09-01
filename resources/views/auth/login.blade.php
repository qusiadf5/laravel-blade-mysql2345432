<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | تسجيل الدخول</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <div class="page">
        <!-- Dynamic Navigation based on login state -->
        <div class="navigation">
            @if(auth()->check())
                <a href="/dashboard" class="div account">
                    <div class="cover">
                        <img src="../assets/img/profile.jpg">
                    </div>
                    <h3 class="name">حسابي</h3>
                </a>
                <a href="{{ route('logout') }}" class="div logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    تسجيل الخروج
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
            @endif

            <!-- Admin Panel Link (hidden for now) -->
            @if(false)
                <a href="Backend/dashboard.html" class="div dashboard">لوحة التحكم</a>
            @endif
        </div>

        <div class="form login" id="form_login">
            <div class="img_login_signin">
                <img src="../assets/img/img_login_signin.png" alt="">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img class="logo" src="../assets/img/logo.png" alt="">
                <span class="title_page">تسجيل الدخول</span>
                <input id="email" type="email" name="email" required placeholder="البريد الالكترونى">
                <input id="password" type="password" name="password" required placeholder="كلمة السر">
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}">نسيت كلمة المرور؟</a>
                </div>
                <button class="btn_login" id="btn_login" type="submit">تسجيل الدخول</button>
                <button class="btn btn_register" type="button" onclick="window.location.href='/register';">إنشاء حساب جديد</button>

                <div class="login_other">
                    <div>
                        <span></span>
                        <h2>او</h2>
                        <span></span>
                    </div>
                    <a href="auth/google/"><img src="../assets/img/icon_google.png"> جوجل</a>
                    <a href="#"><img src="../assets/img/icon_discord.png" alt=""> ديسكورد</a>
                </div>
                <div class="back_home"><a href="/">الرجوع للصفحه الرئيسية</a></div>
            </form>
            
        </div>

        <div class="form signin" id="form_signin">
            <div class="img_login_signin">
                <img src="../assets/img/img_login_signin.png" alt="">
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <img class="logo" src="../assets/img/logo.png" alt="">
                <span class="title_page">الاشتراك</span>
                <input type="text" name="name" required placeholder="الاسم الكامل">
                <input type="email" name="email" required placeholder="البريد الالكترونى">
                <input type="password" name="password" required placeholder="كلمة السر">
               <button class="btn_signin" id="btn_signin" type="submit">الاشتراك</button>
                <button type="button" class="btn_login" onclick="login()">تسجيل الدخول</button>
                <div class="login_other">
                    <div>
                        <span></span>
                        <h2>او</h2>
                        <span></span>
                    </div>
                    <a href="auth/google"><img src="../assets/img/icon_google.png"> تسجيل</a>
                    <a href="auth/discord"><img src="../assets/img/icon_discord.png" alt=""> ديسكورد</a>
                </div>
                <div class="back_home"><a href="../index.html">الرجوع للصفحه الرئيسية</a></div>
            </form>
        </div>
    </div>

    <script>
        let btn_signin = document.getElementById("btn_signin");
        let btn_login = document.getElementById("btn_login");
        let form_login = document.getElementById("form_login");
        let form_signin = document.getElementById("form_signin");

        function signin() {
            form_login.style.display = "none";
            form_signin.style.display = "flex";
        }

        function login() {
            form_login.style.display = "flex";
            form_signin.style.display = "none";
        }
    </script>
</body>

</html>
