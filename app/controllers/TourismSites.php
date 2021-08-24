<?php
class TourismSites extends Controller{
    
    public function __construct() {
        $this->tourismSiteModel = $this->model('TourismSite');
        
    }

    public function index() {

        $tourismSites = $this->tourismSiteModel->findAllTourismSites();

        //pass $tourismSites to the view 
        $data = [
            'tourismSites' => $tourismSites
        ];
        
        $this -> view('tourismSites/index', $data);
    }

    public function details($id) {

        $tourismSite = $this->tourismSiteModel -> findTourismSiteById($id);

        $data = [
            'tourismSite' => $tourismSite
        ];



        $this-> view('/tourismSites/details', $data);
    }

    public function buy($id) {
        $tourismSite = $this->tourismSiteModel -> findTourismSiteById($id);

        $user = $this->tourismSiteModel -> findUserById($_SESSION['user_id']);

        $data = [
            'tourismSite' => $tourismSite,
            'user' => $user            
        ];

        



        $this-> view('/tourismSites/buy', $data);
    }

    public function book($id) {

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/tourismSites/index");
        }

        $tourismSite = $this->tourismSiteModel -> findTourismSiteById($id);

        $user = $this->tourismSiteModel -> findUserById($_SESSION['user_id']);

        $data = [
            'tourismSite' => $tourismSite,
            'user' => $user,
            'ticketNo' => '',
            'username' => '',
            'email' => '',
            'date' => '',
            'numberOfTicket' => ''            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $length = 10;
            $ticketNo = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
            $data = [
                'tourismSite' => $tourismSite,
                'user' => $user,
                'ticketNo' => $ticketNo,
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'date' => trim($_POST['trip-start']),
                'numberOfTicket' => trim($_POST['numberOfTicket']) 
            ];

            if (!empty($data['username']) && !empty($data['email']) 
                && !empty($data['date']) && !empty($data['numberOfTicket'])) {

                    if($this->tourismSiteModel -> bookTicket($data)) {

                        $this->view('tourismSites/book', $data);
                    } else {
                        die("Something went wrong! please try again");
                    }
                }
        }

        // $ticket = $this->findTicketById($data);
        // $data = [
        //     'ticket' => $ticket
        // ];


        $this-> view('/tourismSites/book', $data);
    }



    /*public function book($id) {

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/tourismSites/index");
        }

        $tourismSite = $this->tourismSiteModel -> findTourismSiteById($id);

        $user = $this->tourismSiteModel -> findUserById($_SESSION['user_id']);


        $data = [
            //'tourismSite' => $tourismSite,
           // 'user' => $user,
            'username' => '',
            'email' => '',
            'date' => '',
            'ticketNo' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'tourismSite' => $tourismSite,
                'user' => $user,
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'date' => trim($_POST['trip-start']),
                'ticketNo' => trim($_POST['ticketNo']) 
            ];

            if($this->tourismSiteModel ->bookTicket($data)) {
                    header("Location: " . URLROOT . "/tourismSites/index");
            } else {
               die('Something went wrong!');
            }
        }

        $this->view('/tourismSites/book', $data);
    }*/
}
