<?php 
class Rewards extends Controller{

    private $rewardModel;
    
    public function __construct(){
        $this->rewardModel = $this->model('Reward');

    }

    public function index()
    {
        $badge = $this->rewardModel->AmanageAllEvents();
        $data = 
        [
            'badge' => $badge,
        ];
        $this->view('rewards/index', $data);
    }


    public function manage(){
        $badges = $this->rewardModel->AmanageAllBadge();

        foreach ($badges as $badge) { // for each student that has user_id and profile_id
            $profile_id = $badge->profile_id; //set the profile_id

            $event_ids = $this->rewardModel->getRegisteredEvent($profile_id); // take the values 
            
            $goldBadge = $badge->goldBadge;
            $silverBadge = $badge->goldBadge;
            $bronzeBadge = $badge->goldBadge;

            //always make an initial data
            $goldBadge = 0;
            $silverBadge = 0;
            $bronzeBadge = 0;
            
                foreach ($event_ids as $event_id) {
                    $category = $this->rewardModel->getCategory($event_id->event_id);
                    if($category && property_exists($category, 'category')) {

                        if ($category->category == 'Program/Activities' || $category->category == 'Bootcamp/Workshop') {
                            $bronzeBadge += 1;
                        } else if ($category->category == 'Volunteer' || $category->category == 'Part Time') {
                            $silverBadge += 1;
                        } else if ($category->category == 'Competition/Scholarship' || $category->category == 'Internship') {
                            $goldBadge += 1;
                        }
                    }
                }


                $update_data = [
            
                    'goldBadge' => $goldBadge,
                    'silverBadge' => $silverBadge,
                    'bronzeBadge' => $bronzeBadge,
                ];
                
                $this->rewardModel->updateBadgeById($update_data, $profile_id);
                
                // $this->view('rewards/index', $update_data);
            } 
                
                $badge = $this->rewardModel->AmanageAllBadge();
                $data = ['badge' => $badge];
                
                $this->view('rewards/index', $data);

                
    }
        

    
    public function update($badge_id)
    { 
        $badge = $this->rewardModel->findRewardById($badge_id);
        
        $data = 
        [
            'badge_id' => $badge_id,
        
            'badge' => $badge,
            'name' => $badge->student_name,
            'goldBadge' => '',
            'silverBadge' => '',
            'bronzeBadge' => '',
            'claimStatus' => '',
            'dateAwarded' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'badge_id' => $badge_id,
            
            'badge' => $badge,
            'name' => $badge->student_name,
            'user_id' => $_SESSION['user_id'],
            'goldBadge' => trim($_POST['goldBadge']),
            'silverBadge' => trim($_POST['silverBadge']),
            'bronzeBadge' => trim($_POST['bronzeBadge']),
            'claimStatus' => trim($_POST['claimStatus']),
            'dateAwarded' => trim($_POST['dateAwarded']),
            'goldBadgeError' => '',
            'silverBadgeError' => '',
            'bronzeBadgeError' => '',
            'claimStatusError' => '',
            'dateAwardedError' => '',
            ];


            if(empty($data['goldBadge'])){
                $data['goldBadgeError'] = ' cannot be empty';
            }

            if(empty($data['silverBadge'])){
                $data['silverBadgeError'] = ' cannot be empty';
            }

            if(empty($data['bronzeBadge'])){
                $data['bronzeBadgeError'] = ' cannot be empty';
            }

            if(empty($data['claimStatus'])){
                $data['claimStatusError'] = ' cannot be empty';
            }

            if(empty($data['dateAwarded'])){
                $data['dateAwardedError'] = ' cannot be empty';
            }
            
            if($data['goldBadge'] == $this->rewardModel->findRewardById($badge_id)->goldBadge)
            {
                $data['goldBadgeError'] = "At least change it!";
            }

            if($data['silverBadge'] == $this->rewardModel->findRewardById($badge_id)->silverBadge)
            {
                $data['silverBadgeError'] = "At least change it!";
            }

            if($data['bronzeBadge'] == $this->rewardModel->findRewardById($badge_id)->bronzeBadge)
            {
                $data['bronzeBadgeError'] = "At least change it!";
            }

            if($data['claimStatus'] == $this->rewardModel->findRewardById($badge_id)->claimStatus)
            {
                $data['claimStatusError'] = "At least change it!";
            }

            if($data['dateAwarded'] == $this->rewardModel->findRewardById($badge_id)->dateAwarded)
            {
                $data['dateAwardedError'] = "At least change it!";
            }

            if (empty(
            $data['goldBadgeError'] && 
            $data['silverBadgeError'] &&
            $data['bronzeBadgeError'] &&
            $data['claimStatusError'] &&
            $data['dateAwardedError'] 
            )){
                if ($this->rewardModel->updateReward($data)){
                    header("Location: " . URLROOT. "/rewards/manage" );
                }
                else
                {
                    die("Something went wrong :(");
                }
                
                
            }
            else
            {
                $this->view('rewards/index', $data);
            }
        }
        $this->view('rewards/index', $data);
    }


    public function badge(){
        $user_id = '';
        $profile_id = '';
        $data = 
        [
            'user_id' => '',
            'student' => $student ?? '',
            'badge' => $badge ?? '',
            'name' => '',
            'goldBadge' => '',
            'silverBadge' => '',
            'bronzeBadge' => '',
            'claimstatus' => '',
            'dateAwarded' => '',
        ];

        if(isLoggedIn()){ 

            $user_id = $_SESSION['user_id'];
            
            $student = $this->rewardModel->findStudentById($user_id); //To get data from student table
            
            if ($student) {
                $profile_id = $student->profile_id;
            }
            if(!$profile_id){
                die("Profile is not existing.");
            }
            
            $badge = $this->rewardModel->findStudentInReward($profile_id);
            
            $data = 
            [
                
                'user_id' => $_SESSION['user_id'],
                'student' => $student ?? '',
                'badge' => $badge,
                'name' => '',
                'goldBadge' => '',
                'silverBadge' => '',
                'bronzeBadge' => '',
                'claimstatus' => '',
                'dateAwarded' => '',
            ];
        }
        

        $this->view('rewards/index', $data);
    }


    public function join(){
        $user_id = '';
        $profile_id = '';

        if(isLoggedIn()){ 
        
            if(isset($_SESSION['user_role']) && $_SESSION['user_role'] !== 'Student'){
                header("Location: " . URLROOT. "/rewards" );
                exit();
            }
            $user_id = $_SESSION['user_id'];
            

            //!!!!
            $student = $this->rewardModel->findStudentById($user_id); //To get data from student table
            
            if ($student) {
                $profile_id = $student->profile_id;
            }
            if(!$profile_id){
                die("Profile is not existing.");
            }
            if($this->rewardModel->findExist($profile_id)){
                die("You already joined.");
            }
            
            $data = 
            [
                'user_id' => $_SESSION['user_id'],
                'student' => $student ?? '',
                'name' => '',
                'goldBadge' => '',
                'silverBadge' => '',
                'bronzeBadge' => '',
            ];
        }


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
                'user_id' => $_SESSION['user_id'],
                'student' => $student ?? '',
                'name' => trim($_POST['name']),
                'goldBadge' => trim($_POST['goldBadge']),
                'silverBadge' => trim($_POST['silverBadge']),
                'bronzeBadge' => trim($_POST['bronzeBadge']),
                // 'claimstatus' => trim($_POST['claimstatus']),
                // 'dateAwarded' => trim($_POST['dateAwarded']),
            ];
            
            if($this->rewardModel->initialReward($data)){
                header("Location: " . URLROOT . "/rewards/badge");
            }
            else{
                die("Failed to join");
            }

    }  $this->view('rewards/index', $data);
    }

    function updateBadgeStatus()
    {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $badge_id = $_POST['badge_id'];
        $isChecked = $_POST['isChecked'];


        $this->rewardModel->updateStatus($badge_id, $isChecked);

        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
        exit;
    }
}

}
?>