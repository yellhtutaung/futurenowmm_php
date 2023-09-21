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
    <div class="container-fluid px-0 mx-0" >
        <div class="row" style="margin: 20% 0;" >
            <div class="col-md-6 col-lg-6 col-sm-12 px-0 mx-0 once-text-content-append" >
                <p style="height: 50px;" class="once-type fn-title-font typedtext"></p>
            </div>
        </div>
    </div>
</section>


<?php include 'layouts/footer.php'; ?>
<!--<script src="--><?php //echo $domainUrl; ?><!--/assets/js/count-down.min.js" ></script>-->
<?php include 'layouts/footer-script.php'; ?>
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles.js" ></script>-->
<!--    <script src="--><?php //echo $domainUrl; ?><!--/assets/js/particles-setup.js" ></script>-->

<!--<script src="https://cdn.jsdelivr.net/gh/reymon359/web-experiments/Social%20Signature/socialsignature.min.js" crossorigin="anonymous"></script>-->
<script src="assets/js/typing-animation.js"></script>
<script>

    $(document).ready(function() {
        AOS.init();
    });
    typingEffect([
        'Coming Soon ...']); // That u want to show on typing content
    setTimeout(function (){
        $('.once-type').remove();
        $('.once-text-content-append').prepend(`<p style="height: 50px;" class="once-type fn-title-font" >Coming Soon ...</p>`)
    },3000);

    $('footer').css({"position": "fixed","bottom": "0","right": "0", "left":"0"});

</script>
</body>
</html>