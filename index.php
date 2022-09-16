<?php 
include_once "./api/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>柯又銘-個人履歷</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ================================================== Header ================================================== -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php" style="color:white; text-shadow:black 0.1rem 0.1rem 0.2em">柯又銘</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" style="color:white; text-shadow:black 0.1em 0.1em 0.2em" href="#header">首頁</a></li>
          <li><a class="nav-link" style="color:white; text-shadow:black 0.1em 0.1em 0.2em" href="#about">關於我</a></li>
          <li><a class="nav-link" style="color:white; text-shadow:black 0.1em 0.1em 0.2em" href="#resume">工作經歷</a></li>
          <li><a class="nav-link" style="color:white; text-shadow:black 0.1em 0.1em 0.2em" href="#portfolio">作品集</a></li>
          <li><a class="nav-link" style="color:white; text-shadow:black 0.1em 0.1em 0.2em" href="#contact">聯絡</a></li>
          <li><a class="nav-link" style="color:white; text-shadow:black 0.1em 0.1em 0.2em" href="#services">後台系統</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <!-- =======--------------------------------------------------個人資訊--------------------------------------------------======= -->
    <div class="about-me container">


        <!-- 引入資料庫資料-START -->
        <?php
        $rows=$Information->all();
        foreach($rows as $row){
        ?>


      <div class="section-title">
        <h2>關於我</h2>
        <p>了解更多訊息</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/<?=$row['img'];?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>網頁設計_開發人員</h3>
          <p class="fst-italic">
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Name : </strong> <span><?=$row['name'];?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City : </strong> <span><?=$row['city'];?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday : </strong> <span><?=$row['birthday'];?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age : </strong> <span><?=$row['age'];?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <!-- <li><i class="bi bi-chevron-right"></i> <strong>掌握程度 : </strong> <span>< ?=$row['mastery'];?></span></li> -->
                <li><i class="bi bi-chevron-right"></i> <strong>GitHub : </strong> <span><a href="<?=$row['website'];?>"><?=$row['website'];?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>E-mail : </strong> <span><?=$row['email'];?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone : </strong> <span><?=$row['phone'];?></span></li>
              </ul>
            </div>
          </div>
          <p>
          <?=$row['text'];?>
          </p>
        </div>
        <?php
        }
        ?>
        <!-- 引入資料庫資料-END -->
      </div>

    </div>
    
    <!-- ======= --------------------------------------------------技能-------------------------------------------------- ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <h3>前端</h3>
            <p>HTML</p>
            <p>CSS</p>
            <p>Bootstrap</p>
            <p>Java Script</p>
            <p>jQuery</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <h3>後端</h3>
            <p>PHP</p>
            <p>MySQL</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <h3>Adobe</h3>
            <p>Photoshop</p>
            <p>Illustrator</p>
          </div>
        </div>

      </div>

    </div>
    <!-- ======= --------------------------------------------------興趣-------------------------------------------------- ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-egg-fried" style="color: #ffbb2c;"></i>
            <h3>cooking</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>pet</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <!-- <i class="ri-calendar-todo-line" style="color: #e80368;"></i> -->
            <i class="bi bi-flower3" style="color: #29cc61;"></i>
            <h3>gardening</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <!-- <i class="ri-paint-brush-line" style="color: #e361ff;"></i> -->
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Music</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= --------------------------------------------------經歷-------------------------------------------------- ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>工作與學習經歷</p>
      </div>

      <!-- <div class="row"> -->
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>泰山職訓局-PHP資料庫網頁設計班</h4>
            <p><em>對網頁開發感到興趣而參加職訓局的PHP資料庫網頁設計班</em></p>
            <p>
            <ul>
            </ul>
            </p>
          </div>

          <h3 class="resume-title"></h3>
          <div class="resume-item">
            <h4>LAYA-BURGER</h4>
            <p><em>蘆洲</em></p>
            <ul>
            </ul>
          </div>
          <div class="resume-item">
            <h4>Cama café</h4>
            <p><em>忠孝新生 / 東門 / 松江</em></p>
            <ul>
              <li>為了學習更接近小型店家的經營模式與咖啡知識, 並學習烘豆技術而來到 Cama café</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- <h3 class="resume-title">Professional Experience</h3> -->
          <div class="resume-item">
            <h4>星巴克-值班經理</h4>
            <p><em>信義區 / 新竹區 / 三蘆區 </em></p>
            <p>
            <ul>
              <li>三蘆區 : &nbsp;申請調回三蘆區, 並再調到典藏門市後擔任管理職, 分擔門市管理 規劃門市行銷活動 與 教育訓練等</li>
              <li>新竹區 : &nbsp;選擇讓自己換一個新環境認識並學習不同區組的工作模式與團隊經營, 認識更多不同個性的人 </li>
              <li>信義區 : &nbsp;畢業後對於咖啡文化感到有興趣, 且目標藉由接觸顧客來改變自己內向的個性, 到此學習了的咖啡知識與和顧客互動的技巧</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>貼紙印刷廠-學徒</h4>
            <p><em>高義貼紙印刷廠</em></p>
            <p>
            <ul>
              <li>就學時期在這裡當了學徒, 和師傅學習印刷技術一年, 確認不是適合自己的工作模式而另有規劃</li>
              <li>印刷設備操作與保養, 模板與刀板管理, 成品運送</li>
            </ul>
            </p>
          </div>
        </div>
      <!-- </div> -->

    </div>
  </section>
  <!-- ======= --------------------------------------------------後台系統-------------------------------------------------- ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>柯又銘</h2>
        <p>後台系統</p>
      </div>

      <!-- <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">2022/3/15~JQ</a></h4>
            <p>學了什麼</p>
          </div>
        </div>
      </div> -->
    <?php
    if(isset($_SESSION['user'])){
        if(isset($_GET['do'])){
            $file=$_GET['do'].".php";
        }
            if(isset($file)&& file_exists($file)){
                include "$file";
        }else{
            include "back.php";
            // include "$file";
        }
    }else{
      include_once "./front/login.php";
      // include "$file";
    }
    ?>


