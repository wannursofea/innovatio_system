<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Manage Certifications</h3>
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/certifications/create" class="btn btn-light-primary">Add Cerificate</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="kt_datatable_certifications" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>Certification Name </th>
                        <th>Valid until</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['certifications'] as $post): ?>
                    <tr>
                        <td><?php echo $post->certName; ?></td>
                        <td><?php echo date('F j', strtotime($post->validity)); ?></td>
                        
                        <td class="text-end">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-duotone ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-100px py-4" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="<?php echo URLROOT . "/certifications/update/" . $post->certification_id ?>" class="menu-link btn btn-sm btn-light btn-primary text-white px-3">Edit</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <form action="<?php echo URLROOT . "/certifications/delete/" . $post->certification_id ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                        <!-- Your delete button or link -->
                        <button style="width: 82px; height: 32.3px;" type="submit" class="menu-link btn btn-sm btn-light btn-danger text-white px-3" data-kt-customer-table-filter="delete_row">Delete</button>
                    </form>
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
            var table = $('#kt_datatable_certifications').DataTable({

            });
        });
        </script>

    </div>
    <div class="card-footer">
        Footer
    </div>
</div>