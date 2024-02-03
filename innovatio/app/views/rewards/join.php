<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-toolbar">
            
        </div>
    </div>
    <div class="card-body">

        <form action="<?php echo URLROOT; ?>/rewards/join/<?php echo $_SESSION['user_id'];?>" method="POST" onsubmit="return validateForm()">
            <!--begin::Settings-->
            <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                        <!--begin::Title-->
                        <h1 class="fw-bold text-gray-900">Registration Form</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Full Name</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Participant Name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <!-- value=" //htmlspecialchars($date['event']->eventName) ;?>" readonly -->
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['student']->name) ? $data['student']->name : ''; ?>"  placeholder="Enter Your Full Name" name="name" required title="This field is non-editable. Please update it in your profile." readonly>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    
                    <!-- for gold Badge -->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Gold Badge</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Initial Gold Badge">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <!-- value=" //htmlspecialchars($date['event']->eventName) ;?>" readonly -->
                        <input type="text" class="form-control form-control-solid" value="0"  placeholder="Initial value is null" name="goldBadge" required title="This field is non-editable. Please update it in your profile." readonly>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!-- for silver Badge -->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Silver Badge</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Initial Silver Badge">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <!-- value=" //htmlspecialchars($date['event']->eventName) ;?>" readonly -->
                        <input type="text" class="form-control form-control-solid" value="0"  placeholder="Initial value is null" name="silverBadge" required title="This field is non-editable." readonly>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                        <!-- for bronze Badge -->
                        <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Bronze Badge</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Bronze Badge">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <!-- value=" //htmlspecialchars($date['event']->eventName) ;?>" readonly -->
                        <input type="text" class="form-control form-control-solid" value="0"  placeholder="Initial value is null" name="bronzeBadge" required title="This field is non-editable." readonly>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <button type="submit" class="btn btn-lg btn-primary font-weight-bold">Join</button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Settings-->
        </form>
        

    </div>
    
</div>