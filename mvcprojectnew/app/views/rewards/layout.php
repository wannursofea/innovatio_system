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
                                        $mb_url = URLROOT. "/rewards/manage";
										$bb_url = URLROOT . "/rewards/badge"; 
										$cb_url = URLROOT . "/rewards/create"; 
										
										if (isset($data['badge']) && is_object($data['badge'])){
											$ub_url = URLROOT . "/rewards/update".$data['badge']->badge_id; 
										}

                                        if($url == $mb_url){
                                            require 'manage.php';
                                        } else if($url == $bb_url){
											require 's_badge.php';
										}else if($url == $cb_url){
											require 'create.php';
										}else if($url == $ub_url){
											require 'update.php';
										}else{

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






        

