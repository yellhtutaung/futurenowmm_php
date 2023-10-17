<?php include 'layouts/head.php'; ?>
<link rel="stylesheet" href="assets/css/typing-animation.css">

<style>
    .text-div-control
    {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease; /* Adjust the duration and easing to your liking */
    }
        /*transition: height 0.5s ease !important;*/
    }
    .scroll-text-spacing
    {
        margin: 50px 0 130px 0;
    }
    .border-bottom-white
    {
        border-bottom: 1px solid white;
    }
    .specific-text-width-for-text
    {
        width: 75%;
    }

    @media (max-width: 767px) {
        .specific-text-width-for-text
        {
            width: 100%;
        }
    }
</style>
<body>
<?php include 'layouts/header.php'; ?>

<section  class="theme-container  d-flex">
    <div class="container-fluid ">
        <div class="row single-type-text-row" >
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
                        <span class="mt-icon-position fn-paragraph-font mt-1 text-white material-symbols-rounded expend-icon-1">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">Senior Graphic Designer</p>
                        <div class="text-div-control fs-20px expend-div1 ">
                            <p class="expend-text1 specific-text-width-for-text text-white opacity-05">
                                -Attention all creative masterminds! We are in search of a visionary Senior Graphic Designer to join our dynamic team and bring their sensational artistic talent to our table. If pushing boundaries and crafting captivating visual experiences is your true calling, then this is your golden opportunity to shine! Join us in creating groundbreaking designs that will leave a lasting mark. Don't miss out on the chance to be a part of our artistic revolution. Send us your portfolio, and let's create masterpieces together!
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
                        <span class="mt-icon-position fn-paragraph-font mt-1 text-white material-symbols-rounded expend-icon-2">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">Sale & Marketing Manager</p>
                        <div class="text-div-control fs-20px expend-div2">
                            <p class="expend-text2 specific-text-width-for-text text-white opacity-05">
                                Are you a strategic thinker with a knack for closing deals and driving revenue? Do you thrive in a fast-paced, competitive environment? We're searching for a dynamic Sales and Marketing Manager who can waltz the fine line between strategy and execution. As the maestro of our sales orchestra, you'll conduct our team with your exceptional leadership skills, while dazzling clients with your persuasive charm. If you're ready to take center stage and make a symphony of success, then join our company and let's hit all the high notes together!
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
                        <span class="mt-icon-position fn-paragraph-font mt-1 text-white material-symbols-rounded expend-icon-3">add</span>
                    </div>
                    <div class="col-11">
                        <p class="fn-paragraph-font w-100">Human Resource Associate</p>
                        <div class="text-div-control fs-20px expend-div3">
                            <p class="expend-text2 specific-text-width-for-text text-white opacity-05">
                                "Calling all HR enthusiasts! Are you a dynamic problem-solver with a passion for people? Join our team as a Human Resource Associate and be the mastermind behind our exceptional talent acquisition, employee engagement, and policies. With your expertise in maintaining a happy and productive workforce, you'll be ensuring our organization continues to thrive. If you're ready to unleash your potential and shape the future of HR, apply now and let's embark on this exciting journey together!"
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


        function toggleHeight(id) {
            const textDivControl = document.querySelector('.expend-div'+id);
            textDivControl.style.height = textDivControl.clientHeight ? '0' : textDivControl.scrollHeight + 'px';
        }

        const toggleOnOffBtn = (id,whichOne) =>
        {

            toggleHeight(id);
            console.log(id + whichOne);
            if (whichOne == 'remove')
            {
                // $(`.expend-text${id}`).addClass('d-none').fadeIn(1000);
                $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'add')`);
                $(`.expend-icon-${id}`).html("add");
                // $(`.expend-div${id}`).css("height","0px");

                // $('.text-div-control').css('transition','0.5s !important');
            }else {
                // $(`.expend-div1${id}`).removeClass('d-none').fadeIn(1000);
                $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'remove')`);
                $(`.expend-icon-${id}`).html("remove");
                // $(`.expend-div${id}`).css("height","170px");
                // $(`.expend-div${id}`).css("height","auto");
            }
        }

</script>
</body>
</html>