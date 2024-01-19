<?php 

class Experiences extends Controller
{
    public function __construct()
    {
        $this->experienceModel = $this->model('Experience');
    }

    public function index()
    {
        $experiences = $this->experienceModel->findAllExperiences(($_SESSION['email']));
        $data = 
        [
            'experiences' => $experiences
        ];
        $this->view('experiences/index', $data);
    }

    public function create()
    {
        if (!isLoggedIn()){
            header("Location: " . URLROOT. "/experiences" );
        }

        $student = $this->experienceModel->studentProfile();
    
    // Initialize profile_id to a default value
    $profile_id = '';

    if (count($student) > 0) {
        $student = $student[0];
        $profile_id = $student->profile_id;
    }


        $data = 
        [
            'profile_id' => $profile_id,
            'jobtitle' => '',
            'company' => '',
            'from_date'=> ' ',
            'to_date'=> ' '
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'email' => $_SESSION['email'],
            'user_id' => $_SESSION['user_id'],
            'jobtitle' => trim($_POST['jobtitle']),
            'company' => trim($_POST['company']),
            'from_date' => trim($_POST['from_date']),
            'to_date' => trim($_POST['to_date']),
            'profile_id' => $profile_id

            ];


            if ($data['jobtitle'] && $data['company'] && $data['from_date']&& $data['to_date']){
                if ($this->experienceModel->addExperience($data)){
                    header("Location: " . URLROOT. "/experiences" );
                }
                else
                {
                    die("Something went wrong :(");
                }
            }
            else
            {
                $this->view('experiences/index', $data);
            }
        }

        $this->view('experiences/index', $data);
    }

    public function update($experience_id)
    {
        $experience = $this->experienceModel->findExperienceById($experience_id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/experiences");
        }
        elseif($experience->email != $_SESSION['email'])
        {
            header("Location: " . URLROOT . "/experiences");

        }

        $data = 
        [
            'experiences' => $experience,
            'jobtitle' => '',
            'company' => '',
            'from_date' => '',
            'to_date' => '',
            'jobtitleError' => '',
            'companyError' => '',
            'from_dateError' => '',
            'to_dateError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'experience_id' => $experience_id,
            'experiences' => $experience,
            'email' => $_SESSION['email'],
            'jobtitle' => trim($_POST['jobtitle']),
            'company' => trim($_POST['company']),
            'from_date' => trim($_POST['from_date']),
            'to_date' => trim($_POST['to_date']),
            'jobtitleError' => '',
            'companyError' => '',
            'from_dateError' => '',
            'to_dateError' => ''
            ];

            if(empty($data['jobtitle'])){
                $data['jobtitle'] = 'The name of a jobtitle cannot be empty';
            }

            if(empty($data['company'])){
                $data['companyError'] = 'The company name cannot be empty';
            }


            if(empty($data['from_date'])){
                $data['from_dateError'] = 'The from date cannot be empty';
            }

            if(empty($data['to_date'])){
                $data['to_dateError'] = 'The to date cannot be empty';
            }

            if($data['jobtitle'] == $this->experienceModel->findExperienceById($experience_id)->jobtitle)
            {
                $data['jobtitleError'] = "At least change the jobtitle!";
            }

            if($data['company'] == $this->experienceModel->findExperienceById($experience_id)->company)
            {
                $data['companyError'] = "At least change the company!";
            }


            if($data['from_date'] == $this->experienceModel->findExperienceById($experience_id)->from_date)
            {
                $data['fromError'] = "At least change the from date!";
            }

            if($data['to_date'] == $this->experienceModel->findExperienceById($experience_id)->to_date)
            {
                $data['toError'] = "At least change the to date!";
            }



            if (empty($data['jobtitleError'] && $data['companyError'] &&  $data['from_dateError']&& $data['to_dateError'])){
                if ($this->experienceModel->updateExperience($data)){
                    header("Location: " . URLROOT. "/experiences" );
                }
                else
                {
                    die("Something went wrong :(");
                }
            }
            else
            {
                $this->view('experiences/index', $data);
            }
        }

        $this->view('experiences/index', $data);
    }

    public function delete($experience_id)
    {
        $experiences= $this->experienceModel->findExperienceById($experience_id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/experiences");
        }
        elseif($experiences->email != $_SESSION['email'])
        {
            header("Location: " . URLROOT . "/experiences");

        }

        $data = 
        [
            'experiences' => $experiences,
            'jobtitle' => '',
            'company' => '',
            'from_date'=> ' ',
            'to_date'=> ' ',
            'jobtitleError' => '',
            'companyError' => '',
            'from_dateError' => '',
            'to_dateError' => ''
        ];

        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        }

        if($this->experienceModel->deleteExperience($experience_id)){
            header("Location: " . URLROOT . "/experiences");
        }
        else
        {
            die('Something went wrong..');
        }
        
    }


}

?>