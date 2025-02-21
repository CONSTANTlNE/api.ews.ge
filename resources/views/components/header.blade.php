<header class="pc-header">
    <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow"><!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
                    <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup lg:hidden">
                    <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
                        <i class="ti ti-menu-2 text-2xl leading-none"></i>
                    </a>
                </li>

            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
                <li class="dropdown pc-h-item">
                    <a
                            class="pc-head-link dropdown-toggle me-0"
                            data-pc-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                    >
                        <svg class="pc-icon">
                            <use xlink:href="#custom-sun-1"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                            <svg class="pc-icon w-[18px] h-[18px]">
                                <use xlink:href="#custom-moon"></use>
                            </svg>
                            <span>Dark</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                            <svg class="pc-icon w-[18px] h-[18px]">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg>
                            <span>Light</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                            <svg class="pc-icon w-[18px] h-[18px]">
                                <use xlink:href="#custom-setting-2"></use>
                            </svg>
                            <span>Default</span>
                        </a>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                            class="pc-head-link dropdown-toggle me-0"
                            data-pc-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                    >
                        <svg class="pc-icon">
                            <use xlink:href="#custom-language"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown lng-dropdown">
                        <a href="#!" class="dropdown-item" data-lng="en">
          <span>
            English
            <small>(UK)</small>
          </span>
                        </a>
                        <a href="#!" class="dropdown-item" data-lng="fr">
          <span>
            français
            <small>(French)</small>
          </span>
                        </a>
                        <a href="#!" class="dropdown-item" data-lng="ro">
          <span>
            Română
            <small>(Romanian)</small>
          </span>
                        </a>
                        <a href="#!" class="dropdown-item" data-lng="cn">
          <span>
            中国人
            <small>(Chinese)</small>
          </span>
                        </a>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                    >
                        <svg class="pc-icon">
                            <use xlink:href="#custom-setting-2"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-user"></i>
                            <span>My Account</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-settings"></i>
                            <span>Settings</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-headset"></i>
                            <span>Support</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-lock"></i>
                            <span>Lock Screen</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
                <li class="pc-h-item">
                    <a href="#" class="pc-head-link me-0" data-pc-toggle="offcanvas" data-pc-target="#announcement" aria-controls="announcement">
                        <svg class="pc-icon">
                            <use xlink:href="#custom-flash"></use>
                        </svg>
                    </a>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                            class="pc-head-link dropdown-toggle me-0"
                            data-pc-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                    >
                        <svg class="pc-icon">
                            <use xlink:href="#custom-notification"></use>
                        </svg>
                        <span class="badge bg-success-500 text-white rounded-full z-10 absolute right-0 top-0">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown p-2">
                        <div class="dropdown-header flex items-center justify-between py-4 px-5">
                            <h5 class="m-0">Notifications</h5>
                            <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
                        </div>
                        <div class="dropdown-body header-notification-scroll relative py-4 px-5" style="max-height: calc(100vh - 215px)">
                            <p class="text-span mb-3">Today</p>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="flex gap-4">
                                        <div class="shrink-0">
                                            <svg class="pc-icon text-primary w-[22px] h-[22px]">
                                                <use xlink:href="#custom-layer"></use>
                                            </svg>
                                        </div>
                                        <div class="grow">
                                            <span class="float-end text-sm text-muted">2 min ago</span>
                                            <h5 class="text-body mb-2">UI/UX Design</h5>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="flex gap-4">
                                        <div class="shrink-0">
                                            <svg class="pc-icon text-primary w-[22px] h-[22px]">
                                                <use xlink:href="#custom-sms"></use>
                                            </svg>
                                        </div>
                                        <div class="grow">
                                            <span class="float-end text-sm text-muted">1 hour ago</span>
                                            <h5 class="text-body mb-2">Message</h5>
                                            <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-span mb-3 mt-4">Yesterday</p>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="flex gap-4">
                                        <div class="shrink-0">
                                            <svg class="pc-icon text-primary w-[22px] h-[22px]">
                                                <use xlink:href="#custom-document-text"></use>
                                            </svg>
                                        </div>
                                        <div class="grow ms-3">
                                            <span class="float-end text-sm text-muted">2 hour ago</span>
                                            <h5 class="text-body mb-2">Forms</h5>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="flex gap-4">
                                        <div class="shrink-0">
                                            <svg class="pc-icon text-primary w-[22px] h-[22px]">
                                                <use xlink:href="#custom-user-bold"></use>
                                            </svg>
                                        </div>
                                        <div class="grow ms-3">
                                            <span class="float-end text-sm text-muted">12 hour ago</span>
                                            <h5 class="text-body mb-2">Challenge invitation</h5>
                                            <p class="mb-2">
                                                <span class="text-dark">Jonny aber</span>
                                                invites to join the challenge
                                            </p>
                                            <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                                            <button class="btn btn-sm btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="flex gap-4">
                                        <div class="shrink-0">
                                            <svg class="pc-icon text-primary w-[22px] h-[22px]">
                                                <use xlink:href="#custom-security-safe"></use>
                                            </svg>
                                        </div>
                                        <div class="grow ms-3">
                                            <span class="float-end text-sm text-muted">5 hour ago</span>
                                            <h5 class="text-body mb-2">Security</h5>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center py-2">
                            <a href="#!" class="text-danger-500 hover:text-danger-600 focus:text-danger-600 active:text-danger-600">
                                Clear all Notifications
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-pc-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            data-pc-auto-close="outside"
                            aria-expanded="false"
                    >
                        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar w-10 h-10 rounded-full" />
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2">
                        <div class="dropdown-header flex items-center justify-between py-4 px-5">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body py-4 px-5">
                            <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                <div class="flex mb-1 items-center">
                                    <div class="shrink-0">
                                        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="w-10 rounded-full" />
                                    </div>
                                    <div class="grow ms-3">
                                        <h6 class="mb-1">Carson Darrin 🖖</h6>
                                        <span>carson.darrin@company.io</span>
                                    </div>
                                </div>
                                <hr class="border-secondary-500/10 my-4" />
                                <div class="card">
                                    <div class="card-body !py-4">
                                        <div class="flex items-center justify-between">
                                            <h5 class="mb-0 inline-flex items-center">
                                                <svg class="pc-icon text-muted me-2 w-[22px] h-[22px]">
                                                    <use xlink:href="#custom-notification-outline"></use>
                                                </svg>
                                                Notification
                                            </h5>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div
                                                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
                                                ></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-span mb-3">Manage</p>
                                <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-setting-outline"></use>
                </svg>
                <span>Settings</span>
              </span>
                                </a>
                                <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-share-bold"></use>
                </svg>
                <span>Share</span>
              </span>
                                </a>
                                <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Change Password</span>
              </span>
                                </a>
                                <hr class="border-secondary-500/10 my-4" />
                                <p class="text-span mb-3">Team</p>
                                <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-profile-2user-outline"></use>
                </svg>
                <span>UI Design team</span>
              </span>
                                    <div dir="ltr"
                                         class="flex -space-x-2 overflow-hidden *:flex *:items-center *:justify-center *:rounded-full *:w-[30px] *:h-[30px] hover:*:z-10 *:border *:border-2 *:border-white"
                                    >
                                        <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                                        <span class="avtar bg-danger text-white">K</span>
                                        <span class="avtar bg-success text-white">
                  <svg class="pc-icon m-0">
                    <use xlink:href="#custom-user"></use>
                  </svg>
                </span>
                                        <span class="avtar bg-theme-cardbg dark:bg-themedark-cardbg overflow-hidden">
                  <span class="flex items-center justify-center w-full h-full bg-primary-500/10 text-primary-500">+2</span>
                </span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-profile-2user-outline"></use>
                </svg>
                <span>Friends Groups</span>
              </span>
                                    <div dir="ltr"
                                         class="flex -space-x-2 overflow-hidden *:flex *:items-center *:justify-center *:rounded-full *:w-[30px] *:h-[30px] hover:*:z-10 *:border *:border-2 *:border-white"
                                    >
                                        <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                                        <span class="avtar bg-danger text-white">K</span>
                                        <span class="avtar bg-success text-white">
                  <svg class="pc-icon m-0">
                    <use xlink:href="#custom-user"></use>
                  </svg>
                </span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-add-outline"></use>
                </svg>
                <span>Add new</span>
              </span>
                                    <div dir="ltr"
                                         class="flex -space-x-2 overflow-hidden *:flex *:items-center *:justify-center *:rounded-full *:w-[30px] *:h-[30px] hover:*:z-10 *:border-2 *:border-white"
                                    >
                <span class="avtar bg-primary text-white">
                  <svg class="pc-icon m-0">
                    <use xlink:href="#custom-add-outline"></use>
                  </svg>
                </span>
                                    </div>
                                </a>
                                <hr class="border-secondary-500/10 my-4" />
                                <div class="grid mb-3">
                                    <button class="btn btn-primary flex items-center justify-center">
                                        <svg class="pc-icon me-2 w-[22px] h-[22px]">
                                            <use xlink:href="#custom-logout-1-outline"></use>
                                        </svg>
                                        Logout
                                    </button>
                                </div>
                                <div
                                        class="card border-0 shadow-none drp-upgrade-card mb-0 bg-cover"
                                        style="background-image: url(../assets/images/layout/img-profile-card.jpg)"
                                >
                                    <div class="card-body">
                                        <div
                                                class="flex -space-x-3 overflow-hidden *:flex *:items-center *:justify-center *:rounded-full *:w-10 *:h-10 hover:*:z-10 *:border-2 *:border-white"
                                        >
                                            <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                                            <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                                            <img src="../assets/images/user/avatar-4.jpg" alt="user-image" class="avtar" />
                                            <img src="../assets/images/user/avatar-5.jpg" alt="user-image" class="avtar" />
                                            <span class="avtar bg-theme-cardbg dark:bg-themedark-cardbg overflow-hidden">
                    <span class="flex items-center justify-center w-full h-full bg-primary-500/10 text-primary-500">+20</span>
                  </span>
                                        </div>
                                        <h3 class="my-4 text-dark">
                                            245.3k
                                            <small class="text-muted">Followers</small>
                                        </h3>
                                        <div class="btn btn-warning inline-flex items-center justify-center">
                                            <svg class="pc-icon me-2 w-[22px] h-[22px]">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>
                                            Upgrade to Business
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="offcanvas pc-announcement-offcanvas offcanvas-end" tcabindex="-1" id="announcement" aria-labelledby="announcementLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="announcementLabel">What's new announcement?</h5>
        <button
                data-pc-dismiss="#announcement"
                class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500"
        >
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body announcement-scroll-block">
        <p class="mb-3">Today</p>
        <div class="card mb-3">
            <div class="card-body">
                <div class="items-center flex wrap gap-2 mb-3">
                    <div class="badge text-success-500 bg-success-500/10 text-sm">Big News</div>
                    <p class="mb-0">2 min ago</p>
                    <span class="badge bg-warning-500 p-1"></span>
                </div>
                <h5 class="mb-3">Able Pro is Redesigned</h5>
                <p class="text-muted mb-3">Able Pro is completely renowed with high aesthetics User Interface.</p>
                <img src="../assets/images/layout/img-announcement-1.png" alt="img" class="img-fluid mb-3" />
                <div class="grid">
                    <a class="btn btn-outline-secondary" href="https://1.envato.market/zNkqj6" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="items-center flex wrap gap-2 mb-3">
                    <div class="badge text-warning-500 bg-warning-500/10 text-sm">Offer</div>
                    <p class="mb-0 text-muted">2 hour ago</p>
                    <span class="badge bg-warning p-1"></span>
                </div>
                <h5 class="mb-3">Able Pro is in best offer price</h5>
                <p class="text-muted mb-3">Download Able Pro exclusive on themeforest with best price.</p>
                <a href="https://1.envato.market/zNkqj6" target="_blank">
                    <img src="../assets/images/layout/img-announcement-2.png" alt="img" class="img-fluid" />
                </a>
            </div>
        </div>

        <p class="text-span mb-3 mt-4">Yesterday</p>
        <div class="card mb-3">
            <div class="card-body">
                <div class="items-center flex wrap gap-2 mb-3">
                    <div class="badge text-primary-500 bg-primary-500/10 text-sm">Blog</div>
                    <p class="mb-0 text-muted">12 hour ago</p>
                    <span class="badge bg-warning p-1"></span>
                </div>
                <h5 class="mb-3">Featured Dashboard Template</h5>
                <p class="text-muted mb-3">Do you know Able Pro is one of the featured dashboard template selected by Themeforest team.?</p>
                <img src="../assets/images/layout/img-announcement-3.png" alt="img" class="img-fluid" />
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="items-center flex wrap gap-2 mb-3">
                    <div class="badge text-primary-500 bg-primary-500/10 text-sm">Announcement</div>
                    <p class="mb-0 text-muted">12 hour ago</p>
                    <span class="badge bg-warning p-1"></span>
                </div>
                <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
                <p class="text-muted mb-3">Get the lifetime free updates once you purchase the Able Pro.</p>
                <img src="../assets/images/layout/img-announcement-4.png" alt="img" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
