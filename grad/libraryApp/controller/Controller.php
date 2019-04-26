<?php
include_once 'model/LibraryDB.php';
include_once 'model/Book.php';
require_once("model/Fields.php");
require_once("model/Validator.php");
include_once 'smarty/libs/Smarty.class.php';

class Controller {
    private $action;
    private $view;
    private $library_db;
    private $error_msg;
    
    /**
     * setup the controller
     */
    public function __construct() {
         //$this->forcehttps();
         session_start();
        $this->library_db = new LibraryDB();
        if ($this->library_db->isConnected()) {
            $this->action = '';
            $this->error_msg = '';
        }
        else {
            $this->action = 'error';
            $this->error_msg = 'unable to connect to the database';
        }
        $this->view = new Smarty();
        
        if (isset($_SESSION['is_valid_user']) && $_SESSION['is_valid_user'] == True) {
		    $this->view->assign('logInOut', 'Logout');
		}
       
    }
    
    /**
     * determine which action to take
     */
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                if (isset($_SESSION['user']) == True){
                    $this->view->display('welcomeback.tpl'); 
			        
                }else{
                    
                    $this->view->display('home.tpl');
                }
                break;
            case 'show_catalog_page':
               if (isset($_SESSION['is_valid_user']) && $_SESSION['is_valid_user'] == True) {
		            $this->showCatalogPage();
	        	}else{
	        	    $this->view->assign('message', 'Login to view catalog.');
	        	    $this->view->display('login.tpl');
	        	}
                break;
            case 'show_locations_page':
                $this->showLocationsPage();
                break;
            case 'show_contact_page':
                $this->showContactPage();
                break;
            case 'process_contact_form':
                $this->processContactpage();
                break;
            case 'process_registration_form':
                $this->processRegistrationPage();
                break;
            case 'show_login_page':
                $this->showLoginPage();
                break;
            case 'login_logout' :
                $this->logoutUser();
			    break;   
            case 'login_user':
			    $this->loginUser(); 
			    break;
            case 'show_registration_page':
                $this->showRegistrationPage();
                break;
            default:
                $this->view->assign('error_msg', $this->error_msg);
                $this->view->display('error.tpl');
                break;
        }
    }
    
    /*--------------------------------------------------------------
     *
     * Process requested page
     *
     *------------------------------------------------------------*/
    private function showCatalogPage() {
        $book_catalog = $this->library_db->getBookCatalog();
        $this->view->assign('book_catalog', $book_catalog);
        $this->view->display('catalog.tpl');
    }
    
    private function loginUser(){
         $user = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		 $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		
			    if ($this->library_db->isValidUser($user, $password)) {
			        $_SESSION['is_valid_user'] = True;
			        $_SESSION['user'] = $user;

			        $this->view->assign('user', $user);
			        $this->view->display('welcomeback.tpl');
			      
			    }
			    else {
			        $this->view->assign('message', 'Invalid login information.');
			        $this->view->display('login.tpl');
			    }
    }
    
    private function logoutUser() {
        // Check whether the user is logged in and therefore requests to log out
	    if (isset($_SESSION['is_valid_user']) && $_SESSION['is_valid_user'] == True) {
		 // Clear session data from memory
		$_SESSION = array();
		// Clean up the session ID
		session_destroy();
		 // Get seesion cookie name
		$name = session_name();
		// Ceate expiration date in past
		$expire = strtotime('-1 year');
		// Get session params
		$params = session_get_cookie_params();
		$path = $params['path'];
		$domain = $params['domain'];
		$secure = $params['secure'];
		$httponly = $params['httponly'];
		setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
			        
		$this->view->assign('message', 'You have successfully logged out');
		$this->view->assign('logInOut', 'Login');
		}
		$this->view->display('login.tpl');
    }
    
    private function showLocationsPage() {
        $this->view->display('locations.tpl');
    }
    
    private function showContactPage() {
        $libraries = $this->library_db->getLibraries();
        $fields = new Fields();
        $fields->addField('name', '');
        $fields->addField('email', '');
        $fields->addField('phone', '');
        $fields->addField('date', '');
        $fields->addField('libraryID', 0);
        $fields->addField('comments', '');
        
        // assign smarty variables for the view
        $this->view->assign('libraries',$libraries);
        $this->view->assign('fields', $fields);
        
        $this->view->display('contact.tpl');
    }
    
    private function showRegistrationPage(){
        $fields = new Fields();
        $fields->addField('fname', '');
        $fields->addField('lname', '');
        $fields->addField('email', '');
        $fields->addField('phone', '');
        $fields->addField('password', '');
        
        $this->view->assign('fields', $fields);
        
        $this->view->display('registration.tpl');
    }
    
    private function processRegistrationPage(){
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
        $fields = new Fields();
        $fields->addField('fname', $fname, True);
        $fields->addField('lname', $lname, True);
        $fields->addField('email', $email, True);
        $fields->addField('phone', $phone);
        $fields->addField('password', $password);
        Validator::validateAll($fields, $this->library_db);
         
        $this->view->assign('fields', $fields); 
        
        if ($fields->hasError()) {
            $this->view->display('registration.tpl');
        }
        else {
          $this->library_db->addUser($fname, $lname, $email, $phone, $password);
          $this->view->display('confirmregistration.tpl');
        }
 
    }
    
    private function processContactPage() {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $library_id = filter_input(INPUT_POST, 'library', FILTER_SANITIZE_STRING);
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        
        $fields = new Fields();
        $fields->addField('name', $name, True);
        $fields->addField('email', $email, True);
        $fields->addField('phone', $phone);
        $fields->addField('date', $date);
        $fields->addField('libraryID', $library_id);
        $fields->addField('comments', $comments, True);
        Validator::validateAll($fields, $this->library_db);
         
        // assign smarty variables for the view
        $libraries = $this->library_db->getLibraries();
        $this->view->assign('libraries',$libraries);
        $this->view->assign('fields', $fields); 
        
        if ($fields->hasError()) {
            $this->view->display('contact.tpl');
        }
        else {
            $this->library_db->addMessage($library_id, $name, $email, $phone, $date, $comments);
            $this->view->display('confirmcontact.tpl');
        }
    }
    
    private function showLoginPage() {
        $this->view->display('login.tpl');
    }
    
    /*--------------------------------------------------------------
     *
     * Utility Functions
     *
     *------------------------------------------------------------*/
    
    private function getAction() {
        if ($this->action === '') {
            $this->action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($this->action === NULL) {
                $this->action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                if ($this->action === NULL) {
                    $this->action = 'show_home_page';
                }
            }
        }
    }
    
    private function forcehttps() {
        $https = filter_input(INPUT_SERVER, 'HTTPS'); 
    if (!$https) {
        $host = filter_input(INPUT_SERVER, 'HTTP_HOST'); 
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI'); 
        $url = 'https://' . $host . $uri; 
        header("Location: " . $url);
         
        } 
    }
    
}

?>