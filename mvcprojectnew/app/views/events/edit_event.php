<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-toolbar">
            
            <a href="<?php echo URLROOT;?>/events" class="btn btn-light-primary">View Event</a>
            
        </div>
    </div>
    <div class="card-body">

        <form action="<?php echo URLROOT; ?>/events/edit_event/<?php echo $data['event']->event_id?>" method="POST">
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
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="kt_modal_create_project_settings_logo">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
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
                    

                    <button type="submit" id="submitButton" class="btn btn-lg btn-primary font-weight-bold">Submit</button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Settings-->
        </form>
        

    </div>
    
</div>


