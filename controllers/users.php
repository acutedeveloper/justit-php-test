<?php

class Users
{

  var $crud_users;

  function __construct()
  {
    require(ROOT.'/justit-php-test/models/crud.php');

    $this->crud_users = new Crud();
    $this->is_logged_in();
  }

  function is_logged_in()
  {
    if($_SESSION['is_logged_in'] != TRUE)
    {
      header('Location: '.global_url().'login');
      die();
    }
  }

  public function index()
  {
      // Load up list of users
      $users = $this->crud_users->retrieve();

      include('views/users-list.php');
  }

  public function edit($user_id = NULL)
  {
    // Get the user info from db
    if($user_id != NULL)
    {
      $single_user = $this->crud_users->retrieve($user_id);
    }

    // Load the info into view
    include('views/users-add.php');
  }

  // This method combines both create and update
  public function save()
  {
    if(isset($_POST))
    {
      // Start building array
      $user_data = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'username' => $_POST['username'],
      );

      if(isset($_POST['id']))
      {
        $user_data['id'] = $_POST['id'];

        if($this->crud_users->update($user_data))
        {
          header('Location: '.global_url().'users/edit/'.$user_data['id']);
          die();
        }
      }
      else
      {
        $user_data['password'] = md5($_POST['password']);

        if($new_id = $this->crud_users->create($user_data))
        {
          header('Location: '.global_url().'users/edit/'.$new_id);
          die();
        }
      }
    }
    else
    {
      $this->index();
    }

  }

  public function delete($user_id)
  {
    // Delete a user
    if($user_id != NULL)
    {
      if($this->crud_users->delete($user_id))
      {
        header('Location: '.global_url().'users');
        die();
      }
    }
    else
    {
      echo "Invalid id";
      $this->index();
    }

  }


}


?>
