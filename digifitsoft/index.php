<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo Spor Salonu | DigiFitSoft &copy;</title>
    <?php include 'partials/css.php' ?>
</head>
<body>
    <header>
        <div class="top-bar py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md pe-4 d-flex align-items-center">
                                <div class="icon-wrapper me-2">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <a href="tel:0507 495 64 71">0507 495 64 71</a>
                            </div>
    
                            <div class="col-md pe-4 d-flex align-items-center">
                                <div class="icon-wrapper me-2">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <a href="mailto:info@temposporsalonu.com">info@temposporsalonu.com</a>
                            </div>
    
                            <div class="col-md pe-4 d-flex align-items-center">
                                <div class="icon-wrapper me-2">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <a href="#">Çalışma Saatlerimiz: Tüm Günler / 09:00 – 23:00</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="header">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo-wrapper">
                    <a href="/">
                        <img src="img/logo.png" alt="Tempo Spor Salonu Logo">
                    </a>
                </div>
        
                <nav class="d-flex align-items-center">
                    <a href="#anasayfa" class="active">Ana Sayfa</a>
                    <a href="#home">Biz Kimiz?</a>
                    <a href="#about">Hakkımızda</a>
                    <a href="#services">Hizmetlerimiz</a>
                    <a href="#team">Ekibimiz</a>
                    <a href="#blog">Blog</a>
                    <a href="#fiyatlandirma">Fiyatlarımız</a>
                    <a href="login.php">Giriş</a>
                    <a href="register.php">Kayıt</a>
                </nav>
            </div>
        </div>
    </header>

    <section id="slider" class="slider min-vh-100">
        <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/slider_img/bg_2.webp" alt="Slider Image">
                    <div class="overlay position-absolute top-0 start-0 h-100 w-100"></div>
                    <div class="slider-text-wrapper position-absolute start-50 translate-middle-x h-100 w-100">
                        <h1 class="mb-2 slider-title">Şehrin En İyisi</h1>
                        <h2 class="slider-sub-title">TEMPO</h2>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="img/slider_img/bg_1.webp" alt="Slider Image">
                    <div class="overlay position-absolute top-0 start-0 h-100 w-100"></div>
                    <div class="slider-text-wrapper position-absolute start-50 translate-middle-x h-100 w-100">
                        <h1 class="mb-2 slider-title">Mükemmel Sonuçlar</h1>
                        <h2 class="slider-sub-title">TEMPO</h2>
                    </div>
                </div>
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="home" class="home mt-5 pt-5 mb-5 pb-5">
        <!-- <span class="area-title text-center"><small><i class="left-bar"></i>TEMPO WELLNESS<i class="right-bar"></i></small></span>
        <h2 class="mt-3 mb-5 text-center">Hakkımızda</h2> -->

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-main-img-wrapper position-relative">
                        <img src="img/about_img/about-1.webp" alt="Home Image">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="home-img-wrapper position-relative">
                                <img src="img/about_img/about-2.webp" alt="Home Image">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="home-img-wrapper position-relative">
                                <img src="img/about_img/about-3.webp" alt="Home Image">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="home-img-wrapper position-relative">
                                <img src="img/about_img/about-4.webp" alt="Home Image">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="home-special special position-relative">
                        <div class="large-number-wrapper">
                            <div class="large-number-parent d-flex">
                                <div class="large-number">01</div>
                            </div>
                        </div>
                    </div>

                    <div class="home-text-wrapper">
                        <div class="home-title-area mb-3">
                            <span class="sub-title">Merhabalar!</span>
                            <h2 class="mb-0">Şehrin en iyisi<br> <span>TEMPO Spor<br>Salonuna</span><br> Hoşgeldiniz</h2>
                        </div>
                        <p class="description">
                            Spor salonumuz temiz, son model aletler ve teknolojik olmasının yanı sıra, sıcakkanlı, ilgili, samimi, herkesin eşit olduğu ve herkese eşit davranılan bir yerdir. Şehrin en iyisinin verdiği ve vereceği değerli bilgileri daha yakından öğrenmek istiyorsanız alttaki butona tıklayabilirsiniz.
                        </p>
                        <a href="#" class="button mt-3">Bloglar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about mt-5 pt-5 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-wrapper special position-relative">
                        <span class="area-title text-center"><small><i class="left-bar"></i>TEMPO WELLNESS<i class="right-bar"></i></small></span>
                        <h2 class="mt-2 mb-5 text-center">Hakkımızda</h2>
            
                        <h2 class="bg-title">HAKKIMIZDA</h2>
                        <div class="large-number-wrapper">
                            <div class="large-number-parent d-flex">
                                <div class="large-number">02</div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="about-image-wrapper">
                                    <img src="img/about_img/about-5.jpg" alt="About Image">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="about-text-wrapper ps-3">
                                    <p class="description text-white">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum assumenda et qui iure sunt exercitationem odit ratione quis laboriosam doloremque, saepe libero dolor? Aperiam officiis esse est maiores aut eum! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam numquam magnam enim voluptas deserunt ullam mollitia atque, ducimus expedita beatae laboriosam, nesciunt dolores aut error consectetur. Rem molestias odio qui.
                                    </p>
                                    <p class="description text-white">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, sequi rem dolorem recusandae, officia commodi labore esse animi minus at, itaque obcaecati tempore? Dignissimos repellendus est ratione deleniti maxime delectus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum vel molestiae suscipit fuga eveniet nam tenetur! Odit molestias ipsam quibusdam quo necessitatibus amet. Quasi blanditiis fugiat sapiente enim animi tenetur?
                                    </p>
        
                                    <p class="description text-white">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error ipsam iusto distinctio est tempore minus inventore dolores explicabo.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services mt-5 pt-5 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-wrapper special position-relative">
                        <span class="area-title text-center"><small><i class="left-bar"></i>TEMPO WELLNESS<i class="right-bar"></i></small></span>
                        <h2 class="mt-2 mb-5 text-center">HİZMETLERİMİZ</h2>
            
                        <h2 class="bg-title">HİZMETLERİMİZ</h2>
                        <div class="large-number-wrapper">
                            <div class="large-number-parent d-flex">
                                <div class="large-number">03</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="service-box text-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            <span class="icon">
                                <i class="fa-solid fa-ruler-combined"></i>
                            </span>
                        </div>
                        <div class="service-text-wrapper">
                            <h4 class="text-white">Vücut Analizi</h4>
                            <p class="service-detail">
                                Vücudunuzu tüm her şeyiyle en detaylı şekilde analiz edip en iyi sonuca ulaşabilmeniz için ilk adımı atıyoruz. Bu adım fazla uzun sürmeyen ama en önemli olan adımlardan bir tanesidir.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="service-box text-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            <span class="icon">
                               <i class="fa-solid fa-dumbbell"></i>
                            </span>
                        </div>
                        <div class="service-text-wrapper">
                            <h4 class="text-white">Size Özel Program</h4>
                            <p class="service-detail">
                                Vücut analizi sonrasında sizlere özel olarak salonumuzun profesyonel ekipleri tarafından hazırlanan programı uygulamaya başlayacağız. Bu program tamamen vücut analizi sonrasında kişiye özel olarak tanımlanır.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="service-box text-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            <span class="icon">
                                <i class="fa-solid fa-utensils"></i>
                            </span>
                        </div>
                        <div class="service-text-wrapper">
                            <h4 class="text-white">Özel Diyet Programı</h4>
                            <p class="service-detail">
                                Programı uygulamaya geçmeden önce uzman ekibimiz tarafından bir diyet listesi hazırlanacak. Bu diyet listesini sizlere ilettikten sonra başlamamak için bir sebep kalmıyor.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="service-box text-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            <span class="icon">
                                <i class="fa-solid fa-gauge-high"></i>
                            </span>
                        </div>
                        <div class="service-text-wrapper">
                            <h4 class="text-white">Maximum Performans</h4>
                            <p class="service-detail">
                                Uzman ekibimizin tanımladığı program ve diyet listesini sabırlı ve istikrarlı bir şekilde tamamladıktan 1-3 ay sonrasında değişime kendiniz şahitlik edin. Bu süreç içerisinde program ve diyet listesi sürekli sizin gelişimize özel olarak değişkenlik gösterecektir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team mt-5 pt-5 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-wrapper special position-relative">
                        <span class="area-title text-center"><small><i class="left-bar"></i>TEMPO WELLNESS<i class="right-bar"></i></small></span>
                        <h2 class="mt-2 mb-5 text-center">EKİBİMİZ</h2>
            
                        <h2 class="bg-title">EKİBİMİZ</h2>
                        <div class="large-number-wrapper">
                            <div class="large-number-parent d-flex">
                                <div class="large-number">04</div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

        <div class="swiper2 mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="team-content overflow-hidden w-100 h-100">
                        <div class="personal-photo position-relative" style="background-image: url('img/team_img/yusuf_eski.jpg');">
                            <div class="personal-detail position-absolute">
                                <div class="personal-name text-white">Yusuf Eski</div>
                                <div class="personal-job">Spor Salonu Sorumlusu<br>Baş Eğitmen</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-content overflow-hidden w-100 h-100">
                        <div class="personal-photo position-relative" style="background-image: url('img/team_img/yusuf_eski.jpg');">
                            <div class="personal-detail position-absolute">
                                <div class="personal-name text-white">Yusuf Eski</div>
                                <div class="personal-job">Spor Salonu Sorumlusu<br>Baş Eğitmen</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-content overflow-hidden w-100 h-100">
                        <div class="personal-photo position-relative" style="background-image: url('img/team_img/yusuf_eski.jpg');">
                            <div class="personal-detail position-absolute">
                                <div class="personal-name text-white">Yusuf Eski</div>
                                <div class="personal-job">Spor Salonu Sorumlusu<br>Baş Eğitmen</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
        <!-- <div class="row">
            <div class="col-md-4">
                <div class="team-content overflow-hidden">
                    <div class="personal-photo position-relative" style="background-image: url('img/team_img/yusuf_eski.jpg');">
                        <div class="personal-detail position-absolute">
                            <div class="personal-name text-white">Yusuf Eski</div>
                            <div class="personal-job">Spor Salonu Sorumlusu<br>Baş Eğitmen</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <section id="blog" class="blog mt-5 pt-5 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-wrapper special position-relative">
                        <span class="area-title text-center"><small><i class="left-bar"></i>TEMPO WELLNESS<i class="right-bar"></i></small></span>
                        <h2 class="mt-2 mb-5 text-center">BLOG</h2>
            
                        <h2 class="bg-title">BLOG</h2>
                        <div class="large-number-wrapper">
                            <div class="large-number-parent d-flex">
                                <div class="large-number">05</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 h-100">

                    <div class="post-wrapper">
                        <a href="#blog-link">
                            <div class="post-image-wrapper" style="background-image: url('img/blog_img/blog-1.jpg')"></div>
                        </a>
                        <div class="post-content-wrapper">
                            <div class="post-header d-flex align-items-center justify-content-between px-3 py-2">
                                <p class="date mb-0 d-flex align-items-center">
                                    <i class="fa-solid fa-calendar-days pe-2"></i>
                                    27 Aralık 2022</p>
                                <span>ADMIN</span>
                            </div>
                            <div class="post-content px-3">
                                <a href="#blog-link">
                                    <h2 class="post-title text-capitalize">Nasıl Kilo Alırım?</h2>
                                </a>
                                <p class="post-detail mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dicta nemo enim fugit sunt est earum, aliquid vel adipisci corrupti cumque.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 mb-5 h-100">

                    <div class="post-wrapper">
                        <a href="#blog-link">
                            <div class="post-image-wrapper" style="background-image: url('img/blog_img/blog-2.jpg')"></div>
                        </a>
                        <div class="post-content-wrapper">
                            <div class="post-header d-flex align-items-center justify-content-between px-3 py-2">
                                <p class="date mb-0 d-flex align-items-center">
                                    <i class="fa-solid fa-calendar-days pe-2"></i>
                                    27 Aralık 2022</p>
                                <span>ADMIN</span>
                            </div>
                            <div class="post-content px-3">
                                <a href="#blog-link">
                                    <h2 class="post-title text-capitalize">Ne Kadar Sürede Gelişirim?</h2>
                                </a>
                                <p class="post-detail mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dicta nemo enim fugit sunt est earum, aliquid vel adipisci corrupti cumque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis beatae autem ullam sapiente doloremque harum totam et optio at rem officia tempore reiciendis placeat repudiandae perferendis, molestiae obcaecati non. Itaque?
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 mb-5 h-100">

                    <div class="post-wrapper">
                        <a href="#blog-link">
                            <div class="post-image-wrapper" style="background-image: url('img/blog_img/blog-1.jpg')"></div>
                        </a>
                        <div class="post-content-wrapper">
                            <div class="post-header d-flex align-items-center justify-content-between px-3 py-2">
                                <p class="date mb-0 d-flex align-items-center">
                                    <i class="fa-solid fa-calendar-days pe-2"></i>
                                    27 Aralık 2022</p>
                                <span>ADMIN</span>
                            </div>
                            <div class="post-content px-3">
                                <a href="#blog-link">
                                    <h2 class="post-title text-capitalize">Nasıl Hızlı Kilo Veririm?</h2>
                                </a>
                                <p class="post-detail mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dicta nemo enim fugit sunt est earum, aliquid vel adipisci corrupti cumque.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="btn-wrapper position-relative w-100 text-center mt-3">
                <a href="#blogs" class="all-btn d-inline-block">Tümünü Gör <i class="fa-solid fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </section>

    <footer class="mt-5 pt-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-wrapper h-auto">
                        <a href="/">
                            <img src="img/logo.png" alt="Tempo Spor Salonu Logo">
                        </a>
                    </div>
                    <div class="social-media-icon-wrapper d-flex align-items-center justify-content-center">
                        <a href="#" class="social-media">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a href="#">
                        <a href="#" class="social-media">
                            <i class="fa-brands fa-twitter"></i>
                        </a href="#">
                        <a href="#" class="social-media">
                            <i class="fa-brands fa-instagram"></i>
                        </a href="#">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="quick-links">
                        <h3 class="quick-links-title text-white mb-3">Hızlı Linkler</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">Ana Sayfa</a>
                                <a href="#home">Biz Kimiz?</a>
                                <a href="#about">Hakkımızda</a>
                            </div>
                            <div class="col-md-3 offset-3">
                                <a href="#services">Hizmetlerimiz</a>
                                <a href="#team">Ekibimiz</a>
                                <a href="#prices">Fiyatlarımız</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="address-wrapper">
                        <h4 class="mb-0 text-white text-uppercase mb-4">Türkiye, Tokat, Erbaa, Mahalle Adı</h4>

                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-wrapper me-2">
                                <i class="fa-solid fa-phone text-white"></i>
                            </div>
                            <a href="tel:0507 495 64 71" class="text-white">0507 495 64 71</a>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="icon-wrapper me-2">
                                <i class="fa-solid fa-envelope text-white"></i>
                            </div>
                            <a href="mailto:info@temposporsalonu.com" class="text-white">info@temposporsalonu.com</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="copyright py-4">
                <p class="mb-0 text-center">Copyright &copy; DigiFitSoft. All Right Reserved.</p>
            </div>
        </div>
    </footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper1 = new Swiper(".mySwiper1", {
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }
      });
    </script>


    <script>
      var swiper2 = new Swiper(".mySwiper2", {
        effect: "flip",
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>