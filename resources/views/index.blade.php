<!doctype html>
<html lang="en" class="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
      dir="ltr" data-pc-theme_contrast="" data-pc-theme="light">

<head>
    <title>Live Preview | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."/>
    <meta name="keywords"
          content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"/>
    <meta name="author" content="Phoenixcoded"/>

    <!-- [Favicon] icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon"/>
    <!-- [Page specific CSS] start -->
    <link href="assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          rel="stylesheet"/>
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="assets/fonts/inter/inter.css" id="main-font-link"/>
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="assets/fonts/phosphor/duotone/style.css"/>
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css"/>
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="assets/fonts/feather.css"/>
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css"/>
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="assets/fonts/material.css"/>
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link"/>
    <script src="assets/js/tech-stack.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/style-preset.css" /> -->
</head>

<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Header ] start -->
<header id="home"
        class="flex items-center flex-col justify-center min-h-screen overflow-hidden relative py-[100px] bg-[url('../images/landing/img-headerbg.jpg')] dark:bg-[url(../images/landing/img-headerbg-dark.jpg)] bg-cover">
    <!-- [ Nav ] start -->
    <nav
            class="navbar bg-theme-cardbg dark:bg-themedark-cardbg bg-opacity-75 dark:bg-opacity-75 fixed top-0 z-50 w-full backdrop-blur shadow-[0_0_24px_rgba(27,46,94,.05)] dark:shadow-[0_0_24px_rgba(27,46,94,.05)]">
        <div class="container">
            <div class="static flex py-4 items-center justify-between sm:relative">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
                    <div class="flex flex-1 flex-shrink-0 items-center gap-2">
                        <img class="h-7 w-auto" src="assets/images/EWS.jpeg" alt="Your Company"/>
                    </div>
                    <div class="grow">
                        <div class="justify-end flex flex-row space-x-2 p-0 me-3">
{{--                            <a href="dashboard/index.html"--}}
{{--                               class="hidden sm:inline-block text-theme-bodycolor text-opacity-75 hover:text-opacity-100 hover:text-primary-500 dark:text-themedark-bodycolor rounded-md px-3 py-2 text-base font-medium transition-all">--}}
{{--                                Dashboard--}}
{{--                            </a>--}}
{{--                            <a href="elements/bc_alert.html"--}}
{{--                               class="hidden sm:inline-block text-theme-bodycolor text-opacity-75 hover:text-opacity-100 hover:text-primary-500 dark:text-themedark-bodycolor rounded-md px-3 py-2 text-base font-medium transition-all">--}}
{{--                                Component--}}
{{--                            </a>--}}
                            <a href="/docs/api" target="_blank"
                               class="hidden sm:inline-block text-theme-bodycolor text-opacity-75 hover:text-opacity-100 hover:text-primary-500 dark:text-themedark-bodycolor rounded-md px-3 py-2 text-base font-medium transition-all">Documentation</a>
                            <a href="https://phoenixcoded.gitbook.io/able-pro" type="button"
                               class="flex sm:hidden items-center justify-center bg-gray-200 text-gray-900 hover:bg-gray-900 hover:text-white focus:ring-white focus:ring-offset-gray-800 h-10 w-10 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                <i class="ti ti-file-text"></i>
                            </a>
                            <a href="../dashboard/index.html" type="button"
                               class="flex sm:hidden items-center justify-center bg-gray-200 text-gray-900 hover:bg-gray-900 hover:text-white focus:ring-white focus:ring-offset-gray-800 h-10 w-10 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                <i class="ti ti-dashboard"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="{{route('login')}}" type="button"
                       class="flex items-center justify-center bg-gray-200 text-gray-900 hover:bg-gray-900 hover:text-white focus:ring-white focus:ring-offset-gray-800 h-10 w-10 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-offset-2">
                        <i class="ti ti-brand-github"></i>
                    </a>
                    {{--            <a href="https://1.envato.market/zNkqj6" class="btn-success btn ml-3"><span--}}
                    {{--                class="hidden md:inline-block">Purchase Now</span> <i class="ti ti-external-link"></i></a>--}}
                </div>
            </div>
        </div>
    </nav>
    <!-- [ Nav ] end -->
    <div class="container">
        <div class="w-full md:w-10/12 text-center mx-auto">
            <h1 class="text-[22px] md:text-[36px] lg:text-[55px] leading-[1.2] mb-5 wow fadeInUp" data-wow-delay="0.2s">

                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[rgb(37,161,244)] via-[rgb(249,31,169)] to-[rgb(37,161,244)] bg-[length:400%_100%] bg-left-top animate-[move-bg_24s_infinite_linear]">
            Convert and Resize Images
                </span> <br>
                at you convenience
            </h1>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <div class="w-8/12 mx-auto">
{{--                    <p class="text-muted text-[14px] sm:text-[16px] mb-0">--}}
{{--                        Able Pro is the one of the Featured admin dashboard template in Envato Marketplace and used by--}}
{{--                        over--}}
{{--                        2.5K+ Customers--}}
{{--                        wordwide.--}}
{{--                    </p>--}}
                </div>
            </div>


        </div>
    </div>

