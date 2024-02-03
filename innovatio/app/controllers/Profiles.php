<?php
class Profiles extends Controller {
    private $profileModel;

    public function __construct() {
        $this->profileModel = $this->model('Profile');
    }

    public function index() {
        $profiles = $this->profileModel->getProfile();

        $data = [

            'profiles' => $profiles,
        ];
        
        $this->view('profiles/index', $data);
    } 
}

?>