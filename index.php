<?php include 'layouts/head.php'; ?>
<style>
    #particles-js{
        /*width: 100%;*/
        /*height: 100%;*/
        /*background-color: black;*/
        /*background-image: url('');*/
        /*background-size: cover;*/
        /*background-position: 50% 50%;*/
        /*background-repeat: no-repeat;*/
    }
    .particles-js-canvas-el
    {
        position: absolute;
        z-index: -1;
        width: 80%;
    }
    canvas
    {
        width: 87% !important;
    }
    .home-title-text
    {
        width: 70%;
    }
    .slider-previous-overlay:hover{
        cursor: url('<?php echo $domainUrl; ?>/assets/images/sliders/previous.png'),auto;
    }
    .slider-next-overlay:hover{
        cursor: url('<?php echo $domainUrl; ?>/assets/images/sliders/next.png'),auto;
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>

    <section  class="theme-container set-screen-fit-height d-flex">
        <div id="particles-js" class="row set-mt-row-content" >
            <div class="col-md-12 col-lg-7 col-sm-12 d-flex align-items-end " style="padding-bottom: 8%!important;">
                <div class="once-text-content-append" style="width: 100% !important;" >
                    <h1 class="home-title-text text-white fn-title-font py-0 my-0 once-type typedtext"></h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-sm-12 d-flex align-items-end " style="padding-bottom: 5%!important;">
                <div data-aos="fade-up" data-aos-duration="1000" >
                    <p class="fn-paragraph-font text-right text-justify">We are a dynamic branding agency dedicated to creating
                        and enhancing brands. Our team of experts combines
                        strategic thinking, creative talent, and market insights to
                        deliver exceptional brand experiences.
                    </p>
                    <p class="fn-paragraph-font text-right text-justify">
                        We help businesses establish a strong brand presence and
                        drive success in today’s competitive landscape. Partner
                        with us and unlock the true potential of your brand.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="theme-container">
        <div class="owl-carousel owl-theme ">
            <div class="item">
                <a href="javascript:void(0);">
                    <div class="slider-img-container" >
                        <div class="home-slider-full-overlay" style="width: 100%;height:89%;display:flex;position: absolute;z-index: 2!important;">
                            <div class="slider-previous-overlay" style="width: 50%;height:100%;position: absolute;z-index: 6!important;">
                            </div>
                            <div class="slider-next-overlay" style="width: 100%;height:100%;position: absolute;z-index: 5!important;">
                            </div>
                        </div>
                        <img class="w-100 h-auto " src="<?php echo $domainUrl; ?>/assets/images/sliders/1.png" alt="">
                    </div>
                </a>
                <div data-aos="fade-up" data-aos-duration="1000" class="slider-text-description mt-5">
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Hydro Myanmar</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Premium Web Solution for Industry</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Leading Hydro Survey Company</p>
                </div>
            </div>
            <div class="item">
                <a href="javascript:void(0);">
                    <div class="slider-img-container" >
                        <div class="home-slider-full-overlay" style="width: 100%;height:89%;position: absolute;z-index: 2!important;">
                            <div class="slider-previous-overlay" style="width: 50%;height:100%;position: absolute;z-index: 6!important;">
                            </div>
                            <div class="slider-next-overlay" style="width: 100%;height:100%;position: absolute;z-index: 5!important;">
                            </div>
                        </div>
                        <img class="w-100 h-auto " src="<?php echo $domainUrl; ?>/assets/images/projects/2.png" alt="">
                    </div>
                </a>
                <div data-aos="fade-up" data-aos-duration="1000" class="slider-text-description mt-5">
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Hydro Myanmar</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Premium Web Solution for Industry</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Leading Hydro Survey Company</p>
                </div>
            </div>
            <div class="item">
                <a href="javascript:void(0);">
                    <div class="slider-img-container" >
                        <div class="slider-img-container" >
                            <div class="home-slider-full-overlay" style="width: 100%;height:89%;position: absolute;z-index: 2!important;">
                                <div class="slider-previous-overlay" style="width: 50%;height:100%;position: absolute;z-index: 6!important;">
                                </div>
                                <div class="slider-next-overlay" style="width: 100%;height:100%;position: absolute;z-index: 5!important;">
                                </div>
                            </div>
                            <img class="w-100 h-auto " src="<?php echo $domainUrl; ?>/assets/images/projects/4.png" alt="">
                        </div>
                    </div>
                </a>
                <div data-aos="fade-up" data-aos-duration="1000" class="slider-text-description mt-5">
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Hydro Myanmar</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Premium Web Solution for Industry</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Leading Hydro Survey Company</p>
                </div>
            </div>
            <div class="item">
                <a href="javascript:void(0);">
                    <div class="slider-img-container" >
                        <div class="slider-img-container" >
                            <div class="home-slider-full-overlay" style="width: 100%;height:89%;position: absolute;z-index: 2!important;">
                                <div class="slider-previous-overlay" style="width: 50%;height:100%;position: absolute;z-index: 6!important;">
                                </div>
                                <div class="slider-next-overlay" style="width: 100%;height:100%;position: absolute;z-index: 5!important;">
                                </div>
                            </div>
                            <img class="w-100 h-auto " src="<?php echo $domainUrl; ?>/assets/images/projects/2.png" alt="">
                        </div>
                    </div>
                </a>
                <div data-aos="fade-up" data-aos-duration="1000" class="slider-text-description mt-5">
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Hydro Myanmar</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Premium Web Solution for Industry</p>
                    <p data-aos="fade-up" data-aos-duration="1000" class="fn-paragraph-font pb-0 mb-0">Leading Hydro Survey Company</p>
                </div>
            </div>
        </div>
        <p data-aos="fade-up" data-aos-duration="1000" data-temp-active="1" class="carousel-info-text fn-paragraph-font text-right p-0 m-0">2 Of 10</p>
        <div class="d-flex justify-content-start align-items-center" style="margin-top: -15px">
            <div data-aos="fade-up" data-aos-duration="1800" class="mr-5">
                <a class="previous-slider opacity-05" href="javascript:void(0)">
                    <img class="w-100 " src="<?php echo $domainUrl; ?>/assets/images/gallery/previous.png" alt="">
                </a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1800" >
                <a class="next-slider" href="javascript:void(0)" >
                    <img src="<?php echo $domainUrl; ?>/assets/images/gallery/next.png" alt="">
                </a>
            </div>
        </div>

    </section>

    <section class="theme-container mt-5">
        <div class="row" style="margin: 150px 0 270px 0">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h1 data-aos="fade-up" data-aos-duration="1000" class="py-2 text-white fn-title-font"  >Since 2018</h1>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5" data-aos="fade-up" data-aos-duration="1500">
                <div class="row py-2">
                    <div class="col-5">
                        <h1 id="count" class="animatable fadeInUp stat d-inline text-white fn-title-font"> </h1><h1 class="fn-title-font text-white d-inline">+</h1>
                    </div>
                    <div class="col-7">
                        <p class="fn-paragraph-font animatable fadeInUp"  >Worked with clients from several industries</p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-5">
                        <h1 id="count2" class="animatable fadeInUp d-inline text-white fn-title-font"></h1><h1 class="fn-title-font text-white d-inline">+</h1>
                    </div>
                    <div class="col-7">
                        <p class="fn-paragraph-font animatable fadeInUp"  >Branding and creative solutions completed</p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-5">
                        <h1 id="count3" class="animatable fadeInUp d-inline text-white fn-title-font"></h1><h1 class="fn-title-font text-white d-inline">+</h1>
                    </div>
                    <div class="col-7">
                        <p class="fn-paragraph-font animatable fadeInUp"  >Clients from countries worldwide </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="row py-2">
                    <div class="col-5">
                        <h1 id="count4" class="animatable fadeInUp d-inline text-white d-inline fn-title-font">20+</h1><h1 class="fn-title-font text-white d-inline">+</h1>
                    </div>
                    <div class="col-7">
                        <p class="fn-paragraph-font animatable fadeInUp"  >Worked with clients from several industries</p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-5">
                        <h1 id="count5" class="animatable fadeInUp d-inline text-white fn-title-font">1000+</h1><h1 class="fn-title-font text-white d-inline">+</h1>
                    </div>
                    <div class="col-7">
                        <p class="fn-paragraph-font animatable fadeInUp py-0 ">Cups of coffee. Yep, we love coffee.</p>
<!--                        <p class="fn-paragraph-font animatable fadeInUp py-0 "></p>-->
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-5">
                        <h1 id="count6" class="animatable fadeInUp d-inline text-white fn-title-font">10+</h1><h1 class="fn-title-font text-white d-inline">+</h1>
                    </div>
                    <div class="col-7">
                        <p class="fn-paragraph-font animatable fadeInUp"  >Trusted clients from
                            Canada, Thailand, U.S. </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="theme-container mt-5">
        <h5 class="text-white my-4 animatable fadeInUp fn-paragraph-font"  >More Projects</h5>
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-5">
                <div data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                    <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/1.png" alt="">
                    <div class="hover-scroll-div">
                        <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                        <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                    <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/2.png" alt="">
                    <div class="hover-scroll-div">
                        <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                        <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                    <img class="w-100 slideInRight" src="<?php echo $domainUrl; ?>/assets/images/projects/3.png" alt="">
                    <div class="hover-scroll-div">
                        <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                        <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                    <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/4.png" alt="">
                    <div class="hover-scroll-div">
                        <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                        <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                    <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/5.png" alt="">
                    <div class="hover-scroll-div">
                        <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                        <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                    <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/6.png" alt="">
                    <div class="hover-scroll-div">
                        <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                        <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    </div>
                </div>
            </div>
        </div>
        <p data-aos="fade-up" data-aos-duration="1500" class="text-center animatable fadeInUp" style="margin: 100px 0 270px 0; text-decoration: underline;">
            <a class="text-white fn-paragraph-font " href="">Explore our works</a>
        </p>
    </section>

    <?php include 'layouts/footer.php'; ?>
    <script src="<?php echo $domainUrl; ?>/assets/js/count-down.min.js" ></script>
    <?php include 'layouts/footer-script.php'; ?>
    <script src="<?php echo $domainUrl; ?>/assets/js/owl-setup.js" ></script>
    <script src="<?php echo $domainUrl; ?>/assets/js/typing-animation.js"></script>

<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->
<script>

    typingEffect([
        'We make better brands and make brands better.']); // That u want to show on typing content
    setTimeout(function (){
        $('.once-type').remove();
        $('.once-text-content-append').prepend(`<h1 class="home-title-text text-white fn-title-font py-0 my-0 once-type typedtext">We make better brands and make brands better.</h1>`);
    },6500);


    $(document).ready(function() {

        var uptTeamp = $('.carousel-info-text').attr("data-temp-active");
        $('.owl-dots').addClass("d-none");
        let getOwlDot = $('.owl-dots').html();
        let stringToArray = getOwlDot.split("</button>");
        let toTotalCarousel = stringToArray.length - 1 ;
        $('.carousel-info-text').html(`1 of ${toTotalCarousel }`);

        $('.slider-next-overlay').click(function (){
           $('.next-slider').click();
        });

        $('.slider-previous-overlay').click(function (){
            $('.previous-slider').click();
            // console.log('previous click');
        });


        $('.next-slider').click(function ()
        {
            $('.owl-next').click();
            $('.previous-slider').removeClass("opacity-05");

            var uptTeamp = $('.carousel-info-text').attr("data-temp-active");
            if(uptTeamp != toTotalCarousel) {
                uptTeamp = Number(uptTeamp) + 1;
            }
            if (uptTeamp == toTotalCarousel)
            {
                $('.next-slider').addClass("opacity-05");
            }

            console.log(uptTeamp);
            $('.carousel-info-text').attr("data-temp-active",uptTeamp);
            $('.carousel-info-text').html(`${uptTeamp} of ${toTotalCarousel }`);
        });

        $('.previous-slider').click(function ()
        {
            $('.owl-prev').click();
            $('.next-slider').removeClass("opacity-05");

            var uptTeamp = $('.carousel-info-text').attr("data-temp-active");
            if(uptTeamp != 1) {
                uptTeamp = Number(uptTeamp) - 1;
            }
            if (uptTeamp == 1)
            {
                $('.previous-slider').addClass("opacity-05");
            }
            console.log(uptTeamp);
            $('.carousel-info-text').attr("data-temp-active",uptTeamp);
            $('.carousel-info-text').html(`${uptTeamp} of ${toTotalCarousel }`);
        });

    });


    // Example 2 - Scroll into View
    new countUp.CountUp("count", 200, { enableScrollSpy: true });
    new countUp.CountUp("count2", 500, { enableScrollSpy: true });
    new countUp.CountUp("count3", 10, { enableScrollSpy: true });

    new countUp.CountUp("count4", 20, { enableScrollSpy: true });
    new countUp.CountUp("count5", 999, { enableScrollSpy: true });
    new countUp.CountUp("count6", 10, { enableScrollSpy: true });

    let canvasInner = $('.particles-js-canvas-el').html();
    $('.particles-js-canvas-el').prepend(`<div class="col-12">${canvasInner}</div>`);

</script>

</body>
</html>