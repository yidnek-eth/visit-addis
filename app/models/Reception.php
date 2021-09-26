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

    public function findAllGuides($carrier) {
        $this -> db -> query('SELECT * FROM employees WHERE carrier = :carrier');

        $this->db->bind(':carrier', $carrier);

        $results = $this->db->resultSet();

        return $results;

    }

    public function checkGuideExist($userId) {
        $this->db->query('SELECT * FROM guides WHERE employee_id = :employee_id');

        //Bind value
        $this->db->bind(':employee_id', $userId);

        $row = $this->db->single();

        

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    public function findTicketById($id) {
        $this->db->query('SELECT * FROM tickets WHERE id = :id');

        $this->db->bind(':id', $id);

        
        $row = $this->db->single();
        return $row;
    }


    public function assignTGuide($id, $ticketId, $available) {
        $this ->db ->query('INSERT INTO guides (employee_id, ticket_id, available) VALUES (:employee_id, :ticket_id,  :available)');

        
        //Bind Values
        $this->db->bind(':employee_id', $id);
        $this->db->bind(':ticket_id', $ticketId);
        $this->db->bind(':available', $available);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function findGuideById($id) {

        $this->db->query('SELECT * FROM employees WHERE id = :id');

        //Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        

        if ($row) {
            return $row;
        } else {
            return false;
        }

    }

    

    
}