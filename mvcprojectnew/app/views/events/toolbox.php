                            <!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar w-100">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-column">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack my-10 my-lg-14">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center me-3">
											<!--begin::Title-->
											<h1 class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">Event</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-700">
													<a href="index.html" class="text-gray-700 text-hover-primary">Home</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="">
														<i class="ki-duotone ki-right fs-6 text-gray-700"></i>
													</span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-700">Event</li>
												<!--end::Item-->
                                                <!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="">
														<i class="ki-duotone ki-right fs-6 text-gray-700"></i>
													</span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-700">
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
                                                        $r_url = URLROOT . "/events/register_event";
                                                        if($url == $v_url){
                                                            
                                                            echo "View Event";
                                                        }

                                                        else if($url == $c_url){

                                                            echo "Create Event";
                                                            
                                                        }

                                                        else if($url == $r_url){

                                                            echo "Register Event";

                                                        }
                                                        ?>
                                                
                                                </li>
												<!--end::Item-->
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->



                                        <?php require APPROOT . '/views/includes/action.php';?>

									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->