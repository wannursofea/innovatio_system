 <?php
    require APPROOT . '/views/includes/head_metronic.php';
?>

 <?php
    require APPROOT . '/views/includes/begin_app.php';
 ?>


                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content pt-10">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid" style="max-width: 1600px;">
                                <!--begin::Row-->
<!-- STUDENT DASHBOARD-->          
                                    <!--begin::row--> 
									<div class="row gx-6 gx-xl-9">

                                        <!-- EVENTS -->
                                        <!--begin::Col-->
                                        <?php if (isset($_SESSION['user_role']) && (($_SESSION['user_role'] == 'Admin' || $_SESSION['user_role'] == 'Student' || $_SESSION['user_role'] == 'Partner'))) : ?>
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
											<!--begin::Card widget 20-->
											<div class="card card-flush h-lg-100" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">Events</span>
														<!--end::Amount-->
                                                        <!--begin::Subtitle-->
														<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Youth Venture Events</span>
														<!--end::Subtitle-->

													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex align-items-end pt-0">
                                                    <!--begin::Progress-->
                                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                        <div class="d-flex justify-content-between fw-bold fs-4 text-white opacity-75 w-100 mt-auto mb-2">
                                                            <?//php echo isset($data['eventNum']) ? $data['eventNum'] : ''; ?> 
                                                        </div>
                                                        <?php if ($_SESSION['user_role'] == 'Student') : ?>
                                                            <!-- begin::Button -->
                                                            <div class="d-flex justify-content-start px-1">
                                                                <a href="<?php echo URLROOT . "/events/manage_registrationlist"?>" class="btn btn-light-primary" style="width: 200px; height: 40px;"><span class="fs-5">Join</span></a>
                                                            </div>
                                                            <!-- end::Button -->
                                                            <?php endif; ?>  
                                                        <?php if ($_SESSION['user_role'] == 'Partner') : ?>
                                                            <!-- begin::Button -->
                                                            <div class="d-flex justify-content-start px-1">
                                                                <a href="<?php echo URLROOT . "/events"?>" class="btn btn-light-primary" style="width: 200px; height: 40px;"><span class="fs-5">Check</span></a>
                                                            </div>
                                                            <!-- end::Button -->
                                                            <?php endif; ?>  
                                                        <?php if ($_SESSION['user_role'] == 'Admin') : ?>
                                                            <!-- begin::Button -->
                                                            <div class="d-flex justify-content-start px-1">
                                                                <a href="<?php echo URLROOT . "/events"?>" class="btn btn-light-primary" style="width: 200px; height: 40px;"><span class="fs-5">Check</span></a>
                                                            </div>
                                                            <!-- end::Button -->
                                                            <?php endif; ?>  
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card body-->
											</div>
											<!--end::Card widget 20-->
                                        </div>  
                                        <?php endif; ?>  
                                        <!-- end::Col  -->
                                        <!-- EVENTS -->



                                        <?php if ($_SESSION['user_role'] == 'Student') : ?>
                                            <!-- FOR PROFILE STUDENT-->
                                            <!--begin::col-->
                                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
                                                <!--begin::Summary-->
                                                <div class="card card-flush h-lg-100">

                                                    <!--begin::Member-->
                                                    <div class="d-flex flex-column text-center mb-9 px-9">
                                                        <!--begin::Photo-->
                                                        <div class="symbol symbol-80px symbol-lg-150px mb-4">
                                                            <img src="<?php echo URLROOT . "/public/" . $_SESSION['user_image']; ?>" class="" alt="" />
                                                        </div>
                                                        <!--end::Photo-->
                                                        <!--begin::Info-->
                                                        <div class="text-center">
                                                            <!--begin::Name-->
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4"><?php echo isset($data['student']->name) ? $data['student']->name: ''; ?></a>
                                                            <!--end::Name-->
                                                            <!--begin::Position-->
                                                            <span class="text-muted d-block fw-semibold"><?php echo isset($data['student']->education) ? $data['student']->education: ''; ?></span>
                                                            <!--end::Position-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Member-->
                                                    <!--begin::Navbar-->
                                                    <div class="m-0">
                                                        <!--begin::Navs-->
                                                        <ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
                                                            <!--begin::Nav item-->
                                                            <li class="nav-item mt-5">
                                                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="rewards/badge">
                                                                <i class="ki-duotone ki-row-horizontal fs-3 text-muted me-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>Badge 
                                                                <!--begin::Bullet-->
                                                                <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                                                <!--end::Bullet--></a>
                                                            </li>
                                                            <!--end::Nav item-->
                                                            <!--begin::Nav item-->
                                                            <li class="nav-item mt-5">
                                                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="events/manage_registrationlist">
                                                                <i class="ki-duotone ki-chart-simple-2 fs-3 text-muted me-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>Event 
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
                                                <!--end::Summary-->                                                
                                            </div>
                                            <!--end::col-->
                                        <?php endif; ?>




                                        <?php if ($_SESSION['user_role'] == 'Partner') : ?>
                                            <!-- FOR PROFILE CLIENT -->
                                            <!--begin::col-->
                                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
                                                <!--begin::Summary-->
                                                <div class="card card-flush h-lg-100">

                                                    <!--begin::Member-->
                                                    <div class="d-flex flex-column text-center mb-9 px-9">
                                                        <!--begin::Photo-->
                                                        <div class="symbol symbol-80px symbol-lg-150px mb-4">
                                                            <img src="<?php echo URLROOT . "/public/" . $_SESSION['user_image']; ?>" class="" alt="" />
                                                        </div>
                                                        <!--end::Photo-->
                                                        <!--begin::Info-->
                                                        <div class="text-center">
                                                            <!--begin::Name-->
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4"><?php echo isset($data['partner']->companyName) ? $data['partner']->companyName: ''; ?></a>
                                                            <!--end::Name-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Member-->
                                                </div> 
                                                <!--end::Summary-->                                                
                                            </div>
                                            <!--end::col-->
                                        <?php endif; ?>




                                        <?php if ($_SESSION['user_role'] == 'Admin') : ?>
                                            <!-- FOR PROFILE ADMIN -->
                                            <!--begin::col-->
                                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
                                                <!--begin::Summary-->
                                                <div class="card card-flush h-lg-100">

                                                    <!--begin::Member-->
                                                    <div class="d-flex flex-column text-center mb-9 px-9">
                                                        <!--begin::Photo-->
                                                        <div class="symbol symbol-80px symbol-lg-150px mb-4">
                                                            <img src="<?php echo URLROOT ?>/public/assets/media/YVlogo.jpeg" class="" alt="" />
                                                        </div>
                                                        <!--end::Photo-->
                                                        <!--begin::Info-->
                                                        <div class="text-center">
                                                            <!--begin::Name-->
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">Youth Venture</a>
                                                            <!--end::Name-->
                                                            <!--begin::Position-->
                                                            <span class="text-muted d-block fw-semibold">Admin</span>
                                                            <!--end::Position-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Member-->
                                                    <!--begin::Navbar-->
                                                    <div class="m-0">
                                                        <!--begin::Navs-->
                                                        <ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
                                                            <!--begin::Nav item-->
                                                            <li class="nav-item mt-5">
                                                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="rewards/manage">
                                                                <i class="ki-duotone ki-row-horizontal fs-3 text-muted me-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>Badge 
                                                                <!--begin::Bullet-->
                                                                <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                                                <!--end::Bullet--></a>
                                                            </li>
                                                            <!--end::Nav item-->
                                                            <!--begin::Nav item-->
                                                            <li class="nav-item mt-5">
                                                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="events">
                                                                <i class="ki-duotone ki-chart-simple-2 fs-3 text-muted me-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>Event 
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
                                                <!--end::Summary-->                                                
                                            </div>
                                            <!--end::col-->
                                        <?php endif; ?>

                                        <!-- FOR ANY HYPERLINK -->
                                        <!--begin::Col-->
                                        <div class="col-md-6 col-lg-6 col-xl-4 col-xxl-4 mb-md-10 mb-xl-10 d-flex justify-content-center">
                                            <!--begin::Feature post-->
                                            <div class="card-xl-stretch me-md-6">
                                                <!--begin::Image-->
                                                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('public/img/YV2.png')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                                    <!-- <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" /> -->
                                                </a>
                                                <!--end::Image-->
                                                <!--begin::Body-->
                                                <div class="m-0">
                                                    <!--begin::Title-->
                                                    <a href="https://www.youthventures.asia/lets-fight-cancer-together-with-youths/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Let's Fight Cancer Together and Save The World!</a>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">This October, Youth Ventures Asia and The Noor stand united as a powerful alliance to four charities: MAKNA, NCSM, BCWA, and PINK RIBBON, via INCITEMENT: a platform that enables transparent giving.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Feature post-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-6 col-lg-6 col-xl-4 col-xxl-4 mb-md-10 mb-xl-10 d-flex justify-content-center">
                                            <!--begin::Feature post-->
                                            <div class="card-xl-stretch me-md-6">
                                                    <!-- begin::Image -->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('public/img/YV.jpeg'); height: 175px;">
                                                        <!-- <img src="public/img/YV.jpeg" class="position-absolute top-50 start-50 translate-middle" alt="" style="width: 100%; height: auto;" /> -->
                                                    </a>
                                                    <!-- end::Image -->
                                                <!--begin::Body-->
                                                <div class="m-0">
                                                    <!--begin::Title-->
                                                    <a href="https://www.youthventures.asia/our-story/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">More About Us</a>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We are an expert in youth and making people feel youthful. Founded in late 2018, Youth Ventures Asia has worked with a public and private organizations to adopt an innovative mindset, learn technology skills, and accelerate the growth of youths in Southeast Asia.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Feature post-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-6 col-lg-6 col-xl-4 col-xxl-4 mb-md-10 mb-xl-10 d-flex justify-content-center">
                                            <!--begin::Feature post-->
                                            <div class="card-xl-stretch me-md-6">
                                                <!--begin::Image-->
                                                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                                    <!-- <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" /> -->
                                                </a>
                                                <!--end::Image-->
                                                <!--begin::Body-->
                                                <div class="m-0">
                                                    <!--begin::Title-->
                                                    <a href="https://www.instagram.com/youthventures.asia/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Feature post-->
                                        </div>
                                        <!--end::Col-->



									</div>   
                                    <!--end::Row-->

                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                
<?php
    require APPROOT . '/views/includes/footer_app.php';
?>



<?php
    require APPROOT . '/views/includes/footer_metronic.php';
 ?>

