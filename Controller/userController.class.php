<?php

class userController {
 private $userManager;
 private $user;

 public function __construct($db1) {
 	require(__DIR__ . '/../Model/User.class.php');
    require_once(__DIR__ . '/../Model/UserManager.class.php');
	$this->userManager = new UserManager($db1);
 	$this->db = $db1 ;
 }
 public function login() {
 	$page = 'login';
 	require('./Views/user/login.php');
 }
 public function doLogin() {
    $this->user = new User();

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $this->userManager->findByEmailAndPassword($email, $password);

        if ($result) {
            $info = "Connexion réussie";
            $_SESSION['user'] = $result;
            $page = 'home';
        } else {
            $info = "Identifiants incorrects.";
        }
    } else {
        $info = "Veuillez fournir une adresse e-mail et un mot de passe.";
    }

    require_once('./Views/user/login.php');
}

 public function create() {
 	$page = 'create';
 	require('./Views/user/create.php');
 }

 public function doCreate() {
        if (
            isset($_POST['email']) &&
            isset($_POST['password']) &&
            isset($_POST['lastName']) &&
            isset($_POST['firstName']) &&
            isset($_POST['adress']) &&
            isset($_POST['postalCode']) &&
            isset($_POST['city'])
        ) {
            $alreadyExist = $this->userManager->findByEmail($_POST['email']);
            if (!$alreadyExist) {
                $newUser = new User($_POST);
                $this->userManager->create($newUser);
                $page = 'login';
            } else {
                $error = "ERROR: This email (" . $_POST['email'] . ") is used by another user";
                $page = 'create';
            }
        }
        require('./Views/default.php');
    }

    public function home() {
 	$page = 'home';
 	require('./Views/home.php');
 }
 public function usersList() {
 	$page = 'usersList';
 	require('./Views/usersList.php');
 }
}