<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="../assets/css/typing-animation.css">
<link rel="stylesheet" href="../assets/css/contact.css">
<style>
    .text-div-control
    {
        overflow: hidden;
        transition: 0.5s !important;
    }
    .op-5
    {
        opacity: 0.5;
    }
    .icon-size-control
    {
        font-size: 15px;
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="p-md d-flex" style="height: auto">
    <div class="team-img-container">
    </div>
</section>

<div class="theme-container text-content-section" >
    <h1 class="fn-title-font text-black title-text-fade-up" style="color: black;margin: 150px 0 100px 0;">No great thing is made by alone.</h1>
    <div class="row" >
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h5 class="text-black fs-26px">General Inquries</h5>
            <a class="text-black op-5 fn-paragraph-font" href="mailto:hello@futurenowmm.com">hello@futurenowmm.com</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h5 class="text-black fs-26px">Call Us</h5>
            <a class="text-black op-5 fn-paragraph-font" href="tel:+959884916745" >09884916745</a><br>
            <a class="text-black op-5 fn-paragraph-font" href="tel:+959895089891" >09895089891</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h5 class="text-black fs-26px">Follow Us</h5>
            <div class="d-flex">
                <a class="text-black op-5  fn-paragraph-font" href="">Instagram <img src="../assets/images/gallery/target_blank.svg" alt=""> &nbsp; </a>
                <a class="text-black op-5  fn-paragraph-font" href="">LinkIn <img src="../assets/images/gallery/target_blank.svg" alt=""> &nbsp; </a>
            </div>
            <div class="d-flex">
                <a class="text-black op-5 fn-paragraph-font" href="">Facebook <img src="../assets/images/gallery/target_blank.svg" alt=""> &nbsp; </a>
                <a class="text-black op-5 fn-paragraph-font" href="">Behance <img src="../assets/images/gallery/target_blank.svg" alt=""> &nbsp; </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h5 class="text-black fs-26px">Visit</h5>
            <p class="mb-0 pb-0 op-5 fn-paragraph-font">Times city complex,</p>
            <p class="my-0 py-0 op-5 fn-paragraph-font">Building 401, 2nd Fl, Yangon.</p>
            <div class="mt-3">
                <p class="mb-0 pb-0 op-5 fn-paragraph-font">M Tower, 15th Floor,</p>
                <p class="my-0 py-0 op-5 fn-paragraph-font">Kamayut, Yangon.</p>
            </div>

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-6 col-md-6">
            <h5 class="text-black fs-26px">Work Hard</h5>
            <p class="text-black op-5  fn-paragraph-font">Mon to Fri ( 9am to 5pm )</p>
        </div>
        <div class="col-sm-6 col-md-6">
            <h5 class="text-black fs-26px">Feedback</h5>
            <p class="text-black op-5  fn-paragraph-font">help@futurenowmm.com</p>
        </div>
    </div>
</div>

<!--<section class="theme-container mt-5">-->
<!--    <p data-aos="fade-up" data-aos-duration="1500" class="text-center animatable fadeInUp" style="margin: 100px 0 270px 0; text-decoration: underline;">-->
<!--        <a class="text-white fn-paragraph-font " href="--><?php //echo $domainUrl;?><!--/works.php">Explore our works</a>-->
<!--    </p>-->
<!--</section>-->

<!--<div class="bottom-fixed ">-->
<!--    0-->
<!--</div>-->

<?php include 'layouts/footer.php'; ?>
<!--<script src="--><?php //echo $domainUrl; ?><!--/assets/js/count-down.min.js" ></script>-->
<?php include 'layouts/footer-script.php'; ?>
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->

<script>

    $(document).ready(function(){

        AOS.init();

        $('header').css("position","static"); // remove header by sticky

        $('header').css('background',"linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)");
        $('a').removeClass("text-white");
        $('a').css("color","black");
        $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");
    });

    const toggleOnOffBtn = (id,whichOne) =>
    {
        console.log(id + whichOne);
        if (whichOne == 'remove')
        {
            // $(`.expend-text${id}`).addClass('d-none').fadeIn(1000);
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'add')`);
            $(`.expend-icon-${id}`).html("add");
            $(`.expend-div${id}`).css("height","0px");
        }else {
            // $(`.expend-div1${id}`).removeClass('d-none').fadeIn(1000);
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'remove')`);
            $(`.expend-icon-${id}`).html("remove");
            $(`.expend-div${id}`).css("height","70px");
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

    const updateScroll = () =>
    {
        $('.scroll-text1').css({"transform": `translateY(${0}%)`});

        let scrollLocation = $(window).scrollTop();
        let scrollLocationCeil = Math.ceil(scrollLocation);
        let bgChangeHeight = 650;  /* scrolltop value when opacity should be 0 */
        let translateUp = bgChangeHeight-scrollLocation;
        $('.title-text-fade-up').css({"transform": `translateY(${translateUp}%)`}); // title-text-fade-up
        $('.text-content-section').css({"transform": `translateY(${translateUp/3}%)`}); // section fade up

        if (scrollLocation <= bgChangeHeight)
        {
            $('.scroll-inner-text-box').css('position','fixed');
            $('body').attr("style","background-color: white !important;transition: background-color 2s ease !important");
            $('.marquee svg').css({"background": "#B8C1D0","fill":"none","color":"black !important"});
            $('h1').removeClass('text-white');
            $('h1').addClass('text-black');
            $('h4').removeClass('text-white');
            $('h4').addClass('text-black');
            $('h5').removeClass('text-white');
            $('h5').addClass('text-black');
            $('p').css("color","black");
            $('a').css("color","black");
            setTimeout(function (){
                $('.team-img-container').css("background-image","url('assets/images/gallery/white-team.png')");
            },200);

            $('header').css('background',"transparent");
            $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");
            $('header').css('background','linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)');
        }else{

            $('.team-img-container').css("background-image","initial");
            console.log('change bg');
            $('.scroll-inner-text-box').css('position','static');
            $('body').attr("style","background-color: black !important;transition: background-color 2s ease !important;");
            $('.marquee svg').css({"background": "black","fill":"black","color":"black !important"});

            $('h1').addClass('text-white');
            $('h1').removeClass('text-black');
            $('h4').addClass('text-white');
            $('h4').removeClass('text-black');
            $('h5').addClass('text-white');
            $('h5').removeClass('text-black');
            $('p').css("color","white");
            $('a').css("color","white");

            $('header').css('background',"linear-gradient(180deg, #000 0%, rgba(0, 0, 0, 0.00) 100%)");
            $('.header-logo').attr("src","assets/images/logo/fn-logo.svg");
        }

        $('.bottom-fixed').html(scrollLocation);

    }

    $(window).on('scroll', updateScroll);

</script>

</body>
</html>