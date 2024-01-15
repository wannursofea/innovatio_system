
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../../" />
		<title>Youth Venture Database Management System - Reset Password</title>
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
		<link rel="shortcut icon" href="<?php echo URLROOT ?>/public/assets/media/YVlogo.jpeg" />
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
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Password reset -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				
				
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
								<span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">Already registered?</span>
								<a href="<?php echo URLROOT; ?>/users/login" class="link-primary fw-bold fs-5" data-kt-translate="password-reset-head-link">Sign In</a>
							</div>
							<!--end::Sign Up link=-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="reset_password" data-kt-redirect-url="authentication/layouts/fancy/new-password.html" method="POST" action="<?php echo URLROOT; ?>/users/reset_password">
								<!--begin::Heading-->
								<div class="text-start mb-10">
									<!--begin::Title-->
									<h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="password-reset-title">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Text-->
									<div class="text-gray-500 fw-semibold fs-6" data-kt-translate="password-reset-desc">Enter your email to reset your password.</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email" />
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack">
									<!--begin::Link-->
									<div class="m-0">
										<button type="submit" class="btn btn-primary me-2" data-kt-translate="password-reset-submit">
											Submit
										</button>
										<a href="<?php echo URLROOT; ?>/users/login" class="btn btn-lg btn-light-primary fw-bold" data-kt-translate="password-reset-cancel">Cancel</a>
									</div>
									<!--end::Link-->
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
				<div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(<?php echo URLROOT ?>/public/assets/media/YVreset.png)"></div>
				<!--begin::Body-->
			</div>
			<!--end::Authentication - Password reset-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo URLROOT ?>/public/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo URLROOT ?>/public/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo URLROOT ?>/public/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo URLROOT ?>/public/assets/js/custom/authentication/reset-password/reset-password.js"></script>
		<script src="<?php echo URLROOT ?>/public/assets/js/custom/authentication/sign-in/i18n.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>