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
            'events' => $events
        ];
        

        $this->view('events/index', $data);
    }

    // public function register($event_id)
    // {

    //     $event = $this->eventModel->findEventById($event_id);

        
    //     $data = 
    //     [
    //         'event' => $event,
           
    //     ];

    //     $this->view('events/register',$data);
        
    // }

    


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

}

?>