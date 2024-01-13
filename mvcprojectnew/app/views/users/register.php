<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../../" />
		<title>Youth Venture Database Management - Sign Up</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?php echo URLROOT ?>/public/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo URLROOT ?>/public/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo URLROOT ?>/public/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		
		<!--end::Theme mode setup on page load-->		
        <!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Logo-->
				<a href="index.html" class="d-block d-lg-none mx-auto py-20">
					<img alt="Logo" src="<?php echo URLROOT ?>/public/assets/media/logos/default.svg" class="theme-light-show h-25px" />
					<img alt="Logo" src="<?php echo URLROOT ?>/public/assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
				</a>
				<!--end::Logo-->
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
					<!--begin::Wrapper-->
					<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
						<!--begin::Header-->
						<div class="d-flex flex-stack py-2">
							<!--begin::Back link-->
							<div class="me-2">
								<a href="<?php echo URLROOT; ?>/users/login" class="btn btn-icon bg-light rounded-circle">
									<i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
								</a>
							</div>
							<!--end::Back link-->
							<!--begin::Sign Up link-->
							<div class="m-0">
								<span class="text-gray-500 fw-bold fs-5 me-2" >Already registered ?</span>
								<a href="<?php echo URLROOT; ?>/users/login" class="link-primary fw-bold fs-5">Sign In</a>
							</div>
							<!--end::Sign Up link=-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
							<form class="form w-100" id="register_form" method="POST" action="<?php echo URLROOT; ?>/users/register">
								<!--begin::Heading-->
								<div class="text-start mb-10">
									<!--begin::Title-->
									<h1 class="text-gray-900 mb-3 fs-3x">Create an Account</h1>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
                                

                                 <!--begin::Input group-->
								<div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Select Role</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Please select your role">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select name="user_role" data-control="select2" data-hide-search="true" data-placeholder="Select" class="form-select form-select-solid">
                                        <option></option>
                                        <option value="Student">Student</option>
                                        <option value="Partner">Partner/Client</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
								<!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Username" name="username" required title="Please fill in username" />
                                    <span class="invalidFeedback">
                                        <?php echo $data['usernameError']?>
                                    </span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" required title="Please fill in email"/>
                                    <span class="invalidFeedback">
                                        <?php echo $data['emailError']?>
                                    </span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10" >
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" required title="Please fill in password"/>
                                            <!-- <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                <i class="ki-duotone ki-eye-slash fs-2"></i>
                                                <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                            </span> -->
                                            <span class="invalidFeedback"><?php echo $data['passwordError']; ?></span>
                                        </div>
                                        <!--end::Input wrapper-->
                    
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="text-muted" >Use 8 or more characters with a mix of letters & numbers.</div>
                    
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="confirmPassword" required title="Please fill in password again for confirmation" />
                                    <span class="invalidFeedback" ><?php echo $data['confirmPasswordError']; ?></span>
                                </div>
                                <!--end::Input group-->
                               
                                


                                <div id="studentFields" style="display: none;">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Full Name" name="name" />
                                        <span class="invalidFeedback">
                                            <?php echo $data['nameError']?>
                                        </span>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            
                                            <!--begin::Select-->
                                            <select name="gender" data-control="select2" data-hide-search="true" data-placeholder="Gender" class="form-select form-select-lg form-select-solid w-150px me-5" >
                                                <option></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            
                                            <!--begin::Select-->
                                            <select name="race" data-control="select2" data-hide-search="true" data-placeholder="Race  " class="form-select form-select-lg form-select-solid w-150px me-5" >
                                                <option></option>
                                                <option value="Malay">Malay</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Contact Number: e.g. 012-12345678" name="phoneNum" />
                                        <span class="invalidFeedback">
                                            <?php echo $data['phoneNumError']?>
                                        </span>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Date of Birth</span>
                                        </label>
                                        <!--end::Label-->
                                        <input class="form-control form-control-lg form-control-solid" type="date" placeholder="Date of Birth" name="DOB" />
                                        <span class="invalidFeedback">
                                            <?php echo $data['DOBError']?>
                                        </span>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Course" name="course" />
                                        <span class="invalidFeedback">
                                            <?php echo $data['courseError']?>
                                        </span>
                                    </div>
                                    <!--end::Input group-->
                                        
                                    
                                </div>
                                <!-- end::student area -->
                                <div id="clientFields" style="display: none;">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Company Name" name="companyName" />
                                        <span class="invalidFeedback">
                                            <?php echo $data['companynameError']?>
                                        </span>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Office Number" name="officeNum" />
                                        <span class="invalidFeedback">
                                            <?php echo $data['officeNumError']?>
                                        </span>
                                    </div>
                                    <!--end::Input group-->
                                    
                                    
                                </div>

                                <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Submit-->
                                        <button type="submit" class="btn btn-primary" data-kt-translate="signup-submit">Submit</button>
                                        <!--end::Submit-->
                                
                                    </div>
                                    <!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="m-0">
							
							
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-none d-lg-flex flex-lg-row-fluid w-50" style="background-image: url(<?php echo URLROOT ?>/public/assets/media/YVregister.png); background-size: 100%;"></div>
				<!--begin::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->
        <!--begin::Javascript-->
		<script>var hostUrl = "<?php echo URLROOT ?>/public/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo URLROOT ?>/public/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo URLROOT ?>/public/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo URLROOT ?>/public/assets/js/custom/authentication/sign-up/general.js"></script>
		<script src="<?php echo URLROOT ?>/public/assets/js/custom/authentication/sign-in/i18n.js"></script>
		<!--end::Custom Javascript-->
        
        <script>
            $(document).ready(function() {
                // Event listener for the dropdown change
                $('select[name="user_role"]').change(function() {
                    // Hide all additional fields
                    $('#studentFields, #clientFields').hide();

                    // Get the selected value
                    var selectedValue = $(this).val();

                    // Show the corresponding additional fields based on the selected value
                    if (selectedValue == 'Student') {
                        $('#studentFields').show();
                        $('#clientFields').hide();  // Make sure to hide the other fields
                    } else if (selectedValue == 'Partner') {
                        $('#clientFields').show();
                        $('#studentFields').hide();  // Make sure to hide the other fields
                    }
                });
            });
        </script>

		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>


