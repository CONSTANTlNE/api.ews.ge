<!doctype html>
<html lang="en" class="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
      dir="ltr" data-pc-theme_contrast="" data-pc-theme="light">
<!-- [Head] start -->

<head>
    <title>Form Basic | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
            name="description"
            content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
            name="keywords"
            content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="Phoenixcoded"/>
    <link rel="stylesheet" href="../assets/css/plugins/style.css"/>
    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"/>
    <!-- [Font] Family -->
    <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link"/>
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css"/>
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css"/>
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css"/>
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css"/>
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css"/>
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link"/>
    <link rel="stylesheet" href="../assets/css/plugins/notifier.css"/>

    <style>
        .notifier-container {
            top: 70px;
        }
    </style>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
<!-- [ Pre-loader ] start -->
{{--<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">--}}
{{--    <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0 bg-primary-500/10">--}}
{{--        <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 transition-[transform_0.2s_linear] origin-left animate-[2.1s_cubic-bezier(0.65,0.815,0.735,0.395)_0s_infinite_normal_none_running_loader-animate]"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
@include('components.sidebar')
<!-- [ Sidebar Menu ] end -->
<!-- [ Header Topbar ] start -->

@include('components.header')

<!-- [ Header ] end -->


<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        @yield('dashboard')
        @yield('backupusers')
    </div>
</div>

<!-- [ Main Content ] end -->
@include('components.footer')
<!-- Required Js -->
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/i18next.min.js"></script>
<script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>
<script src="../assets/js/icon/custom-font.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>
<script src="../assets/js/component.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/multi-lang.js"></script>
<script src="../assets/js/script.js"></script>

<script src="../assets/js/plugins/notifier.js"></script>
<script src="{{asset('assets/js/elements/ac-notification.js')}}"></script>


<script>
    layout_change('false');
</script>

<script>
    layout_theme_contrast_change('false');
</script>

<script>
    change_box_container('false');
</script>

<script>
    layout_caption_change('true');
</script>

<script>
    layout_rtl_change('false');
</script>

<script>
    preset_change('preset-1');
</script>

<script>
    main_layout_change('vertical');
</script>


{{--@include('components.settings')--}}

@if(session('alert_error'))
    <script>
        notifier.show('Error', '{{session('alert_error')}}', 'danger', '../assets/images/notification/high_priority-48.png', 6000);
    </script>
@endif

@if(session('alert_success'))
    <script>
        notifier.show('Success', '{{session('alert_success')}}', 'success', '../assets/images/notification/ok-48.png', 6000);
    </script>
@endif

</body>
<!-- [Body] end -->
</html>
