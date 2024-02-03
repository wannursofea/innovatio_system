<?php
class Pages extends Controller {

    private $pageModel;

    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }


    public function index() {
        $student='';
        $partner='';
        if (!isLoggedIn()) {
            header("Location: " . URLROOT. "/pages" );
            $user_id = $_SESSION['user_id'];      
            
            $student = $this->pageModel->findStudentById($user_id); //To get data from student table
            $partner = $this->pageModel->findPartnerById($user_id);
         
        }
    
        $data = [
            'title' => 'Home page',
            'student' => $student,
            'partner' => $partner,
        ];
        $this->view('index', $data);
    }

    public function dashboard(){
        $user_id = $_SESSION['user_id'];      
        
        $student = $this->pageModel->findStudentById($user_id); //To get data from student table
        $profile_id = '';   
        //retrieve the data that already have in the system - get student
        if ($student) {
            $profile_id = $student->profile_id;
        }
        if(!$user_id){
            die("Profile is not existing.");
        }


        $studentInfo = $this->pageModel->studentInfo($user_id); // retrieve student table data
        $badgeInfo = $this->pageModel->badgeInfo($profile_id); // retrieve student table data
        $eventInfo = $this->pageModel->eventInfo();

        $eventNum = 0;

        foreach($eventInfo as $event){
            if($event->event_id){
                $eventNum =+ 1;
            }
        }


        $data = 
        [
            'student' => $studentInfo,
            'badge' => $badgeInfo,
            'event' => $eventInfo,
            'eventNum' => $eventNum,
        ];

        $this->view('index', $data);

    }

    public function edit_profile()
    {
       

        //check for post from form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { //if server request open

            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            

            // Check if file was uploaded without errors
            if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["file"]["name"];
                $filetype = $_FILES["file"]["type"];
                $filesize = $_FILES["file"]["size"];

                $fileExt = explode('.', $filename);
                $fileActualExt = strtolower(end($fileExt));

                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)){
                    $_SESSION['failed'] = "Error: You cannot upload files of this type!";
                    header("Location: " . URLROOT . "/pages/edit_profile");
                }

                $username = $_SESSION['username'];
                $maxsize = 5 * 1024 * 1024;
                if ($filesize > $maxsize){
                    $_SESSION['failed'] = "Error: File size is larger than the allowed limit.";
                            header("Location: " . URLROOT . "/pages/edit_profile");
                } 
                $location = "images/users/" . $username;

                if (in_array($filetype, $allowed)) {

                    if (file_exists($location . $filename)) {
                        echo $filename . " is already exists.";
                    } else {
                        
                            # create directory if not exists in upload/ directory
                            if (!is_dir($location)) {
                                //mkdir($location, 0755);
                                mkdir('images/users/' . $username, 0777, true);
                            }

                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;

                            $location .= "/" . $fileNameNew;

                            move_uploaded_file($_FILES['file']['tmp_name'], $location);
                    }
                } else {
                    $_SESSION['failed'] = "Error: There was an error uploading your file!";
                        header("Location: " . URLROOT . "/pages/edit_profile");
                }
            } else {

                $_SESSION['failed'] = "Error: There was an error uploading your file!";
                        header("Location: " . URLROOT . "/pages/edit_profile");
              
            }

            // $_POST['update_student'] hidden value from form
           if ($_POST['update_student']) {

                if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {

                    $data = [


                        'phoneNum' => trim($_POST['phoneNum']),
                        'email' => trim($_POST['email']),
                        'name' => trim($_POST['name']),
                        'gender' => trim($_POST['gender']),
                        'race' => trim($_POST['race']),
                        'education' => trim($_POST['education']),
                        'city' => trim($_POST['city']),
                        'country' => trim($_POST['country']),
                        'course' => trim($_POST['course']),
                        'DOB' => trim($_POST['DOB']),
                        'bio' => trim($_POST['bio']),
                        'image' => $location
    
                    ];

                }else{

                    $data = [

                        'phoneNum' => trim($_POST['phoneNum']),
                        'email' => trim($_POST['email']),
                        'name' => trim($_POST['name']),
                        'gender' => trim($_POST['gender']),
                        'race' => trim($_POST['race']),
                        'education' => trim($_POST['education']),
                        'city' => trim($_POST['city']),
                        'country' => trim($_POST['country']),
                        'course' => trim($_POST['course']),
                        'DOB' => trim($_POST['DOB']),
                        'bio' => trim($_POST['bio']),
                        
               
                    ];
                }

            }


          if ($_POST['update_student']) {
                if ($this->pageModel->updateStudentProfile($data)) {
                    header("Location: " . URLROOT . "/pages/edit_profile");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('pages/index');
            }
        } // end of if statement 

        $studentProfile = $this->pageModel->studentProfile();
        
        $data = [
            'studentProfile' => $studentProfile
        ];

        $this->view('pages/index', $data);
    }
    
}
