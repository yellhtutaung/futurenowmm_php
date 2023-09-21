<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="assets/css/typing-animation.css">
<link rel="stylesheet" href="assets/css/about.css">
<style>
    #text-box-height
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="theme-container p-md d-flex" >
    <div class="container-fluid px-0 mx-0" id="text-box-height">
        <p style="color: black;" class="once-type typedtext animate__animated scroll-text1 w-100 fn-title-font scroll-text-spacing"></p>
    </div>
</section>
<div id="contact-info-div" class="theme-container" >
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
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <h5 class="text-black fs-26px">Work Hard</h5>
            <p style="color: black;" class="fn-paragraph-font">Mon to Fri ( 9am to 5pm )</p>
        </div>
        <div class="col-sm-6 col-md-6">
            <h5 class="text-black fs-26px">Feedback</h5>
            <p style="color: black;" class="fn-paragraph-font">help@futurenowmm.com</p>
        </div>
    </div>
</div>

<div class="bottom-fixed ">
    0
</div>

<?php include 'layouts/footer.php'; ?>
<script src="<?php echo $domainUrl; ?>/assets/js/typing-animation.js" ></script>
<?php include 'layouts/footer-script.php'; ?>
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->

<script>


    typingEffect([
        'No great thing is made by alone.']); // That u want to show on typing content
    // setTimeout(function (){
    //     $('.once-type').remove();
    //     $('.once-text-content-append').prepend(`<p style="color: black;" class="once-type animate__animated w-100 fn-title-font scroll-text-spacing">No great thing is made by alone.</p>`)
    // },4000);

    $(document).ready(function(){
        AOS.init();

        // $('header').css("position","static"); // remove header by sticky

        $('header').css('background',"linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)");
        $('a').removeClass("text-white");
        $('a').css("color","black");
        $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");

        let windowHeight = window.innerHeight;
        let headerHeight = $('header').height();
        let getTextBoxHeight = windowHeight - headerHeight;
        $('#text-box-height').css("height",getTextBoxHeight);

    });

    $('body').attr("style","");

    const updateScroll = () =>
    {
        let scrollLocation = $(window).scrollTop();
        let scrollLocationCeil = Math.ceil(scrollLocation);

        // $('.scroll-text1').css({"transform": `translateY(${-scrollLocationCeil}%)`});
        $('.scroll-text1').css({"margin-top": `${-scrollLocationCeil}px`});
        $('#contact-info-div').css({"transform": `translateY(${-(1.1 * scrollLocationCeil)}%)`});
        $('footer').css({"transform": `translateY(${-(3 * scrollLocationCeil)}%)`});

        $('.bottom-fixed').html(scrollLocationCeil);

    }

    $(window).on('scroll', updateScroll);
    // $('footer').css({"position": "fixed","bottom": "0","right": "0", "left":"0"});
    $('footer').css('background','');
    $('#footer-cover').css('background','');

</script>

</body>
</html>