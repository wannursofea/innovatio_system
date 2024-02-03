<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Profile Details</h3>
        <div class="card-toolbar">
      
        </div>
    </div>
    <div class="card-body">
                
                <?php foreach ($data['clientProfile'] as $clientProfile) :?>
                <?php endforeach; ?>
                
                                  
<form action="<?php echo URLROOT; ?>/pages/edit_client" method="POST" class="form" enctype="multipart/form-data" id="kt_account_profile_details_form">
    <div class="card-body border-top p-9">
        <!-- Avatar Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
            <div class="col-lg-8">
                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?php echo URLROOT ."/public/".$clientProfile->pr_image; ?>')">
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('<?php echo URLROOT."/public/".$clientProfile->pr_image; ?>')"></div>
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="ki-duotone ki-pencil fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="file" name="file" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="profile_avatar_remove" />
                    </label>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                </div>
                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
            </div>
        </div>

        <!-- Full Name Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company Name</label>
            <div class="col-lg-8">
                <input class="form-control form-control-lg form-control-solid" name="companyName" type="text" required value="<?php echo $clientProfile->companyName; ?>" />
            </div>
        </div>

        <!-- Phone Number Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Office Number (Example:012-3456789)</label>
            <div class="col-lg-8">
                <input class="form-control form-control-lg form-control-solid" name="officeNum" type="text" required value="<?php echo $clientProfile->officeNum; ?>" />
            </div>
        </div>
        
 
        <!-- Email Address Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email Address</label>
            <div class="col-lg-8">
                <input class="form-control form-control-lg form-control-solid" name="email" type="text" readonly value="<?php echo $clientProfile->email; ?>" />
            </div>
        </div>


        <!-- City Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">City</label>
            <div class="col-lg-8">
                <textarea class="form-control form-control-solid" name="city" rows="3" required value><?php echo $clientProfile->city ?></textarea>
            </div>
        </div>

        <!-- Country Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Country</label>
            <div class="col-lg-8">
                <textarea class="form-control form-control-solid" name="country" rows="3" required value><?php echo $clientProfile->country ?></textarea>
            </div>
        </div>

        <!-- Bio Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Description</label>
            <div class="col-lg-8">
                <textarea class="form-control form-control-solid" name="companyDescription" rows="3"><?php echo $clientProfile->companyDescription ?></textarea>
            </div>

        <!-- Submit Button -->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <input type="hidden" id="update_client" name="update_client" value="update_client">
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>


    </div>
    <div class="card-footer">
        Youth Venture
    </div>
</div>
