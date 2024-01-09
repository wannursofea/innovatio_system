<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/events/manage_registrationlist" class="btn btn-light-primary">View Registration</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">

        <form action="<?php echo URLROOT; ?>/events/register_event/<?php echo $data['event']->event_id?>" method="POST" onsubmit="return validateForm()">
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
                                    <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload your professional photo.</h3>
                                    <span class="fw-semibold fs-4 text-muted">Upload professional profile photo.</span>
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
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['student']->phoneNum) ? $data['student']->phoneNum : ''; ?>" placeholder="e.g. 012-34567890" name="phoneNum" required title="This field is non-editable. Please update it in your profile." readonly>
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
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['student']->email) ? $data['student']->email : ''; ?>" placeholder="e.g. abc@gmail.com" name="email" required title="This field is non-editable. Please update it in your profile." readonly>
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
                            <input class="form-control form-control-solid ps-12" value="<?php echo isset($data['student']->DOB) ? $data['student']->DOB : ''; ?>" type = date placeholder="Pick date" name="DOB" required title="This field is non-editable. Please update it in your profile." readonly/>
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
                            <span class="ms-1" data-bs-toggle="tooltip" title="Briefly describe your dream">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" value="<?php echo isset($data['latest_data_register']->dream) ? $data['latest_data_register']->dream : ''; ?>" class="form-control form-control-solid" placeholder="e.g. I would like to be a successful entrepreneur." name="dream" required title="Please state your dream ">
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
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['latest_data_register']->passion) ? $data['latest_data_register']->passion : ''; ?>"placeholder="e.g. I am passionate about programming." name="passion" required title="Please state your passion">
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
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['latest_data_register']->hiddenTalent) ? $data['latest_data_register']->hiddenTalent : ''; ?>"placeholder="e.g. My hidden talent is that I am good in cooking." name="hiddenTalent" required title="Please state your hidden talent" >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Current Status</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Select your current status">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                         <?php
                        // Assuming $selectedCategory contains the category retrieved from the database
                        $selectedStatus = isset($data['latest_data_register']->presentStatus) ? $data['latest_data_register']->presentStatus : '';
                        ?>
                        <!--begin::Input-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="presentStatus" required title="Please select your current status">
                            <option></option>
                            <option value="Full Time Study" <?php echo ($selectedStatus === 'Full Time Study') ? 'selected' : ''; ?>>Full Time Study</option>
                            <option value="Part Time Study" <?php echo ($selectedStatus === 'Part Time Study') ? 'selected' : ''; ?>>Part Time Study</option>
                            <option value="Full Time Work" <?php echo ($selectedStatus === 'Full Time WOrk') ? 'selected' : ''; ?>>Full Time Work</option>
                            <option value="Part Time Work" <?php echo ($selectedStatus === 'Part Time Work') ? 'selected' : ''; ?>>Part Time Work</option>
                            <option value="Running a Business" <?php echo ($selectedStatus === 'Running a Business') ? 'selected' : ''; ?>>Running a Business</option>
                            <option value="Unemployed" <?php echo ($selectedStatus === 'Unemployed') ? 'selected' : ''; ?>>Unemployed</option>
                            

                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Institution</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="State your current institution">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['latest_data_register']->institution) ? $data['latest_data_register']->institution : ''; ?>"placeholder="e.g. Universiti Teknologi Malaysia." name="institution" required title="Please state your current institution">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Course</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="State your course">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['student']->course) ? $data['student']->course : ''; ?>" placeholder="e.g. Bachelor of Electrical Engineering,Bachelor of Software Engineering." name="course" required title="This field is non-editable. Please update it in your profile. "readonly>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Year of Internship</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="State your intership year">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['latest_data_register']->internshipYear) ? $data['latest_data_register']->internshipYear : ''; ?>"placeholder="e.g. 2026" name="internshipYear" required title="Please state your internship year">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Year of Graduation</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="State your graduation year">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['latest_data_register']->graduationYear) ? $data['latest_data_register']->graduationYear : ''; ?>" placeholder="e.g. 2027" name="graduationYear" required title="Please state your graduation year">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Skills</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the skills that you have">
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
                            <!-- Checkbox for "No collaborator" -->

                            <!-- Loop for each option -->
                            <?php foreach ($data['option_skill'] as $optionSkill): ?>
                                <?php
                                // Check if the current collaborator is selected for this event
                                $isChecked1 = in_array($optionSkill->skill_id, $data['selectedSkill']);
                                ?>
                                <div class="form-check form-check-custom form-check-solid mb-3">
                                <input class="form-check-input h-20px w-20px" type="checkbox" id="<?php echo 'skill_id' . $optionSkill->skill_id; ?>" value="<?php echo $optionSkill->skill_id; ?>" name="selectedSkills[]" <?php echo $isChecked1 ? 'checked' : ''; ?>/>
                                <label class="form-check-label fw-bold text-dark ms-2" for="<?php echo 'skill_id' . $optionSkill->skill_id; ?>"><?php echo $optionSkill->skillName; ?></label>
                                
                                    
                                </div>
                            <?php endforeach; ?>
                            
                            
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Platform(s) that you know to use ?</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Select platform(s) that you know how to use">
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
                            <!-- Checkbox for "No collaborator" -->

                            <!-- Loop for each option -->
                            <?php foreach ($data['option_software_skill'] as $optionSoftSkill): ?>
                                <?php
                                // Check if the current collaborator is selected for this event
                                $isChecked2 = in_array($optionSoftSkill->softwareSkill_id, $data['selectedSoftSkill']);
                                ?>
                                <div class="form-check form-check-custom form-check-solid mb-3">
                                <input class="form-check-input h-20px w-20px" type="checkbox" id="<?php echo 'softwareSkill_id' . $optionSoftSkill->softwareSkill_id; ?>" value="<?php echo $optionSoftSkill->softwareSkill_id; ?>" name="selectedSoftSkills[]" <?php echo $isChecked2 ? 'checked' : ''; ?>/>
                                <label class="form-check-label fw-bold text-dark ms-2" for="<?php echo 'softwareSkill_id' . $optionSoftSkill->softwareSkill_id; ?>"><?php echo $optionSoftSkill->softwareSkillName; ?></label>
                                </div>
                            <?php endforeach; ?>
                            
                            
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">What is your goal in 10 years? </span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Make it specific like GM of Petronas, Public Prosecutor or X amount of money in bank account.">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" value="<?php echo isset($data['latest_data_register']->goal) ? $data['latest_data_register']->goal : ''; ?>" placeholder="e.g. In 10 years, I hope to be an industry leader, guiding teams toward impactful solutions while maintaining a fulfilling personal life." name="goal" required title="Please state your goal" >
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">What will you do to achieve that goal?</span>
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
                        <textarea class="form-control form-control-solid" rows="3" placeholder="e.g. I'll learn, gain experience, build connections, and strike a balance to reach my goal." name="archieveGoal" required title="Please state your way to archieve goal" ><?php echo isset($data['latest_data_register']->archieveGoal) ? $data['latest_data_register']->archieveGoal : ''; ?></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Checkboxes-->
                    <div id="checkboxGroup2" title="Click the checkbox to confirm the registration">
                        <?php if(isset($errorMessage)): ?>
                            <div>
                                <?php echo $errorMessage; ?>
                            </div>
                        <?php endif; ?>
                        <!-- Checkbox -->
                        <div class="form-check form-check-custom form-check-solid mb-3">
                            <input class="form-check-input h-20px w-20px" type="checkbox" id="confirm_message" value="1" name="confirm_message" />
                            <label class="form-check-label fw-bold text-dark ms-2" for="confirm_message">I hereby declare that I agree to join this event and the information given above is true and accurate</label>
                        </div>
                    </div>
                    <!--end::Checkboxes-->

                    <button type="submit" class="btn btn-lg btn-primary font-weight-bold">Submit</button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Settings-->
        </form>
        

    </div>
    
</div>


