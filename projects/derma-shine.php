<?php include '../includes/functions.php'; ?>
<?php include '../layouts/head.php'; ?>
<link rel="stylesheet" href="<?php echo $domainUrl; ?>/assets/css/typing-animation.css">

<style>
    .universal-img-container
    {
        width: 100%;
        height: auto;
        overflow: hidden;
    }
    .click-details-footer
    {
        width: 86%;
        height: 80px;
        margin: 0 auto !important;
        position: fixed;
        bottom: 0;
        /*border: 1px solid white;*/
        background: linear-gradient(360deg, #000 0%, rgba(0, 0, 0, 0.00) 100%);
    }
    .project-overlay
    {
        /*height: 1080px;*/
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        background-color: black;
        overflow-x: hidden;
        transition: 0.5s;
        z-index: 999;
    }
</style>
<body>
<?php include '../layouts/header.php'; ?>

<section class="theme-container  d-flex">
    <div class="container-fluid px-0 mx-0">
        <div id="scroll-up-div" class="row" style="margin: 20% 0;" >
            <div class="col-md-6 col-lg-6 col-sm-12 px-0 mx-0 once-text-content-append" >
                <p class="once-type fn-title-font typedtext"></p>
                <p class=" fn-paragraph-font">Aesthetic clinic</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row detail-works-sm-margin">
                    <div class="col-sm-6 col-md-8 pb-sm-5 px-0 mx-0">
                        <p class="mb-0 text-white fn-paragraph-font text-right opacity-05">Work</p>
                        <p class="mb-0 text-white fn-paragraph-font text-right">Brand Identity</p>
                    </div>
                    <div class="col-sm-6 col-md-4 sm-top-divider px-0 mx-0">
                        <p class="mb-0 text-white fn-paragraph-font text-right opacity-05">Industry</p>
                        <p class="mb-0 text-white fn-paragraph-font text-right">Aesthetic</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="theme-container" id="get-gallery-div">
    <div class="universal-img-container" data-aos="fade-up" data-aos-duration="1500" >
        <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/derma_shine/1.jpg" alt="">
    </div>
    <div class="universal-img-container mt-4" data-aos="fade-up" data-aos-duration="1500" >
        <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/derma_shine/2.jpg" alt="">
    </div>
    <div class="universal-img-container mt-4" data-aos="fade-up" data-aos-duration="1500" >
        <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/derma_shine/3.jpg" alt="">
    </div>
    <div class="universal-img-container mt-4" data-aos="fade-up" data-aos-duration="1500" >
        <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/derma_shine/4.jpg" alt="">
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/derma_shine/5.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="universal-img-container"  data-aos="fade-up" data-aos-duration="1500">
                <img class="w-100 h-auto" src="<?php echo $domainUrl; ?>/assets/images/projects/derma_shine/6.jpg" alt="">
            </div>
        </div>
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
                <p class="fn-title-font ">Derma Shine</p>
                <div class="description-section">
                    <p class="fn-paragraph-font my-5 opacity-05">
                        Branding design by Future Now gives captivating and elegant, encapsulating the essence of beauty and sophistication of the aesthetic clinic.
                    </p>
                    <p class="fn-paragraph-font my-5 opacity-05">
                        A top view rose icon serves as the main icon of the logo, symbolizing elegance and beauty. The rose is a timeless representation of refinement and grace, aligning perfectly with the aesthetic clinic's brand, adding a touch of sophistication and exclusivity to the design.
                    </p>
                    <p class="fn-paragraph-font my-5 opacity-05">
                        Gold is incorporated into the color scheme to convey luxury, opulence, and prestige. It symbolizes sophistication and high-quality service, resonating with the clinic's positioning as a luxurious aesthetic destination.The contrast between dark and light colors adds depth and dimension to the design, creating a visually pleasing balance. The dark colors add a sense of richness, while the light colors provide a subtle and calming backdrop, aligning with the tranquility associated with aesthetic treatments.
                    </p>
                    <p class="fn-paragraph-font my-5 opacity-05">
                        Future Now's the branding design successfully communicates the clinic's values and positioning, inviting the audience into a world of luxury, beauty, and sophistication.
                    </p>
                    <p class="fn-paragraph-font my-5 opacity-05">
                        What we did: Brand Identity, Printing Design
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
                        <p class="text-white fn-paragraph-font text-right">Aesthetic</p>
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
        'Derma Shine']); // That u want to show on typing content
    setTimeout(function (){
        $('.once-type').remove();
        $('.once-text-content-append').prepend(`<p class="once-type fn-title-font" >Derma Shine</p>`)
    },2000);

</script>
</body>
</html>
