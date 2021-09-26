<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('pages/index', $data);
    }

    public function tourismSites() {
        $this->view('tourismSites');
    }

    public function about() {
        
        $this->view('pages/about');
    }

    public function gallery() {

        $this -> view('pages/gallery');
    }

    public function contact() {
        
        $this->view('pages/contact');
    }
}
