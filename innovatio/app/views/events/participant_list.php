<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">View Participant</h3>
   
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/events" class="btn btn-light-primary">View All Event</a>
            <?php endif; ?>
        </div>
    </div>                 

    <div class="card-body">
       

        <div class="table-responsive">
            <table id="kt_datatable_posts" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Current Status</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Course</th>
                        <th>Institution</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['registers'] as $register): ?>
                        <?php 
                        $profileID = $register->profile_id;
                        $studentData = $this->eventModel->findStudentByProfileId($profileID);
                        ?>
                        <!-- Use $studentData as needed -->
                        <tr>
                            <td><?php echo $studentData->name; ?></td>
                            <td><?php echo $studentData->phoneNum;?></td>
                            <td><?php echo $register->presentStatus;?></td>
                            <td><?php echo $studentData->email; ?></td>
                            <td><?php echo $studentData->DOB; ?></td>
                            <td><?php echo $studentData->course; ?></td>
                            <td><?php echo $register->institution; ?></td>
                            <td>
                                <a href="<?php echo URLROOT . "/events/view_more/". $register->event_id . "/" .$profileID?>" class="btn btn-sm btn-light btn-active-light-primary">View</a>
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