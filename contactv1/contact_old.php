<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="../assets/css/contact.css" />
<style>
    footer{
        margin-bottom: 50px;
    }
    .icon-size-control
    {
        font-size: 15px;
        margin-right: 15px;
        line-height: 0px;
    }
    .section.text-content-section
    {
        margin-top: -4px;
    }
    .section.text-content-section > p > h1 > h5 > a
    {
        color: black;
    }

</style>
<body class="">
<?php include 'layouts/header.php'; ?>

    <section class="team-content-section" style="height: auto; background: white;"  >
        <div class="team-img-container">
        </div>
        <div class="theme-container text-content-section">
            <h1 class="text-white " style="margin: 30px 0 100px 0;">Now we are talking</h1>
            <div class="row" >
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h5 class="text-white">General Inquries</h5>
                    <a class="text-white" href="mailto:hello@futurenowmm.com">hello@futurenowmm.com</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h5 class="text-white">Call Us</h5>
                    <a class="text-white" href="tel:+959884916745" >09884916745</a><br>
                    <a class="text-white" href="tel:+959895089891" >09895089891</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h5 class="text-white">Follow Us</h5>
                    <div class="d-flex">
                        <a class="text-white" href="">Instagram <span class="icon-size-control material-symbols-outlined">open_in_new</span> </a>
                        <a class="text-white" href="">LinkIn <span class="icon-size-control material-symbols-outlined">open_in_new</span> </a>
                    </div>
                    <div class="d-flex">
                        <a class="text-white" href="">Facebook <span class="icon-size-control material-symbols-outlined">open_in_new</span> </a>
                        <a class="text-white" href="">Behance <span class="icon-size-control material-symbols-outlined">open_in_new</span> </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h5 class="text-white">Visit</h5>
                    <p class="mb-0 pb-0">Times city complex,</p>
                    <p class="my-0 py-0">Building 401, 2nd Fl, Yangon.</p>
                    <div class="mt-2">
                        <p class="mb-0 pb-0">M Tower, 15th Floor,</p>
                        <p class="my-0 py-0">M Tower, 15th Floor,</p>
                    </div>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 col-md-6">
                    <h5 class="text-white">Work Hard</h5>
                    <p class="text-white">Mon to Fri ( 9am to 5pm )</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h5 class="text-white">Feedback</h5>
                    <p class="text-white">help@futurenowmm.com</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bottom-fixed">
        0
    </div>

<?php include 'layouts/footer.php'; ?>
<?php include 'layouts/footer-script.php'; ?>

<script>

    // $('a .text-white').removeClass('text-white');
    // $('a .text-white').removeClass('text-white');

    // $('bode').css({background:"white !important"});
    // $('footer').css({background:"black !important"});
    $('header').css({background:"white !important"});
    // $('.text-white').css({color:"black !important"});
    $('a').removeClass('text-white');
    $('a').addClass('text-black');
    $('p').removeClass('text-white');
    $('p').addClass('text-black');
    $('h1').removeClass('text-white');
    $('h1').addClass('text-black');
    $('h5').removeClass('text-white');
    $('h5').addClass('text-black');

    $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");

    $(document).ready(function() {
        // Function to update scroll location height
        function realTimeReduce(realTimeScroll,fixValue)
        {
            let resVal = realTimeScroll - fixValue;
            return resVal;
            if (realTimeScroll >= fixValue)
            {
                return fixValue;
            }else {
                return realTimeScroll;
            }
        }

        function updateScrollLocation() {
            let scrollLocation = $(window).scrollTop();
            scrollLocation = Math.ceil(scrollLocation)
            // console.log(`Scroll Location Height: ${scrollLocation}`);
            $('.bottom-fixed').html(scrollLocation);

            if (scrollLocation >= 550 )
            {
                $('.bottom-fixed').addClass('bg-dark');
                $('.team-content-section').fadeIn(1500, function() {
                    $('.text-content-section').css({"transform": `translateY(${-realTimeReduce(scrollLocation,550)}%)`});

                    console.log('****************************************');
                    $('.team-content-section').css({background: "black"});
                    $('.team-content-section').css({"transition": "background-color 1.5s ease-in"});
                    $('.team-img-container').css({"background-image": "initial"});

                    $('header').css({background:"black"});
                    $('a').removeClass('text-black');
                    $('a').addClass('text-white');
                    $('p').removeClass('text-black');
                    $('p').addClass('text-white');
                    $('h1').removeClass('text-black');
                    $('h1').addClass('text-white');
                    $('h5').removeClass('text-black');
                    $('h5').addClass('text-white');
                    $('.header-logo').attr("src","assets/images/logo/fn-logo.svg");
                });
            }
            else if (scrollLocation <= 550 ) {
                console.log(scrollLocation);
                $('.bottom-fixed').removeClass('bg-dark');

                $('.team-content-section').fadeIn(1500, function() {
                    $('.team-content-section').css({background: "white"});
                    // $('.team-content-section').css({"transition": "background-color 2.5s ease-in-out"});
                    $('.team-img-container').attr("style","");
                    // $('.team-img-container').css({"background-image": "assets/images/gallery/vector.png"});

                    $('header').css({background:"white"});
                    $('a').removeClass('text-white');
                    $('a').addClass('text-black');
                    $('p').removeClass('text-white');
                    $('p').addClass('text-black');
                    $('h1').removeClass('text-white');
                    $('h1').addClass('text-black');
                    $('h5').removeClass('text-white');
                    $('h5').addClass('text-black');
                    $('.header-logo').attr("src","assets/images/logo/fn-logo-black.svg");
                });
            }
        }

        // Call the function initially
        // updateScrollLocation();

        // Attach the event listener to the 'scroll' event
        $(window).on('scroll', updateScrollLocation);
        $('.bar').css("background", "black");
        $('.hambager-menu-text').removeClass("text-black");
        $('.hambager-menu-text').addClass("text-white");
    });
</script>

</body>
</html>