</div>

  </section>
  <!-- ======= --------------------------------------------------作品集頁面-------------------------------------------------- ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <!-- <li data-filter=".filter-app">API</li> -->
            <li data-filter=".filter-Adobe">Adobe</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
<!-- ----------------------------------------------------作品集:WEB---------------------------------------------------- -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/web5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>網頁設計-乙級術科第二題</h4>
              <p>PHP</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://popob2.github.io/Class_B_license_2_review/" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/web4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>氣象局_API</h4>
              <p>API</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://popob2.github.io/weather_API/" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>投票系統</h4>
              <p>PHP</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110203/vote/" target="_blank"><i class="bx bx-link"></i></a>
                <!-- <a href="http://220.128.133.15/s1110203/vote/" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>萬年曆</h4>
              <p>PHP</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110203/monthly_calendar/PerpetualCalendar-POPOB2/" target="_blank"><i class="bx bx-link"></i></a>
                <!-- <a href="http://220.128.133.15/s1110203/monthly_calendar/PerpetualCalendar-POPOB2/" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>網頁設計丙級 第一題</h4>
              <p>HTML / CSS</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://popob2.github.io/html_C1/" target="_blank"><i class="bx bx-link"></i></a>
                <!-- <a href="https://popob2.github.io/html_C1/" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>
<!-- ----------------------------------------------------作品集:ADOBE / PS---------------------------------------------------- -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/PS3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>虎年曆</h4>
              <p>Photoshop</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/PS3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/PS2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>旅遊海報</h4>
              <p>Photoshop</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/PS2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/PS1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>招生海報</h4>
              <p>Photoshop</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/PS1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
<!-- ----------------------------------------------------作品集:ADOBE / AI---------------------------------------------------- -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/animal-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>動物插圖</h4>
            <p>Illustrator</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/animal-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/animal-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>動物插圖</h4>
            <p>Illustrator</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/animal-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/animal-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>動物插圖</h4>
            <p>Illustrator</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/animal-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/animal-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>動物插圖</h4>
            <p>Illustrator</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/animal-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-Adobe">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/animal-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>動物插圖</h4>
            <p>Illustrator</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/animal-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      </div>

    </div>
  </section>
  <!-- ======= --------------------------------------------------聯絡-------------------------------------------------- ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>A224 MZ Street, LZ, NY 13775</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>nft192891@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+0 3345678 </p>
          </div>
        </div>
      </div>

      <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form> -->

    </div>
  </section>





  <!-- ================================================================================================================== -->
  <!-- ================================================================================================================== -->
  <div class="credits">
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>