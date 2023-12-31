<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Manage Reward & Badge</h3>
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/rewardnbadge/create" class="btn btn-light-primary">Create</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">

    <div class="table-responsive">
            <table id="kt_datatable_posts" class="table table-row-bordered gy-5"> <!-- relate to line 37-->
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>Badge</th>
                        <th>Desription</th>
                        <th>Date</th><!-- Not sure -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['badge'] as $badge): ?><!-- panggil balik data dari table -->
                    <tr> <!-- $badge->NAMA ATTRIBUTES -->
                        <td><?php echo $badge->badgeName; ?></td>
                        <td><?php echo $badge->description; ?></td>
                        <td><?php echo date('F j, Y', strtotime($badge->dateAwarded)); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <script>
        $(document).ready(function() { // relate to line 13
            var table = $('#kt_datatable_posts').DataTable({

            });
        });
        </script>

    </div>
    <div class="card-footer">
        Footer
    </div>
</div>