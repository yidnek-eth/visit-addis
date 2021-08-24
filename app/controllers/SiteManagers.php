<?php
class SiteManagers extends Controller {
    public function __construct() {
        $this->siteManagerModel = $this->model('SiteManager');
    }

    public function index() {

       
        $this -> view('siteManagers/index');
    }
}