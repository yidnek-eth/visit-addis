<?php
class SiteManager {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
}