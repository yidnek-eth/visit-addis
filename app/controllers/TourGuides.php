<?php
class TourGuides extends Controller {
    public function __construct() {
        $this->tourGuideModel = $this->model('TourGuide');
    }

    public function index() {

        //$checkGuideExist = $this->tourGuideModel-> checkGuideExist($_SESSION['user_id']);  


        // if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);               
        //     if($checkGuideExist){
        //        if($checkGuideExist->available == 0) {
        //         $available = 1;
        //         $updated = $this->tourGuideModel->updateAvailable($_SESSION['user_id'],$available);
        //        } elseif ($checkGuideExist->available == 1) {
        //         $available = 0;
        //         $updated = $this->tourGuideModel->updateAvailable($_SESSION['user_id'],$available);
        //        }
        //     }
                        
            
        // }

      
        $this->view('tourGuides/index');
    }

    public function viewTourist() {

        $ticketId =  $this->tourGuideModel -> findTicketId($_SESSION['user_id']);

        $ticket = $this-> tourGuideModel -> findTicket($ticketId->ticket_id);

        $tourismSite = $this-> tourGuideModel -> findTourismSite($ticket->tourismSite_id);

        $user = $this-> tourGuideModel -> findUserById($ticket->user_id);

        //var_dump($user);


        $data = [
            'ticket' => $ticket,
            'user' => $user,
            'tourismSite' => $tourismSite
        ];
        
        $this->view('tourGuides/viewTourist', $data);
    }

    public function generateReport() {
        $data = [
            'name' => '',
            'email' => '',
            'siteName' => '',
            'description' => '',
            'nameError' => '',
            'emailError' => '',
            'siteNameError' => '',
            'descriptionError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['userName']),
                'email' => trim($_POST['email']),
                'siteName' => trim($_POST['siteName']),
                'description' => trim($_POST['description']),
                'nameError' => '',
                'emailError' => '',
                'siteNameError' => '',
                'descriptionError' => '',
            ];

            



            if(empty($data['name'])) {
                $data['nameError'] = 'The name of a user cannot be empty';
            }

            if(empty($data['description'])) {
                $data['descriptionError'] = 'The description of a report cannot be empty';
            }
            if(empty($data['email'])) {
                $data['emailError'] = 'The email of a user cannot be empty';
            }
            if(empty($data['siteName'])) {
                $data['siteNameError'] = 'The name of a site cannot be empty';
            }
            

            if (empty($data['nameError']) && empty($data['descriptionError'])
                && empty($data['emailError']) && empty($data['siteNameError'])) {                   
                
                if ($this->tourGuideModel->addReport($data, $_SESSION['user_id'])) {
                    header("Location: " . URLROOT . "/tourGuides");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('tourGuides/generateReport', $data);
            }


        }
        $this->view('tourGuides/generateReport', $data);
    }

    public function available() {

    }
}