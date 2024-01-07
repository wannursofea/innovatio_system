<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Profile Details</h3>
        <div class="card-toolbar">
      
        </div>
    </div>
    <div class="card-body">

                <?php
                    foreach ($data['studentProfile'] as $studentProfile) :
                                    ?>
                                    <?php endforeach; ?>
                                  
                                    <form action="<?php echo URLROOT; ?>/pages/edit_profile" method="POST" class="form" enctype="multipart/form-data" id="kt_account_profile_details_form">
    <div class="card-body border-top p-9">
        <!-- Avatar Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
            <div class="col-lg-8">
                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?php echo URLROOT."/public/".$studentProfile->st_image; ?>')">
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('<?php echo URLROOT."/public/".$studentProfile->st_image; ?>')"></div>
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="ki-duotone ki-pencil fs-7"></i>
                        <input type="file" name="file" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="profile_avatar_remove" />
                    </label>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="ki-duotone ki-cross fs-2"></i>
                    </span>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="ki-duotone ki-cross fs-2"></i>
                    </span>
                </div>
                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
            </div>
        </div>

        <!-- Full Name Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
            <div class="col-lg-8">
                <input class="form-control form-control-lg form-control-solid" name="st_fullname" type="text" required value="<?php echo $studentProfile->st_fullname; ?>" />
            </div>
        </div>

        <!-- IC Number Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">IC Number</label>
            <div class="col-lg-8">
                <input class="form-control form-control-lg form-control-solid" name="st_ic" type="text" required value="<?php echo $studentProfile->st_ic; ?>" />
            </div>
        </div>

        <!-- Email Address Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email Address</label>
            <div class="col-lg-8">
                <input class="form-control form-control-lg form-control-solid" name="st_email" type="text" readonly value="<?php echo $studentProfile->st_email; ?>" />
            </div>
        </div>

        <!-- Gender Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Gender</label>
            <div class="col-lg-8">
                <select class="form-select form-select-solid form-select-lg" name="st_gender">
                    <option value="<?php echo $studentProfile->st_gender ?>"><?php echo $studentProfile->st_gender ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <!-- Race Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Race</label>
            <div class="col-lg-8">
                <select class="form-select form-select-solid form-select-lg" name="st_race">
                    <option value="<?php echo $studentProfile->st_race ?>"><?php echo $studentProfile->st_race ?></option>
                    <option value="Malay">Malay</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Indian">Indian</option>
                    <option value="Others">Others</option>
                    <!-- Additional options here -->
                </select>
                
            </div>
        </div>

        <!-- Institution of Higher Learning Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institution of Higher Learning</label>
            <div class="col-lg-8">
                <select class="form-select form-select-solid form-select-lg" name="univ_code">
                    <option value="UTM">UTM</option>
                    <option value="UKM">UKM</option>
                    <option value="UM">UM</option>
                    <option value="USM">USM</option>
                    <option value="UPM">UPM</option>
                    <option value="UiTM">UiTM</option>
                    <option value="UMS">UMS</option>
                    <option value="UMT">UMT</option>
                    <option value="UPSI">UPSI</option>
                    <option value="UPNM">UPNM</option>
                    <option value="UUM">UUM</option>
                    <option value="UNIMAS">UNIMAS</option>
                    <option value="UniSZA">UniSZA</option>
                    <option value="UniMAP">UniMAP</option>
                    <option value="USIM">USIM</option>
                    <option value="UTHM">UTHM</option>
                    <option value="UIAM">UIAM</option>
                    <option value="UMK">UMK</option>
                    <option value="UMP">UMP</option>
                    <option value="Others">Others</option>
                    <!-- Additional options here -->
                </select>
            </div>
        </div>

        <!-- Address Section -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>
            <div class="col-lg-8">
                <textarea class="form-control form-control-solid" name="st_address" rows="3" required><?php echo $studentProfile->st_address ?></textarea>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <input type="hidden" id="update_student" name="update_student" value="update_student">
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>


    </div>
    <div class="card-footer">
        Youth Venture
    </div>
</div>
