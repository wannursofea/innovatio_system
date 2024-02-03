<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">View My Event</h3>
   
        <div class="card-toolbar">
            
        </div>
    </div>                 

    <div class="card-body">
       

        <div class="table-responsive">
            <table id="kt_datatable_posts" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>No </th>
                        <th>Event</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Venue</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1;
                        foreach($data['registers'] as $register): 
                        $eventDetails = $this->eventModel->findEventById($register->event_id);
                        if ($eventDetails):
                    ?>

                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $eventDetails->eventName; ?></td>
                        <td><?php echo $eventDetails->category; ?></td>
                        <td>
                            <?php echo $eventDetails->date; ?>
                            <!-- <php echo date('F j h:m', strtotime($register->created_at)); ?> -->
                        </td>
                        
                        <td><?php echo $eventDetails->venue; ?></td>
                        <td><?php echo $eventDetails->eventDescription; ?></td>
                        <td >
                           
                    
                            
                                    <a href="<?php echo URLROOT . "/events/view_event/". $eventDetails->event_id?>" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                
                        </td>
                        <?php
                        $counter++; // Increment the counter for the next row
                        endif; // End of if statement
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