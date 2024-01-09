<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">View Event</h3>
   
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/events/mainpage_event" class="btn btn-light-primary">Dashboard Event</a>
            <?php endif; ?>
        </div>
    </div>                 

    <div class="card-body">
       

        <div class="table-responsive">
            <table id="kt_datatable_posts" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>No </th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Venue</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['events'] as $event): ?>
                    <tr>
                        <td><?php echo $event->event_id; ?></td>
                        <td><?php echo $event->eventName; ?></td>
                        <td><?php echo $event->category; ?></td>
                        <td>
                            <?php echo $event->date; ?>
                            <!-- <php echo date('F j h:m', strtotime($event->created_at)); ?> -->
                        </td>
                        <td><?php echo $event->time; ?></td>
                        <td><?php echo $event->venue; ?></td>
                        <td><?php echo $event->eventDescription; ?></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-100px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?php echo URLROOT . "/events/register_event/".$event->event_id?>" class="menu-link btn btn-sm btn-light btn-info text-white px-3">Register</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?php echo $event->feedback;?>" class="menu-link btn btn-sm btn-light btn-warning text-white px-3">Feedback</a>
                                </div>
                                <!--end::Menu item-->
                                
                            </div>
                            <!--end::Menu-->
                        </td>
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