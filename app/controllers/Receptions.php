<?php
class Receptions extends Controller {
    public function __construct() {
        $this->receptionModel = $this->model('Reception');
    }

    public function index() {

        $this->view('receptions/index');
    }

    public function viewTicket() {

        $data = [
            'ticketNumber' => '',
            'inputError' => ''
        ];
        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'user_id' => $_SESSION['user_id'],
                'ticketNumber' => trim($_POST['ticketNumber']),
                'inputError' => ''
            ];

            if(empty($data['ticketNumber'])) {
                $data['inputError'] = 'Please insert a ticket number';
            }

            if (empty($data['inputError'])) {
                $row = $this->receptionModel->findTicketByNumber($data);
                $data = [
                    'ticketInfo' => $row,
                ];              
            
        
                $user = $this->receptionModel -> findUserById($data['ticketInfo']->user_id);
                $tourismSite = $this->receptionModel -> findTourismSiteById($data['ticketInfo']->tourismSite_id);
                $data = [
                        'ticketInfo' => $row,
                        'user' => $user,
                        'tourismSite' => $tourismSite,
                        'inputError' => ''
                    ];
                
            }
        }

        $this->view('receptions/viewTicket', $data);
    }

    public function assignTourGuide($data) {

        $role = 'tourGuide';

        $guides = $this->receptionModel->findAllGuides($role);
        
        $data = [
            'guides' => $guides
           
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          

                     
            
    
            $user = $this->receptionModel -> findUserById($data['ticketInfo']->user_id);
            $tourismSite = $this->receptionModel -> findTourismSiteById($data['ticketInfo']->tourismSite_id);
            $data = [
                    'ticketInfo' => $row,
                    'user' => $user,
                    'tourismSite' => $tourismSite,
                    'inputError' => ''
                ];
                
            
        }

        $this->view('receptions/assignTourGuide', $data);
    }
}
