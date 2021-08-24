<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }

    public function index() {

        $ticketNos = $this->adminModel->findNumberOfTickets();
        $userNos = $this->adminModel->findNumberOfUsers();
        $tourismSiteNos = $this->adminModel->findNumberOfSites();
        $data = [
            'ticketNos' => $ticketNos,
            'userNos' => $userNos,
            'tourismSiteNos' => $tourismSiteNos
        ];

        $this -> view('admins/index', $data);
    }

    public function addUser() {

        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'carrier' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'carrierError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'carrier' => trim($_POST['carrier']),
                'usernameError' => '',                
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'carrierError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->adminModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

            // Validate password on length, numeric values,
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
              } elseif(strlen($data['password']) < 6){
                $data['passwordError'] = 'Password must be at least 8 characters';
              } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
              }
  
              //Validate confirm password
            if (empty($data['confirmPassword'])) {
                  $data['confirmPasswordError'] = 'Please enter password.';
              } else {
                  if ($data['password'] != $data['confirmPassword']) {
                  $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                  }
              }

              // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->adminModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/admins/index');
                } else {
                    die('Something went wrong.');
                }
            }


        } else {
            $data = [
                'username' => '',
                'email' => '',
                'password' => '',
                'confirmPassword' => '',
                'usernameError' => '',
                'carrier' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'carrierError' => ''
            ];
    
        }

        $this -> view('admins/addUser', $data);
    }

    public function sites() {

        $this -> view('admins/sites');
    }

    public function manageUsers() {
        $role_attendant = 'Attendant';
        $role_siteManager = 'Site Manager';
        $role_tourGuide = 'Tour Guide';
        $employees = $this->adminModel->findAllEmployees();
        $attendants = $this->adminModel->findAllAttendants($role_attendant);
        $sitemanagers = $this->adminModel->findAllSiteManagers($role_siteManager);
        $tourGuides = $this->adminModel->findAllTourGuides($role_tourGuide);

        $data = [
            'employees' => $employees,
            'attendants' => $attendants,
            'siteManagers' => $sitemanagers,
            'tourGuides' => $tourGuides
        ];

        $this->view('admins/manageUsers', $data);
    }

    public function delete($id) {
        

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deleteEmployee($id)) {
                    header("Location: " . URLROOT . "/admins/manageUsers");
            } else {
               die('Something went wrong!');
            }
        }
    }

    public function manageTourismSite() {

        $tourismSites = $this->adminModel->findAllTourismSites();
        $data = [
            'tourismSites' => $tourismSites
        ];

        $this->view('admins/manageTourismSite', $data);
    }

    public function deleteTourismSite($id) {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deleteTourismSite($id)) {
                    header("Location: " . URLROOT . "/admins/manageTourismSite");
            } else {
               die('Something went wrong!');
            }
        }

    }
    
    public function updateTourismSite($id) {

        $tourismSite = $this->adminModel->findtourismSiteById($id);

        $data = [
            'tourismSite' => $tourismSite,
            'nameError' => '',
            'descriptionError' => '',
            'imageError' => '',
            'addressError' => '',
            'contactNoError' => '',
            'priceError' => ''
        ];

        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            

           

            

           

            $data = [
                'id' => $id,
                'tourismSite' => $tourismSite,
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'image' => trim($_POST['image']),
                'address' => trim($_POST['address']),
                'contactNo' => trim($_POST['contactNo']),
                'price' => trim($_POST['price']),
                'nameError' => '',
                'descriptionError' => '',
                'imageError' => '',
                'addressError' => '',
                'contactNoError' => '',
                'priceError' => ''
            ];

            if (!empty($_FILES['image']['name'])) {
                $image_name = time() . '_' . $_FILES['image']['name'];
                $destination = '/opt/lampp/htdocs/visit-addis/public/img/' . $image_name;
        
                $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
                if ($result) {
                    $data['image'] = $image_name;
        
                } else {
                    $data['imageError'] = 'Failed to upload image';
                }
        
            } else {
                $data['imageError'] = 'Post image required';
            }


            // if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            //     $info = getimagesize($_FILES['image']['tmp_name']);
            //     $allowedTypes = [IMAGETYPE_JPEG=>'.jpg',

            //                     IMAGETYPE_PNG=>'.png',

            //                     IMAGETYPE_GIF=>'.gif'];//accept jpg, png, gif
            //     if($info === false) { //no go
            //         $data['imageError'] = 'Bad file format';
            //     } elseif(!array_key_exists($info[2], $allowedTypes)){//no go
            //         $data['imageError'] = 'Not an accepted file type';
            //     } else {
            //         //save the picture in the image folder
            //         $path = URLROOT . '/public/img/';
            //         $filename = uniqid().$allowedTypes[$info[2]];
            //         $data['image'] = $filename;
            //         move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
            //     }
            // }
                // $targetDir1= URLROOT. "public/img/imageuploads/";
                // if(isset($_FILES['image'])){
                //     $fileName1 = $_FILES['image']['name'];
                // $targetFilePath1 = $targetDir1 . $fileName1;
                // //$main_tmp2 = $_FILES['ic']['tmp_name'];
                // $move2 =move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath1);
                // $data['image'] = $filename;
                // }
            

            if(empty($data['name'])) {
                $data['nameError'] = 'The name of a site cannot be empty';
            }

            if(empty($data['description'])) {
                $data['descriptionError'] = 'The description of a site cannot be empty';
            }
            // if(empty($data['image'])) {
            //     $data['imageError'] = 'The image of a site cannot be empty';
            // }
            if(empty($data['address'])) {
                $data['addressError'] = 'The address of a site cannot be empty';
            }
            if(empty($data['contactNo'])) {
                $data['contactNoError'] = 'The contact No. of a site cannot be empty';
            }
            if(empty($data['price'])) {
                $data['priceError'] = 'The price of a site cannot be empty';
            }

            if (empty($data['nameError']) && empty($data['descriptionError'])
                && empty($data['imageError']) && empty($data['addressError'])
                && empty($data['contactNoError']) && empty($data['priceError'])) {                   
                
                if ($this->adminModel->updateTourismSite($data)) {
                    header("Location: " . URLROOT . "/admins/manageTourismSite");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('admins/updateTourismSite', $data);
            }

        }

        $this->view('admins/updateTourismSite', $data);
    }

    public function addTourismSite() {
        
        $data = [
            'name' => '',
            'description' => '',
            'image' => '',
            'address' => '',
            'contactNo' => '',
            'price' => '',
            'nameError' => '',
            'descriptionError' => '',
            'imageError' => '',
            'addressError' => '',
            'contactNoError' => '',
            'priceError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'image' => trim($_POST['image']),
                'address' => trim($_POST['address']),
                'contactNo' => trim($_POST['contactNo']),
                'price' => trim($_POST['price']),
                'nameError' => '',
                'descriptionError' => '',
                'imageError' => '',
                'addressError' => '',
                'contactNoError' => '',
                'priceError' => ''
            ];

            if (!empty($_FILES['image']['name'])) {
                $image_name = time() . '_' . $_FILES['image']['name'];
                $destination = '/opt/lampp/htdocs/visit-addis/public/img/' . $image_name;
        
                $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
                if ($result) {
                    $data['image'] = $image_name;
        
                } else {
                    $data['imageError'] = 'Failed to upload image';
                }
        
            } else {
                $data['imageError'] = 'Post image required';
            }



            if(empty($data['name'])) {
                $data['nameError'] = 'The name of a site cannot be empty';
            }

            if(empty($data['description'])) {
                $data['descriptionError'] = 'The description of a site cannot be empty';
            }
            // if(empty($data['image'])) {
            //     $data['imageError'] = 'The image of a site cannot be empty';
            // }
            if(empty($data['address'])) {
                $data['addressError'] = 'The address of a site cannot be empty';
            }
            if(empty($data['contactNo'])) {
                $data['contactNoError'] = 'The contact No. of a site cannot be empty';
            }
            if(empty($data['price'])) {
                $data['priceError'] = 'The price of a site cannot be empty';
            }

            if (empty($data['nameError']) && empty($data['descriptionError'])
                && empty($data['imageError']) && empty($data['addressError'])
                && empty($data['contactNoError']) && empty($data['priceError'])) {                   
                
                if ($this->adminModel->addTourismSite($data)) {
                    header("Location: " . URLROOT . "/admins/manageTourismSite");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('admins/addTourismSite', $data);
            }


        }


        $this->view('admins/addTourismSite', $data);
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->adminModel->login($data['username'], $data['password']);
                
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                    header('location:' . URLROOT . '/admins/index');
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('admins/login', $data);
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
       
        $this->view('admins/login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
      
        // if($_SESSION['role'] == 'visitor'){
        //     header('location:' . URLROOT . '/tourismSites/index');
        // } elseif($_SESSION['role'] == 'reception') {
        //     header('location: ' . URLROOT . '/receptions/index');
        // } elseif($_SESSION['role'] == 'tourGuide') {
        //     header('location: ' . URLROOT . '/tourGuides/index');
        // }   else {
        //     echo "You are not logged in";
        // }
      
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        header('location:' . URLROOT . '/admins/login');
    }

    public function manageAdminAccount() {
        
        
        $adminAccount = $this->adminModel->findAdminAccount($_SESSION['username']);

        $data = [
            'admin' => $adminAccount,
            'username' => '',
            'email' => '',
            'password' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'admin' => $adminAccount,
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate email
            if(empty($data['email'])) {
                $data['emailError'] = 'Please enter an email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $updateAdmin = $this->adminModel->updateAdmin($data, $_SESSION['user_id'], $_SESSION['role']);
                
                if ($updateAdmin) {
                    
                    header('location:' . URLROOT . '/admins/index');
                } 
            }
        }



        $this->view('admins/manageAdminAccount',$data);
    }

   
}
