<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="assets/css/typing-animation.css">
<style>

</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="theme-container  d-flex">
    <div class="container-fluid px-0 mx-0">
        <div class="row " style="margin: 18% 0 18% 0;" >
            <div class="col-md-6 col-lg-6 col-sm-12 px-0 mx-0" >
                <p class="w-100 text-white fn-title-font py-0 my-0">We Make World-Class</p>
                <p style="height: 90px" class="fn-title-font typedtext py-0 my-0"></p>
            </div>
        </div>
    </div>

</section>

<section class="theme-container mt-5">
<!--    <div class="row mobile-hide">-->
        <div class="cat-row flex-wrap d-flex justify-content-between align-items-center">
            <a href="javascript:void(0)" onclick="projectTab('all-projects');" id="all-projects" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >All projects</a>
            <a href="javascript:void(0)" onclick="projectTab('brand-identity');" id="brand-identity" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Brand Identity</a>
            <a href="javascript:void(0)" onclick="projectTab('marketing');" id="marketing" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Marketing</a>
            <a href="javascript:void(0)" onclick="projectTab('ui-ux');" id="ui-ux" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >UI UX</a>
            <a href="javascript:void(0)" onclick="projectTab('printing-design');" id="printing-design" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Printing Design</a>
            <a href="javascript:void(0)" onclick="projectTab('production');" id="production" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Production</a>
            <a href="javascript:void(0)" onclick="projectTab('other');" id="other" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Other</a>
        </div>
<!--    </div>-->

    <div class="row">
        <div id="div-other" class="col-sm-12 col-md-6 mb-5 animate__animated animate__fadeInUp">
            <a href="<?php echo $domainUrl; ?>/projects/laika.php" data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden ">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/1.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                </div>
            </a>
        </div>
        <div id="div-brand-identity" class="col-sm-12 col-md-6 mb-5  animate__animated animate__fadeInUp">
            <a href="" data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/2.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                </div>
            </a>
        </div>
        <div id="div-marketing" class="col-sm-12 col-md-6 mb-5 animate__animated animate__fadeInUp">
            <a href="" data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                <img class="w-100 slideInRight" src="<?php echo $domainUrl; ?>/assets/images/projects/3.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                </div>
            </a>
        </div>
        <div id="div-ui-ux" class="col-sm-12 col-md-6 mb-5 animate__animated animate__fadeInUp">
            <a href="" data-aos="fade-up" data-aos-duration="1500" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/4.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                </div>
            </a>
        </div>
        <div id="div-printing-design" class="col-sm-12 col-md-6 mb-5 animate__animated animate__fadeInUp">
            <a href="" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/5.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                </div>
            </a>
        </div>
        <div id="div-production" class="col-sm-12 col-md-6 mb-5 animate__animated animate__fadeInUp">
            <a href="<?php echo $domainUrl; ?>/projects/prime-automotive.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/6.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                </div>
            </a>
        </div>
    </div>
    <p data-aos="fade-up" data-aos-duration="1500" class="text-center animatable fadeInUp" style="margin: 250px 0 250px 0; text-decoration: underline;">
        <a class="text-white fn-paragraph-font " href="">Explore more works</a>
    </p>
</section>

<?php include 'layouts/footer.php'; ?>
<!--<script src="--><?php //echo $domainUrl; ?><!--/assets/js/count-down.min.js" ></script>-->
<?php include 'layouts/footer-script.php'; ?>
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->
<script>

    $(document).ready(function() {
        AOS.init();
    });

    const selectorArr = ['all-projects', 'brand-identity', 'marketing', 'ui-ux', 'printing-design', 'production', 'other'];

    const projectTab = (selector) =>
    {
        for (s=0; s<selectorArr.length; s++)
        {
            $(`#${selectorArr[s]}`).removeClass('opacity-05');
            $(`#div-${selectorArr[s]}`).removeClass('d-none');
            // console.log('remove form '+selectorArr[s]);
            if (selectorArr[s] == selector )
            {
                $(`#${selectorArr[s]}`).removeClass('opacity-05');
                console.log('add to ' + selectorArr[s]);
                $(`#div-${selectorArr[s]}`).removeClass('d-none'); // hide unwanted div

            }else {
                console.log(selectorArr[s]);
                console.log('****');
                $(`#${selectorArr[s]}`).addClass('opacity-05');
                if (selector != 'all-projects')
                {
                    $(`#div-${selectorArr[s]}`).addClass('d-none'); // hide unwanted div
                }
            }
        }
    }

</script>
<!--<script src="https://cdn.jsdelivr.net/gh/reymon359/web-experiments/Social%20Signature/socialsignature.min.js" crossorigin="anonymous"></script>-->
<script src="assets/js/typing-animation.js" crossorigin="anonymous"></script>

<script>
    typingEffect([
        'Branding Identity',
        'Social Media Marketing',
        'Web Development',
        'Printing Design',
        'Video Production',
        'Graphic Design']); // That u want to show on typing content
</script>

</body>
</html>