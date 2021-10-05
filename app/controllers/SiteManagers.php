<?php
class SiteManagers extends Controller {
    public function __construct() {
        $this->siteManagerModel = $this->model('SiteManager');
    }

    public function index() {

       
        $this -> view('siteManagers/index');
    }

    public function viewReport() {

        $reports = $this->siteManagerModel->findAllReports();

        //pass $reports to the view 
        $data = [
            'reports' => $reports
        ];

        $this->view('siteManagers/viewReport', $data);
    }

    public function ticketReport() {
        $weeklyTickets = $this->siteManagerModel->findWeeklyTickets();
        $monthlyTickets = $this->siteManagerModel->findMonthlyTickets(); 
        $quarterlyTickets = $this->siteManagerModel->findQuarterlyTickets();
        

        // //stopped at this!
        // foreach ($weeklyTickets as $key => $weekTicket){
        //     $price = $this->siteManagerModel->findTicketPrice($weekTicket['tourismSite_id']);
        //     $value = $weekTicket['numberOfTicket'] * $price ;
        // }

       

        $data = [
            'weeklyTickets'=>$weeklyTickets,
            'monthlyTickets'=>$monthlyTickets,
            'quarterlyTickets'=>$quarterlyTickets
        ];

        $this->view('siteManagers/ticketReport', $data);
    }
}