
	<!--begin::Content-->
							<div id="kt_app_content" class="app-content pt-10">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
					                <!--start content -->
									
                                    <?php
                                    if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS'] === 'on')
                                        $url = "https://";
                                    else
                                        $url = "http://";
                                    
                                        $url .= $_SERVER['HTTP_HOST'];

                                        $url .= $_SERVER['REQUEST_URI'];
										

                                    ?>
                                     
                                    <?php
                                    $v_url = URLROOT . "/events";
									$c_url = URLROOT . "/events/create";
									$m_url = URLROOT . "/events/mainpage_event";
									$ve_url = URLROOT . "/events/view_event";
									$m_regis_url = URLROOT . "/events/manage_registrationlist";
									$edit_url = '';
									$r_url = '';

									if(isset($data['event'])&& is_object($data['event'])){
										$edit_url = URLROOT . "/events/edit_event/". $data['event']->event_id;
										$r_url = URLROOT . "/events/register_event/". $data['event']->event_id;
									}

									// if(isset($data['event'])&& is_object($data['event'])){
									// 	$edit_url = URLROOT . "/events/edit_event/". $data['event']->event_id;
									// }

                                    if($url == $v_url){
										
                                        require 'manage_eventlist.php';
                                    }

									else if($url == $c_url){

										require 'create.php';
									}

									else if($url == $edit_url){

										require 'edit_event.php';
									}

									else if($url == $m_url){

										require 'mainpage_event.php';
									}

									else if($url == $ve_url){

										require 'view_event.php';
									}

									else if($url == $m_regis_url){

										require 'manage_registrationlist.php';
									}

									else if($url == $r_url){
									
										require 'register_event.php';
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






        

