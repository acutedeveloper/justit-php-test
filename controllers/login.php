<?php

class Login
{

  var $error_message;

  function index()
  {
    // Load up the login page
    include('views/login.php');
  }

  function authenticate()
  {
    if(!empty($_POST['username']) && !empty($_POST['password'] != '') )
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Load the CRUD
      require(ROOT.'/justit-php-test/models/crud.php');

      $crud_login = new Crud();

      if($crud_login->login($username, md5($password)))
      {
          // Set sessions
          $_SESSION['is_logged_in'] = TRUE;
          // redirect to users
          header('Location: '.global_url().'users');
          die();
      }
      else
      {
        echo 'Sorry login details are wrong';
        // Set error return to login page
        $this->index();
      }
    }
    else
    {
      // Return back to the login
      $this->error_message = "Please fill out the form";
      $this->index();
    }
  }

  public function logout()
  {
    // unset sessions
    // Set logout success message
    $_SESSION = array();
    session_destroy();

    // return to login page
    echo 'You have been logged out';
    header('Location: '.global_url());
  }

}


?>
