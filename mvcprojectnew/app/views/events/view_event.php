		                            <!--begin::Post card-->
									<div class="card">
										<!--begin::Body-->
										<div class="card-body p-lg-15 pb-lg-0">
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-xl-row">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-xl-15">
													<!--begin::Post content-->
													<div class="mb-17">
														<!--begin::Wrapper-->
														<div class="mb-8">
															<!--begin::Info-->
															<div class="d-flex flex-wrap mb-6">
																
																
																
															</div>
															<!--end::Info-->
															<!--begin::Title-->
															<h2 class= "fw-bold my-2"><?php echo $data['event']->eventName?>
															
															<!--end::Title-->
															<?php if (!empty($data['event']->filepath)) : ?>
															<!--begin::Container-->
															<div class="overlay mt-8">
																<!--begin::Image-->
																<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image: url('<?php echo URLROOT . "/public/" . $data['event']->filepath; ?>'); background-size: cover;"></div>
																<!--end::Image-->
															</div>
															<!--end::Container-->
															<?php endif; ?>
														</div>
														<!--end::Wrapper-->
														<!--begin::Description-->
														<div class="fs-5 fw-semibold text-gray-600">




															<!--begin::details View-->
															<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
																<!--begin::Card header-->
																<div class="card-header cursor-pointer">
																	<!--begin::Card title-->
																	<div class="card-title m-0">
																		<h3 class="fw-bold m-0">Event Details</h3>
																	</div>
																	<!--end::Card title-->
																</div>
																<!--begin::Card header-->
																<!--begin::Card body-->
																<div class="card-body p-9">
																	<!--begin::Row-->

																	<!--begin::Input group-->
																	<div class="row mb-7">
																		<!--begin::Label-->
																		<label class="col-lg-4 fw-semibold text-muted">Category</label>
																		<!--end::Label-->
																		<!--begin::Col-->
																		<div class="col-lg-8 d-flex align-items-center">
																			<span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $data['event']->category;?></span>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->



																	<div class="row mb-7">
																		<!--begin::Label-->
																		<label class="col-lg-4 fw-semibold text-muted">Venue</label>
																		<!--end::Label-->
																		<!--begin::Col-->
																		<div class="col-lg-8">
																			<span class="fw-bold fs-6 text-gray-800"><?php echo $data['event']->venue;?></span>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Row-->
																	
																	<!--begin::Input group-->
																	<div class="row mb-7">
																		<!--begin::Label-->
																		<label class="col-lg-4 fw-semibold text-muted">Date</label>
																		<!--end::Label-->
																		<!--begin::Col-->
																		<div class="col-lg-8 d-flex align-items-center">
																			<span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $data['event']->date;?></span>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="row mb-7">
																		<!--begin::Label-->
																		<label class="col-lg-4 fw-semibold text-muted">Time</label>
																		<!--end::Label-->
																		<!--begin::Col-->
																		<div class="col-lg-8">
																			<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php echo $data['event']->time;?></a>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	
																	
																	<!--begin::Text-->
																		<p class="mb-8"><?php echo $data['event']->eventDescription;?></p>
																	<!--end::Text-->


																	<?php if (!empty($data['selected_clients'])): ?>
																	<!--begin::Input group-->
																	<div class="row mb-10">
																		<!--begin::Label-->
																		<label class="col-lg-4 fw-semibold text-muted">Collaborator</label>
																		<!--begin::Label-->
																		<!--begin::Section-->
																				<div class="m-0">
																					<!--begin::Heading-->
																					<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_1">
																						<!--begin::Icon-->
																						<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																							<i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																							</i>
																							<i class="ki-duotone ki-plus-square toggle-off fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																								<span class="path3"></span>
																							</i>
																						</div>
																						<!--end::Icon-->
																						<!--begin::Title-->
																						<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">List of Collaborator(s)</h4>
																						<!--end::Title-->
																					</div>
																					<!--end::Heading-->
																					<!--begin::Body-->
																					<div id="kt_job_1_1" class="collapse show fs-6 ms-1">


																						<?php foreach ($data['selected_clients'] as $selectedClient): ?>
    																						<?php $clientData = $this->eventModel->getClientById($selectedClient); ?>
																							<!--begin::Item-->
																							<div class="mb-4">
																								<!--begin::Item-->
																								<div class="d-flex align-items-center ps-10 mb-n1">
																									<!--begin::Bullet-->
																									<span class="bullet me-3"></span>
																									<!--end::Bullet-->
																									<!--begin::Label-->
																									<div class="text-gray-600 fw-semibold fs-6"><?php echo $clientData->companyName; ?></div>
																									<!--end::Label-->
																								</div>
																								<!--end::Item-->
																							</div>
																							<!--end::Item-->

																						<?php endforeach; ?>


																					</div>
																					<!--end::Content-->
																					<!--begin::Separator-->
																					<div class="separator separator-dashed"></div>
																					<!--end::Separator-->
																				</div>
																				<!--end::Section-->
																	</div>
																	<!--end::Input group-->
																	<?php endif; ?>
																</div>
																<!--end::Card body-->
															</div>
															<!--end::details View-->

                                                            <a href="<?php echo URLROOT . "/events/register_event/".$data['event']->event_id?>" class="btn btn-primary">Register Now</a>
															
														</div>
														<!--end::Description-->
														<!--begin::Block-->
														<div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
															<!--begin::Section-->
															<div class="text-center flex-shrink-0 me-7 me-lg-13">
																<!--begin::Avatar-->
																<div class="symbol symbol-70px symbol-circle mb-2">
																	<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="mb-0">
																	<a href="pages/user-profile/overview.html" class="text-gray-700 fw-bold text-hover-primary">Jane Johnson</a>
																	<span class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
															<!--begin::Text-->
															<div class="mb-0 fs-6">
																<div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div>
																<a href="pages/user-profile/overview.html" class="fw-semibold link-primary">Author’s Profile</a>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Block-->
														<!--begin::Icons-->
														<div class="d-flex flex-center">
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
															<!--begin::Icon-->
															<a href="#" class="mx-4">
																<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
															</a>
															<!--end::Icon-->
														</div>
														<!--end::Icons-->
													</div>
													<!--end::Post content-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->
												<div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
													
													<!--begin::Catigories-->
													<div class="mb-16">
														<h4 class="text-gray-900 mb-7">Categories</h4>
														<!--begin::Item-->
														<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
															<!--begin::Text-->
															<a href="#" class="text-muted text-hover-primary pe-2">Program/Activities</a>
															<!--end::Text-->
															<!--begin::Number-->
															<div class="m-0"><?php echo $this->eventModel->countEventByCategory('Program/Activities');?></div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
															<!--begin::Text-->
															<a href="#" class="text-muted text-hover-primary pe-2">Competition/Scholarship</a>
															<!--end::Text-->
															<!--begin::Number-->
															<div class="m-0"><?php echo $this->eventModel->countEventByCategory('Competition/Scholarship');?></div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
															<!--begin::Text-->
															<a href="#" class="text-muted text-hover-primary pe-2">Bootcamp/Workshop</a>
															<!--end::Text-->
															<!--begin::Number-->
															<div class="m-0"><?php echo $this->eventModel->countEventByCategory('Bootcamp/Workshop');?></div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
															<!--begin::Text-->
															<a href="#" class="text-muted text-hover-primary pe-2">Part Time</a>
															<!--end::Text-->
															<!--begin::Number-->
															<div class="m-0"><?php echo $this->eventModel->countEventByCategory('Part Time');?></div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
															<!--begin::Text-->
															<a href="#" class="text-muted text-hover-primary pe-2">Volunteering</a>
															<!--end::Text-->
															<!--begin::Number-->
															<div class="m-0"><?php echo $this->eventModel->countEventByCategory('Volunteering');?></div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack fw-semibold fs-5 text-muted">
															<!--begin::Text-->
															<a href="#" class="text-muted text-hover-primary pe-2">Internship</a>
															<!--end::Text-->
															<!--begin::Number-->
															<div class="m-0"><?php echo $this->eventModel->countEventByCategory('Internship');?></div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Catigories-->
													<!--begin::Recent posts-->
													<div class="m-0">
														<h4 class="text-gray-900 mb-7">Recent Posts</h4>
														<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">About Bootstrap Admin</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-2.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">A yellow sofa</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-3.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Our Camra Mega Set</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-4.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Time to cook and eat?</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Recent posts-->
												</div>
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
											

										</div>
										<!--end::Body-->
									</div>
									<!--end::Post card-->