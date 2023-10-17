<?php include '../includes/functions.php'; ?>
<?php include '../layouts/head.php'; ?>
<link rel="stylesheet" href="<?php echo $domainUrl; ?>/assets/css/typing-animation.css">
<body>
<?php include '../layouts/header.php'; ?>

<section class="theme-container  d-flex">
    <div class="container-fluid px-0 mx-0">
        <div id="scroll-up-div" class="row" style="margin: 20% 0;" >
            <div class="col-md-6 col-lg-6 col-sm-12 px-0 mx-0 once-text-content-append" >
                <p class="once-type fn-title-font typedtext"></p>
                <p class=" fn-paragraph-font">Chinese fine dining restaurant</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row detail-works-sm-margin">
                    <div class="col-sm-6 col-md-8 pb-sm-5 px-0 mx-0">
                        <p class="mb-0 text-white fn-paragraph-font text-right opacity-05">Work</p>
                        <p class="mb-0 text-white fn-paragraph-font text-right">Brand Identity</p>
                    </div>
                    <div class="col-sm-6 col-md-4 sm-top-divider px-0 mx-0">
                        <p class="mb-0 text-white fn-paragraph-font text-right opacity-05">Industry</p>
                        <p class="mb-0 text-white fn-paragraph-font text-right">Restaurant</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="theme-container" id="get-gallery-div">
    <div class="universal-img-container mt-4" data-aos="fade-up" data-aos-duration="1500" >
        <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/1.jpg" alt="">
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/2.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/3.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/4.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/5.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/6.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="universal-img-container mt-4" data-aos="fade-up" data-aos-duration="1500" >
        <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/crystal/7.jpg" alt="">
    </div>


    <p data-aos="fade-up" data-aos-duration="1500" class="text-center animatable fadeInUp" style="margin: 200px 0 200px 0; text-decoration: underline;">
        <a class="text-white fn-paragraph-font " href="<?php echo $domainUrl;?>/works.php">Explore our works</a>
    </p>
    <div class="click-details-footer d-flex justify-content-between align-items-center">
        <a href="javascript:void(0);" onclick="projectDetail();" class="header-nav-fs text-white">Project Detail +</a>
        <div class="header-nav-fs text-white">Brand Identity</div>
    </div>
</section>


<div class="project-overlay" style="height: 0%;" >
    <div class="theme-container mt-5">
        <a href="javascript:void(0);" class="text-white fn-paragraph-font project-overlay-close">Close</a>
        <div class="row" style="margin-top: 150px">
            <div class="col-sm-12 col-md-6">
                <p class="fn-title-font ">La Crystal</p>
                <div class="description-section">
                    <p class="fn-paragraph-font my-5 opacity-05">
                        The fine dining restaurant's brand identity revolves around its luxurious and sophisticated ambiance, which is reflective of the restaurant's Chinese heritage and fine cuisine.
                    </p>
                    <p class="fn-paragraph-font my-5 opacity-05">
                        The crystal shape of the emblem adds a touch of refinement and exclusivity, underscoring the high-end nature of the restaurant. With its striking visual identity, La Crystal Chinese fine dining restaurant stands out as a premier destination for discerning diners seeking an exceptional culinary experience.
                    </p>
                    <p class="fn-paragraph-font my-5 opacity-05">
                        We have created a distinctive and memorable brand identity for La Crystal, which is aligned with the restaurant's premium positioning. The logo's use of gold and red hues is symbolic of prosperity, fortune, and good luck, which are highly valued in Chinese culture.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="row" style="margin-top: 100px">
                    <div class="col-sm-6 col-md-8">
                        <p class="text-white fn-paragraph-font text-right opacity-05">Work</p>
                        <p class="text-white fn-paragraph-font text-right">Brand Identity</p>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <p class="text-white fn-paragraph-font text-right opacity-05">Industry</p>
                        <p class="text-white fn-paragraph-font text-right">Automobile</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../layouts/footer.php'; ?>
<!--<script src="--><?php //echo $domainUrl; ?><!--/assets/js/count-down.min.js" ></script>-->
<?php include '../layouts/footer-script.php'; ?>
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->
<!--<script src="https://cdn.jsdelivr.net/gh/reymon359/web-experiments/Social%20Signature/socialsignature.min.js" crossorigin="anonymous"></script>-->
<script src="<?php echo $domainUrl; ?>/assets/js/typing-animation.js"></script>
<script>

    $(document).ready(function() {
        AOS.init();
    });

    const projectDetail = () =>
    {
        // Get the current scroll position
        var currentScroll = $(window).scrollTop();
        // Calculate the new scroll position
        var newScroll = currentScroll + 300; // Scroll down 100 pixels
        // Animate scrolling to the new position
        $("html, body").animate({ scrollTop: newScroll }, "slow"); // Adjust animation speed (400 milliseconds)
        $('.project-overlay').css('height','100%');
    }

    $('.project-overlay-close').click(function (){
        $('.project-overlay').css('height','0%');
    });

    let getGalleryDivHeight = $("#get-gallery-div").height();
    getGalleryDivHeight = getGalleryDivHeight - 200;
    const updateScroll = () =>
    {
        let scrollLocation = $(window).scrollTop();
        let scrollLocationCeil = Math.ceil(scrollLocation);
        console.log(scrollLocationCeil);
        if (scrollLocationCeil >= getGalleryDivHeight)
        {
            $('.click-details-footer').removeClass("d-flex");
            $('.click-details-footer').addClass("d-none");
        }else {
            $('.click-details-footer').removeClass("d-none");
            $('.click-details-footer').addClass("d-flex");
        }
    }


    $(window).on('scroll', updateScroll);

    typingEffect([
        'La Crystal']); // That u want to show on typing content
    setTimeout(function (){
        $('.once-type').remove();
        $('.once-text-content-append').prepend(`<p class="once-type fn-title-font" >La Crystal</p>`)
    },2000);

</script>
</body>
</html>
