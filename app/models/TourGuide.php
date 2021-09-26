<?php
class TourGuide {
    private $db;

    public function __construct() {
        $this->db = new Database;
 
    }   

    public function updateAvailable($userId, $available) {

        $this->db->query('INSERT INTO guides (employee_id , available) VALUES (:employee_id, :available)');

        //Bind values
        $this->db->bind(':employee_id', $userId);
        $this->db->bind(':available', $available);
        

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    

    // public function checkGuideExist($userId) {
    //     $this->db->query('SELECT * FROM guides WHERE employee_id = :employee_id');

    //     //Bind value
    //     $this->db->bind(':employee_id', $userId);

    //     $row = $this->db->single();

        

    //     if ($row) {
    //         return $row;
    //     } else {
    //         return false;
    //     }
    // }

    public function findTicketId($id) {
        $this -> db -> query('SELECT * FROM guides WHERE employee_id = :employee_id ORDER BY id DESC LIMIT 1');

        //Bind value
        $this->db->bind(':employee_id', $id);

        $row = $this->db->single();

        

        if ($row) {
            return $row;
        } else {
            return false;
        }

    }

    public function findTicket($id) {
        $this -> db -> query('SELECT * FROM tickets WHERE id = :id');

        //Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    public function findTourismSite($id) {
        $this -> db -> query('SELECT * FROM tourismSites WHERE id = :id');

        //Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    public function findUserById($id) {
        $this -> db -> query('SELECT * FROM users WHERE id = :id');

        //Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    public function addReport($data, $id) {
        $this->db->query('INSERT INTO reports (guide_id , user_name, user_email, site_name, description) VALUES (:guide_id, :user_name, :user_email, :site_name, :description)');

        //Bind values
        $this->db->bind(':guide_id', $id);
        $this->db->bind(':user_name', $data['name']);
        $this->db->bind(':user_email', $data['email']);
        $this->db->bind(':site_name', $data['siteName']);
        $this->db->bind(':description', $data['description']);        

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}