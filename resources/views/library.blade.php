<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | المكتبة</title>
    <link rel="icon" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

    <div class="header">
        @include('navbar') <!-- إدراج الشريط العلوي الموحد -->
    </div>


    <div class="backround">
        <div class="cover"><img
                src="https://c1.wallpaperflare.com/preview/1013/467/784/islamic-book-arabic-hadith-book-reading-islam.jpg">
        </div>
        <h2 class="title">اهلا بيكم فى مكتبة اثر</h2>
    </div>

    <div class="main library">

        <div class="side_hashtag" style="margin-top: 150px;">
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

        <div class="library_box_all">
            <div class="head_libalary">
                <span class="title">المكتبة</span>
                <div class="head_switch">
                    <button data-filter="All" class="btn active">عرض الكل</button>
                    <button data-filter="katab_altawhid" class="btn">كتب التوحيد</button>
                    <button data-filter="katab_ahadith" class="btn">كتب احاديث</button>
                    <button data-filter="katab_rudud" class="btn">كتب ردود</button>
                </div>
            </div>

            <div class="all_card">

                <a href="view_book.html" class="card katab_altawhid">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                    <div class="card_disc">
                        <span>كتاب التوحيد</span>
                        <h2>اسم الكتاب</h2>
                    </div>
                </a>

                <a href="view_book.html" class="card katab_altawhid">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                    <div class="card_disc">
                        <span>كتاب التوحيد</span>
                        <h2>اسم الكتاب</h2>
                    </div>
                </a>

                <a href="view_book.html" class="card katab_ahadith">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                    <div class="card_disc">
                        <span>كتب احاديث</span>
                        <h2>اسم الكتاب</h2>
                    </div>
                </a>

                <a href="view_book.html" class="card katab_ahadith">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                    <div class="card_disc">
                        <span>كتب احاديث</span>
                        <h2>اسم الكتاب</h2>
                    </div>
                </a>


                <a href="view_book.html" class="card katab_rudud">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                    <div class="card_disc">
                        <span>كتب ردود</span>
                        <h2>اسم الكتاب</h2>
                    </div>
                </a>

                <a href="view_book.html" class="card katab_rudud">
                    <div class="cover"><img src="../assets/img/book.jpg" alt=""></div>
                    <div class="card_disc">
                        <span>كتب ردود</span>
                        <h2>اسم الكتاب</h2>
                    </div>
                </a>

            </div>

        </div>

    </div>

    <div class="footer">
        <p>Copyright © <span>Mohamed Mahmoud and اثر</span></p>
    </div>

    <script src="../assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('.btn').click(function () {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $(".card").show("1000");
                }
                else {
                    $('.card').not('.' + value).hide('1000');
                    $('.card').filter('.' + value).show("1000");
                }
            })
        })

        $('.btn').click(function () {
            $(this).addClass('active').siblings().removeClass("active");
        })
    </script>

</body>

</html>