<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="assets/css/typing-animation.css">
<style>

</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="theme-container  d-flex">
    <div class="container-fluid ">
        <div class="row single-type-text-row"  >
            <div class="col-md-6 col-lg-6 col-sm-12 px-0 mx-0" >
                <p class="w-100 text-white fn-title-font py-0 my-0">We Make World-Class</p>
                <p style="height: 90px" class="fn-title-font typedtext py-0 my-0"></p>
            </div>
        </div>
    </div>

</section>

<section class="theme-container mt-3">
<!--    <div class="row mobile-hide">-->
        <ul class="cat-row ">
            <li>
                <a href="javascript:void(0)" onclick="projectTab('all-projects');" id="all-projects" class="text-white my-4 animatable fadeInUp fn-paragraph-font "  >All projects</a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="projectTab('brand-identity');" id="brand-identity" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Brand Identity</a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="projectTab('marketing');" id="marketing" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Marketing</a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="projectTab('ui-ux');" id="ui-ux" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >UI UX</a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="projectTab('printing-design');" id="printing-design" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Printing Design</a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="projectTab('production');" id="production" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Production</a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="projectTab('other');" id="other" class="text-white my-4 animatable fadeInUp fn-paragraph-font opacity-05"  >Other</a>
            </li>
        </ul>
<!--    </div>-->

    <div class="row first-row-gp">

        <div id="div-other" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/laika.php" class="project-img-control overflow-hidden ">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/1.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Making you are pet happier</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Laika Pet Cafe</p>
                </div>
            </a>
        </div>
        <div id="div-brand-identity" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/ilct.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/2.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Pioneering international law firm</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Intl’ Legal Counsellors Thailand LTD</p>
                </div>
            </a>
        </div>
        <div id="div-marketing" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="" class="project-img-control overflow-hidden">
                <img class="w-100 slideInRight" src="<?php echo $domainUrl; ?>/assets/images/projects/3.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Premium Craftmanship for luxury furniture</p>
                    <p class="fn-paragraph-font animatable fadeInUp">RareWood</p>
                </div>
            </a>
        </div>
        <div id="div-ui-ux" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/yangon-international-airport.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/4.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Gateway to Worldwide Connections</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Yangon International Airport</p>
                </div>
            </a>
        </div>
        <div id="div-printing-design" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/havana.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/5.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Timeless Elegance with Havanna Interior</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Havanna</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/prime-automotive.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/6.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">The future drives here, go electric!</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Prime Automotive</p>
                </div>
            </a>
        </div>

    </div>
    <div class="row second-row-gp d-none">

        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/ants.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/7.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Evolutionary co-working service</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Ants</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/asia-green.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/8.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Asia Green</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Toward sustainable and innovative housing</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/v-and-t.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/9.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">The Ultimate Supermarket Supply Solution</p>
                    <p class="fn-paragraph-font animatable fadeInUp">V & T</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/sugarune.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/10.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Indulge in Sweet Bliss</p>
                    <p class="fn-paragraph-font animatable fadeInUp">SugaRune</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/hong-kong-paradise.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/11.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Best Cantonese dining experience</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Hong Kong Paradise</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/hair-terminal.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/12.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">High-end luxury salon</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Hair Terminal</p>
                </div>
            </a>
        </div>

    </div>
    <div class="row third-row-gp d-none">

        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/maxi.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/13.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Unleash the Power of Aluminum: Quality Beyond Measure</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Maxi</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/t-subuu.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/14.png" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">More miles, more reward</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Toyota Subuu</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/crystal.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/15.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">A taste of perfection</p>
                    <p class="fn-paragraph-font animatable fadeInUp">La Crystal</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/space-ace.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/16.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Indulge in the flavors of the night</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Space Ace</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/derma-shine.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/17.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Transforming You into a Work of Art</p>
                    <p class="fn-paragraph-font animatable fadeInUp">Derma Shine</p>
                </div>
            </a>
        </div>
        <div id="div-production" data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-6 mb-5">
            <a href="<?php echo $domainUrl; ?>/projects/little-mushroom.php" class="project-img-control overflow-hidden">
                <img class="w-100" src="<?php echo $domainUrl; ?>/assets/images/projects/18.jpg" alt="">
                <div class="hover-scroll-div">
                    <p style="margin-top: -30px" class="mobile-hide fn-paragraph-font animatable fadeInUp">Coffee brewed to perfection, desserts made with passion</p>
                    <p class="fn-paragraph-font animatable fadeInUp">The Little Mushroom</p>
                </div>
            </a>
        </div>

    </div>


    <p data-aos="fade-up" data-aos-duration="1500" class="text-center animatable fadeInUp" style="margin: 250px 0 250px 0; text-decoration: underline;">
        <a onclick="projectLoadmore();" class="text-white fn-paragraph-font " href="javascript:void(0);">Explore more works</a>
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

    var clickCount = 0;
    const projectLoadmore = () =>
    {
        clickCount = clickCount + 1;
        // console.log(clickCount);
        if (clickCount == 1)
        {
            console.log('second work');
            $('.second-row-gp').removeClass('d-none');
        }else {
            console.log('third row');
            $('.third-row-gp').removeClass('d-none');
        }
    }

    if(screen.width < 767 )
    {
        $('.mobile-hide').remove();
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