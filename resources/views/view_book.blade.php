<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | عرض الكتاب</title>
    <link rel="icon" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../assets/css/main.css">
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


    <div class="contaner_view_book">
        <div class="side_hashtag">
            <div class="head"><label for="#"><ion-icon name="search"></ion-icon></label> <span>اقسام الكتب</span></div>
            <a href="#">الروايات والقصص الأدبية <ion-icon name="book"></ion-icon></a>
            <a href="#">التنمية البشرية وتطوير الذات <ion-icon name="book"></ion-icon></a>
            <a href="#">الديانة الإسلامية <ion-icon name="book"></ion-icon></a>
            <a href="#">التاريخ <ion-icon name="book"></ion-icon></a>
            <a href="#">الفقه الإسلامي <ion-icon name="book"></ion-icon></a>
            <a href="#">الأدب <ion-icon name="book"></ion-icon></a>
            <a href="#">تفسير القرآن الكريم <ion-icon name="book"></ion-icon></a>
            <a href="#">العقيدة الإسلامية <ion-icon name="book"></ion-icon></a>
            <a href="#">الثقافة <ion-icon name="book"></ion-icon></a>
        </div>

        <div class="box_view">

            <div class="view_book">
                <div class="right">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                </div>

                <div class="left">
                    <h1>منهج شيخ الاسلام</h1>
                    <span class="star">
                        <ion-icon class="active_star" name="star"></ion-icon>
                        <ion-icon class="active_star" name="star"></ion-icon>
                        <ion-icon class="active_star" name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>

                        <span>( 81 تقييمات )</span>
                    </span>

                    <div class="detalis_book">

                        <div>
                            <span>المؤلف</span>
                            <span>قسم </span>
                            <span>اللغة </span>
                            <span>الصفحات</span>
                            <span>حجم الملف </span>
                            <span>نوع الملف </span>
                            <span>تاريخ الانشاء </span>
                        </div>
                        <div>
                            <span>: اسم المؤلف</span>
                            <span>: الدين</span>
                            <span>: العربية</span>
                            <span>: 100</span>
                            <span>: 500 ميجا بايت</span>
                            <span>: PDF</span>
                            <span>: 11 ديسمبر 2018</span>
                        </div>
                    </div>

                    <div class="reat_star">
                        <a onclick="open_menu_star()"><ion-icon name="star"></ion-icon> قيِّم</a>

                        <div class="menu_star" id="menu_star">
                            <ion-icon onclick="close_menu_star()" name="close"
                                style="font-size: 30px; cursor: pointer; padding: 10px; border-radius: 100px; border: 2px solid #c7c7c7;"></ion-icon>
                            <div onclick="close_menu_star()">
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                            </div>

                            <div onclick="close_menu_star()">
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div onclick="close_menu_star()">
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div onclick="close_menu_star()">
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div onclick="close_menu_star()">
                                <ion-icon class="active_star" name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>

                        <a download="#" href="#"><ion-icon name="cloud-download"></ion-icon> تحميل</a>
                        <a href="#"><ion-icon name="book"></ion-icon> قرأءة</a>

                    </div>

                </div>

            </div>

            <div class="disc_book">
                <span>وصف الكتاب</span>
                <p>أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                    أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت

                    نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا

                    كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.”

                    “سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم

                    دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري فيرأتاتيس ايت</p>
            </div>

            <div class="comment">

                <div class="box_comment fixd_add_comment">
                    <div class="add_comment">
                        <input type="text" required name="add_comment" id="add_comment" placeholder="اكتب تعليق ...">
                        <button type="submit">نشر</button>
                    </div>
                </div>

                <div class="all_comment">

                    <div class="box_comment">
                        <div class="details">
                            <div class="left">
                                <div class="cover"><img
                                        src="../assets/img/profile.jpg">
                                </div>
                                <h2>محمود عبد الكريم</h2>
                                <span>منذ خمس دقايق</span>
                            </div>
                            <div class="right">
                                <button class="replay">Replay</button>
                                <button class="delete" id="show_admin_only">Delete</button>
                            </div>
                        </div>

                        <div class="disc_comment">
                            <p>السلام عليكم ورحمه الله وبركاته المقالة جميل جدا تسلم ايدك</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="footer">
        <p>Copyright © <span>Mohamed Mahmoud and اثر</span></p>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>