@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ather | الرئيسية</title>
    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>


    <div class="header">
        @include('navbar') <!-- إدراج الشريط العلوي الموحد -->
    </div>

    <div class="swiper">
        <div class="swiper-button-prev"></div>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="item_box">
                    <div class="cover"><img src="assets/img/banner-swiper_1.png"></div>
                    <h2 class="title_item">ابن الجزري إمام علم القراءات</h2>
                    <a href="#" class="paragraph">
                        الإمام ابن الجزري مجدد ومحقق علم القراءات، ورائد نهضة علومها في زمانه ومن بعده، سند المقرئين،
                        وشيخ شيوخ
                        الإقراء، وعمدة
                        أهل الأداء، وصاحب التصانيف التي لم يسبق مثلها، ولم ينسج على منوالها، بلغ...
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item_box">
                    <div class="cover"><img src="assets/img/banner-swiper_2.png"></div>
                    <h2 class="title_item">(الكَبِير) مِنْ أسماء الله الحُسْنَى</h2>
                    <a href="#" class="paragraph">
                        أعظم ما ينبغي على العبد الاهتمام به هو معرفة الله جلَّ جلاله بأسمائه الحُسْنَى وصفاته العُليا،
                        وإنما
                        يشْرف العلم بحسب
                        شرف المعلوم، ولا علم أشرف من العلم بالله عز وجل وأسمائه الحسنى، وصفاته العليا، والتعبد لربه
                        سبحانه
                        بذلك....
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item_box">
                    <div class="cover"><img src="assets/img/banner-swiper_3.png"></div>
                    <h2 class="title_item">بلاغة القرآن الكريم</h2>
                    <a href="#" class="paragraph">
                        الدعوة الإسلام براهين ناطقة بأنها دعوة حق، ولسان صدق، وأقوى تلك البراهين دلالة، وأملؤها للقلوب
                        يقيناً
                        ذلك القرآن الكريم،
                        الذي نزل به الروح الأمين على قلب سيد المرسلين، بلسان عربي مبين. ولو لم تقترن دعوة الإسلام إلا
                        به، لكان
                        كافياً في إقامة
                        الحجة على أنها الرسالة الشاملة الخالدة....
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
    </div>

    <div class="top_card">
        <a href="download" class="card">
            <ion-icon name="cloud-download"></ion-icon>
            <span>تحميل المكتبة الشاملة</span>
        </a>
        <a href="#" class="card">
            <ion-icon name="person-circle"></ion-icon>
            <span>مؤسسين الخادم</span>
        </a>
        <a href="#video" class="card">
            <ion-icon name="videocam"></ion-icon>
            <span>مقاطع فديو للمشايخ</span>
        </a>
        <a href="fatwas" class="card active">
            <ion-icon name="radio"></ion-icon>
            <span>الفتاوى</span>
        </a>
    </div>

    <div class="sec_top_card">
        <div class="left">
            <a href="fatwas" class="card">
                <div class="title">
                    <h2>الفتاوى</h2>
                </div>
                <p>أضخم موقع للإفتاء على الإنترنت يقدم فتاوى شرعية مبنية على الكتاب والسنة</p>
            </a>

            <a href="#contact_us" class="card">
                <div class="title">
                    <h2>اطرح سوالك للفتوى</h2>
                </div>
                <p>وسيتم الإجابة عليه في أقرب وقت، يمكنك متابعة الفتوى والبحث عنها برقم السؤال عبر التواصل معنا</p>
            </a>

            <a href="center_fatwas" class="card">
                <div class="title">
                    <h2>عن مركز الفتوى</h2>
                </div>
                <p>للتعريف عن مركز الفتوى واختصاصاته وفريق العمل به ومنهجية الفتوى.</p>
            </a>
        </div>

        <div class="right">
            <div class="top">
                <span>حكم القرض بين شركتين احداهما تابعة للاخرى</span>
                <p>
                    أعمل مديرا لشركة تابعة لإحدى الشركات القابضة، والمعايير المحاسبية في الدولة تستلزم أن تكون التعاملات
                    البينية بين الشركة
                    الأم والشركة التابعة على هيئة قرض.سؤالي: هل يجوز إبرام اتفاقية قرض بين الشركة الأم والشركة التابعة
                    سواء كان القرض</p>
            </div>

            <div class="boottom">
                <a href="" class="card">
                    <span><span>هل تُحسب سورة الفاتحة ضمن عدد الآيات في قيام الليل؟</span><ion-icon
                            name="help-circle-outline"></ion-icon></span>
                    <span><span>التراويح وقيام الليل</span><ion-icon name="arrow-back-outline"></ion-icon></span>
                </a>
                <a href="#" class="card">
                    <span><span>غلبة الظن تكفي في بناء الأحكام عليها عند انعدام اليقين</span><ion-icon
                            name="help-circle-outline"></ion-icon></span>
                    <span><span>اصول الفقه وقواعده</span><ion-icon name="arrow-back-outline"></ion-icon></span>
                </a>
                <a href="#" class="card">
                    <span><span>تعليق الطلاق على أمر لم يحدث</span><ion-icon
                            name="help-circle-outline"></ion-icon></span>
                    <span><span>الحلف بالطلاق وتعليقه</span><ion-icon name="arrow-back-outline"></ion-icon></span>
                </a>
            </div>

        </div>
    </div>

    <div class="main libalary">
        <div class="head">
            <div>
                <h3>المكتبة</h3>
                <h2>كتب التوحيد</h2>
            </div>
            <div>
                <a href="Pages/library.html">عرض المزيد</a>
            </div>
        </div>

        <div class="all_card all_card_book">

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/book.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم التصنيف</span>
                    <h2>اسم الكتاب</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/book.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم التصنيف</span>
                    <h2>اسم الكتاب</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/book.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم التصنيف</span>
                    <h2>اسم الكتاب</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/book.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم التصنيف</span>
                    <h2>اسم الكتاب</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/book.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم التصنيف</span>
                    <h2>اسم الكتاب</h2>
                </div>
            </a>

        </div>
    </div>

    <div class="main video">
        <div class="head">
            <div>
                <h3>ارشيف المشايخ حفظهم الله</h3>
                <h2>مقاطع المشايخ</h2>
            </div>
            <div>
                <a href="#">عرض المزيد</a>
            </div>
        </div>

        <div class="all_card all_card_video">

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

            <a href="#" class="card">
                <div class="cover"><img src="assets/img/video.jpg" alt=""></div>
                <div class="card_disc">
                    <span>اسم الشيخ</span>
                    <h2>اسم الفديو</h2>
                </div>
            </a>

        </div>
    </div>

    <div class="pepole">
        <div class="head">
            <span>قائمة التفاعل</span>
            <h2>اكثر الاداريين تفاعل</h2>
        </div>
        <div class="all_photo">

            <div data-name="اسم الشخص" class="card">
                <div class="cover"><img src="assets/img/pepole_1.JPG" alt=""></div>
            </div>

            <div data-name="اسم الشخص" class="card">
                <div class="cover"><img src="assets/img/pepole_2.jpg" alt=""></div>
            </div>

            <div data-name="اسم الشخص" class="card">
                <div class="cover"><img src="assets/img/pepole_3.JPG" alt=""></div>
            </div>

            <div data-name="اسم الشخص" class="card">
                <div class="cover"><img src="assets/img/pepole_4.JPG" alt=""></div>
            </div>

            <div data-name="اسم الشخص" class="card">
                <div class="cover"><img src="assets/img/pepole_5.JPG" alt=""></div>
            </div>

        </div>
    </div>
    <div class="contact">

        <div class="div_top_left" id="contact_us">
            <span>القسم الاعلامى الخاص فى الخادم</span>
            <span>لتبادل النشر والاعلانات الرجاء التواصل على البريد الالكترونى</span>
            <a href="https://discord.gg/at3" target="_blank">دخول الخـادم</a>
        </div>
    
        <div class="div_back"><img src="assets/img/cta-bg.jpg" alt=""></div>
    
        <form action="{{ route('contact.store') }}" method="POST" class="div_top_right" id="contactForm">
            @csrf
            <div class="title"><span>تواصل معنا</span></div>
            <div class="form">
                <input type="text" required placeholder="اسمك بلكامل" name="name">
                <input type="email" required placeholder="الاميل" name="email">
                <textarea placeholder="اكتب رسالة ..." name="message" id="mesg"></textarea>
            </div>
            <button type="submit">ارسل الان</button>
        </form>
    
        <!-- نافذة منبثقة لرسالة التأكيد -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <div class="checkmark">✔️</div>
                <h2>تم إرسال الرسالة بنجاح!</h2>
            </div>
        </div>
    
    </div>
    
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
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // منع الإرسال الافتراضي
    
            // عرض النافذة المنبثقة
            openSuccessModal();
    
            // إرسال النموذج بعد عرض النافذة (إذا كان ذلك مطلوبًا)
            setTimeout(() => {
                this.submit(); // قم بإرسال النموذج بعد عرض النافذة
            }, 1000); // تأخير بسيط قبل الإرسال
        });
    </script>
    

    <div class="footer">
        <p>Copyright © <span>Mohamed Mahmoud and اثر</span></p>
    </div>

    <script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>