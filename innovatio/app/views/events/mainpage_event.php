				<!--begin::Home card-->
				<div class="card">
						<!--begin::Body-->
						<div class="card-body p-10 p-lg-15">
							<!--begin::Section-->
								<div class="mb-17">
								<!--begin::Title-->
								<h3 class="text-gray-900 mb-7">Overview Event</h3>
								<!--end::Title-->
								<!--begin::Separator-->
								<div class="separator separator-dashed mb-9"></div>
								<!--end::Separator-->	
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 gx-xl-10 mb-5 mb-xl-200">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 20-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-100 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?php echo $this->eventModel->countEvent()?></span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total number of event</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-100">
													
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 20-->
											
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 17-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-100 mb-5 mb-xl-10" style="background-color: #598BAF">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-black me-2 lh-1 ls-n2"><?php echo $this->eventModel->countRegister()?></span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-black opacity-75 pt-1 fw-semibold fs-6">Total engagement of student in Youth Venture Event</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-100">
													
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 17-->
											<!--begin::List widget 26-->
											<div class="card card-flush h-lg-50" style="display: none;">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title text-gray-800 fw-bold"></h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2"></a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
															
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2"></a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
															
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2"></a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
															
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::LIst widget 26-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-6">
											
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
											<!--begin::Pos food-->
											<div class="card card-flush card-p-0 bg-transparent border-0">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Nav-->
													<ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-6">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-0">
															<!--begin::Nav link-->
															<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show active" data-bs-toggle="pill" href="#kt_pos_food_content_1" style="width: 138px;height: 180px">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<!--begin::Food icon-->
																	<img src="<?php echo URLROOT ?>/public/assets/media/activity.png" class="w-50px" alt="" />
																	<!--end::Food icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="">
																	<span class="text-gray-800 fw-bold fs-2 d-block">Program</span>
																	<span class="text-gray-800 fw-bold fs-2 d-block">/Activities</span>
																	<span class="text-gray-500 fw-semibold fs-7"><?php echo $this->eventModel->countEventByCategory('Program/Activities');?></span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::Nav link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-0">
															<!--begin::Nav link-->
															<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_2" style="width: 138px;height: 180px">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<!--begin::Food icon-->
																	<img src="<?php echo URLROOT ?>/public/assets/media/competition.png" class="w-50px" alt="" />
																	<!--end::Food icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="">
																	<span class="text-gray-800 fw-bold fs-2 d-block">Competition</span>
																	<span class="text-gray-800 fw-bold fs-2 d-block">/Scholarship</span>
																	<span class="text-gray-500 fw-semibold fs-7"><?php echo $this->eventModel->countEventByCategory('Competition/Scholarship');?></span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::Nav link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-0">
															<!--begin::Nav link-->
															<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_3" style="width: 138px;height: 180px">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<!--begin::Food icon-->
																	<img src="<?php echo URLROOT ?>/public/assets/media/workshop.jpeg" class="w-50px" alt="" />
																	<!--end::Food icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="">
																	<span class="text-gray-800 fw-bold fs-2 d-block">Bootcamp</span>
																	<span class="text-gray-800 fw-bold fs-2 d-block">/Workshop</span>
																	<span class="text-gray-500 fw-semibold fs-7"><?php echo $this->eventModel->countEventByCategory('Bootcamp/Workshop');?></span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::Nav link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-0">
															<!--begin::Nav link-->
															<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_4" style="width: 138px;height: 180px">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<!--begin::Food icon-->
																	<img src="<?php echo URLROOT ?>/public/assets/media/parttime.png" class="w-50px" alt="" />
																	<!--end::Food icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="">
																	<span class="text-gray-800 fw-bold fs-2 d-block">Part Time</span>
																	<span class="text-gray-500 fw-semibold fs-7"><?php echo $this->eventModel->countEventByCategory('Part Time');?></span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::Nav link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-0">
															<!--begin::Nav link-->
															<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_5" style="width: 138px;height: 180px">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<!--begin::Food icon-->
																	<img src="<?php echo URLROOT ?>/public/assets/media/volunteering.jpg" class="w-50px" alt="" />
																	<!--end::Food icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="">
																	<span class="text-gray-800 fw-bold fs-2 d-block">Volunteering</span>
																	<span class="text-gray-500 fw-semibold fs-7"><?php echo $this->eventModel->countEventByCategory('Volunteering');?></span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::Nav link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-0">
															<!--begin::Nav link-->
															<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_5" style="width: 138px;height: 180px">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<!--begin::Food icon-->
																	<img src="<?php echo URLROOT ?>/public/assets/media/internship.png" class="w-50px" alt="" />
																	<!--end::Food icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="">
																	<span class="text-gray-800 fw-bold fs-2 d-block">Internship</span>
																	<span class="text-gray-500 fw-semibold fs-7"><?php echo $this->eventModel->countEventByCategory('Internship');?></span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::Nav link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Pos food-->
							
								</div>
								<!--end::Content container-->
							</div>
							<!--end::section-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Home card-->
						


									