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
        if (!isLoggedIn()){
            header("Location: " . URLROOT. "/certifications" );
        }

        $data = 
        [
            'certName' => '',
            'validity' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'user_id' => $_SESSION['user_id'],
            'certName' => trim($_POST['certName']),
            'validity' => trim($_POST['validity']),

            ];


            if ($data['certName'] && $data['validity']){
                if ($this->certificationModel->addCertification($data)){
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

    public function update($id)
    {
        $certification = $this->certificationModel->findCertificationById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/certifications");
        }
        elseif($certification->user_id != $_SESSION['user_id'])
        {
            header("Location: " . URLROOT . "/certifications");

        }

        $data = 
        [
            'certification' => $certification,
            'certName' => '',
            'validity' => '',
            'certNameError' => '',
            'validityError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'certification_id' => $id,
            'certification' => $certification,
            'user_id' => $_SESSION['user_id'],
            'certName' => trim($_POST['certName']),
            'validity' => trim($_POST['validity']),
            'certNameError' => '',
            'validityError' => ''
            ];

            if(empty($data['certName'])){
                $data['certName'] = 'The title of a certification cannot be empty';
            }

            if(empty($data['validity'])){
                $data['validityError'] = 'The validity of a certification cannot be empty';
            }

            if($data['certName'] == $this->certificationModel->findCertificationById($id)->title)
            {
                $data['certNameError'] = "At least change the title!";
            }

            if($data['validity'] == $this->certificationModel->findCertificationById($id)->body)
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

    public function delete($id)
    {
        $certification = $this->certificationModel->findCertificationById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/certifications");
        }
        elseif($certification->user_id != $_SESSION['user_id'])
        {
            header("Location: " . URLROOT . "/certifications");

        }

        $data = 
        [
            'certification' => $certification,
            'certName' => '',
            'validity' => '',
            'certNameError' => '',
            'validityError' => ''
        ];

        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        }

        if($this->certificationModel->deleteCertification($id)){
            header("Location: " . URLROOT . "/certifications");
        }
        else
        {
            die('Something went wrong..');
        }
        
    }


}

?>