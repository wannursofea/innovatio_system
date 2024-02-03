<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/events" class="btn btn-light-primary">View Event</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">

        <form action="<?php echo URLROOT; ?>/events/register" method="POST">
            <!--begin::Settings-->
            <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                        <!--begin::Title-->
                        <h1 class="fw-bold text-gray-900">Register Event</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="kt_modal_create_project_settings_logo">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>,
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload picture.</h3>
                                    <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->



                    


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Name</span>
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
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Your Name" >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Contact Number</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Provide Your Contact Number">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. 012-34567890" >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                     <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Email</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Provide Your Email Address">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. abc@gmail.com" >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Date of Birth</label>
                        <!--end::Label-->
                        <!--begin::Wrapper-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid ps-12" type = date placeholder="Pick date" name="date" required title="Please fill date of birth"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">What is your dream ?</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Describe briefly your dream">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. I would like to be a successful entrepreneur." >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->


                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. I would like to be a successful entrepreneur." >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">What is your passion ?</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Briefly describe your passion">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. I am passionate about programming." >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">What is your hidden talent ?</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="State your hidden talent">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. I would like to be a successful entrepreneur." >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->


                    <button type="submit" class="btn btn-lg btn-primary font-weight-bold">Submit</button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Settings-->
        </form>
        

    </div>
    
</div>


