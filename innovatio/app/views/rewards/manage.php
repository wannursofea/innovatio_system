<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Manage Reward & Badge</h3>
        <!-- <div class="card-toolbar">
        </div> -->
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table id="kt_datatable_posts" class="table table-row-bordered gy-5"> 
                <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>Student Name</th>
                        <th>Gold Badge</th>
                        <th>Silver Badge</th>
                        <th>Bronze Badge</th>
                        <th>Rewards</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['badge'] as $badge): ?><!-- panggil balik data dari table -->
                        <tr> <!-- $badge->NAMA ATTRIBUTES -->
                            <td>
                                <?php echo $badge->name; ?>
                            </td>
                            <td>
                                <?php echo $badge->goldBadge; ?>
                            </td>
                            <td>
                                <?php echo $badge->silverBadge; ?>
                            </td>
                            <td>
                                <?php echo $badge->bronzeBadge; ?>
                            </td>
                            <td>
                                <div class="form-check form-check-custom form-check-solid">
                                    <?php
                                    $isChecked = ($badge->claimStatus == 1) ? 'checked' : ''; // Check if claimStatus is 1
                                    $isDisabled = ($badge->claimStatus == 1) ? 'disabled' : ''; // Disable the checkbox if claimStatus is 1
                                    ?>
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                                        name="claimStatus"
                                        onchange="updateBadgeStatus(<?php echo $badge->badge_id; ?>, this.checked)" <?php echo $isChecked; ?>     <?php echo $isDisabled; ?>>
                                    <label class="form-check-label" for="flexCheckDefault"></label>
                                </div>
                            </td>
                            <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!-- begin::Menu -->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-100px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                <a href="<?php echo URLROOT . "/rewards/update/" . $badge->badge_id ?>"
                                    class="menu-link btn btn-sm btn-light btn-warning text-white px-3">Update</a>
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
            $(document).ready(function () { // relate to line 13
                var table = $('#kt_datatable_posts').DataTable({});
            });
        </script>

    </div>
    <div class="card-footer">
        Footer
    </div>
</div>
