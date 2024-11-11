<style>
    .bottom-nav {
        margin-bottom: 0px;
        overflow-y: hidden;
        overflow-x: auto;
        white-space: nowrap;
    }

    .bottom-nav::-webkit-scrollbar {
        width: 0;
    }

    .bottom-nav li {
        display: inline;
        padding: 10px 25px 10px 25px;
        cursor: pointer;
        margin-bottom: -3px;
    }

    @media only screen and (max-width: 576px) {
        .bottom-nav li {
            padding: 10px 15px 10px 15px;
        }
    }

    .bottom-nav li.active {
        border-bottom: 7px solid #660066;
    }

    .tab-description {
        padding-left: 20px;
    }

    .tab-description li {
        font-size: 16px;
    }

    .feedback-answer {
        background: #D9D9D9;
        outline: none;
        border-radius: 11px;
        width: 100%;
        height: 100px;
        padding: 5px 10px;
        border: none;
    }

    .video-container {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .video-container::after {
        padding-top: 56.25%;
        display: block;
        content: '';
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<section style="background-color:#000;position:relative; padding-top:90px">
    <a style="color:#fff; position:absolute; top:90px; left:10px; font-size:40px; text-decoration:none; z-index:999" href="<?php echo base_url("user") ?>"><i class="ri-arrow-left-s-line"></i></a>

    <div style="width:60%; margin:0 auto" class="d-none d-sm-block">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/hBRt1MOEUys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div style="width:100%; margin:0 auto" class="d-sm-none">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/hBRt1MOEUys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section style="padding:7px 0 50px 0; background:#fff">
    <div>
        <div class="container" style="margin-bottom:0!important;">
            <ul class="bottom-nav" style="padding:10px 0;">
                <li class="active" data-tab="#synopsis"> <span>Synopsis</span>
                </li>
                <li> <span>Reflection</span>
                </li>
                <li> <span>Reference</span>
                </li>
                <li> <span>Analysis</span>
                </li>
                <li data-tab="#feedback"> <span>Feedback</span>
                </li>
            </ul>
        </div>
        <div style="height: 3px; background:#D9D9D9; margin-top:-2px" class="d-none d-md-none"></div>
    </div>
    <div class="container" style="display:relative">


        <br>

        <div id="synopsis" class="data-tab">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <img src="<?php echo base_url('assets/image/BATAT POSTER New.jpg'); ?>" alt="" class="img-fluid" style="border-radius:10px">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                    <div style="padding-top:15px">
                        <h6 style="color:#660066; margin-bottom:15px; font-size:26px">Learning Objectives</h6>
                        <ul class="tab-description">
                            <li>Understanding elements of narrative [ setting, plot, character]</li>
                            <li>Exploring purpose & messaging of the text [tone, mood, style]</li>
                            <li>Exploring social cultural markers in the text [ gender, race, economic strata; religion]</li>
                            <li>Developing skills – critical/creative thinking skills; writing skills; research skill;</li>
                            <li>communication skills; collaboration & team work</li>
                        </ul>
                        <div style="height:1px; background-color:#C9C9C9; margin:0 auto; width:80%">

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="feedback" class="data-tab" style="display:none">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5">
                    <h6 style="color:#660066">Question</h6>
                    <textarea type="text" class="feedback-answer"></textarea>
                </div>
                <!-- <div class="col-12 col-sm-12 col-md-5 offset-md-2">
                    <h6 style="color:#660066">Question</h6>
                    <textarea type="text" class="feedback-answer"></textarea>
                </div>
                <div class="col-12 col-sm-12 col-md-5">
                    <h6 style="color:#660066">Question</h6>
                    <textarea type="text" class="feedback-answer"></textarea>
                </div>
                <div class="col-12 col-sm-12 col-md-5 offset-md-2">
                    <h6 style="color:#660066">Question</h6>
                    <textarea type="text" class="feedback-answer"></textarea>
                </div> -->
            </div>
            <br>
            <button style="padding: 7px 15px;
    background: #00C9B5;
    color: #fff;
    outline: none;
    border-radius: 10px;
    border: none;
    width:120px;
    text-align:center">
                Submit
            </button>
        </div>


    </div>

</section>

<script>
    $('.bottom-nav li').click(function() {
        $('.bottom-nav li').removeClass('active');
        $(this).addClass('active');
        const id = $(this).data('tab');
        $('.data-tab').fadeOut(function() {
            $(id).fadeIn();
        });

    })
</script>