</header>
<!-- [ Header ] End -->
<!-- [ Technologies ] start -->
<section id="technologies" class="py-10 sm:py-[100px]">
    <div class="container title mb-12">
        <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="md:w-8/12 xl:w-6/12 mx-auto">
                <h2 class="mb-3 font-semibold">Available Manipulations</h2>
{{--                <p class="mb-0">Explore the Demos of Able Pro in multiple technologies.</p>--}}
            </div>
        </div>
    </div>
    <div class="container technology-block">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="card mb-0 h-full">
                    <div class="card-body">
{{--                        <img src="assets/images/landing/tech-tailwind.svg" alt="img" class="img-fluid"/>--}}
                        <h4 class="my-3">Conversion</h4>
                        <p class="text-muted mb-4">Able Pro with Tailwind CSS lets developers create sleek, professional
                            interfaces quickly. Tailwind's utility classes ensure consistent styling across all
                            devices.</p>
                        <a class="btn btn-light-dark mt-2" href="dashboard/index.html" target="_blank"><i
                                    class="ti ti-external-link"></i> Preview Tailwind</a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="card mb-0 h-full">
                    <div class="card-body">
                        <h4 class="my-3">Bootstrap 5</h4>
                        <p class="text-muted mb-4">Able Pro Bootstrap 5 - the top choice for responsive, mobile-first
                            design, you
                            can achieve both professional functionality and visual appeal.</p>
                        <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/dashboard/index.html"
                           target="_blank"><i
                                    class="ti ti-external-link"></i> Preview Bootstrap</a>
                        <a class="btn btn-icon btn-link-dark mt-2" target="_blank" data-pc-toggle="tooltip"
                           data-pc-placement="top"
                           data-pc-title="Click to Download Free Able Pro Bootstrap 5 Admin Template"
                           href="https://links.codedthemes.com/vYUWM"><i class="ti ti-brand-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="card mb-0 h-full">
                    <div class="card-body">
                        <h4 class="my-3">React Material-UI</h4>
                        <p class="text-muted mb-4">Able Pro React dashboard template is a powerful tool that utilizes
                            the
                            Material-UI component library to create stunning and intuitive user interfaces</p>
                        <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/react" target="_blank"><i
                                    class="ti ti-external-link"></i> Preview React</a>
                        <a class="btn btn-icon btn-link-dark mt-2" target="_blank" data-pc-toggle="tooltip"
                           data-pc-placement="top"
                           data-pc-title="Click to Download Free Able Pro React Dashboard Template"
                           href="https://links.codedthemes.com/vYUWM"><i class="ti ti-brand-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="card mb-0 h-full">
                    <div class="card-body">
                        <h4 class="my-3">Asp.net</h4>
                        <p class="text-muted mb-4">Able Pro .NET version is a robust dashboard template designed
                            specifically for
                            .NET developers. Its comes with a wide range of pre-built components.</p>
                        <a class="btn btn-light-dark mt-2" href="https://able-pro.azurewebsites.net/" target="_blank"><i
                                    class="ti ti-external-link"></i> Preview .net</a>
                        <a class="btn btn-icon btn-link-dark mt-2" target="_blank" data-pc-toggle="tooltip"
                           data-pc-placement="top"
                           data-pc-title="Click to Download Free Able Pro ASP.net Dashboard Template"
                           href="https://links.codedthemes.com/vYUWM"><i class="ti ti-brand-github"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- [ Technologies ] End -->
<!-- [ Top Features apps ] start -->


<!-- [ Top Features ] End -->
<!-- [ working apps ] start -->

<!-- [ working apps ] End -->
<!-- [ Applications apps ] start -->

<!-- [ Applications apps ] End -->
<!-- [ support team apps ] start -->

<!-- [ support team apps ] End -->
<!-- [ companies apps ] start -->

