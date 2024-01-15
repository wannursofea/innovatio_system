<?php
class Users extends Controller {

    private $userModel; 
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $token = $_GET['token'];
        
        $this->view('users/index', $token);
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['user_role'] = $user->user_role;
        $_SESSION['user_image'] = $this->userModel->getUserImage($user->email, $user->user_role);
        header('location:' . URLROOT . '/pages/index');
    }

    public function register() {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'user_role' => '',
            'confirmPassword' => '',
            'name' => '',
            'DOB' => '',
            'gender' => '',
            'race' => '',
            'phoneNum' => '',
            'course' => '',
            'companyName' => '',
            'officeNum' => '',

            'city' => '',
            'country' => '',
            'education' => '',
            'bio' => '',
            'image' => '',

            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'nameError' => '',
            'DOBError' => '',
            'phoneNumError' => '',
            'courseError' => '',
            'companynameError' => '',
            'officeNumError' => '',
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            if ($_POST['user_role'] == "Student") {
                $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'user_role' => trim($_POST['user_role']),
                
                'name' => trim($_POST['name'])??'',
                'DOB' => trim($_POST['DOB'])??'',
                'gender' => trim($_POST['gender'])??'',
                'race' => trim($_POST['race'])??'',
                'phoneNum' => trim($_POST['phoneNum'])??'',
                'course' => trim($_POST['course'])??'',

                'city' => '',
                'country' => '',
                'education' => '',
                'bio' => '',
                'image' => '',

                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',

                'nameError' => '',
                'DOBError' => '',
                'phoneNumError' => '',
                'courseError' => '',

                ];

                if (empty($data['name'])) {
                $data['nameError'] = 'Please enter name.';
                }

                if (empty($data['phoneNum'])) {
                    $data['phoneNumError'] = 'Please enter contact number.';
                }

                if (empty($data['DOB'])) {
                    $data['DOBError'] = 'Please enter date of birth.';
                }

                if (empty($data['course'])) {
                    $data['courseError'] = 'Please enter current course.';
                }

            }elseif($_POST['user_role']== "Partner"){
                 $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'user_role' => trim($_POST['user_role']),

                'companyName' => trim($_POST['companyName'])??'',
                'officeNum' => trim($_POST['officeNum'])??'',
                
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
               
                'companynameError' => '',
                'officeNumError' => '',
                ];

                if (empty($data['companyName'])) {
                        $data['companynameError'] = 'Please enter company name.';
                }

                if (empty($data['officeNum'])) {
                    $data['officeError'] = 'Please enter office number.';
                }
            }


            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 8){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) &&
                empty($data['emailError']) && 
                empty($data['passwordError']) && 
                empty($data['confirmPasswordError'])&&
                (
                    (
                    empty($data['nameError'])&&
                    empty($data['phoneNumError'])&&
                    empty($data['DOBError'])&&
                    empty($data['courseError'])
                    )
                    ||
                    (empty($data['companynameError'])&&
                    empty($data['officeNumError'])
                    )
                )
            ) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
            else{

            }
           
        }
        $this->view('users/register', $data);
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'eamilError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter an email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
            if (!$this->userModel->findUserByEmail($data['email'])) {
            $data['emailError'] = 'Email not found.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';
                    
                    $this->view('users/login', $data);
                }
            }

        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('users/login', $data);
    }

    public function reset_password(){
        $token = bin2hex(random_bytes(16)); //64 character string
        $token_hash = hash("sha256", $token);
        date_default_timezone_set("Asia/Taipei");
        $expiry = date('Y-m-d H:i:s',time() + 60 * 30);//only valid 30 min

        $data = [
            'email' => '',
            'resetTokenHash' => '',
            'resetTokenExpired' => '',
            'URLROOT' => URLROOT, 
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'token' =>$token,
                'reset_token_hash' => $token_hash,
                'reset_token_expired' => $expiry,
                'URLROOT' => URLROOT, 
            ];

            if($this->userModel->updateResetToken($data)){
                $this->view('users/new_password',$data);
            }
        }

        $this->view('users/reset_password',$data);
    }

    public function new_password(){ 
        
        $error_msg = '';
        
        $data = [
            'password' => '',
            'confirmPassword' => '',
            'reset_token_hash' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            
        ];
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $token = $_POST['token'];
            $token_hash = hash("sha256", $token);
            $this_user = $this->userModel->findByResetToken($token_hash);
            
            if (!empty($this_user) && strtotime($this_user->reset_token_expired) <= time()) {
            // Token is valid, allow access to the new_password.php view
                $error_msg = "Invalid or expired token";
                die($error_msg);
            } 
            $data = [
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'token' => trim($_POST['token']),
                'reset_token_hash' => $token_hash,
                'passwordError' => '',
                'confirmPasswordError' => '',
            ];

           
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 8){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            if (empty($data['passwordError']) && 
                empty($data['confirmPasswordError'])
            ) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                
                if ($this->userModel->updateNewPassword($data)) {
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
            else{
                $this->view('users/index',$error_msg);
            }

        }
         $this->view('users/index', $error_msg);
    }
    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['user_role']);
        unset($_SESSION['user_image']);
        header('location:' . URLROOT . '/users/login');
    }
}
