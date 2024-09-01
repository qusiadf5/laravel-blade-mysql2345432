<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | الفتاوى</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="../assets/img/logo.png">
</head>

<body>

    <div class="header">
        @include('navbar') <!-- إدراج الشريط العلوي الموحد -->
    </div>
          



    <div class="contaner_post">
        <div class="side_hashtag" style="width: 20rem;">
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

        <div class="landing_post">

            <div class="head_title">
                <div class="title">
                    <h2>الفتاوى</h2>
                    <ion-icon name="newspaper"></ion-icon>
                </div>
                <div class="filter_post">
                    <select name="filter" id="filter">
                        <option selected value="1">تصنيف الفتاوى</option>
                        <option value="2">تاريخ</option>
                        <option value="3">فقه</option>
                        <option value="4">عقيدة</option>
                        <option value="5">سير ذاتية</option>
                    </select>
                </div>
            </div>

            <div class="post">
                <div class="title_post">
                    <h2>عدد الفتاوى <span>5</span></h2>
                </div>

                <div class="all_card_post">

                    <a href="#" class="card">
                        <div class="img_details">
                            <div class="details">
                                <h2>تطويل الركعة الثانية على الأولى خلاف السنة</h2>
                                <p>الحمد لله والصلاة والسلام على رسول الله وعلى آله وصحبه أما بعد:
                                    فالسنة في الصلاة تطويل الركعة الأولى على الثانية، ولا ينبغي تطويل الثانية على
                                    الأولى، لا سيما التطويل الفاحش،</p>
                            </div>
                        </div>

                        <div class="head_footer">
                            <div class="left">
                                <div id="calendar">
                                    <ion-icon name="calendar"></ion-icon>
                                    <span>10/10/2024</span>
                                </div>
                                <div id="views">
                                    <ion-icon name="eye"></ion-icon>
                                    <span>1000</span>
                                </div>
                                <div id="num_com">
                                    <ion-icon name="chatbubble-outline"></ion-icon>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
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