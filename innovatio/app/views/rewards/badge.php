									<div class="row gx-6 gx-xl-9">
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
                                                            <div class="d-flex fs-1 fw-semibold align-items-center mb-3">
                                                            <img src="public/img/gold.png" alt="Gold" class="img-fluid" style="width: 70px; height: 70px;">			
                                                                <div class="text-gray-600">Gold</div>
                                                                <div class="ms-auto fw-bold text-gray-700"><?php echo isset($data['badge']->goldBadge) ? $data['badge']->goldBadge : ''; ?></div> <!--kene cari how to connect with this one -->
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Label-->
                                                            <div class="d-flex fs-1 fw-semibold align-items-center mb-3">
                                                            <img src="public/img/silver.png" alt="Silver" class="img-fluid" style="width: 70px; height: 70px;">															
                                                                <div class="text-gray-600">Silver</div>
                                                                <div class="ms-auto fw-bold text-gray-700"><?php echo isset($data['badge']->silverBadge) ? $data['badge']->silverBadge : ''; ?></div> <!--kene cari how to connect with this one -->
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Label-->
                                                            <div class="d-flex fs-1 fw-semibold align-items-center mb-3">
                                                            <img src="public/img/bronze.png" alt="Bronze" class="img-fluid" style="width: 70px; height: 70px;">														
                                                                <div class="text-gray-600">Bronze</div>
                                                                <div class="ms-auto fw-bold text-gray-700"><?php echo isset($data['badge']->bronzeBadge) ? $data['badge']->bronzeBadge : ''; ?></div> <!--kene cari how to connect with this one -->
                                                            </div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Labels-->
													</div>
													<!--end::Wrapper-->
													<!-- begin::Button -->
													<div class="menu-item px-3">
														<a href="<?php echo URLROOT . "/rewards/join/" . $_SESSION['user_id']?>" class="btn btn-light-primary">Join</a>
													</div>
													<!-- end::Button -->
												</div>
												<!--end::Card body-->
											</div> 
											<!--end::Summary-->
										</div>
										<!--end::col -->

									</div>