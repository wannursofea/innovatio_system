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
										
										if ($_SESSION['user_role'] == 'Student'){ 
											$sb_url = URLROOT . '/dashboard/student';
											}
										else if ($_SESSION['user_role'] == 'Administrator'){ 
											$ab_url = URLROOT . '/dashboard/administrator';
										}
										else if ($_SESSION['user_role'] == 'Client'){ 
											$cb_url = URLROOT . '/dashboard/client';
										}else{
											$eb_url = URLROOT . '/error';
										}
										
											
                                        if($url == $sb_url){
                                            require 'student.php';
										}
										else if ($url == $ab_url){
											require 'admin.php';
										}
										else if ($url == $ab_url){
											require 'client.php';
										}else{
											die("not exist.");
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






        

