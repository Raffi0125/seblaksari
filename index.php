<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seblak Ala Sari</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 logo">
                    <a href="index.php">
                        <img src="logoseblak.png" alt="Logo">
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30"></div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Welcome to our
                                        <span>Seblak</span>
                                        Ala Sari.
                                    </h1>
                                         <p>Seblak Ala Sari adalah pilihan tepat bagi para pencinta makanan pedas! Dengan
                                        bumbu khas racikan sendiri dan bahan-bahan segar, kami menghadirkan seblak
                                        dengan berbagai varian rasa yang bisa disesuaikan dengan level kepedasan favorit
                                        Anda. Setiap gigitan adalah ledakan rasa yang bikin ketagihan!</p>
                                    <div class="banner-btn mt-4">
                                        <a href="login.php" class="sec-btn">Pesan Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(assets/images/seblak1.jpeg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- about section  -->
            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">About Us</p>
                                <h2 class="h2-title"><span>Seblak Ala Sari</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p>Seblak Ala Sari adalah tempat yang menghadirkan cita rasa autentik seblak dengan sentuhan kelezatan khas. Kami berkomitmen untuk menyajikan seblak terbaik dengan bahan-bahan pilihan dan bumbu racikan yang kaya rasa. Setiap hidangan kami diracik dengan penuh ketelitian dan kreativitas untuk menghadirkan pengalaman menikmati seblak yang berbeda dan memuaskan.
                                Seblak Ala Sari menawarkan berbagai varian seblak seperti *Seblak Sosis Ceker* dan *Seblak Sosis Seafood*, yang diolah dengan rempah tradisional dan dipadukan dengan bahan-bahan berkualitas. Kami percaya bahwa cita rasa pedas gurih dari seblak dapat memberikan kenikmatan tersendiri bagi para pecinta kuliner.
                                Dengan menjaga kualitas dan rasa di setiap sajian, Seblak Ala Sari berkomitmen untuk menjadi pilihan utama bagi para pecinta seblak. Rasakan sensasi kelezatan seblak yang otentik dan nikmati hidangan yang selalu menggugah selera!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img"
                                    style="background-image: url(assets/images/gambar\ seblak.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Our menu</p>
                                    <h2 class="h2-title">Seblak<span>& Minuman</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .breakfast, .lunch">
                                                <img src="assets/images/logoseblak1.png" alt="">
                                                Semua
                                            </li>
                                            <li class="filter" data-filter=".breakfast">
                                                <img src="assets/images/logoseblak1.png" alt="">
                                                Seblak
                                            </li>
                                            <li class="filter" data-filter=".lunch">
                                                <img src="assets/images/minuman.png" alt="">
                                                Minuman
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            <!-- Makanan -->
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak biasa.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Ori</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 10.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak pentol mini.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.9
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Pentol Jumbo Mini</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>Stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 10.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak telur puyuh.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.9
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Sosis Telur Puyuh</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>Stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 12.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak sosis siomay2.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.9
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Sosis Siomay</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>Stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 12.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak pentol jumbo.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.9
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Pentol Jumbo</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>Stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 12.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak sosis ceker.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4,8
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Sosis Ceker </h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>Stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 12.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak enoki.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.9
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Jamur Enoki</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>Stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 15.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 8 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak sosis seafood.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Sosis Seafood</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 15.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 9 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak sosis ceker telur puyuh.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Sosis Ceker Telur Puyuh</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 17.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 10 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak sosis pentol jumbo.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Sosis Pentol Jumbo</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 17.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 11 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/seblak super lengkap.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Seblak Super Lengkap</h3>
                                            <p>Level<br>1-4</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Makanan</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 30.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Minumam -->
                                <!-- 1 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/pop ice.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Pop Ice</h3>
                                            <p>Varian Rasa Banyak</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 3.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/nutrisari.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Nutrisari</h3>
                                            <p>Varian Rasa Banyak</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 3.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/Marimas.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Marimas</h3>
                                            <p>Varian Rasa Banyak</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 2.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/Teh jus.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Tea Jus</h3>
                                            <p>Varian Rasa Banyak</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 2.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/top ice.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Top Ice</h3>
                                            <p>Varian Rasa Banyak</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 2.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/susu.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Es Susu</h3>
                                            <p>susu putih , susu coklat</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 4.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/minuman/kopi.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Kopi</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Minuman</b>
                                                </li>
                                                <li>
                                                    <p>stok</p>
                                                    <b>Terbatas</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rp. 4.000</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="assets/images/seblak sosis cekerr.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Seblak Sosis Ceker</h2>
                                <p>Seblak sosis ceker ala Sari adalah versi spesial dari seblak dengan kombinasi rasa pedas gurih yang kaya. Dibuat dengan resep khas, seblak ala Sari menggunakan kerupuk basah sebagai bahan dasar yang dimasak hingga kenyal, dicampur dengan sosis yang empuk dan ceker ayam yang dimasak hingga lembut. Ciri khas dari seblak ini adalah kuah pedas yang meresap sempurna, dihasilkan dari perpaduan bumbu seperti kencur, bawang merah, bawang putih, cabai, dan rempah-rempah lainnya.Seblak ala Sari memiliki cita rasa yang lebih istimewa karena teknik memasaknya yang pas dan bumbu yang diracik dengan porsi yang seimbang, menghasilkan sensasi pedas yang nikmat. Rasanya semakin lezat dengan tambahan topping sosis dan ceker yang melengkapi tekstur dan kelezatan hidangan ini. Seblak sosis ceker ala Sari menjadi pilihan favorit bagi para penikmat seblak yang menginginkan rasa tradisional dengan sentuhan kelezatan ekstra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                                <h2 class="xxl-title">Seblak Sosis Seafood</h2>
                                <p>Seblak sosis seafood ala Sari menawarkan sensasi baru dalam menikmati hidangan seblak dengan kombinasi yang menggugah selera. Hidangan ini menggunakan kerupuk basah khas seblak yang kenyal dan dimasak dengan sosis berkualitas, serta seafood pilihan seperti udang, cumi, atau bahkan kepiting kecil, memberikan kelezatan dan tekstur yang beragam. Kuah seblak ala Sari yang pedas gurih dibuat dengan rempah khas seperti kencur, cabai, bawang merah, dan bawang putih, menghasilkan aroma sedap dan kaya rasa

                                    Seblak ala Sari memiliki ciri khas tersendiri dalam setiap penyajiannya. Seafood yang digunakan selalu dipilih segar untuk menjaga kualitas rasa, sehingga saat dimakan, kenikmatan pedas gurih yang dihasilkan semakin terasa sempurna. Seblak sosis seafood ala Sari menyajikan sensasi rasa yang istimewa dan pasti membuat siapa saja yang mencobanya merasa ketagihan.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-1">
                            <div class="sec-img">
                                <img src="assets/images/dish/Seblak sosis seafoodd.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Informasi</p>
                                    <h2 class="h2-title">Contact Seblak Sari</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Setiap Hari</h3>
                                        <p>09:00 am - 21:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="https://wa.me/6285791383577?text=Saya%20Mau%20Beli%20Seblak%20Bu%20Sari" target="_blank">+62 857-9138-3577</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Tempat</h3>
                                        <p>Jln.Bambang Yuwono Desa Jabaran Balongbendo RT 08 RW 03</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- walpaper seblak -->
                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                <div id="contact" class="contact-us section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="section-heading">
                                    <h2 class="h2-title">Lokasi <em>Seblak</em> Ala Sari <span>Di Balongbendo</span></h2>
                                    <div id="map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31652.17981873311!2d112.55280619187523!3d-7.407276626572566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780900379e65b1%3A0xbf3febdcd64b0cb4!2sSeblak%20Ala%20Sari!5e0!3m2!1sen!2sid!4v1734271408418!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 align-self-center">
                                <form id="contact" action="https://api.web3forms.com/submit" method="POST">
                                    <input type="hidden" name="access_key" value="32898c80-451b-4d47-b51c-ed71cf22310c">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="surname" name="surname" id="surname" placeholder="Surname"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                    placeholder="Your Email" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="text" name="text" id="text" placeholder="Pesan"
                                                    required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit"
                                                    class="main-button">Kirim</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer starts  -->
                <footer class="site-footer" id="contact">
                    <div class="top-footer section">
                        <div class="sec-wp">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="footer-info">
                                            <div class="footer-logo">
                                                <a href="index.php">
                                                    <img src="logoseblak2.png" alt="">
                                                </a>
                                            </div>
                                            <p>Warung Seblak Ala Sari
                                            </p>
                                            <span>Sosial Media :</span>
                                            <div class="social-icon">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.instagram.com/seblaksari.id?igsh=MWRrcGdpbzNicmNsbQ==" target="_blank">
                                                            <i class="uil uil-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://wa.me/6285791383577?text=Saya%20Mau%20Beli%20Seblak%20Bu%20Sari" target="_blank">
                                                            <i class="uil uil-whatsapp"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="footer-flex-box">
                                            <div class="footer-table-info">
                                                <h3 class="h3-title">open hours</h3>
                                                <ul>
                                                    <li><i class="uil uil-clock"></i> Setiap Hari :</li>
                                                    <li> 09.00 am - 21.00 pm </li>
                                                    <li><i class="uil uil-clock"></i> Tempat/Lokasi :</li>
                                                    <li>Jln.Bambang Yuwono Desa Jabaran</li>
                                                    <span>Balongbendo RT 08 RW 03</span>
                                                </ul>
                                            </div>
                                            <div class="footer-menu food-nav-menu">
                                                <h3 class="h3-title">Links</h3>
                                                <ul class="column-2">
                                                    <li>
                                                        <a href="#home" class="footer-active-menu">Home</a>
                                                    </li>
                                                    <li><a href="#about">About</a></li>
                                                    <li><a href="#menu">Menu</a></li>
                                                    <li><a href="#gallery">Gallery</a></li>
                                                    <li><a href="#contact">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="copyright-text">
                                        <p>Copyright &copy; 2024 <span class="name"> SISWA SMK KRIAN 1</span> All Rights
                                            Reserved.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
                        </div>
                    </div>
                </footer>



            </div>
        </div>





        <!-- jquery  -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>

        <!-- fontawesome  -->
        <script src="assets/js/font-awesome.min.js"></script>

        <!-- swiper slider  -->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!-- mixitup -- filter  -->
        <script src="assets/js/jquery.mixitup.min.js"></script>

        <!-- fancy box  -->
        <script src="assets/js/jquery.fancybox.min.js"></script>

        <!-- parallax  -->
        <script src="assets/js/parallax.min.js"></script>

        <!-- gsap  -->
        <script src="assets/js/gsap.min.js"></script>

        <!-- scroll trigger  -->
        <script src="assets/js/ScrollTrigger.min.js"></script>
        <!-- scroll to plugin  -->
        <script src="assets/js/ScrollToPlugin.min.js"></script>
        <!-- rellax  -->
        <!-- <script src="assets/js/rellax.min.js"></script> -->
        <!-- <script src="assets/js/rellax-custom.js"></script> -->
        <!-- smooth scroll  -->
        <script src="assets/js/smooth-scroll.js"></script>
        <!-- custom js  -->
        <script src="main.js"></script>

</body>

</html>