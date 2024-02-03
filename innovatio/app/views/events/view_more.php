									<!--begin::details View-->
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Participant Details</h3>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Full Name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?php echo $data['student']->name;?></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Contact Number</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 d-flex align-items-center">
													<span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $data['student']->phoneNum;?></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Email</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php echo $data['student']->email;?></a>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Date of Birth</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?php echo $data['student']->DOB;?></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Dream</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->dream;?></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Passion</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->passion;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Hidden Talent</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->hiddenTalent;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Institution</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->institution;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Course</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['student']->course;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Year of Internship</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->internshipYear;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Year of Graduation</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->graduationYear;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Goal</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->goal;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">How to archieve it ?
													<span class="ms-1" data-bs-toggle="tooltip" title="Correspond to Goal">
													<i class="ki-duotone ki-information fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
													</span>
												</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8">
													<span class="fw-semibold fs-6 text-gray-800"><?php echo $data['stuInEveRegister']->archieveGoal;?></span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->

											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Skills</label>
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
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">List of Skill(s)</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_1_1" class="collapse show fs-6 ms-1">


																<?php foreach ($data['selectedSkill'] as $selectedSkill): ?>
																	<?php $stuSkill = $this->eventModel->findSelectedSkillOptionById($selectedSkill)?>
																	<!--begin::Item-->
																	<div class="mb-4">
																		<!--begin::Item-->
																		<div class="d-flex align-items-center ps-10 mb-n1">
																			<!--begin::Bullet-->
																			<span class="bullet me-3"></span>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="text-gray-600 fw-semibold fs-6"><?php echo $stuSkill->skillName?></div>
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
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Platform(s) used</label>
												<!--begin::Label-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_3">
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
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">List of Platform(s) used</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_1_3" class="collapse fs-6 ms-1">

															<?php foreach ($data['selectedSoftSkill'] as $selectedSoftSkill): ?>
																<?php $stuSoftSkill = $this->eventModel->findSelectedSoftSkillOptionById($selectedSoftSkill)?>
																<!--begin::Item-->
																<div class="mb-4">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center ps-10 mb-n1">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6"><?php echo $stuSoftSkill->softwareSkillName?></div>
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




										

											
										</div>
										<!--end::Card body-->
									</div>
									<!--end::details View-->