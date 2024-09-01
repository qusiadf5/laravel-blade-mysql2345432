<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | فديوهات المشايخ</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="../assets/img/logo.png">
</head>

<body>
    <div class="header">
        @include('navbar') <!-- إدراج الشريط العلوي الموحد -->
    </div>
            <div class="action">
                <!-- Show Notifications if login person -->
                <div onclick="notifications()" class="div notifications" id="notifications">
                    <ion-icon name="notifications"></ion-icon>
                </div>
                <div class="dropdown_notifications" id="dropdown_notifications">
                    <div>تم الموافقه على نشر كتابك</div>
                    <div>تم نشر كتاب جديد على</div>
                </div>

                <!--  -->
                <div class="icon_side">
                    <ion-icon id="menu" name="menu"></ion-icon>
                    <ion-icon id="close" name="close"></ion-icon>
                </div>
            </div>
        </div>
    </div>

    <div class="main video">
        <h2 class="title_video">مقاطع المشايخ</h2>

        <div class="all_card all_card_video">

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="../assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>


        </div>
    </div>


    <div class="footer">
        <p>Copyright © <span>Mohamed Mahmoud and اثر</span></p>
    </div>

    <script src="../assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>