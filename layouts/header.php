<header class="" >
    <div class="theme-container">
        <ul class="d-flex justify-content-around align-items-center ">
            <li style="justify-content: start!important;padding-left: 0px !important;" class="nav-list hover-logo" onmouseenter="enterMouse('logo');" onmouseleave="leaveMouse('logo')">
                <a href="<?php echo $domainUrl; ?>">
<!--                    <svg class="fn-logo" xmlns="http://www.w3.org/2000/svg" width="180" height="37.261" viewBox="0 0 229.066 37.261">-->
<!--                        <path id="Path_1" data-name="Path 1" d="M375.9,471.385v30.688h-.09l-19.95-30.688h-4.548v17.277H173.558v-3.07h-3.29v3.07h-.33v-.016H155.167V474.495h20.256v-3.6H150.888V507.2h4.278V492.25h11.39v0h3.711V494.8h3.29v-2.549H351.313v15.9h4.053v-27.4l.09-3.017,19.815,30.418h4.684V471.385Z" transform="translate(-150.888 -470.892)" fill="#fafafa"></path>-->
<!--                    </svg>-->
                    <img style="width: 180px; height: 37px" class="header-logo" src="<?php echo $domainUrl; ?>/assets/images/logo/fn-logo.svg" alt="">
                </a>
            </li>
            <li class="hide-mobile nav-list hover-about" onmouseenter="enterMouse('about');" onmouseleave="leaveMouse('about')">
                <a class="text-white" href="<?php echo $domainUrl; ?>/about.php">About</a>
                <ul class="d-none sub-nav sub-hover-about  h-auto float-left ">
                    <li class="mb-3"><a class="text-white text-right" href="">Helping Brands</a></li>
                    <li><a class="text-white float-right" href="">Since 2018</a></li>
                </ul>
            </li>
            <li class="hide-mobile nav-list hover-works " onmouseenter="enterMouse('works');" onmouseleave="leaveMouse('works')">
                <a href="<?php echo $domainUrl; ?>/works.php" class="text-white" href="">Works</a>
                <ul class="d-none sub-nav sub-hover-works  h-auto ">
                    <li class="mb-3"><a class="text-white text-right-right" href="">Explore our stunning</a></li>
                    <li><a class="text-white float-right" href="">latest projects</a></li>
                </ul>
            </li>
            <li class="hide-mobile nav-list hover-jobs " onmouseenter="enterMouse('jobs');" onmouseleave="leaveMouse('jobs')">
                <a class="text-white" href="<?php echo $domainUrl; ?>/job.php">Jobs</a>
                <ul class="d-none sub-nav sub-hover-jobs  h-auto ">
                    <li class="mb-3"><a class="text-white float-right" href="">See our open jobs</a></li>
                </ul>
            </li>
            <li class="hide-mobile nav-list hover-news " style="justify-content: right !important;"
                onmouseenter="enterMouse('news');" onmouseleave="leaveMouse('news')">
                <a class="text-white" href="<?php echo $domainUrl; ?>/news.php">News&nbsp;</a>
                <ul class="d-none sub-nav sub-hover-news  h-auto ">
                    <li class="mb-3"><a class="text-white text-right" href="">Latest media coverage </a></li>
                    <li><a class="text-white float-right" href="">insights from us.</a></li>
                </ul>
            </li>
            <li class="hide-mobile nav-list hover-contact pr-0" style="justify-content: right !important;"
                onmouseenter="enterMouse('contact');" onmouseleave="leaveMouse('contact')">
                <a class="text-white " href="<?php echo $domainUrl; ?>/contact.php">Contact</a>
                <ul class="d-none sub-nav sub-hover-contact  h-auto ">
                    <li class="mb-3"><a class="text-white float-right" href="">Let’s talk about your project </a></li>
                </ul>
            </li>
            <li class="nav-list d-none hambager-div " style="padding: 20px 0 20px 27%;margin-right: 0;" >
                <div class="w-100 hambager-menu mt-3">
                    <div class="bar"></div>
<!--                    <div class="bar"></div>-->
<!--                    <div class="bar"></div>-->
                </div>
            </li>
        </ul>

    </div>

</header>


<div id="navbar_overlay" class="overlay" style="height: 0%;" >
    <div class="overlay-content">
        <a href="<?php echo $domainUrl;?>"><p class="hambager-menu-text text-white" >Home</p></a>
        <a href="<?php echo $domainUrl;?>/about.php"><p class="hambager-menu-text text-white" >About</p></a>
        <a href="<?php echo $domainUrl;?>/works.php"><p class="hambager-menu-text text-white">Works</p></a>
        <a href="<?php echo $domainUrl;?>/job.php"><p class="hambager-menu-text text-white">Jobs</p></a>
        <a href="<?php echo $domainUrl;?>/news.php"><p class="hambager-menu-text text-white">News</p></a>
        <a href="<?php echo $domainUrl;?>/contact.php"><p class="hambager-menu-text text-white">Contact Us </p></a>
    </div>
    <div href="javascript:void(0) " onclick="overlayClose()" class="closebtn text-white p-0">
        <span style="font-size: 70px;" class="text-white material-symbols-rounded">close</span>
    </div>
</div>

<script>
    const hoverSelectorArr = ["logo", "about", "works", "jobs", "news", "contact"];

    enterMouse = (selectorClassName) =>
    {
        $('section').addClass("opacity-05");
        // console.log(selectorClassName);
        for (var i=0; i<hoverSelectorArr.length; i++)
        {
            if (selectorClassName != hoverSelectorArr[i])
            {
                $('.hover-'+hoverSelectorArr[i]).addClass("opacity-05");
            }else {
                $('.sub-hover-'+selectorClassName).removeClass("d-none");
            }
        }
    }

    leaveMouse = (selectorClassName) =>
    {
        $('section').removeClass("opacity-05");
        for (var i=0; i<hoverSelectorArr.length; i++)
        {
            if (selectorClassName != hoverSelectorArr[i])
            {
                $('.hover-'+hoverSelectorArr[i]).removeClass("opacity-05");
            }else {
                $('.sub-hover-'+selectorClassName).addClass("d-none");
            }
        }
    }
</script>