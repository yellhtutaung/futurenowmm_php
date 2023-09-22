<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo $domainUrl; ?>/assets/js/owl.carousel.min.js" ></script>
<script src="<?php echo $domainUrl; ?>/assets/js/aos.js"></script>



<script>
    // document.addEventListener("contextmenu", function(event) {
    //     event.preventDefault();
    // });

    $(document).ready(function() {
        // AOS.init();
    });

    const deviceHeight = window.innerHeight;

    const headerHeight = $('header').height();
    const blackScreenHeight = deviceHeight - headerHeight;
    // $('.set-screen-fit-height').css({border:"1px solid white",height:blackScreenHeight});
    $('.set-screen-fit-height').css({height:blackScreenHeight});
    // alert(headerHeight);

    // const setScreenHeight = $('.set-screen-fit-height').height();
    // alert(setScreenHeight);
    // const setMtRowContent = $('.set-mt-row-content').height();
    // const finalRes = setScreenHeight-setMtRowContent;

    // $('.set-mt-row-content').css({paddingTop:finalRes}); // 20 margin bottom


    if (screen.width < 600) {
        $('.hide-mobile').addClass("d-none");
        $('.hambager-div').removeClass("d-none");
    }

    $('.hambager-menu').click(function (){
        $('#navbar_overlay').css({height:"100%"});
        $('.bar').css({display:"none"});
    });

    overlayClose = () =>
    {
        $('#navbar_overlay').css({height:"0%"});
        $('.bar').css({display:""});
    }

</script>

