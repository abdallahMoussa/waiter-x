<!DOCTYPE html>


<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> X-waiter ~ إكس ويتر </title>
    <meta name="description" content="إكس ويتر أحد الحلول الذكية والعصرية فى إدارة المطاعم والكافيهات" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.icon">
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/lindy-uikit.css" />


    <script>
        function showPrices(toTop = true) {
            window.pricingPage.style.display = "block";
            window.hero.style.display = "none";
            window.feature.style.display = "none";
            window.about.style.display = "none";
            window.pricing.style.display = "none";
            window.contact.style.display = "none";
            if (toTop) {
                setTimeout(() => {
                    window.scrollTo(0, 0);
                }, 100);
            }
        }

        function hidePrices() {
            window.pricingPage.style.display = "none";
            window.hero.style.display = "block";
            window.feature.style.display = "block";
            window.about.style.display = "block";
            window.pricing.style.display = "block";
            window.contact.style.display = "block";

        }
    </script>

</head>

<body>

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">
        <!-- ========================= header-6 start ========================= -->
        <header class="header header-6">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                                    <ul id="nav6" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a onclick="hidePrices()" class="page-scroll" href="#contact">تواصل معنا </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="hidePrices()" class="page-scroll" href="#pricing">الأسعار</a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="hidePrices()" class="page-scroll" href="#about">الاونلاين منيو</a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="hidePrices()" class="page-scroll" href="#feature">خدماتنا </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="hidePrices()" class="page-scroll active" href="#home">الرئيسية</a>
                                        </li>

                                    </ul>
                                </div>

                                <a class="navbar-brand d-flex" onclick="hidePrices()" href="#home">
                                    <span class="logo-name2 ">ويتر</span>
                                    <img src="assets/img/logo/logo.png" alt="Logo" />
                                    <span class="logo-name ">Waiter</span>

                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <!-- navbar collapse -->
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>
        <!-- ========================= header-6 end ========================= -->

        <!-- ========================= hero-5 start ========================= -->
        <div id="hero" class="hero-section hero-style-5 img-bg" style="background-image: url('assets/img/hero/hero-5/hero-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content-wrapper">
                            <h2 class="mb-30 wow fadeInUp font " style="text-align: right; line-height: 80px; " data-wow-delay=".2s">
                                <span>
                                    إكس ويتر لإدارة المطاعم والكافيهات
                                </span>
                            </h2>
                            <p class="mb-20 wow fadeInUp" style="text-align: right;" data-wow-delay=".4s">
                                العميل هيطلب الاوردر ويقدر يعدل الطلب من خلال الموبايل<br />
                                مع إكس ويتر إدارة مطعمك هتبقى اسهل بكتير
                            </p>
                            <p class="mb-20 wow fadeInUp text-primary" data-wow-delay=".4s">
                                فترة تجريبيه مجانيه 10 أيام على باقات الإكس ويتر
                            </p>
                            <button class="button button-lg radius-50 wow fadeInUp" data-wow-delay=".6s" onclick="showPrices()">بدء الاستخدام <i class="lni lni-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="hero-image wow fadeInUp" data-wow-delay=".5s">
                            <img src="assets/img/hero/hero-5/hero-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pricingPage" class="hero-section hero-style-5 img-bg" style="background-image: url('assets/img/hero/hero-5/hero-bg2.svg'); display: none;">
            <div dir="rtl" class="container">
                <div class="row">
                    <div class="col-lg-12 px-5">
                        <div class="hero-content-wrapper row">
                            <div class="row ">
                                <div class="col-5"></div>
                                <div class="col-2 text-xl-center text-primary">
                                    <h6 class="font  ">باقة الكاشير</h6>
                                    <span class="my-2 d-block">800 ج.م</span>
                                </div>
                                <div class="col-2 text-xl-center text-primary">
                                    <h6 class="font ">باقة الويتر</h6>
                                    <span class="my-2 d-block">1.400 ج.م</span>
                                </div>
                                <div class="col-2 text-xl-center text-primary">
                                    <h6 class="font ">باقة إكس ويتر </h6>
                                    <span class="my-2 d-block">1.800 ج.م</span>
                                </div>
                            </div>
                            <hr />
                            <table class="col-12">
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">لوحة التحكم</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">لوحة المطبخ</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة الطلبات </td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة المخزون</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة الفئات</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>


                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة المنيو</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>

                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6"> الاشعارات والتنبيهات</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة المسئوولين</td>
                                    <td class="col-2 font"> _</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة الطاولات</td>
                                    <td class="col-2">_</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6">إدارة QR الطاولات</td>
                                    <td class="col-2">_</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6"> الاونلاين منيو</td>
                                    <td class="col-2">_</td>
                                    <td class="col-2"><i class="lni lni-checkmark-circle text-primary"></i></td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6"> الاحصائيات والجداول</td>
                                    <td class="col-2">_</td>
                                    <td class="col-2">_</td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                </tr>
                                <tr class="col-12" style="border-bottom: 1px solid gainsboro;">
                                    <td class="col-6"> تحليل البيانات</td>
                                    <td class="col-2">_</td>
                                    <td class="col-2">_</td>
                                    <td class="col-"><i class="lni lni-checkmark-circle text-primary my-3"></i></td>
                                </tr>

                            </table>


                        </div>
                        <div class="contact-section contact-style-3 contact-style-2">
                            <div class="container">
                                <div class="row justify-content-center animate__animated animate__fadeIn ">
                                    <div class="col-lg-12">
                                        <div class="contact-form-wrapper">
                                            <form id="myForm" method="POST" action="{{ route('subscribe') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input required type="text" id="name" name="name" class="form-input" placeholder="الاسم " />
                                                            <i class="lni lni-phone"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input required type="text" id="number" name="phone" class="form-input" placeholder="رقم الهاتف" />
                                                            <i class="lni lni-phone"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input required type="email" id="email" name="email" class="form-input" placeholder="البريد الالكتروني" />
                                                            <i style="font-style: normal; font-size: 16pt; margin-top: -6px;">@</i>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <select name="content" class="form-select" aria-label="Default select example">
                                                                <option value="1">باقة الكاشير</option>
                                                                <option value="2">باقة الويتر</option>
                                                                <option value="3">باقة إكس ويتر</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="g-recaptcha col-md-12" data-sitekey="6Lc20ZInAAAAAAmchiwawDXFPpU78NZIq4Yl0zbD"></div>

                                                <div class="d-flex justify-content-center  pt-10">
                                                    <button type="submit" id="subscribe" class="button radius-30 m-auto d-flex flex-row-reverse gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4z" />
                                                        </svg>
                                                        <span> إشتراك</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(session('successSub'))
                        <div dir="rtl" class="alert alert-success mt-3">
                            {{ session('successSub') }}
                        </div>
                        @elseif(session('failSub'))
                        <div class="alert alert-danger mt-3">
                            {{ session('failSub') }}
                        </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>

        <!-- ========================= hero-5 end ========================= -->
    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
    <section id="feature" class="feature-section feature-style-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-8">
                    <div class="section-title text-center mb-60">
                        <h3 class="mb-15 wow fadeInUp font" data-wow-delay=".2s">
                            إدارة المطاعم والكافيهات
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            <span class="waiter-x-name">إكس ويتر </span>
                            حل متكامل لإدارة مطعمك وكافيهك بكل سهوله وتحليل البييانات لتحسين الخدمة والوصول لأقصي درجه الربح وإرضاء للعميل

                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="lni lni-vector"></i>
                            <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF" />
                            </svg>
                        </div>
                        <div class="content">
                            <h5 class="font">اداره الطلبات والمخزون </h5>
                            <p>
                                تسهيل الطلبات وإدارة المخزون للمسؤول
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="lni lni-pallet"></i>
                            <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF" />
                            </svg>
                        </div>
                        <div class="content">
                            <h5 class="font">اونلاين منيو</h5>
                            <p>
                                تسهيل عملية الطلب للعميل بشكل كبير
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="lni lni-stats-up"></i>
                            <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF" />
                            </svg>
                        </div>
                        <div class="content">
                            <h5 class="font">تحليل البيانات </h5>
                            <p>
                                تقارير شامله للطلبات والمخزون والربح
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================= feature style-5 end ========================= -->

    <!-- ========================= about style-4 start ========================= -->
    <section id="about" class="about-section about-style-4">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 col-lg-6">
                    <div class="about-image text-lg-right wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/img/about/about-4/about-img.svg" alt="" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title mb-30">
                            <h3 class="mb-25 wow fadeInUp font" style="text-align: right;" data-wow-delay=".2s">
                                العميل يهمه وقته.. فمتضيعوش
                            </h3>
                            <p class="wow fadeInUp" style="text-align: right;" data-wow-delay=".3s">
                                لان توفير وقت العميل من اهم عوامل رضاه عن المكان <br /> فاحنا وفرنا عليك كتير وعملنالك المنيو اونلاين
                            </p>
                        </div>
                        <ul style="text-align: right; padding-right: 10% ;">
                            <li class="wow fadeInUp" style="display: flex; justify-content: flex-end; width: 100%;" data-wow-delay=".1s">
                                العميل مش هيستني الويتر يجي ياخد طلبه
                                <i class="lni lni-checkmark-circle mx-3"></i>

                            </li>
                            <li class="wow fadeInUp" style="display: flex; justify-content: flex-end; width: 100%;" data-wow-delay=".3s">
                                هيطلب الاوردر وكمان يقدر يعدله
                                <i class="lni lni-checkmark-circle mx-3"></i>

                            </li>
                            <li class="wow fadeInUp" style="display: flex; justify-content: flex-end; width: 100%;" data-wow-delay=".6s">
                                الاوردر هيروح مباشرة للمطبخ
                                <i class="lni lni-checkmark-circle  mx-3"></i>
                            </li>
                            <li class="wow fadeInUp" style="display: flex; justify-content: flex-end; width: 100%;" data-wow-delay=".6s">
                                هيستلم الاوردر فى اسرع وقت
                                <i class="lni lni-checkmark-circle  mx-3"></i>
                            </li>
                        </ul>
                        <button onclick="showPrices()" class="button button-lg radius-10 wow fadeInUp" data-wow-delay=".5s">بدء الاستخدام </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about style-4 end ========================= -->

    <!-- ========================= pricing style-4 start ========================= -->
    <section id="pricing" class="pricing-section pricing-style-4 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6" dir="rtl">
                    <div class="section-title mb-60 ">
                        <h3 class="mb-15 wow fadeInUp font text-right" data-wow-delay=".2s">
                            إختر الباقة الأنسب لمطعمك
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            إكس ويتر بيقدملك الحل الامثل لإدارة مطعمك أي كان مستواه سواء كنت مطعم للخدمات السريعه او مطعم كبير لخدمة الطاولات
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="pricing-active-wrapper wow fadeInUp" data-wow-delay=".4s">
                        <div class="pricing-active">
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4 class="font">باقة الكاشير</h4>
                                    <h6 class="font">المطاعم الصغيرة والمتوسطة</h6>
                                    <h3 class="font d-flex flex-row-reverse justify-content-center gap-2"> <span>800</span> <span class="font-size-sm">ج.م </span> </h3>
                                    <ul>
                                        <li>لوحات التحكم والمطبخ</li>
                                        <li>إدارة الطلبات المخزون</li>
                                        <li>إدارة المنيو والطاولات </li>
                                        <li>الإشعارات والتنبيهات</li>
                                    </ul>
                                    <button onclick="showPrices()" class="button radius-30">بدء الاستخدام </button>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4 class="font">باقة الويتر</h4>
                                    <h6 class="font">المطاعم المتوسطة والكبيرة </h6>
                                    <h3 class="font d-flex flex-row-reverse justify-content-center gap-2"> <span>1.400</span> <span class="font-size-sm">ج.م </span> </h3>
                                    <ul>
                                        <li>اونلاين منيو</li>
                                        <li>لوحات التحكم والمطبخ</li>
                                        <li>إدارة الطلبات المخزون</li>
                                        <li>إدارة المنيو والطاولات </li>
                                    </ul>
                                    <button onclick="showPrices()" class="button radius-30">بدء الاستخدام </button>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4 class="font">باقة إكس ويتر </h4>
                                    <h6 class="font"> المطاعم الكبيرة والفنادق </h6>
                                    <h3 class="font d-flex flex-row-reverse justify-content-center gap-2"> <span>1.800</span> <span class="font-size-sm">ج.م </span> </h3>
                                    <ul>
                                        <li>اونلاين منيو</li>
                                        <li> لوحة تحليل البيانات </li>
                                        <li> الجداول والاحصائيات </li>
                                        <li>لوحات التحكم والإدارة</li>
                                    </ul>
                                    <button onclick="showPrices()" class="button radius-30">بدء الاستخدام </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-10">

            <button onclick="showPrices()" class="button radius-30 m-auto">تفاصيل الباقات </button>
        </div>

    </section>
    <!-- ========================= pricing style-4 end ========================= -->

    <!-- ========================= contact-style-3 start ========================= -->
    <section id="contact" class="contact-section contact-style-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                    <div class="section-title text-center mb-50">
                        <h3 class="mb-15 font">تواصل معنا</h3>
                        <p>
                            للاستفسار والاشتراك برجاء ترك رساله او التواصل معنا عن طريق البيانات الموضحة بالاسفل
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="left-wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-item">
                                    <div class="icon">
                                        <i class="lni lni-phone"></i>
                                    </div>
                                    <div class="text">
                                        <a href="	https://wa.me/+201090802294">
                                            +20 10 9080 2294 </a>
                                        <p>+20 11 2712 4302</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="single-item">
                                    <div class="icon">
                                        <i class="lni lni-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p class="font-size-sm">
                                            support@xwaiter.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="single-item">
                                    <div class="icon">
                                        <i class="lni lni-map-marker"></i>
                                    </div>
                                    <div class="text">
                                        <p>
                                            22st elmadinah, El Salam ,Suez - Egypt
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <form id="contact-form" method="POST" action="{{ route('sendEmail') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input required type="text" id="name" name="name" class="form-input" placeholder="الاسم" />
                                        <i class="lni lni-user"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input required type="text" id="phone" name="phone" class="form-input" placeholder="رقم الهاتف" />
                                        <i class="lni lni-phone"></i>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-input">
                                        <input required type="email" id="email" name="email" class="form-input" placeholder="البريد الالكتروني" />
                                        <i style="font-style: normal; font-size: 16pt; margin-top: -6px;">@</i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <textarea required name="content" id="content" class="form-input" placeholder="الرساله" rows="6"></textarea>
                                        <i class="lni lni-comments-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-button">
                                        <button type="submit" class="g-recaptcha button">
                                            <i class="lni lni-telegram-original"></i> إرسال
                                        </button>
                                    </div>
                                </div>
                                @if(session('success'))
                                <div dir="rtl" class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                                @elseif(session('fail'))
                                <div dir="rtl" class="alert alert-danger mt-3">
                                    {{ session('fail') }}
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================= contact-style-3 end ========================= -->

    <!-- ========================= clients-logo start ========================= -->
    <section class="clients-logo-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo wow fadeInUp" data-wow-delay=".2s">
                        <!-- <img src="assets/img/clients/brands.svg" alt="" class="w-100" /> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= clients-logo end ========================= -->

    <!-- ========================= footer style-4 start ========================= -->
    <footer class="footer footer-style-4">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 col-md-12 " dir="rtl">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="logo">
                                <a class="navbar-brand d-flex" href="index.html">
                                    <span class="logo-name2 ">ويتر</span>
                                    <img src="assets/img/logo/logo.png" width="60" alt="Logo" />
                                    <span class="logo-name ">Waiter</span>
                                </a>
                            </div>
                            <p class="desc" style="text-align: right; padding-right:20px">
                                أحد أهم الحلول الذكيه والعصريه فى إدارة المطاعم والكافيهات بكافة احجامها واشكلها
                            </p>
                            <ul class="socials">
                                <li>
                                    <a href="https://www.facebook.com/waiter.x.services"> <i class="lni lni-facebook-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCEDNGrGPXJ6mP8pXLlLHPOg"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73Z" />
                                        </svg> </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/waiter_x_services/"> <i class="lni lni-instagram-filled"></i> </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-0 col-lg-4 col-md-6 offset-md-1 col-sm-5">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
                            <h6 class="font">روابط سريعه </h6>
                            <ul class="links">
                                <li><a onclick="hidePrices()" href="#home">الرئيسيه</a></li>
                                <li><a onclick="hidePrices()" href="#feature">خدمات</a></li>
                                <li><a onclick="hidePrices()" href="#about">الاونلاين منيو</a></li>
                                <li><a onclick="hidePrices()" href="#pricing">الأسعار</a></li>
                                <li><a onclick="hidePrices()" href="#contact">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-5 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                            <h6 class="font">الخدمات</h6>
                            <ul class="links">
                                <li><a onclick="hidePrices()" href="#feature">إدارة الطلبات </a></li>
                                <li><a onclick="hidePrices()" href="#feature">الاونلاين منيو</a></li>
                                <li><a onclick="hidePrices()" href="#feature">الجداول والاحصائيات</a></li>
                                <li><a onclick="hidePrices()" href="#feature">تحليل البيانات</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap-5.0.0-beta1.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

    @if(session('scrollToForm'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Scroll to the form element with smooth animation
            document.querySelector("#contact-form").scrollIntoView({
                behavior: "smooth"
            });
        });
    </script>
    @elseif(session('scrollToFormSub'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            showPrices(false)
            // Scroll to the form element with smooth animation
            document.querySelector("#myForm").scrollIntoView({
                behavior: "smooth"
            });
        });
    </script>

    @endif
</body>

</html>