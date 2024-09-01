<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | الملف الشخصى</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="../assets/img/logo.png">
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
</head>

<body>
    <div class="header">
        @include('navbar') <!-- إدراج الشريط العلوي الموحد -->
    </div>

    <div class="contaner_profile">
        <!-- معلومات الملف الشخصي -->
        <div class="profile">
            <div class="head">
                <div class="head">
                    @php
                        $isAdmin = DB::table('admins')->where('email', Auth::user()->email)->exists();
                    @endphp
                    @if($isAdmin)
                        <a class="post_book" href="/post_book">نشر كتاب</a>
                    @else
                        <a class="post_book" href="javascript:void(0)" onclick="openNotAuthorizedModal()">نشر كتاب</a>
                    @endif
                </div>
                <a href="{{ route('logout') }}"
                class="div logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> تسجيل الخروج 
            </a>
        </div>

            @if(Auth::check())
            <div class="profile_me">
                <div class="cover">
                    <form action="{{ route('profile.update_photo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile_photo" id="profile" style="display: none;" onchange="this.form.submit()">
                        <label for="profile">
                            <img src="{{ Auth::user()->profile_photo_path ? asset('storage/' . Auth::user()->profile_photo_path) : asset('images/default-profile.png') }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover">
                        </label>
                    </form>
                </div>
                <div class="name">
                    <span>{{ Auth::user()->name }}</span>
                </div>
                <div class="email">
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <div class="role">
                    @php
                        $isAdmin = DB::table('admins')->where('email', Auth::user()->email)->exists();
                    @endphp
                    @if($isAdmin)
                        <span>Admin</span>
                    @else
                        <span>Member</span>
                    @endif
                </div>
            </div>
            
            
            
            <!-- زر نشر كتاب -->

            <!-- نافذة منبثقة لعدم الصلاحية -->
            <div id="notAuthorizedModal" class="modal">
                <div class="modal-content">
                    <h2>ليس لديك الصلاحيات الكافية</h2>
                    <button onclick="closeNotAuthorizedModal()">حسنا</button>
                </div>
            </div>
            
            <script>
                // فتح النافذة المنبثقة
                function openNotAuthorizedModal() {
                    const modal = document.getElementById("notAuthorizedModal");
                    modal.style.display = "flex";
                    setTimeout(() => {
                        modal.classList.add("show");
                    }, 10);
                }
            
                // إغلاق النافذة المنبثقة
                function closeNotAuthorizedModal() {
                    const modal = document.getElementById("notAuthorizedModal");
                    modal.classList.remove("show");
                    setTimeout(() => {
                        modal.style.display = "none";
                    }, 500);
                }
            </script>
            
            <style>
                /* تصميم النافذة المنبثقة لعدم الصلاحية */
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
            .role {
                color: #ffc414
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
            
            

            @else
            <div class="profile_me">
                <p>يرجى تسجيل الدخول لعرض المعلومات الشخصية.</p>
            </div>
            @endif
        </div>
    </div>

    <!-- قسم الوظائف -->
    <div class="container">
        <!-- الصف الأول من الأقسام (3 أقسام متجاورة) -->
        @if(Auth::check())
        <div class="section-row">
            <div class="section-box">
                <h2>معلومات الملف الشخصي</h2>
                <div class="section-content">
                    @livewire('profile.update-profile-information-form')
                </div>
            </div>

            <div class="section-box">
                <h2>تغيير كلمة المرور</h2>
                <div class="section-content">
                    @livewire('profile.update-password-form')
                </div>
            </div>

            <div class="section-box">
                <h2>المصادقة الثنائية</h2>
                <div class="section-content">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            </div>
        </div>

        <!-- الصف الثاني من الأقسام (2 أقسام متجاورة) -->
        <div class="section-row">
            <div class="section-box">
                <h2>الجلسات الأخرى</h2>
                <div class="section-content">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="section-box">
                <h2>حذف الحساب</h2>
                <div class="section-content">
                    @livewire('profile.delete-user-form')
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>

    <div class="footer">
        <p>Copyright © <span>Mohamed Mahmoud and اثر</span></p>
    </div>


    <script src="../assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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

</body>

</html>
