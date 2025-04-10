<aside id="side-overlay">
    <!-- Side Header -->
    <div class="content-header">
        <!-- User Avatar -->
        <a class="img-link me-2" href="be_pages_generic_profile.html">
            <img class="img-avatar img-avatar32" src="{{ asset('admin/assets/media/avatars/avatar15.jpg') }}" alt="">
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="be_pages_generic_profile.html">
            John Smith
        </a>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
        </button>
        <!-- END Close Side Overlay -->
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <!-- Search -->
        <div class="block pull-t pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <form action="be_pages_generic_search.html" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Search -->

        <!-- Mini Stats -->
        <div class="block pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Clients</div>
                        <div class="fs-4">460</div>
                    </div>
                    <div class="col-4">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                        <div class="fs-4">728</div>
                    </div>
                    <div class="col-4">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                        <div class="fs-4">$7,860</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Mini Stats -->

        <!-- Friends -->
        <div class="block pull-x">
            <div class="block-header bg-body-light">
                <h3 class="block-title">
                    <i class="fa fa-fw fa-users opacity-50 me-1"></i> Friends
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content">
                <ul class="nav-users">
                    <li>
                        <a href="be_pages_generic_profile.html">
                            <img class="img-avatar" src="{{ asset('admin/assets/media/avatars/avatar5.jpg') }}" alt="">
                            <i class="fa fa-circle text-success"></i>
                            <div>Alice Moore</div>
                            <div class="fw-normal fs-xs text-muted">Photographer</div>
                        </a>
                    </li>
                    <li>
                        <a href="be_pages_generic_profile.html">
                            <img class="img-avatar" src="{{ asset('admin/assets/media/avatars/avatar9.jpg') }}" alt="">
                            <i class="fa fa-circle text-success"></i>
                            <div>Adam McCoy</div>
                            <div class="fw-normal fs-xs text-muted">Web Designer</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Friends -->

        <!-- Profile -->
        <div class="block pull-x">
            <div class="block-header bg-body-light">
                <h3 class="block-title">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Profile
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                    <div class="mb-3">
                        <label class="form-label" for="side-overlay-profile-name">Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="side-overlay-profile-email">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="side-overlay-profile-password">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                            <span class="input-group-text">
                                <i class="fa fa-asterisk"></i>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-sync opacity-50 me-1"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Profile -->

        <!-- Settings -->
        <div class="block pull-x">
            <div class="block-header bg-body-light">
                <h3 class="block-title">
                    <i class="fa fa-fw fa-wrench opacity-50 me-1"></i> Settings
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-status" name="side-overlay-settings-security-status" checked>
                        <label class="form-check-label fw-medium" for="side-overlay-settings-security-status">Online Status</label>
                        <div class="fs-sm text-muted">Show your status to all</div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-verify" name="side-overlay-settings-security-verify">
                        <label class="form-check-label fw-medium" for="side-overlay-settings-security-verify">Verify on Login</label>
                        <div class="fs-sm text-muted">Most secure option</div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-updates" name="side-overlay-settings-security-updates" checked>
                        <label class="form-check-label fw-medium" for="side-overlay-settings-security-updates">Auto Updates</label>
                        <div class="fs-sm text-muted">Keep app updated</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Settings -->
    </div>
    <!-- END Side Content -->
</aside>