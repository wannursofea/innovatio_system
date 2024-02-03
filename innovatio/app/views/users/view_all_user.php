<?php require APPROOT . '/views/includes/head_metronic.php';?>
<?php require APPROOT . '/views/includes/begin_app.php';?>


	<!--begin::Content-->
	<div id="kt_app_content" class="app-content pt-10">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
					                <!--start content -->
									
                                    <div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">View All Users</h3>
   
        <div class="card-toolbar">
            
        </div>
    </div>                 

    <div class="card-body">
       

        <div class="table-responsive">
            <table id="kt_datatable_posts" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>No </th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User Role</th>
                        <th>Date Joined</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1;
                        foreach($data['users'] as $user): ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->user_role; ?></td>
                        <td><?php echo $user->datetime_register; ?></td>
                        <?php
                        $counter++; // Increment the counter for the next row
                        ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



        <script>
        $(document).ready(function() {
            var table = $('#kt_datatable_posts').DataTable({

            });
        });
        </script>

    </div>
    
</div>
                            
                    



                                   

       

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






        






<?php require APPROOT . '/views/includes/drawer.php';?>
<?php require APPROOT . '/views/includes/footer_metronic.php';?>