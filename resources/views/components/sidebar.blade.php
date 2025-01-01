<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header flex items-center py-4 px-6 h-header-height">
            <a href="../dashboard/index.html" class="b-brand flex items-center gap-3">
                <!-- ========   Change your logo from here   ============ -->
                <img src="../assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo" />
                <span class="badge bg-success-500/10 text-success-500 rounded-full theme-version">v1.1.0</span>
            </a>
        </div>
        <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
            <ul class="pc-navbar">
                {{--CAPTION--}}
                <li class="pc-item pc-caption">
                    <label data-i18n="Navigation">Navigation</label>
                </li>
                {{--Sub Menus--}}
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-status-up"></use>
              </svg>
            </span>
                        <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        <span class="pc-badge">2</span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="../dashboard/index.html" data-i18n="Default">Default</a></li>
                        <li class="pc-item"><a class="pc-link" href="../dashboard/analytics.html" data-i18n="Analytics">Analytics</a></li>
                        <li class="pc-item"><a class="pc-link" href="../dashboard/finance.html" data-i18n="Finance">Finance</a></li>
                    </ul>
                </li>
                {{--Single ink--}}
                <li class="pc-item">
                    <a href="../widget/w_statistics.html" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-story"></use>
              </svg>
            </span>
                        <span class="pc-mtext" data-i18n="Statistics">Statistics</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>