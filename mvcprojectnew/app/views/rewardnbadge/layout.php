	<!--begin::Content-->
    <div id="kt_app_content" class="app-content pt-10">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
					                <!--start content -->

 

									<?php 
                                        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                                            $url = "https://";
                                        else
                                            $url = "http://";

                                        $url .= $_SERVER['HTTP_HOST'];

                                        $url .= $_SERVER['REQUEST_URI'];
                                    ?>
                                    
                                    <?php //rule
                                    

                                        $rb_url = URLROOT. "/rewardsnbadges"; // based on the name of file in controller
                                        if($url == $rb_url){
                                            require 'manage.php';
                                        }
                                    ?>
 



       

                                    <!-- end content -->

									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->


                        <?php require APPROOT . '/views/includes/footer_app.php';?>




					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->






        

