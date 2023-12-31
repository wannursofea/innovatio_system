<?php 
class RewardsnBadges extends Controller{
    public function __construct(){
        $this->rewardnbadgeModel = $this->model('RewardnBadge');

    }

    public function index(){
        $badge = $this->rewardnbadgeModel->manageAllRewardnBadge();//rewardnbadge.php has manageAllRewardnBadge
        
        $data = [ //hold the collection of data from entity rewardnbadge //is an array
            'badge' => $badge //$badge being defined
        ];

        $this->view('rewardnbadge/index', $data);
    }
    public function addBadge()
    {
        if (!isLoggedIn()){
            header("Location: " . URLROOT. "/rewardsnbadges" );
        }

        $data = 
        [
            'title' => '',
            'body' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'user_id' => $_SESSION['user_id'],
            'title' => trim($_POST['title']),
            'body' => trim($_POST['body'])
            ];


            if ($data['title'] && $data['body']){
                if ($this->postModel->addPost($data)){
                    header("Location: " . URLROOT. "/posts" );
                }
                else
                {
                    die("Something went wrong :(");
                }
            }
            else
            {
                $this->view('posts/index', $data);
            }
        }

        $this->view('posts/index', $data);
    }
}
?>