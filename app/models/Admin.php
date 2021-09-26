<?php
class Admin {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM employees WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register($data) {
        $this->db->query('INSERT INTO employees (username, email, password, carrier) VALUES(:username, :email, :password, :carrier)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':carrier', $data['carrier']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function findEmployeeById($id) {
        $this->db->query('SELECT * FROM employees WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function findAllEmployees() {
        $this->db->query('SELECT * FROM employees');

        $results = $this->db->resultSet();

        return $results;
    }

    public function findAllAttendants($role_attendant) {
        $this->db->query('SELECT * FROM employees WHERE carrier = :carrier');

        $this->db->bind(':carrier', $role_attendant);

        $results = $this->db->resultSet();

        return $results;
    }

    public function findAllSiteManagers($role_siteManager) {
        $this->db->query('SELECT * FROM employees WHERE carrier = :carrier');

        $this->db->bind(':carrier', $role_siteManager);

        $results = $this->db->resultSet();

        return $results;
    }

    public function findAllTourGuides($role_tourGuide) {
        $this->db->query('SELECT * FROM employees WHERE carrier = :carrier');

        $this->db->bind(':carrier', $role_tourGuide);

        $results = $this->db->resultSet();

        return $results;
    }

    public function deleteEmployee($id) {
        $this->db->query('DELETE FROM employees WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findAllTourismSites() {

        $this->db->query('SELECT * FROM tourismSites');

        $results = $this->db->resultSet();

        return $results;

    }

    public function deleteTourismSite($id) {
        $this->db->query('DELETE FROM tourismSites WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findtourismSiteById($id) {
        $this->db->query('SELECT * FROM tourismSites WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateTourismSite($data) {
        $this->db->query('UPDATE tourismSites SET name = :name, description = :description, image = :image, address = :address, contactNo = :contactNo, price = :price  WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contactNo', $data['contactNo']);
        $this->db->bind(':price', $data['price']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addTourismSite($data) {

        $this->db->query('INSERT INTO tourismSites (name, description, image, address, contactNo, price) VALUES ( :name, :description, :image, :address, :contactNo, :price)');

        //$this->db->query('INSERT INTO tourismSites SET name = :name, description = :description, image = :image, address = :address, contactNo = :contactNo, price = :price  WHERE id = :id');

        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contactNo', $data['contactNo']);
        $this->db->bind(':price', $data['price']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findNumberOfTickets() {
       

        $this->db->query('SELECT * FROM tickets');

        $results = count($this->db->resultSet());

        return $results;

    }

    public function findNumberOfUsers() {

        $this->db->query('SELECT * FROM users');

        $results = count($this->db->resultSet());

        return $results;

    }

    public function findNumberOfSites() {
        $this->db->query('SELECT * FROM tourismSites');

        $results = count($this->db->resultSet());

        return $results;
        
    }


    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        $role = 'admin';

        if (password_verify($password, $hashedPassword)) {
            if($role == $row->role){
                return $row; 
            }
                       
            
        } else {
            return false;
        }
    }

    public function findAdminAccount($username) {
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $username );
        $row = $this->db->single();
        return $row;
    }

    public function updateAdmin($data, $id, $role) {
        $this->db->query('UPDATE users SET username = :username, email = :email, password = :password, role = :role WHERE id = :id');

        $this->db->bind(':id', $id);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $role);
       


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function findAllUsers() {
        $this->db->query('SELECT * FROM users');

        $results = $this->db->resultSet();

        return $results;
    }

    public function findFilteredUsers($valueTosearch) {
        $question = "%".$valueTosearch. "%";
        $this->db->query('SELECT * FROM users WHERE username LIKE :username OR email LIKE :email');

        $this->db->bind(':username', $question);
        $this->db->bind(':email', $question);
        $results = $this->db->resultSet();

        return $results;
    }

    public function findFilteredEmployees($valueTosearchEmployee) {
        $question = "%".$valueTosearchEmployee. "%";
        $this->db->query('SELECT * FROM employees WHERE username LIKE :username OR email LIKE :email');

        $this->db->bind(':username', $question);
        $this->db->bind(':email', $question);
        $results = $this->db->resultSet();

        return $results;
    }

}