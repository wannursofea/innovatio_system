<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">View Event</h3>
   
        <div class="card-toolbar">
            <?php if($_SESSION['user_role']=='Admin'):?>
            <a href="<?php echo URLROOT;?>/events/create" class="btn btn-light-primary">Create Event</a>
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
                    <?php $counter = 1;
                        foreach($data['events'] as $event): ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
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
                                    <a href="<?php echo URLROOT . "/events/view_event/". $event->event_id?>" class="menu-link btn btn-sm btn-light btn-info text-white px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?php echo URLROOT . "/events/participant_list/". $event->event_id?>" class="menu-link btn btn-sm btn-light btn-warning text-white px-3">Participant</a>
                                </div>
                                <!--end::Menu item-->
                                <?php if($_SESSION['user_role']=='Admin'):?>
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?php echo URLROOT . "/events/edit_event/".$event->event_id?>" class="menu-link btn btn-sm btn-light btn-primary text-white px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                               
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <form action="<?php echo URLROOT . "/events/delete_event/" . $event->event_id ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        <!-- Your delete button or link -->
                                        <button style="width: 82px; height: 32.3px;" type="submit" class="menu-link btn btn-sm btn-light btn-danger text-white px-3" data-kt-customer-table-filter="delete_row">Delete</button>
                                    </form>
                                   
                                </div>
                                <!--end::Menu item-->
                                 <?php endif; ?>
                            </div>
                            <!--end::Menu-->
                        </td>
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