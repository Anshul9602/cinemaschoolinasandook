<style>
    ul.footer-link-ul {
        padding-left: 0 !important;
    }

    .footer-social-icons a i {
        color: #C43EC6;
    }

    .copyright {
        background: #D9D9D9;
    }

    @media screen and (max-width: 784px) {
        .footer-links-div li {
            font-size: 10px;
        }
    }
</style>

<footer id="footerr" class="mt-5" style=" padding-top: 20px">
    <div class="footer-top position-relative">
        <div class="container">
            <div class="row mb-5">
                <div class="d-flex col-6 align-items-center justify-content-end">
                    <img src="<?php echo base_url('assets/image/New PPL logo.png'); ?>" alt="" style="max-width: 100px">
                </div>

                <div class="d-flex col-6 align-items-center justify-content-start">
                    <img src="<?php echo base_url('assets/image/LCI.png'); ?>" alt="" style="max-width: 100px">
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-links-div text-center">
                        <ul class="footer-link-ul text-white">
                            <li><a href="<?php echo base_url('Story'); ?>" class="text-white">House of PPL</a></li>
                            <li class="text-white">|</li>
                            <li><a href="#" class="text-white">Privacy Policy</a></li>
                            <li class="text-white">|</li>
                            <li><a href="#" class="text-white">Copyright Info</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-social-icons text-center position-absolute end-0 bottom-50 d-flex flex-column">
                <a href="https://www.facebook.com/purplepeoplelabs/" class="facebook"><i class="ri-facebook-circle-fill"></i></a>
                <a href="https://instagram.com/purplepeoplelabs?igshid=YmMyMTA2M2Y=" class="instagram"><i class="ri-instagram-fill"></i></a>
            </div>
        </div>

        <div class="copyright">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright text-center">
                        <p>Copyright ©️ 2022 Purple People Labs. All Rights Reserved PPL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- bootsrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".press-slider-swiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        freeMode: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".button-prev",
            prevEl: ".button-next",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 6,
            },
            425: {
                slidesPerView: 2,
                spaceBetween: 6,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 6,
                spaceBetween: 20,
            },
        },
    });
</script>

<script>
    var swiper = new Swiper(".hero-section-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        // autoplay: {
        //     delay: 5500,
        //     disableOnInteraction: false,
        // },
        navigation: {
            nextEl: ".hero-section-slider-button-prev",
            prevEl: ".hero-section-slider-button-next",
        },
        pagination: {
            el: ".hero-section-navigation",
            clickable: true
        },
    });
</script>

<script>
    var swiper = new Swiper(".testimonial-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        // autoplay: {
        //     delay: 5500,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: ".testimonial-navigation",
            clickable: true
        },
    });
</script>

<!-- press section modal -->
<script>
    var PressModal = document.getElementById('PressModal')
    PressModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var imgURl = button.getAttribute('data-bs-whatever')
        var modalBodyInput = PressModal.querySelector('.modal-body img')
        modalBodyInput.src = imgURl
    })
</script>


<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>

</body>

</html>