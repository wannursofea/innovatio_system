<?php 

class Events extends Controller
{

    public function __construct()
    {
        $this->eventModel = $this->model('Event');
    }

    public function index()
    {

        $events = $this->eventModel->manageAllEvents();
       
        $data = 
        [
            'events' => $events,

        ];
        

        $this->view('events/index', $data);
    }

    public function create()
    {
        $data = 
        [
            'eventName' => '',
            'category' => '',
            'eventDescription' => '',
            'date' => '',
            'time' => '',
            'venue' => '',
        ];

        $invitationData=
        [
            'client_id'=> '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
            'user_id' => $_SESSION['user_id'],
            'eventName' => trim($_POST['eventName']),
            'category' => trim($_POST['category']),
            'eventDescription' => trim($_POST['eventDescription']),
            'date' => trim($_POST['date']),
            'time' => trim($_POST['time']),
            'venue' => trim($_POST['venue']),
            
            ];

            if (isset($_POST['noCollaborator']) && $_POST['noCollaborator'] == '0' && isset($_POST['selectedClients']) && !empty($_POST['selectedClients'])) {
                // Handle the condition where 'No collaborator' is selected and clients are selected
                $errorMessage = "Error: You've selected 'No collaborator' and collaborator(s) simultaneously. Please choose either 'No collaborator' or select collaborator(s), not both.";
                echo $errorMessage;
                $this->view('events/index',$data);
            }
            elseif(isset($_POST['noCollaborator']) && $_POST['noCollaborator'] == '0' && empty($_POST['selectedClients'])){
                // Handle the condition where 'No collaborator'is selected and clients are not selected

                if ($data['eventName'] && 
                    $data['category'] && 
                    $data['eventDescription'] && 
                    $data['date'] &&
                    $data['time'] &&
                    $data['venue']){

                    $event_id = $this->eventModel->createEvent($data);
                    if ($event_id){
                        header("Location: " . URLROOT. "/events" );
                    }
                    else
                    {
                        die("Something went wrong :(");
                    }
                }
                else{
                    $this->view('events/index', $data);
                }

            }
            elseif(!isset($_POST['noCollaborator']) && isset($_POST['selectedClients']) && !empty($_POST['selectedClients'])){
                //Hanlde the condition where 'No collaborator' is not selected and client is selected

                

                if ($data['eventName'] && 
                    $data['category'] && 
                    $data['eventDescription'] && 
                    $data['date'] &&
                    $data['time'] &&
                    $data['venue']){

                    $event_id = $this->eventModel->createEvent($data);
                        if ($event_id) {
                            foreach ($_POST['selectedClients'] as $client_id) {
                                $invitationData = [
                                    'event_id' => $event_id,
                                    'client_id' => $client_id,
                                ];
                                    if (!$this->eventModel->createInvitation($invitationData)) {
                                        die("Failed to create invitation");
                                    }
                            }
                        header("Location: " . URLROOT . "/events");
                            
                        } 
                }
                else {
                    die("Failed to create event");
                }
            }
        }
        $this->view('events/index', $data);
    }

    public function edit_event($event_id)
    {
        $event = $this->eventModel->findEventById($event_id); // To obtain the data of THIS event 
        
        $selected_clients = $this->eventModel->findSelectedClientsById($event_id); // To obtain the client_id(s) of the collaborator(s) of THIS event
        
        $updateCollaboratorSuccess = false;
        // !!!! this need to change related to admin
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/events");
        }
        
        $data = 
        [
            'event' => $event,
            'selected_clients' => $selected_clients,// IMPORTANT: for showing collaborator selected previously
            'eventName' => '',
            'category' => '',
            'eventDescription' => '',
            'date' => '',
            'time' => '',
            'venue' => '',
        ];

        $invitationData[]=
        [
            'event_id' => '',
            'client_id'=> '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //To obtain data event from edit form
            $data = 
            [
            'event_id' => $event_id,
            'event' => $event,
            'selected_clients' => $selected_clients,// IMPORTANT: for showing collaborator selected previously
            'user_id' => $_SESSION['user_id'],
            'eventName' => trim($_POST['eventName']),
            'category' => trim($_POST['category']),
            'eventDescription' => trim($_POST['eventDescription']),
            'date' => trim($_POST['date']),
            'time' => trim($_POST['time']),
            'venue' => trim($_POST['venue']),
            'eventNameError' => '',
            'categoryError' => '',
            'eventDescriptionError' => '',
            'dateError' => '',
            'timeError' => '',
            'venueError' => '',
            //To hold the value of client from the form
            
            ];

            if(empty($data['eventName'])){
                $data['eventNameError'] = 'The name of an event cannot be empty';
            }

            if(empty($data['category'])){
                $data['categoryError'] = 'The category of an event cannot be empty';
            }

            if(empty($data['eventDescription'])){
                $data['eventDescriptionError'] = 'The description of an event cannot be empty';
            }

            if(empty($data['date'])){
                $data['dateError'] = 'The date of an event cannot be empty';
            }

            if(empty($data['time'])){
                $data['timeError'] = 'The time of an event cannot be empty';
            }

            if(empty($data['venue'])){
                $data['venueError'] = 'The venue of an event cannot be empty';
            }

            if($data['eventName'] == $this->eventModel->findEventById($event_id)->eventName)
            {
                $data['eventNameError'] = "At least change the event name!";
            }

            if($data['category'] == $this->eventModel->findEventById($event_id)->category)
            {
                $data['categoryError'] = "At least change the category!";
            }

            if($data['eventDescription'] == $this->eventModel->findEventById($event_id)->eventDescription)
            {
                $data['eventDescriptioneError'] = "At least change the description!";
            }

            if($data['date'] == $this->eventModel->findEventById($event_id)->date)
            {
                $data['dateError'] = "At least change the date!";
            }

            if($data['time'] == $this->eventModel->findEventById($event_id)->time)
            {
                $data['timeError'] = "At least change the time!";
            }

            if($data['venue'] == $this->eventModel->findEventById($event_id)->venue)
            {
                $data['venueError'] = "At least change the venue!";
            }


            if (isset($_POST['noCollaborator']) && $_POST['noCollaborator'] == '0' && isset($_POST['selectedClients']) && !empty($_POST['selectedClients'])) {
                // Handle the condition where 'No collaborator' is selected and clients are selected
                $errorMessage = "Error: You've selected 'No collaborator' and collaborator(s) simultaneously. Please choose either 'No collaborator' or select collaborator(s), not both.";
                echo $errorMessage;
                $this->view('events/index',$data);
            }
            elseif(isset($_POST['noCollaborator']) && $_POST['noCollaborator'] == '0' && empty($_POST['selectedClients'])){
                // Handle the condition where 'No collaborator'is selected and clients are not selected

                // If previously have the client(s) selected, must be deleted from invitation table
                if(!empty($selected_clients)){
                    //prevoiusly with client(s), delete all
                    $this->eventModel->deleteInvitations($event_id);
                    $updateCollaboratorSuccess = true;
                }

                if ($updateCollaboratorSuccess ||
                    empty(
                    $data['eventNameError'] && 
                    $data['categoryError'] &&
                    $data['eventDescriptioneError'] &&
                    $data['dateError'] &&
                    $data['timeError'] &&
                    $data['venueError'])
                    ){
                    
                    if ($updateCollaboratorSuccess ||$this->eventModel->editEvent($data)){
                        header("Location: " . URLROOT. "/events" );
                    }
                    else
                    {
                        die("Something went wrong :(");
                    }
                }
                else
                {
                    $this->view('events/index', $data);
                }  
            }
            elseif(!isset($_POST['noCollaborator']) && isset($_POST['selectedClients']) && !empty($_POST['selectedClients'])){
                //Handle the condition where 'No collaborator' is not selected and client is selected

                // situation 1: previously no client is selected, now client will be inserted
                // situation 2: previously client is selected
                if(empty($selected_clients)){
                    if ($event_id) {
                        foreach ($_POST['selectedClients'] as $client_id) {
                            $invitation_Data = [
                                'event_id' => $event_id,
                                'client_id' => $client_id,
                            ];
                            if (!$this->eventModel->createInvitation($invitation_Data)) {
                                die("Failed to create invitation");
                            }
                            else{
                                $updateCollaboratorSuccess = true;
                            }
                        }
                    }
                }

                else{
                    $clientsToRemove = [];

                    // Find clients that were previously associated with the event but are not selected in the form
                    foreach ($selected_clients as $selected_each_client) {
                        $found = false;

                        foreach ($_POST['selectedClients'] as $client_id) {
                            if ($selected_each_client == $client_id) {
                                $found = true;
                                break;
                            }
                        }

                        if (!$found) {
                            // Client was previously associated with the event but not found in the form, mark it for removal
                            $clientsToRemove[] = $selected_each_client;
                        }
                    }

                    // Remove invitations for clients that are no longer associated with the event
                    if($clientsToRemove)
                    {
                        foreach ($clientsToRemove as $clientToRemove) {
                            if (!$this->eventModel->deleteInvitationClient($event_id, $clientToRemove)) {
                                die("Failed to delete invitation");
                            }
                            else{
                                $updateCollaboratorSuccess = true;
                            }
                        }
                    }


                    $newClients = [];

                    foreach ($_POST['selectedClients'] as $client_id) {
                        $found = false;
                        
                        foreach ($selected_clients as $selected_each_client) {
                            // Compare each client from the form with clients from the database
                            if ($selected_each_client == $client_id) {
                                $found = true;
                                break;
                            }
                        }

                        if (!$found) {
                            // If the client from the form is not found in the database, add it to the newClients array
                            $newClients[] = $client_id;
                        }
                    }
                    // Now $newClients array contains only the clients that are not present in the database
                    // You can use this array to create new invitations
                    if($newClients)
                    {
                        foreach ($newClients as $newClient) {
                            $invitation_Data = [
                                'event_id' => $event_id,
                                'client_id' => $newClient,
                                
                            ];
                            if (!$this->eventModel->createInvitation($invitation_Data)) {
                                die("Failed to create invitation");
                            }
                            else{
                                $updateCollaboratorSuccess = true;
                            }
                        }
                    }
                    
                }

                    if ($updateCollaboratorSuccess ||
                        empty(
                        $data['eventNameError'] && 
                        $data['categoryError'] &&
                        $data['eventDescriptioneError'] &&
                        $data['dateError'] &&
                        $data['timeError'] &&
                        $data['venueError'])){
                        
                        if ($updateCollaboratorSuccess || $this->eventModel->editEvent($data)){
                            header("Location: " . URLROOT. "/events" );
                        }
                        else
                        {
                            die("Something went wrong :(");
                        }
                    }
                    else
                    {
                        $this->view('events/index', $data);
                    }
            }
        }
        $this->view('events/index', $data);
    }

    public function delete_event($event_id)
    {
        $event = $this->eventModel->findEventById($event_id);
        $invitationData[] = $this->eventModel->findInvitationById($event_id);
        $data = 
        [
            'event' => $event,
            'eventName' => '',
            'category' => '',
            'eventDescription' => '',
            'date' => '',
            'time' => '',
            'venue' => '',
        ];

        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        }

        if($this->eventModel->deleteEvent($event_id) && $this->eventModel->deleteInvitations($event_id)){
            header("Location: " . URLROOT . "/events");
        }
        else
        {
            die('Something went wrong..');
        }
        
    }

    public function register_event($event_id)
    {
        $user_id = '';
        $student = '';
        $profile_id = '';

        if($event_id){
            $event = $this->eventModel->findEventById($event_id);// Important to redirect to each event register form to check the event is available
        }

        if(isLoggedIn()){ 
            
            $user_id = $_SESSION['user_id'];
            
            $student = $this->eventModel->findStudentById($user_id); //To get data from student table
            
            if ($student) {
                $profile_id = $student->profile_id;
            }
            
            if ($profile_id) {
                $latest_data_register = $this->eventModel->findRegisterInfo($profile_id);
            }
            else{
                die("Profile is not completed, cannot register for event");
            }
        }
        
        

        $data = 
        [
            //data from student
            'user_id' => $_SESSION['user_id'],
            'student' => $student ?? '',
            'name' => '',
            'phoneNum' => '',
            'email' => '',
            'DOB' => '',
            'course' => '',

            //for registration 
            'event' => $event ?? '',
            'profile_id' => $profile_id ?? '',
            'latest_data_register' => $latest_data_register ?? '',
            'event_id' => $event_id ?? '',

            //data for registration
            'dream' => '',
            'passion' => '',
            'hiddenTalent' => '',
            'presentStatus' => '',
            'institution' => '',
            
            'internshipYear' => '',
            'graduationYear' => '',
            'goal' => '',
            'archeveGoal' => '',
        
        ];
        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
            [
                //data from student
                'user_id' => $_SESSION['user_id'],
                'student' => $student ?? '',
                'name' => trim($_POST['name']),
                'phoneNum' => trim($_POST['phoneNum']),
                'email' => trim($_POST['email']),
                'DOB' => trim($_POST['DOB']),
                'course' => trim($_POST['course']),

                //for registration
                'event' => $event ?? '',
                'profile_id' => $profile_id ?? '',
                'latest_data_register' => $latest_data_register ?? '',
                'event_id' => $event_id ?? '',

                //data for registration
                'dream' => trim($_POST['dream']),
                'passion' => trim($_POST['passion']),
                'hiddenTalent' => trim($_POST['hiddenTalent']),
                'presentStatus' => trim($_POST['presentStatus']),
                'institution' => trim($_POST['institution']),
                
                'internshipYear' => trim($_POST['internshipYear']),
                'graduationYear' => trim($_POST['graduationYear']),
                'goal' => trim($_POST['goal']),
                'archieveGoal' => trim($_POST['archieveGoal']),
            
            ];

                
                    if($this->eventModel->createRegisterInfo($data)){
                        
                        header("Location: " . URLROOT . "/events/manage_registrationlist");
                    }
                    else{
                        die("Failed to fail to register event");
                    }
           
        }
        $this->view('events/index', $data);
    }




}    
?>