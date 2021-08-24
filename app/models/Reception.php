<?php
class Reception {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findTicketByNumber($data) {

        $this->db->query('SELECT * FROM tickets WHERE ticketNo = :ticketNo');

        $this->db->bind(':ticketNo', $data['ticketNumber']);

        
        $row = $this->db->single();
        return $row;

        

    }

    public function findUserById($id) {

        $this->db->query('SELECT * FROM users WHERE id = :user_id');

        $this->db->bind(':user_id', $id);

        
        $row = $this->db->single();
        return $row;        

    }

    public function findTourismSiteById($id) {
        $this->db->query('SELECT * FROM tourismSites WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function findAllGuides($role) {
        $this -> db -> query('SELECT * FROM users WHERE role = :role');

        $this->db->bind(':role', $role);

        $results = $this->db->resultSet();

        return $results;

    }

    
}