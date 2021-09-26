<?php
class SiteManager {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllReports() {
        $this->db->query('SELECT * FROM reports ORDER BY id ASC ');
        
        $results = $this->db->resultSet();
        return $results;
    }

    public function findWeeklyTickets() {
        $this->db->query('SELECT  SUM(numberOfTicket * price) as total FROM tickets INNER JOIN tourismSites ON tourismSites.id = tickets.tourismSite_id WHERE visitingDate > DATE_SUB(NOW(), INTERVAL 7 DAY)');
        $results = $this->db->single();
        return $results;
    }

    public function findMonthlyTickets() {
        $this->db->query('SELECT  SUM(numberOfTicket * price) as total FROM tickets INNER JOIN tourismSites ON tourismSites.id = tickets.tourismSite_id WHERE visitingDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)');
        $results = $this->db->single();
        return $results;
    }

    public function findQuarterlyTickets() {
        $this->db->query('SELECT  SUM(numberOfTicket * price) as total FROM tickets INNER JOIN tourismSites ON tourismSites.id = tickets.tourismSite_id WHERE visitingDate > DATE_SUB(NOW(), INTERVAL 3 MONTH)');
        $results = $this->db->single();
        return $results;
    }

    public function findTicketPrice($id) {
        $this->db->query('SELECT * FROM tickets WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
}