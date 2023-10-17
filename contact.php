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
    .scroll-text-spacing
    {
        margin: 50px 0 100px 0;
    }
    .target-blank-img
    {
        width: 15px;
        height: 15px;
    }
    #contact-info-div{
        transition: 0.2s;
    }
    .scroll-text1{
        transition: 0.2s;
    }
    .fn-paragraph-font:hover
    {
        text-decoration: underline !important;
    }
    .text-black
    {
        color: black !important;
    }
    .fs-25px
    {
        font-size: 25px;
    }
    p{
        margin-bottom: 0!important;
    }
    .my-sm-5
    {
        margin: 25px 0 !important;
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>
<!---->
<section  class="theme-container p-md d-flex" >
    <div class="container-fluid px-0 mx-0 once-text-content-append" id="text-box-height">
        <p style="color: black;height: 50px;" class="once-type typedtext animate__animated scroll-text1 w-100 fn-title-font scroll-text-spacing"></p>
    </div>
</section>
<div id="contact-info-div" class="theme-container" >
    <div class="row" >
        <div class="my-sm-5 col-md-3 col-sm-12">
            <p class="text-black fs-25px">General Inquries</p>
            <a class="text-black op-5 fn-paragraph-font opacity-05" href="mailto:hello@futurenowmm.com">hello@futurenowmm.com</a>
        </div>
        <div class="my-sm-5 col-md-3 col-sm-12">
            <p class="text-black fs-25px">Call Us</p>
            <a class="text-black op-5 fn-paragraph-font opacity-05" href="tel:+959884916745" >09884916745</a><br>
            <a class="text-black op-5 fn-paragraph-font opacity-05" href="tel:+959895089891" >09895089891</a>
        </div>
        <div class="my-sm-5 col-md-3 col-sm-12">
            <p class="text-black fs-25px">Follow Us</p>
            <div class="d-flex">
                <a class="text-black op-5  fn-paragraph-font opacity-05" href="">Instagram <img class="target-blank-img" src="assets/images/gallery/target_blank_black.svg" alt=""> &nbsp; </a>
                <a class="text-black op-5  fn-paragraph-font opacity-05" href="">LinkedIn <img class="target-blank-img" src="assets/images/gallery/target_blank_black.svg" alt=""> &nbsp; </a>
            </div>
            <div class="d-flex">
                <a class="text-black op-5 fn-paragraph-font opacity-05" href="">Facebook <img class="target-blank-img" src="assets/images/gallery/target_blank_black.svg" alt=""> &nbsp; </a>
                <a class="text-black op-5 fn-paragraph-font opacity-05" href="">Behance <img class="target-blank-img" src="assets/images/gallery/target_blank_black.svg" alt=""> &nbsp; </a>
            </div>
        </div>
        <div class="my-sm-5 col-md-3 col-sm-12">
            <p class="text-black fs-25px">Visit Us (Appointment Only)</p>

            <div class="mt-3 ">
                <a target="_blank" href="https://maps.app.goo.gl/B8iNgeV55oZ9jSZf9" class="mb-0 pb-0 op-5 fn-paragraph-font opacity-05" style="color: black;">70 B1/A Golden Valley Avenue Street | Bahan, Yangon.</a>
<!--                <p class="my-0 py-0 op-5 fn-paragraph-font" style="color: black;"></p>-->
            </div>
            <div class="my-2 address-placement-for-mobile" ></div>

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <div class="col-md-6 col-sm-6 my-sm-5">
                    <p class="text-black fs-25px">Work Hard</p>
                    <p style="color: black;" class="fn-paragraph-font opacity-05">Mon to Fri ( 9am to 5pm )</p>
                </div>
                <div class="col-md-6 col-sm-6 my-sm-5">
                    <p class="text-black fs-25px">Feedback</p>
                    <a style="color: black;" href="mailto:help@futurenowmm.com" class="fn-paragraph-font opacity-05">help@futurenowmm.com</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <div class="col-6">
<!--                    <p class="text-black fs-25px">Feedback</h5>-->
<!--                    <p style="color: black;" class="fn-paragraph-font">help@futurenowmm.com</p>-->
                </div>
                <div class="col-6 get-for-mobile">
                    <a href="https://www.google.com/maps/search/times+city+complex/@16.8167091,96.1269097,17.57z?entry=ttu" target="_blank" class="mb-0 pb-0 op-5 fn-paragraph-font opacity-05" style="color: black;">Times city complex, Building 401 | Kamayut ,Yangon.</a>
                </div>
            </div>

        </div>
    </div>
</div>

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

    let getScrollStop = 0;
    let getAllStyle = $('.once-type').attr("style");

    typingEffect([
        'No great thing is made by alone.']); // That u want to show on typing content
    setTimeout(function (){
        let textBoxInner = $('.once-text-content-append').html();
        console.log(textBoxInner);
        $('.once-type').remove();
        $('.once-text-content-append').prepend(textBoxInner)
        // $('.once-text-content-append').prepend(`<p style="${getAllStyle}" class="once-type typedtext animate__animated scroll-text1 w-100 fn-title-font scroll-text-spacing" >No great thing is made by alone.</p>`)
    },4700);

    const getTextBoxHeight = () =>
    {
        let windowHeight = window.innerHeight;
        let headerHeight = $('header').height();
        let getTextBoxHeight = windowHeight - headerHeight;
        return getTextBoxHeight;
    }

    $(document).ready(function(){
        AOS.init();

        // $('header').css("position","static"); // remove header by sticky

        $('header').css('background',"linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)");
        $('a').removeClass("text-white");
        $('a').css("color","black");
        $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");

        if(screen.width >= 767 )
        {
            $('#text-box-height').css("height",getTextBoxHeight());
        }else {
            $('#text-box-height').css("height","300px");
            let getForMobile = $('.get-for-mobile').html();
            console.log(getForMobile);
            $('.address-placement-for-mobile').append(getForMobile);
            $('.get-for-mobile').remove();
        }

    });


    $('body').attr("style","");

    const updateScroll = () =>
    {
        let windowHeight = window.innerHeight;
        let scrollLocation = $(window).scrollTop();
        let scrollLocationCeil = Math.ceil(scrollLocation);
        getScrollStop = (11 / 100) * windowHeight;
        // scrollLocationCeil = scrollLocationCeil >= 80 ? scrollLocationCeil - 80 : scrollLocationCeil;
        if (scrollLocationCeil < getScrollStop)
        {
            $('.scroll-text1').css({"margin-top": `${(scrollLocationCeil - 70)}px`});
            $('#contact-info-div').css({"transform": `translateY(${-(scrollLocationCeil )}%)`});
            $('footer').css({"transform": `translateY(${-(scrollLocationCeil - 100)}%)`});
            // $("body").css("overflow", "auto");
            $('#text-box-height').css("height",( getTextBoxHeight() - (scrollLocationCeil ) ));

        }

        $('.bottom-fixed').html(scrollLocationCeil);

    }

    if(screen.width >= 767 )
    {
        $(window).on('scroll', updateScroll);
    }
    // $('footer').css({"position": "fixed","bottom": "0","right": "0", "left":"0"});

    $('footer').css('background','');
    $('#footer-cover').css('background','');




</script>

</body>
</html>