<!-- [ companies apps ] End -->
<!-- [ footer apps ] start -->
<footer class="footer pt-10 sm:pt-[100px] pb-5">
    <div class="container title mb-0">
        <div class="grid grid-cols-12 gap-6 align-items-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-span-12 md:col-span-8">
                <h2 class="mb-3 font-normal">Stay connected with us</h2>
                <p class="mb-4 mb-md-0">
                    Simply submit your email, we share you the top news related to Able Pro feature updates, roadmap,
                    and news.
                </p>
            </div>
            <div class="col-span-12 md:col-span-4">
                <div class="flex gap-4 my-4 md:my-10 items-center justify-center flex-wrap">
                    <div class="grow">
                        <input type="email" class="form-control" placeholder="Enter your email"/>
                    </div>
                    <div class="shrink-0">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[60px] mb-5 border-y border-theme-border dark:border-themedark-border">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 md:col-span-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/images/logo-dark.svg" alt="image" class="img-fluid mb-4"/>
                    <p class="mb-5">
                        Phoenixcoded has gained the trust of over 5.5K customers since 2015, thanks to our commitment to
                        delivering high-quality
                        products. Our experienced team players are responsible for managing Able Pro.
                    </p>
                </div>
                <div class="col-span-12 md:col-span-8">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 sm:col-span-4 wow fadeInUp" data-wow-delay="0.6s">
                            <h5 class="mb-3 sm:mb-5">Company</h5>
                            <ul
                                    class="list-unstyled footer-link *:my-[14px] *:transition-all *:duration-200 hover:*:text-primary-500">
                                <li><a href="https://themeforest.net/user/phoenixcoded" target="_blank">Profile</a></li>
                                <li><a href="https://themeforest.net/user/phoenixcoded/portfolio" target="_blank">Portfolio</a>
                                </li>
                                <li><a href="https://themeforest.net/user/phoenixcoded/followers" target="_blank">Follow
                                        Us</a></li>
                                <li><a href="https://phoenixcoded.net" target="_blank">Website</a></li>
                            </ul>
                        </div>
                        <div class="col-span-12 sm:col-span-4 wow fadeInUp" data-wow-delay="0.8s">
                            <h5 class="mb-3 sm:mb-5">Help & Support</h5>
                            <ul
                                    class="list-unstyled footer-link *:my-[14px] *:transition-all *:duration-200 hover:*:text-primary-500">
                                <li><a href="https://phoenixcoded.gitbook.io/able-pro/"
                                       target="_blank">Documentation</a></li>
                                <li><a href="https://phoenixcoded.gitbook.io/able-pro/" target="_blank">Feature
                                        Request</a></li>
                                <li><a href="https://phoenixcoded.gitbook.io/able-pro/" target="_blank">RoadMap</a></li>
                                <li><a href="https://phoenixcoded.authordesk.app/" target="_blank">Support</a></li>
                                <li><a href="https://themeforest.net/user/phoenixcoded#contact" target="_blank">Email
                                        Us</a></li>
                            </ul>
                        </div>
                        <div class="col-span-12 sm:col-span-4 wow fadeInUp" data-wow-delay="1s">
                            <h5 class="mb-3 sm:mb-5">Useful Resources</h5>
                            <ul
                                    class="list-unstyled footer-link *:my-[14px] *:transition-all *:duration-200 hover:*:text-primary-500">
                                <li><a href="https://themeforest.net/page/item_support_policy" target="_blank">Support
                                        Policy</a></li>
                                <li><a href="https://themeforest.net/licenses/standard" target="_blank">Licenses
                                        Term</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex items-center justify-between gap-6">
            <div class="grow my-1 wow fadeInUp" data-wow-delay="0.4s">
                <p class="mb-0">
                    © Handcrafted by Team
                    <a href="https://themeforest.net/user/phoenixcoded" class="text-primary-500"
                       target="_blank">Phoenixcoded</a>
                </p>
            </div>
            <div class="shrink-0 my-1">
                <ul class="list-inline footer-sos-link mb-0">
                    <li class="list-inline-item wow fadeInUp" data-wow-delay="0.4s">
                        <a class="hover:text-primary-500" href="https://fb.com/phoenixcoded">
                            <svg class="pc-icon w-[22px] h-[22px]">
                                <use xlink:href="#custom-facebook"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- [ footer apps ] End -->

<!-- [ Main Content ] end -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- Required Js -->
<script src="assets/js/plugins/simplebar.min.js"></script>
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/icon/custom-icon.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/component.js"></script>
<script src="assets/js/theme.js"></script>
<script src="assets/js/script.js"></script>
<!-- [Page Specific JS] start -->
<script src="assets/js/plugins/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    // Start [ Menu hide/show on scroll ]
    let ost = 0;
    document.addEventListener('scroll', function () {
        let cOst = document.documentElement.scrollTop;
        if (cOst == 0) {
            document.querySelector('.navbar').classList.add('top-nav-collapse');
        } else if (cOst > ost) {
            document.querySelector('.navbar').classList.add('top-nav-collapse');
            document.querySelector('.navbar').classList.remove('default');
        } else {
            document.querySelector('.navbar').classList.add('default');
            document.querySelector('.navbar').classList.remove('top-nav-collapse');
        }
        ost = cOst;
    });
    // End [ Menu hide/show on scroll ]
    new SimpleBar(document.querySelector('.drp-tech-scrollble'));
    new SimpleBar(document.querySelector('.scrollble-tech-block'));
    new SimpleBar(document.querySelector('.nav-drp-tech-scrollble'));

    var wow = new WOW({
        animateClass: 'animated'
    });
    wow.init();

    // slider start
    $('.screen-slide').owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: '.app_dotsContainer',
        URLhashListener: true,
        items: 1
    });
    $('.workspace-slider').owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: '.workspace-card-block',
        URLhashListener: true,
        items: 1.5
    });
    // slider end
    // marquee start
    $('.marquee').marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true
    });
    $('.marquee-1').marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true,
        direction: 'right'
    });
    // marquee end
</script>
<!-- [Page Specific JS] end -->
</body>

</html>
