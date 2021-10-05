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

    public function assignTourGuide($id) {

        
        $ticket = $this -> receptionModel -> findTicketById($id);
        $ticket1 = $ticket->id;
        $carrier = 'Tour Guide';

        $guides = $this->receptionModel->findAllGuides($carrier);
        
        
        $data = [
            'guides' => $guides,
            'ticket' => $ticket
           
        ];




        // if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            
        //     // $available = 1;
        //     // if($this->receptionModel->assignGuide($data, $available)) {
        //     //     header("Location: " . URLROOT . "/receptions");
        //     // } else {
        //     //     die('Something went wrong!');
        //     // }          
              
            
            
        // }  
        
        
        
        //  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            
        //     $available =1;

        //      $guide = $this -> receptionModel -> findGuideById($id); 
            

        //     if( $this -> receptionModel -> assignTGuide($ticket1, $id, $available)) {
        //         header('location:' . URLROOT . '/receptions');
        //     } else {
        //         die('Something went wrong!');
        //     }
        //     // if ($this->receptionModel->assignGuide($data, $available)) {
        //     //     header('location:' . URLROOT . '/receptions');
        //     // } else {
        //     //     die('Something went wrong!');
        //     // }
        //  }


        $this->view('receptions/assignTourGuide', $data);
    }

    public function assignGuide($id) {
      
     

       
        
        $request_url = explode("/",$_SERVER['REQUEST_URI']);
        //var_dump($request_url[5]);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            
            $available = 1;
            

            if($this -> receptionModel -> assignTGuide($request_url[5], $id, $available)) {
                header('location:' . URLROOT . '/receptions');
            } else {
                die('Something went wrong!');
            }
            
        }

    }

  

    
}






