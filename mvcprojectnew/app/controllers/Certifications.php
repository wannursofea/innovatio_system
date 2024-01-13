<?php 

class Certifications extends Controller
{
    public function __construct()
    {
        $this->certificationModel = $this->model('Certification');
    }

    public function index()
    {
        $certifications = $this->certificationModel->findAllCertifications();
        $data = 
        [
            'certifications' => $certifications
        ];
        $this->view('certifications/index', $data);
    }

    public function create()
{
    if (!isLoggedIn()) {
        header("Location: " . URLROOT. "/certifications" );
     
    }


    $student = $this->certificationModel->studentProfile();
    
    // Initialize profile_id to a default value
    $profile_id = '';

    if (count($student) > 0) {
        $student = $student[0];
        $profile_id = $student->profile_id;
    }

    $data = [
        'profile_id' => $profile_id,
        'certName' => '',
        'validity' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'email' => $_SESSION['email'],
            'certName' => trim($_POST['certName']),
            'validity' => trim($_POST['validity']),
            'profile_id' => $profile_id
        ];

        if ($data['certName'] && $data['validity']) {
            if ($this->certificationModel->addCertification($data)) {
                header("Location: " . URLROOT. "/certifications" );
                exit; // Always exit after redirect
            } else {
                die("Something went wrong :(");
            }
        } else {
            $this->view('certifications/index', $data);
        }
    }

    $this->view('certifications/index', $data);
}

    

    public function update($certification_id)
    {
        $certification = $this->certificationModel->findCertificationById($certification_id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/certifications");
        }
        elseif($certification->email != $_SESSION['email'])
        {
            header("Location: " . URLROOT . "/certifications");

        }

        $data = 
        [
            'certifications' => $certification,
            'certName' => '',
            'validity' => '',
            'certNameError' => '',
            'validityError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'certification_id' => $certification_id,
            'certifications' => $certification,
            'email' => $_SESSION['email'],
            'certName' => trim($_POST['certName']),
            'validity' => trim($_POST['validity']),
            'certNameError' => '',
            'validityError' => ''
            ];

            if(empty($data['certName'])){
                $data['certName'] = 'The name of a certification cannot be empty';
            }

            if(empty($data['validity'])){
                $data['validityError'] = 'The valid date of certification cannot be empty';
            }

            if($data['certName'] == $this->certificationModel->findCertificationById($certification_id)->certName)
            {
                $data['certNameError'] = "At least change the certification name!";
            }

            if($data['validity'] == $this->certificationModel->findCertificationById($certification_id)->validity)
            {
                $data['validityError'] = "At least change the validity date!";
            }


            if (empty($data['certNameError'] && $data['validityError'])){
                if ($this->certificationModel->updateCertification($data)){
                    header("Location: " . URLROOT. "/certifications" );
                }
                else
                {
                    die("Something went wrong :(");
                }
            }
            else
            {
                $this->view('certifications/index', $data);
            }
        }

        $this->view('certifications/index', $data);
    }

    public function delete($certification_id)
    {
        $certifications = $this->certificationModel->findCertificationById($certification_id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/certifications");
        }
        elseif($certifications->email != $_SESSION['email'])
        {
            header("Location: " . URLROOT . "/certifications");

        }

        $data = 
        [
            'certifications' => $certifications,
            'certName' => '',
            'validity' => '',
            'certNameError' => '',
            'validityError' => ''
        ];

        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        }

        if($this->certificationModel->deleteCertification($certification_id)){
            header("Location: " . URLROOT . "/certifications");
        }
        else
        {
            die('Something went wrong..');
        }
        
    }


}

?>