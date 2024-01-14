<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-toolbar">
            
            <a href="<?php echo URLROOT;?>/events" class="btn btn-light-primary">View Event</a>
            
        </div>
    </div>
    <div class="card-body">

        <form action="<?php echo URLROOT; ?>/events/edit_event/<?php echo $data['event']->event_id?>" method="POST" enctype="multipart/form-data">
            <!--begin::Settings-->
           
            <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                        <!--begin::Title-->
                        <h1 class="fw-bold text-gray-900">Edit Event</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-3">
                            <span>Upload Event Photo/Poster/Logo</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Image input wrapper-->
                        <div class="mt-1">
                            <!--begin::Image placeholder-->
                            <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                            <!--end::Image placeholder-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url('')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-300px h-300px" style="background-image: url('<?php echo URLROOT ."/public/". $data['event']->filepath; ?>')"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Edit-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image_event" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="image_event_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Image input wrapper-->
                    </div>
                    <!--end::Input group-->



                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Collaborators</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Mention any collaborators of the event">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                    

                        <!--begin::Checkboxes-->
                        <div id="checkboxGroup" title="Please select at least one, either no collaborator or with collaborator(s)">
                            <?php if(isset($errorMessage)): ?>
                                <div>
                                    <?php echo $errorMessage; ?>
                                </div>
                            <?php endif; ?>
                            <?php
                            $partnerclients = $this->eventModel->manageCollaborator();
                            $dataC = [
                                'partnerclients' => $partnerclients
                            ];

                            $noCollaboratorsChecked = empty($data['selected_clients']) ? 'checked' : '';
                            ?>
                            <!-- Checkbox for "No collaborator" -->
                            <div class="form-check form-check-custom form-check-solid mb-3">
                                <input class="form-check-input h-20px w-20px" type="checkbox" id="noCollaborator" value="0" name="noCollaborator" <?php echo $noCollaboratorsChecked; ?>/>
                                <label class="form-check-label fw-bold text-dark ms-2" for="noCollaborator">No collaborator</label>
                            </div>
                            
                            

                            <!-- Loop for individual collaborators -->
                            <?php foreach ($dataC['partnerclients'] as $partnerclient): ?>
                                <div class="form-check form-check-custom form-check-solid mb-3">
                                <?php
                                // Check if the current collaborator is selected for this event
                                $isChecked = in_array($partnerclient->client_id, $data['selected_clients']);
                                ?>
                                <input class="form-check-input h-20px w-20px" type="checkbox" id="<?php echo 'client_id' . $partnerclient->client_id; ?>" value="<?php echo $partnerclient->client_id; ?>" name="selectedClients[]" <?php echo $isChecked ? 'checked' : ''; ?> />
                                <label class="form-check-label fw-bold text-dark ms-2" for="<?php echo 'client_id' . $partnerclient->client_id; ?>"><?php echo $partnerclient->companyName; ?></label>
                                
                                    
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                                                


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Event Name</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify event name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Event Name" value="<?php echo $data['event']->eventName ?>"  name="eventName" required title="Please enter the event name"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Category</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the category of the event">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        
                        <?php
                        // Assuming $selectedCategory contains the category retrieved from the database
                        $selectedCategory = isset($data['event']) ? $data['event']->category : '';
                        ?>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="category" required title="Please specify the category of the event">
                            <option></option>
                            <option value="Program/Activities" <?php echo ($selectedCategory === 'Program/Activities') ? 'selected' : ''; ?>>Program/Activities</option>
                            <option value="Competition/Scholarship" <?php echo ($selectedCategory === 'Competition/Scholarship') ? 'selected' : ''; ?>>Competition/Scholarship</option>
                            <option value="Bootcamp/Workshop" <?php echo ($selectedCategory === 'Bootcamp/Workshop') ? 'selected' : ''; ?>>Bootcamp/Workshop</option>
                            <option value="Part Time" <?php echo ($selectedCategory === 'Part Time') ? 'selected' : ''; ?>>Part Time</option>
                            <option value="Volunteering" <?php echo ($selectedCategory === 'Volunteering') ? 'selected' : ''; ?>>Volunteering</option>
                            <option value="Internship" <?php echo ($selectedCategory === 'Internship') ? 'selected' : ''; ?>>Internship</option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Venue</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="e.g. Cyberjaya, Selangor, Online" value="<?php echo $data['event']->venue ?>" name="venue" required title="Please enter the event venue"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Date</label>
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
                            <input class="form-control form-control-solid ps-12" type = date value="<?php echo $data['event']->date; ?>" placeholder="Pick date" name="date" required title="Please enter the event date"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Time</label>
                        <!--end::Label-->
                        <!--begin::Wrapper-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <i class="far fa-clock fs-2 position-absolute mx-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid ps-12" type = time placeholder="Pick time" name="time" value="<?php echo $data['event']->time; ?>" required title="Please enter the time"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Event Description</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Briefly describe the event">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid" rows="3" placeholder="e.g. Experience share market at your fingertips with TICK PRO stock investment mobile trading app" name="eventDescription" required title="Please enter the event description"><?php echo $data['event']->eventDescription ?></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label for="website" class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Feedback Form Link</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Paste the link of feedback form here">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="url" value="<?php echo $data['event']->feedback; ?>" id="website" name="feedback" class="form-control form-control-solid" placeholder="Paste the link of feedback form here" required title="Please paste the link of feedback form here"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <button type="submit" id="submitButton" class="btn btn-lg btn-primary font-weight-bold">Submit</button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Settings-->
        </form>
        

    </div>
    
</div>


