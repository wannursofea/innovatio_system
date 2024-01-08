<?php 
class Rewards extends Controller{
    public function __construct(){
        $this->rewardModel = $this->model('Reward');

    }

    public function index(){
        $badge = $this->rewardModel->AmanageAllBadge();//reward.php has manageAllReward
        
        $data = [ //hold the collection of data from entity reward //is an array
            'badge' => $badge //$badge being defined
        ];

        $this->view('rewards/index', $data);
    }
    
    public function create()
    {
        $data = [
            'goldBadge' => '',
            'silverBadge' => '',
            'bronzeBadge' => '',
            'claimStatus' => '',
            'dateAwarded' => ''
        ];
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            // Fetch the name based on user_id (assuming you have a method for this in your model)
            
            $data = [
                $user_id = $_SESSION['user_id'],
                'goldBadge' => trim($_POST['goldBadge']),
                'silverBadge' => trim($_POST['silverBadge']),
                'bronzeBadge' => trim($_POST['bronzeBadge']),
                'claimStatus' => trim($_POST['claimStatus']),
                'dateAwarded' => trim($_POST['dateAwarded'])
            ];
    
            if ($data['goldBadge'] && $data['silverBadge'] && $data['bronzeBadge'] && $data['claimStatus'] && $data['dateAwarded']) {
                if ($this->rewardModel->addReward($data)) {
                    header("Location: " . URLROOT . "/rewards");
                    exit();
                } else {
                    die("Something went wrong :(");
                }
            } else {
                $this->view('rewards/index', $data);
            }
        }
    
        $this->view('rewards/index', $data);
    }
    
    public function update($badge_id)
    { echo "Update method is being executed.";
        $badge = $this->rewardModel->findRewardById($badge_id);

        
        // $user_id = $_SESSION['user_id'];
        // $student = $this->rewardModel->getStudentByUserId($user_id);
        // $profile_id = '';

        // if(!$student){
        //     die("Student data not found");
        // }

        // else{
        //     $profile_id = $student->profile_id;
        //     if($profile_id){
        //         $badge = $this->rewardModel->findRewardById($badge_id);
        //     }
        //     else{
        //         die("Profile is not completed, cannot update this student badge data");
        //     }
        // }

        $data = 
        [
            //data from the Student
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
            'dateAwarded' => trim($_POST['dateAwarded'])
        ];

            if ($data['goldBadge'] && $data['silverBadge'] && $data['bronzeBadge'] && $data['claimStatus'] && $data['dateAwarded']){
                if ($this->rewardModel->updateReward($data)){
                    header("Location: " . URLROOT. "/rewards" );
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


}
?>