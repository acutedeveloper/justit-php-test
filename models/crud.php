<?php

/**
 *  THE CRUD
 */
class Crud
{

  protected $db_connect;

  function __construct()
  {
    //Make DB conection here
    $database = "jit-test";
    $this->db_connect = mysqli_connect('localhost', 'root', '',$database) or die ("<p class='error'>Sorry, we were unable to connect to the database server.</p>");
    mysqli_select_db($this->db_connect, $database) or die ("<p class='error'>Sorry, we were unable to connect to the database.</p>");

  }

  public function login($username, $password)
  {

    $query = "SELECT id, firstname, lastname FROM jit_users
            WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";

    $result = mysqli_query($this->db_connect, $query);

    if (mysqli_num_rows($result) > 0) {
      return true;
    }
  }

  public function create($user_data)
  {
    $query = "INSERT INTO jit_users (firstname, lastname, username, password) VALUES
    ('".$user_data['firstname']."',
    '".$user_data['lastname']."',
    '".$user_data['username']."',
    '".$user_data['password']."')";

    echo $query;

    if (mysqli_query($this->db_connect, $query) === TRUE)
    {
      $new_id = mysqli_insert_id($this->db_connect);
      return $new_id;
    }
    else {
      echo "Not Saved";
    }
  }

  public function update($user_data)
  {
    $query = "UPDATE jit_users SET firstname = '".$user_data['firstname']."', lastname = '".$user_data['lastname']."', username = '".$user_data['username']."' WHERE id = '".$user_data['id']."'";

    if (mysqli_query($this->db_connect, $query) === TRUE)
    {
      return TRUE;
    }
  }

  public function retrieve($user_id = NULL)
  {
    if($user_id == NULL)
    {
        // Return all the users
        $query = "SELECT id, firstname, lastname, username FROM jit_users ORDER BY firstname ASC LIMIT 100";

        $result = mysqli_query($this->db_connect, $query);

        if (mysqli_num_rows($result) > 0)
        {

          $result_array = array();

          while($row = $result->fetch_assoc())
          {
            $result_array[] = $row;
          }

          return $result_array;
        }
    }
    else
    {
      $query = "SELECT id, firstname, lastname, username FROM jit_users WHERE id = '".$user_id."' LIMIT 100";

      $result = mysqli_query($this->db_connect, $query);

      if (mysqli_num_rows($result) > 0) {
        $result = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $result;
      }

    }
  }

  public function delete($user_id)
  {
      $query = "DELETE FROM jit_users WHERE id = '".$user_id."' LIMIT 1";

      if (mysqli_query($this->db_connect, $query) === TRUE)
      {
        return TRUE;
      }
  }
}
