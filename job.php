<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="assets/css/typing-animation.css">

<style>
    .text-div-control
    {
        overflow: hidden;
        transition: 0.5s !important;
    }
    .scroll-text-spacing
    {
        margin: 50px 0 130px 0;
    }
    .border-bottom-white
    {
        border-bottom: 1px solid white;
    }
    .border-bottom-black
    {
        border-bottom: 1px solid black;
    }
    .fs-26px
    {
        font-size: 26px;
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="theme-container  d-flex">
    <div class="container-fluid px-0 mx-0">
        <div class="row " style="margin: 18% 0 18% 0;" >
            <div class="col-md-6 col-lg-6 col-sm-12 px-0 mx-0 once-text-content-append" >
                <p style="height: 50px;" class="once-type fn-title-font typedtext"></p>
                <p class=" fn-paragraph-font">Interested in working with us? At Future Now, we believe in team work. To support our team, we need powerful individuals just like you. Take a look at our current openings.</p>
            </div>
        </div>
    </div>
</section>

<section class="theme-container " >
    <div class="row" style="margin: 60px 0 300px 0;">
        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 my-2 px-0 mx-0">
            <div class="expend-div expend1 border-bottom-white">
                <a href="javascript:void(0)" class="row p-0 expend-click-1 " onclick="toggleOnOffBtn(1,'add');">
                    <div class="col-1" >
                        <span class="mt-icon-position fs-26px mt-1 text-white material-symbols-rounded expend-icon-1">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fs-26px w-100">Senior Designer</p>
                        <div style="height: 0px;" class="text-div-control fs-20px expend-div1 ">
                            <p class="expend-text1 w-75 text-white opacity-05">
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
                        <span class="mt-icon-position fs-26px mt-1 text-white material-symbols-rounded expend-icon-2">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fs-26px w-100">UI UX Designer</p>
                        <div style="height: 0px;" class="text-div-control fs-20px expend-div2">
                            <p class="expend-text2 w-75 text-white opacity-05">
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
                        <span class="mt-icon-position fs-26px mt-1 text-white material-symbols-rounded expend-icon-3">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fs-26px w-100">Human Resource Associate</p>
                        <div style="height: 0px;" class="text-div-control fs-20px expend-div3">
                            <p class="expend-text2 w-75 text-white opacity-05">
                                Anyone can make a logo, but we? We're like the fairy godparents of design, whipping up eye-catching visuals and words that pack a punch. Our designers, writers, and strategy gurus are the dream team you never knew you needed.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
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

</script>
<!--<script src="https://cdn.jsdelivr.net/gh/reymon359/web-experiments/Social%20Signature/socialsignature.min.js" crossorigin="anonymous"></script>-->
<script src="assets/js/typing-animation.js"></script>
<script>
        typingEffect([
        'What’s Your Passion?']); // That u want to show on typing content
        setTimeout(function (){
            $('.once-type').remove();
            $('.once-text-content-append').prepend(`<p style="height: 50px;" class="once-type fn-title-font" >What’s Your Passion?</p>`)
        },3000);


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
                $(`.expend-div${id}`).css("height","110px");
            }
        }

</script>
</body>
</html>