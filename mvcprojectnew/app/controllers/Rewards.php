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
    {
        $badge = $this->rewardModel->findRewardsById($badge_id);


        $data = 
        [
            'badge' => $badge,
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
            'user_id' => $_SESSION['user_id'],
            'goldBadge' => trim($_POST['goldBadge']),
            'silverBadge' => trim($_POST['silverBadge']),
            'bronzeBadge' => trim($_POST['bronzeBadge']),
            'claimStatus' => trim($_POST['claimStatus']),
            'dateAwarded' => trim($_POST['dateAwarded'])
        ];

            if ($data['goldBadge'] && $data['silverBadge'] && $data['bronzeBadge'] && $data['claimStatus'] && $data['dateAwarded']){
                if ($this->rewardModel->updateRewarda($data)){
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


    // public function s_badge(){
    //     $Sbadge = $this->rewardModel->SmanageAllBadge();

    //     $data = [
    //         'Sbadge' => $Sbadge

    //     ];

    //     $this->view('rewards/badge', $data);
    // }

}
?>