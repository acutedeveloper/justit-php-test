<?php

class Register
{

  var $error_message;

  function __construct()
  {
    // Check login
  }

  function index()
  {
    // Load up the login page
    include('views/register.php');
  }

  function save()
  {
    if(!empty($_POST['username']) && !empty($_POST['password'] != '') )
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Load the CRUD
      require(ROOT.'/justit-php-test/models/crud.php');

      $register_user = new Crud();

      if(isset($_POST))
      {
        // Start building array
        $user_data = array(
          'firstname' => $_POST['firstname'],
          'lastname' => $_POST['lastname'],
          'username' => $_POST['username'],
          'password' => md5($_POST['password'])
        );

        if($new_id = $register_user->create($user_data))
        {
          include('views/register-success.php');
        }

      }

    }
    else
    {
      // Return back to the login
      $this->error_message = "Please fill out the form";
      $this->index();
    }
  }

}


?>
