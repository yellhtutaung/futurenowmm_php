<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="assets/css/typing-animation.css">
<link rel="stylesheet" href="assets/css/about.css">
<style>
    .text-div-control
    {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease; /* Adjust the duration and easing to your liking */
    }
    .universal-img-container
    {
        width: 335px;
        /*height: 285px;*/
        overflow: hidden;
    }
    .specific-text-width-for-text
    {
        width: 75%;
    }

    @media (max-width: 767px) {
        .universal-img-container
        {
            width: 200px;
            /*height: 285px;*/
            overflow: hidden;
        }
        .specific-text-width-for-text
        {
            width: 100%;
        }
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="theme-container p-md d-flex" style="height: 2200px">
    <div class="container-fluid">
        <div class="row single-type-text-row" >
            <div class="col-md-10 col-sm-12 pl-0 py-3 scroll-inner-text-box once-text-content-append"
                 style="height: 300px;overflow: hidden;position: fixed;" >
                <p style="color: black;" class="once-type typedtext animate__animated scroll-text1 w-100 fn-title-font scroll-text-spacing"></p>
                <!--                Where Magic Meets Branding-->
                <!--                <p style="color: black;opacity: 0;" class="scroll-text2 w-100 fn-title-font scroll-text-spacing">We're not just your average branding agency.</p>-->
                <!--                <p style="color: black;opacity: 0;" class="scroll-text3 w-100 fn-title-font scroll-text-spacing">A bunch of creative minds, armed with the power of strategy and a knack for artistic flair, coming together to weave brand stories that leave everyone swooning.</p>-->
            </div>
        </div>

    </div>
</section>
<section class="theme-container mt-5">
    <h4 data-aos="fade-up" data-aos-duration="1500" class="text-dark fn-title-font">Trustworthy</h4>
    <h4 data-aos="fade-up" data-aos-duration="1500" class="text-dark fn-paragraph-font">The Most Trusted Branding Agency</h4>
</section>
<div class="container-fluid">
    <div class="row mt-5">

        <article class="wrapper">
            <div data-aos="fade-up" data-aos-duration="1500" class="marquee">
                <div class="marquee__group">
                    <?php
                    $scanFolder = scandir('assets/images/partners/');
                    for ($i=2; $i<count($scanFolder); $i++) // remove dot and dot dot index of scan folder
                    if ($i <= 17) {
                    { ?>
                         <div class="universal-img-container">
                            <img class="w-100 h-auto" src="assets/images/partners/<?php echo $scanFolder[$i]; ?>" alt="">
                        </div>
                    <?php }} ?>
                </div>

                <div aria-hidden="true" class="marquee__group">
                    <?php
                    $scanFolder = scandir('assets/images/partners/');
                    for ($i=2; $i<count($scanFolder); $i++) // remove dot and dot dot index of scan folder
                    if ($i <= 17) {
                    { ?>
                     <div class="universal-img-container">
                            <img class="w-100 h-auto" src="assets/images/partners/<?php echo $scanFolder[$i]; ?>" alt="">
                     </div>
                    <?php }} ?>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="marquee marquee--reverse">
                <div class="marquee__group">
                    <?php
                    $scanFolder = scandir('assets/images/partners/');
                    for ($i=2; $i<count($scanFolder); $i++) // remove dot and dot dot index of scan folder
                    if ($i > 17 && $i < 32) {
                    { ?>
                        <div class="universal-img-container">
<!--                            <h2>--><?php //echo $i; ?><!--</h2>-->
                            <img class="w-100 h-auto" src="assets/images/partners/<?php echo $scanFolder[$i]; ?>" alt="">
                        </div>
                    <?php }} ?>
                </div>

                <div aria-hidden="true" class="marquee__group">
                    <?php
                    $scanFolder = scandir('assets/images/partners/');
                    for ($i=2; $i<count($scanFolder); $i++) // remove dot and dot dot index of scan folder
                    if ($i > 17 && $i < 32) {
                    { ?>
                        <div class="universal-img-container">
<!--                            <h2>--><?php //echo $i; ?><!--</h2>-->
                            <img class="w-100 h-auto" src="assets/images/partners/<?php echo $scanFolder[$i]; ?>" alt="">
                        </div>
                    <?php }} ?>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="marquee">
                <div class="marquee__group">
                    <?php
                    $scanFolder = scandir('assets/images/partners/');
                    for ($i=2; $i<count($scanFolder); $i++) // remove dot and dot dot index of scan folder
                        if ($i > 32) {
                    { ?>
                        <div class="universal-img-container">
                            <img class="w-100 h-auto" src="assets/images/partners/<?php echo $scanFolder[$i]; ?>" alt="">
                        </div>
                    <?php }} ?>
                </div>

                <div aria-hidden="true" class="marquee__group">
                    <?php
                    $scanFolder = scandir('assets/images/partners/');
                    for ($i=2; $i<count($scanFolder); $i++) // remove dot and dot dot index of scan folder
                        if ($i > 32) {
                    { ?>
                        <div class="universal-img-container">
                            <img class="w-100 h-auto" src="assets/images/partners/<?php echo $scanFolder[$i]; ?>" alt="">
                        </div>
                    <?php }} ?>
                </div>
            </div>

        </article>

    </div>
</div>

<section class="theme-container " style="padding-top: 20%; ">
    <p data-aos="fade-up" data-aos-duration="1500" class="fn-title-font text-black">Why Future Now ?</p>
    <h4 data-aos="fade-up" data-aos-duration="1500"  class="fn-paragraph-font text-white">Because We’re Simply Awesome!</h4>
    <div class="row" style="margin: 60px 0 300px 0;">
        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 my-2 px-0 mx-0">
            <div class="expend-div expend1 border-bottom-white">
                <a href="javascript:void(0)" class="row p-0 expend-click-1 " onclick="toggleOnOffBtn(1,'add');">
                    <div class="col-1" >
                        <span class="mt-icon-position fn-paragraph-font  mt-2 text-white material-symbols-rounded expend-icon-1">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">Your Brand, Your Rules:</p>
                        <div class="text-div-control fs-20px expend-div1 ">
                            <p class="expend-text1 specific-text-width-for-text text-white fn-paragraph-font opacity-05 ">
                                We get it – your brand is as unique as your favorite emoji combo. Our squad of branding wizards cooks up personalized strategies that blend seamlessly with your brand's vibe.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 my-2 px-0 mx-0">
            <div class="expend-div expend2 border-bottom-white">
                <a href="javascript:void(0)" class="row p-0 expend-click-2 " onclick="toggleOnOffBtn(2,'add');">
                    <div class="col-1" >
                        <span class="mt-icon-position fn-paragraph-font  mt-2 text-white material-symbols-rounded expend-icon-2">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">Stand Out, Don't Blend In:</p>
                        <div class="text-div-control fs-20px expend-div2">
                            <p class="expend-text2 specific-text-width-for-text text-white fn-paragraph-font opacity-05">
                                We're not about blending in; we're all about helping you strut your stuff with confidence. We dive deep into market trends, sprinkle some fairy dust, and voilà – your brand is ready to steal the spotlight!
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 my-2 px-0 mx-0">
            <div class="expend-div expend3 border-bottom-white">
                <a href="javascript:void(0)" class="row p-0 expend-click-3 " onclick="toggleOnOffBtn(3,'add');">
                    <div class="col-1" >
                        <span class="mt-icon-position fn-paragraph-font  mt-2 text-white material-symbols-rounded expend-icon-3">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">Creativity Unleashed:</p>
                        <div class="text-div-control fs-20px expend-div3">
                            <p class="expend-text2 specific-text-width-for-text text-white fn-paragraph-font opacity-05">
                                Anyone can make a logo, but we? We're like the fairy godparents of design, whipping up eye-catching visuals and words that pack a punch. Our designers, writers, and strategy gurus are the dream team you never knew you needed.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 my-2 px-0 mx-0">
            <div class="expend-div expend4 border-bottom-white">
                <a href="javascript:void(0)" class="row p-0 expend-click-4 " onclick="toggleOnOffBtn(4,'add');">
                    <div class="col-1" >
                        <span class="mt-icon-position fn-paragraph-font  mt-2 text-white material-symbols-rounded expend-icon-4">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">One-Stop Brand Fiesta: </p>
                        <div class="text-div-control fs-20px expend-div4">
                            <p class="expend-text2 specific-text-width-for-text text-white fn-paragraph-font opacity-05">
                                From brainstorming wild ideas to putting the finishing touches on your website – we've got it all covered. Our buffet of services ensures your brand gets a taste of everything it needs to shine.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 my-2 px-0 mx-0">
            <div class="expend-div expend5 border-bottom-white">
                <a href="javascript:void(0)" class="row p-0 expend-click-5" onclick="toggleOnOffBtn(5,'add');">
                    <div class="col-1" >
                        <span class="mt-icon-position fn-paragraph-font  mt-2 text-white material-symbols-rounded expend-icon-5">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">It's You, It's Us:</p>
                        <div class="text-div-control fs-20px expend-div5">
                            <p class="expend-text2 specific-text-width-for-text text-white fn-paragraph-font opacity-05">
                                We're not just here to deliver fancy stuff and disappear. We're in this together, and we're all ears when it comes to your ideas, dreams, and desires.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
<section class="theme-container mt-5">
    <p data-aos="fade-up" data-aos-duration="1500" class="text-center animatable fadeInUp" style="margin: 250px 0 250px 0; text-decoration: underline;">
        <a class="text-white fn-paragraph-font " href="<?php echo $domainUrl;?>/works.php" >Explore our works</a>
    </p>
</section>

<!--<div class="bottom-fixed ">-->
<!--    0-->
<!--</div>-->

<?php include 'layouts/footer.php'; ?>
<script src="<?php echo $domainUrl; ?>/assets/js/typing-animation.js" ></script>
<?php include 'layouts/footer-script.php'; ?>
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->

<script>

    $('.bar').css({"background":"black"});

    typingEffect([
        'Where Magic Meets Branding']); // That u want to show on typing content
    setTimeout(function (){
        $('.once-type').remove();
        $('.once-text-content-append').prepend(`<p style="color: black;" class="once-type typedtext animate__animated scroll-text1 w-100 fn-title-font scroll-text-spacing">Where Magic Meets Branding</p>`)
    },4000);

    $(document).ready(function(){
        AOS.init();

        $('header').css("position","static"); // remove header by sticky

        $('header').css('background',"linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)");
        $('a').removeClass("text-white");
        $('a').css("color","black");
        $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");
    });

    function toggleHeight(id) {
        const textDivControl = document.querySelector('.expend-div'+id);
        textDivControl.style.height = textDivControl.clientHeight ? '0' : textDivControl.scrollHeight + 'px';
    }

    const toggleOnOffBtn = (id,whichOne) =>
    {
        toggleHeight(id);
        // console.log(id + whichOne);
        if (whichOne == 'remove')
        {
            // $(`.expend-text${id}`).addClass('d-none').fadeIn(1000);
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'add')`);
            $(`.expend-icon-${id}`).html("add");
        }else {
            // $(`.expend-div1${id}`).removeClass('d-none').fadeIn(1000);
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'remove')`);
            $(`.expend-icon-${id}`).html("remove");
        }
    }

    $('body').attr("style","");

    const getOpacityFun = (scrollLocationCeil,limit) =>
    {
        let modulestOf =  scrollLocationCeil/limit;
        let firstOp = 0;
        if (modulestOf <= 1 )
        {
            firstOp = (1 - modulestOf);
        }else {
            firstOp = 1;
        }
        return firstOp;
    }

    const placeInnerText = (scrollLocation,eachTextFadeLimit) =>
    {
        if (scrollLocation <= eachTextFadeLimit)
        {
            return 'Where Magic Meets Branding'
        }else if (scrollLocation > eachTextFadeLimit && scrollLocation < eachTextFadeLimit * 2)
        {
            return "We're not just your average branding agency.";
        }else if (scrollLocation >= eachTextFadeLimit * 2 && scrollLocation < eachTextFadeLimit * 3)
        {
            return "Picture this.";
        }else if (scrollLocation >= eachTextFadeLimit * 3 && scrollLocation < eachTextFadeLimit * 4)
        {
            return `"A bunch of creative minds, armed with the power of strategy and a knack for artistic flair, coming together to weave brand stories that leave everyone swooning."`;
        }else if (scrollLocation >= eachTextFadeLimit * 4 && scrollLocation < eachTextFadeLimit * 5 )
        {
            return "That's us, and we've been at it since 2018, turning brands into legends, one masterpiece at a time.";
        }else {
            return '';
        }

    }

    const updateScroll = () =>
    {
        $('.scroll-text1').css({"transform": `translateY(${0}%)`});

        let scrollLocation = $(window).scrollTop();
        let scrollLocationCeil = Math.ceil(scrollLocation);
        let bgChangeHeight = 2400;  /* scrolltop value when opacity should be 0 */
        let finalScrollReducer = 0;

        let eachTextFadeLimit = 300;
        let innerText = placeInnerText(scrollLocation,eachTextFadeLimit);
        let firstOpacity = getOpacityFun(scrollLocationCeil,eachTextFadeLimit);
        if (scrollLocationCeil >= eachTextFadeLimit   )
        {
            if (scrollLocationCeil >= eachTextFadeLimit * 2 && scrollLocationCeil < eachTextFadeLimit * 3  ) // above 200
            {
                finalScrollReducer = scrollLocationCeil - eachTextFadeLimit * 2 ;
            }else if (scrollLocationCeil >= eachTextFadeLimit * 3 && scrollLocationCeil < eachTextFadeLimit * 4 ) // above 300
            {
                finalScrollReducer = scrollLocationCeil - eachTextFadeLimit * 3 ;
            }
            else if (scrollLocationCeil >= eachTextFadeLimit * 4 && scrollLocationCeil < eachTextFadeLimit * 5  ) // above 400
            {
                finalScrollReducer = scrollLocationCeil - eachTextFadeLimit * 4 ;
            }
            else { // above 100
                finalScrollReducer = scrollLocationCeil - eachTextFadeLimit;

            }

            scrollLocationCeil = finalScrollReducer;
            firstOpacity = getOpacityFun(finalScrollReducer,eachTextFadeLimit);
        }

        if ( finalScrollReducer >= 250 )
        {
            // console.log('up comming '+ finalScrollReducer);
            if (firstOpacity )
            {
                $('.scroll-text1').css({"transform": `translateY(${250-finalScrollReducer}%)`});
            }
        }


        // console.log(firstOpacity);
        // console.log(finalScrollReducer);
        $('.scroll-text1').html(innerText).fadeIn("slow");
        $('.scroll-text1').css({"opacity": firstOpacity});


        if (scrollLocation <= bgChangeHeight)
        {
            $('.scroll-inner-text-box').css('position','fixed');
            $('body').attr("style","background-color: white !important;transition: background-color 2s ease !important");
            $('.marquee svg').css({"background": "#B8C1D0","fill":"none","color":"black !important"});
            $('h4').removeClass('text-white');
            $('h4').addClass('text-black');
            $('p').css("color","black");
            $('.expend-div').removeClass("border-bottom-white");
            $('.expend-div').addClass("border-bottom-black");
            $('.material-symbols-rounded').removeClass("text-white");
            $('.material-symbols-rounded').addClass("text-black");

            $('header').css('background',"transparent");
            $('a').css("color","black");
            $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");
            $('header').css('background','linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)');
        }else{
            // console.log('change bg ***');
            $('.scroll-inner-text-box').css('position','static');
            $('body').attr("style","background-color: black !important;transition: background-color 2s ease !important;");
            $('.marquee svg').css({"background": "black","fill":"black","color":"black !important"});

            $('h4').addClass('text-white');
            $('h4').removeClass('text-black');
            $('p').css("color","white");
            $('.expend-div').addClass("border-bottom-white");
            $('.expend-div').removeClass("border-bottom-black");
            $('.material-symbols-rounded').addClass("text-white");
            $('.material-symbols-rounded').removeClass("text-black");

            $('a').css("color","white");
            $('.header-logo').attr("src","assets/images/logo/fn-logo.svg");
            $('header').css('background',"linear-gradient(180deg, #000 0%, rgba(0, 0, 0, 0.00) 100%)");
        }

        $('.bottom-fixed').html(scrollLocation);

    }

    $(window).on('scroll', updateScroll);

</script>

</body>
</html>