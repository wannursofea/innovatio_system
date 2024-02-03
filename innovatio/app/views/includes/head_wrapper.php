						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--begin::Menu-->
								<div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">


								<!--begin:Menu item FOR EVENT-->
								<?php if (isset($_SESSION['user_role']) && (($_SESSION['user_role'] == 'Admin' || $_SESSION['user_role'] == 'Student' || $_SESSION['user_role'] == 'Partner'))) : ?>
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-app-menu-placement="bottom" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Event</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tabs nav-->
												<div class="d-flex w-100 overflow-auto">
													<ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
														<!--begin:Nav item-->
														<li class="nav-item mx-lg-1">
															<a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">Event</a>
														</li>
														<!--end:Nav item-->
													</ul>
												</div>
												<!--end:Tabs nav-->
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!-- <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4> -->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/events/mainpage_event" class="menu-link">
																				<span class="menu-title">Event</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->

																		<!--begin:Menu item-->
																		<?php if ($_SESSION['user_role'] == 'Admin' || $_SESSION['user_role'] == 'Partner') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/events" class="menu-link">
																				<span class="menu-title">View Event</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?php endif; ?>
																		<!--end:Menu item-->

																		<!--begin:Menu item-->
																		<?php if ($_SESSION['user_role'] == 'Admin') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/events/create" class="menu-link">
																				<span class="menu-title">Create Event</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?php endif; ?>
																		<!--end:Menu item-->

																		<!--begin:Menu item-->
																		<?php if ($_SESSION['user_role'] == 'Student') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/events/manage_registrationlist" class="menu-link">
																				<span class="menu-title">Registration</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?php endif; ?>
																		<!--end:Menu item-->

																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
													<!--begin:Tab pane-->
													<div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-5 mb-6 mb-lg-0">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-6">
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<?php endif; ?>
									<!--end:Menu item FOR EVENT-->

									<!--begin:Menu item FOR REWARDNBADGE-->
									<?php if (isset($_SESSION['user_role']) && (($_SESSION['user_role'] == 'Admin' || $_SESSION['user_role'] == 'Student'))) : ?>
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-app-menu-placement="bottom" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Reward & Badge</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tabs nav-->
												<div class="d-flex w-100 overflow-auto">
													<ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
														<!--begin:Nav item-->
														<li class="nav-item mx-lg-1">
															<a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">Badge</a>
														</li>
														<!--end:Nav item-->
													</ul>
												</div>
												<!--end:Tabs nav-->
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!-- <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4> -->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<?php if ($_SESSION['user_role'] == 'Student') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/rewards/badge" class="menu-link">
																				<span class="menu-title">View Badge</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?php endif; ?>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<?php if ($_SESSION['user_role'] == 'Admin') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/rewards/manage" class="menu-link">
																				<span class="menu-title">Manage Badge</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?php endif; ?>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<?php endif; ?>
									<!--end:Menu item FOR REWARDNBADGE-->
									
									<!--begin:Menu item FOR RESUME-->
									<?php if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 'Student')) : ?>
									<?//php if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 'Admin' || $_SESSION['user_role'] == 'Student')) : ?>
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-app-menu-placement="bottom" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Resume</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tabs nav-->
												<div class="d-flex w-100 overflow-auto">
													<ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
														<!--begin:Nav item-->
														<li class="nav-item mx-lg-1">
															<a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">Resume</a>
														</li>
														<!--end:Nav item-->
													</ul>
												</div>
												<!--end:Tabs nav-->
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!-- <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4> -->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<?//php if ($_SESSION['user_role'] == 'Student') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/resumes/edit_resume" class="menu-link">
																				<span class="menu-title">View Resume</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?//php endif; ?>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<?//php if ($_SESSION['user_role'] == 'Admin') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/resumes/edit_resumeview" class="menu-link">
																				<span class="menu-title">Download Resume</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?//php endif; ?>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<?//php if ($_SESSION['user_role'] == 'Admin') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/certifications" class="menu-link">
																				<span class="menu-title">Manage Certificates</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?//php endif; ?>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<?//php if ($_SESSION['user_role'] == 'Admin') : ?>
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="<?php echo URLROOT; ?>/experiences" class="menu-link">
																				<span class="menu-title">Manage Experiences</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<?//php endif; ?>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<?//php endif; ?>
									<?php endif; ?>
									<!--end:Menu item FOR RESUME-->
									

									
								</div>
								<!--end::Menu-->


							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								

								
								<!--begin::User menu-->
								<div class="app-navbar-item" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<img src="<?php echo URLROOT . "/public/" . $_SESSION['user_image']; ?> "class="rounded-3" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="<?php echo URLROOT . "/public/" . $_SESSION['user_image']; ?>" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5"><?php echo $_SESSION['username']; ?></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?php echo $_SESSION['email']; ?></a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<?php if ($_SESSION['user_role'] == "Student"): ?>
										<div class="menu-item px-5">
											<a href="<?php echo URLROOT; ?>/pages/edit_profile" class="menu-link px-5">My Profile</a>
										</div>
										<div class="menu-item px-5">
											<a href="<?php echo URLROOT; ?>/events/my_event" class="menu-link px-5">My Event</a>
										</div>
										<?php endif; ?>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<?php if ($_SESSION['user_role'] == "Partner"): ?>
										<div class="menu-item px-5">
											<a href="<?php echo URLROOT; ?>/pages/edit_client" class="menu-link px-5">My Profile</a>
										</div>
										<?php endif; ?>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<?php if ($_SESSION['user_role'] == "Admin"): ?>
										<div class="menu-item px-5">
											<a href="<?php echo URLROOT; ?>/users/view_all_user" class="menu-link px-5">View All Users</a>
										</div>
										<?php endif; ?>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										
										
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="<?php echo URLROOT; ?>/users/logout" class="menu-link px-5">Sign Out</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->