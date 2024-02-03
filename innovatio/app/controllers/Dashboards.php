<?php 
class Dashboards extends Controller{
    public function student(){
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
            
            $student = $this->dashboardModel->findStudentById($user_id); //To get data from student table
            
            //retrieve the data that already have in the system - get student
            if ($student) {
                $profile_id = $student->profile_id;
            }
            if(!$profile_id){
                die("Profile is not existing.");
            }
            
            $badge = $this->dashboardModel->findStudentInReward($profile_id);
            
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
        $this->view('dashboards/index', $data);
    }

}
?>