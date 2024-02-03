<div class="row gx-6 gx-xl-9">
    <!-- begin::col -->
    <div class="col-lg-6"> 
        <!--begin::Summary-->
        <div class="card card-flush h-lg-100">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Badges</h3>
                </div> 
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <!-- <div class="card-toolbar">
                    <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                </div> -->
                <!--end::Card toolbar-->
            </div> 
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9 pt-5">
                <!--begin::Wrapper--> 
                <div class="d-flex flex-wrap">
                    <!--begin::Labels-->
                    <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                    <img src="public/img/gold.png" alt="Gold" class="img-fluid" style="width: 20px; height: 20px;">			
                        <div class="text-gray-400">Gold</div>
                        <div class="ms-auto fw-bold text-gray-700"><?php echo isset($data['badge']->goldBadge) ? $data['badge']->goldBadge : ''; ?></div> <!--kene cari how to connect with this one -->
                    </div>
                    <!--end::Label-->
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                    <img src="public/img/silver.png" alt="Silver" class="img-fluid" style="width: 20px; height: 20px;">															
                        <div class="text-gray-500">Silver</div>
                        <div class="ms-auto fw-bold text-gray-700">45</div> <!--kene cari how to connect with this one -->
                    </div>
                    <!--end::Label-->
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                    <img src="public/img/bronze.png" alt="Bronze" class="img-fluid" style="width: 20px; height: 20px;">														
                        <div class="text-gray-600">Bronze</div>
                        <div class="ms-auto fw-bold text-gray-700">0</div> <!--kene cari how to connect with this one -->
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Labels-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Card body-->
    </div> 
    <!--end::Summary-->
</div>
<!--end::col -->

        <!--begin::col -->
        <div class="col-lg-6">
        <!--begin::Summary-->
        <div class="card card-flush h-lg-100">
            <!--begin::Body-->
            <div class="card-body pt-15 px-0">
                <!--begin::Member-->
                <div class="d-flex flex-column text-center mb-9 px-9">
                    <!--begin::Photo-->
                    <div class="symbol symbol-80px symbol-lg-150px mb-4">
                        <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                    </div>
                    <!--end::Photo-->
                    <!--begin::Info-->
                    <div class="text-center">
                        <!--begin::Name-->
                        <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">Jerry Kane</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <span class="text-muted d-block fw-semibold">Grade 8, AE3 Student</span>
                        <!--end::Position-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Member-->
                <!--begin::Row-->
                <div class="row px-9 mb-4">
                    <!--begin::Col-->
                    <div class="col-md-4 text-center">
                        <div class="text-gray-800 fw-bold fs-3">
                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="642">0</span>
                        </div>
                        <span class="text-gray-500 fs-8 d-block fw-bold">POSTS</span>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 text-center">
                        <div class="text-gray-800 fw-bold fs-3">
                        <span class="m-0" data-kt-countup="true" data-kt-countup-value="24">0</span>K</div>
                        <span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWERS</span>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 text-center">
                        <div class="text-gray-800 fw-bold fs-3">
                        <span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>K</div>
                        <span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWING</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Navbar-->
                <div class="m-0">
                    <!--begin::Navs-->
                    <ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-5">
                            <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/feeds.html">
                            <i class="ki-duotone ki-row-horizontal fs-3 text-muted me-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Feeds 
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                            <!--end::Bullet--></a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-5">
                            <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/activity.html">
                            <i class="ki-duotone ki-chart-simple-2 fs-3 text-muted me-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>Activity 
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                            <!--end::Bullet--></a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-5">
                            <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="pages/social/followers.html">
                            <i class="ki-duotone ki-profile-circle fs-3 text-muted me-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Followers 
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                            <!--end::Bullet--></a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-5">
                            <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/settings.html">
                            <i class="ki-duotone ki-setting-2 fs-3 text-muted me-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Settings 
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                            <!--end::Bullet--></a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--begin::Navs-->
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Body-->
</div>
        </div>
        <!--end::col -->
    </div>
