<?php
class Resumes extends Controller {


public function __construct()
{
    $this->resumeModel =  $this->model('Resume'); // Ensure that the model name matches the actual class name
}

public function index() {
    $data = [
        'title' => 'Home page'
    ];

    $this->view('index', $data);
}

public function edit_resume(){
    $student = $this->resumeModel->studentProfile();
    
    if(count($student) > 0){
        $student = $student[0];
        $profile_id = $student->profile_id;
        $xskills = $this->resumeModel->findSkillById($profile_id);
        $sSkill = $this->resumeModel->findSoftSkillById($profile_id);
        $certs = $this->resumeModel->findCertificationByProfileId($profile_id);
        $exp = $this->resumeModel->findExperienceByProfileId($profile_id);
        
        $skills = [];
        
        foreach($xskills as $skill){
            $skills[] = $this->resumeModel->findSelectedSkillOptionById($skill->skill_id);
        }

        $softSkills = [];
        foreach($sSkill as $softSkill){
            $softSkills[] = $this->resumeModel->findSelectedSoftSkillOptionById($softSkill->softwareSkill_id);
        }

        $this->view('/resumes/index', [
            "page"          => "edit_resume", 
            "s"             => $student, 
            "skills"        => $skills,
            "softSkills"    => $softSkills,
            "certs"         => $certs,
            "exp"           => $exp
        ]);
    }else{
        
        $this->view('/resumes/index', ["page" => "user_not_found"]);
    }        
}

public function edit_resumeview(){
    $student = $this->resumeModel->studentProfile();
    
    if(count($student) > 0){
        $student = $student[0];
        $profile_id = $student->profile_id;
        $xskills = $this->resumeModel->findSkillById($profile_id);
        $sSkill = $this->resumeModel->findSoftSkillById($profile_id);
        $certs = $this->resumeModel->findCertificationByProfileId($profile_id);
        $exp = $this->resumeModel->findExperienceByProfileId($profile_id);
        
        $skills = [];
        
        foreach($xskills as $skill){
            $skills[] = $this->resumeModel->findSelectedSkillOptionById($skill->skill_id);
        }

        foreach($sSkill as $softSkill){
            $softSkills[] = $this->resumeModel->findSelectedSoftSkillOptionById($softSkill->softwareSkill_id);
        }

        $this->view('/resumes/index1', [
            "page"          => "edit_resumeview", 
            "s"             => $student, 
            "skills"        => $skills,
            "softSkills"    => $softSkills,
            "certs"         => $certs,
            "exp"           => $exp
        ]);
        
    }else{
        
        $this->view('/resumes/index1', ["page" => "user_not_found"]);
    }        
}

}
