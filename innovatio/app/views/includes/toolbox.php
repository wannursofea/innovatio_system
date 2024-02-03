<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar w-100">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-column">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack my-10 my-lg-14">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center me-3">
                <!--begin::Title-->

				<?php 
					if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
						$url = "https://";
					else
						$url = "http://";

					$url .= $_SERVER['HTTP_HOST'];

					$url .= $_SERVER['REQUEST_URI'];
				?>

				<?php //rule		

					//REWARDS 
					$ab_url = URLROOT. "/rewards/manage";
					$bb_url = URLROOT . "/rewards/badge"; 
					$cb_url = URLROOT . "/rewards/create";
					$db_url = ''; 
					$eb_url = '';

					if (isset($data['student']) && is_object($data['student'])){ 
						$db_url = URLROOT . "/rewards/join/". $data['student']->user_id; 
						}
	
					if (isset($data['badge']) && is_object($data['badge'])){ 
					$eb_url = URLROOT . "/rewards/update/". $data['badge']->badge_id; 
					}

					//EVENTS
					$fe_url = URLROOT . "/events";
					$ge_url = URLROOT . "/events/create";
					$he_url = URLROOT . "/events/mainpage_event";
					$ie_url = URLROOT . "/events/manage_registrationlist";
					$ze_url = URLROOT . "/events/my_event";
					$je_url = '';
					$ke_url = '';
					$le_url = '';
					$me_url = '';
					$ne_url = '';
					
					if(isset($data['event'])&& is_object($data['event'])){
						$je_url = URLROOT . "/events/edit_event/". $data['event']->event_id;
						$le_url = URLROOT . "/events/register_event/". $data['event']->event_id;
						$me_url =  URLROOT . "/events/participant_list/". $data['event']->event_id;
						$ke_url = URLROOT . "/events/view_event/" . $data['event']->event_id;
						
					}
					if(isset($data['event'])&& is_object($data['event'])&& $data['profile_id'])
					{
						$ne_url =  URLROOT . "/events/view_more/". $data['event']->event_id . "/" . $data['profile_id'];
					}

					//INDEX/MAINPAGE
					$om_url = URLROOT . "/pages/index";

					//RESUME, CERTIFICATION, EXPERIENCES
					$pr_url = URLROOT . "/resumes/edit_resume";
					$qr_url = URLROOT . "/resumes/edit_resumeview";
					$rr_url = URLROOT . "/certifications";
					$sr_url = URLROOT . "/experiences";
					$vr_url = URLROOT . "/experiences/create";
					$ur_url = URLROOT . "/certifications/create";
					$wr_url = '';
					$xr_url = '';
					if(isset($data['experiences'])&& is_object($data['experiences']))
					{
						$wr_url =  URLROOT . "/experiences/update/". $data['experiences']->experience_id;
					}
					if(isset($data['certifications'])&& is_object($data['certifications']))
					{
						$xr_url =  URLROOT . "/certifications/update/". $data['certifications']->certification_id;
					}



					//PROFILE
					$tp_url = URLROOT . "/pages/edit_profile";
					$up_url = URLROOT . "/pages/edit_client";
				?>


                <?php
                $pageTitle = "Online Courses"; // Default title
                if ($url == $ab_url ||  $url == $bb_url ||  $url == $cb_url ||  $url == $db_url ||  $url == $eb_url) {
                    $pageTitle = "Rewards"; 
                } else if ($url == $fe_url ||  $url == $ge_url ||  $url == $he_url ||  $url == $ie_url ||  $url == $je_url ||  $url == $ke_url ||  $url == $le_url ||  $url == $me_url ||  $url == $ne_url ||  $url == $ze_url){
					$pageTitle = "Event"; 
				} else if ($url == $om_url){
					$pageTitle = "Home";
				} else if ($url == $pr_url || $url == $qr_url || $url == $rr_url || $url == $sr_url || $url == $vr_url || $url == $ur_url || $url == $wr_url || $url == $xr_url){
					$pageTitle = "Resume";
				}else if ($url == $tp_url || $up_url){
					$pageTitle = "Profile";
				}
                ?>

                <h1 class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">
                    <?php echo $pageTitle; ?>
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!-- ... Your breadcrumb code ... -->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

            <?php // Other content here ?>

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
