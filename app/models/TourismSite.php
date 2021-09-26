<?php
class TourismSite{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllTourismSites(){
        $this->db->query('SELECT * FROM tourismSites ORDER BY added_at ASC ');
        
        $results = $this->db->resultSet();
        return $results;
    }

    public function findTourismSiteById($id) {
        $this->db->query('SELECT * FROM tourismSites WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function findUserById($id) {
        $this->db->query('SELECT * FROM users WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function bookTicket($data) {


        $this->db->query('INSERT INTO tickets (ticketNo, tourismSite_id, user_id, userEmail, visitingDate, numberOfTicket) 
        VALUES (:ticketNo, :tourismSite_id, :user_id, :userEmail, :visitingDate, :numberOfTicket)');

       

        $this->db->bind(':ticketNo', $data['ticketNo']);
        $this->db->bind(':tourismSite_id', $data['tourismSite']->id);
        $this->db->bind(':user_id', $data['user']->id);
        $this->db->bind(':userEmail', $data['user']->email);
        $this->db->bind(':visitingDate', $data['date']);
        $this->db->bind(':numberOfTicket', $data['numberOfTicket']);

       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findTicketById($data) {
        $this->db->query('SELECT * FROM tickets WHERE tourismSiteId = :tourismSiteId AND userId = :userId ORDER BY id DESC LIMIT 1');

        
        $this->db->bind(':tourismSiteId', $data['tourismSite']->id);  
        $this->db->bind(':userId', $data['user']->id);
        
        $row = $this->db->single();
        return $row;

    }

  

    
}
