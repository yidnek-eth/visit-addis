<?php
class TourGuides extends Controller {
    public function __construct() {
        $this->tourGuideModel = $this->model('TourGuide');
    }

    public function index() {

        $this->view('tourGuides/index');
    }

    public function viewTourist() {
        
        $this->view('tourGuides/viewTourist');
    }

    public function generateReport() {
        $this->view('tourGuides/generateReport');
    }
}