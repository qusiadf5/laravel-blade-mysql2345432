<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | إنشاء حساب</title>
    <link rel="stylesheet" href="../assets/css/register.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @livewireStyles
</head>

<body>

    <div class="page">
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

        <div class="form signin" id="form_signin">
            <div class="img_login_signin">
                <img src="../assets/img/img_login_signin.png" alt="">
            </div>

            <form method="POST" action="{{ route('register') }}" wire:submit.prevent="register">
                @csrf
                <img class="logo" src="../assets/img/logo.png" alt="">
                <span class="title_page">الاشتراك</span>

                <!-- Name Input -->
                <input id="name" type="text" name="name" class="input" wire:model.defer="name" required placeholder="الاسم الكامل" :value="old('name')" required autofocus autocomplete="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror

                <!-- Email Input -->
                <input id="email" type="email" name="email" class="input" wire:model.defer="email" required placeholder="البريد الالكترونى" :value="old('email')" required autocomplete="username">
                @error('email') <span class="error">{{ $message }}</span> @enderror

                <!-- Password Input -->
                <input id="password" type="password" name="password" class="input" wire:model.defer="password" required placeholder="كلمة السر" required autocomplete="new-password">
                @error('password') <span class="error">{{ $message }}</span> @enderror

                <!-- Password Confirmation Input -->
                <input id="password_confirmation" type="password" name="password_confirmation" class="input" wire:model.defer="password_confirmation" required placeholder="تأكيد كلمة السر" required autocomplete="new-password">
                @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror

                <!-- Terms and Privacy Policy -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="terms">
                        <label for="terms">
                            <input type="checkbox" name="terms" id="terms" wire:model.defer="terms" required />
                            <span>أوافق على <a href="{{ route('terms.show') }}" target="_blank">شروط الخدمة</a> و <a href="{{ route('policy.show') }}" target="_blank">سياسة الخصوصية</a></span>
                        </label>
                    </div>
                    @error('terms') <span class="error">{{ $message }}</span> @enderror
                @endif

                <!-- Sign Up Button -->
                <button class="btn_signin" id="btn_signin" type="submit">إنشاء حساب</button>
                <!-- Redirect to Login Button -->
                <button type="button" class="btn_login" id="btn_login" onclick="login()">لديك حساب بالفعل؟ تسجيل الدخول</button>

                <div class="login_other">
                    <div>
                        <span></span>
                        <h2>او</h2>
                        <span></span>
                    </div>
                    <a href="auth/google"><img src="../assets/img/icon_google.png"> تسجيل</a>
                    <a href="auth/discord"><img src="../assets/img/icon_discord.png" alt=""> ديسكورد</a>
                </div>
                <div class="back_home"><a href="/">الرجوع للصفحه الرئيسية</a></div>
            </form>
        </div>
    </div>

    @livewireScripts
    <script>
        function login() {
            window.location.href = "/login";
        }
    </script>
</body>

</html>
