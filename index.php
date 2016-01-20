<?php
session_start();

define('ROOT', dirname(dirname(__FILE__)));

// 5. Define a basic user table for a mysql database and write a simple CRUD to manage the data
// including a login function.

// Get the url
function global_url($path = NULL)
{
    $base_url = 'http://php-lamp-104185.nitrousapp.com:3000/justit-php-test/index.php/';
    return ( $path == NULL )? $base_url : $base_url.$path ;
}

if ($_SERVER['PATH_INFO'] != "")
{

  $url = explode("/",$_SERVER['PATH_INFO']);

  $classname = ( $url[1] != "" ? $url[1] : 'login');
  $method = ( $url[2] != "" ? $url[2] : 'index');

  // Here we shall load up each class based the url parameters
  if(file_exists('controllers/'.$classname.'.php'))
  {
    include 'controllers/'.$classname.'.php';

    $object = new $classname();

    if(method_exists($object, $method ))
    {
        if(isset($url[3]))
        {
          $object->$method($url[3]);
        }
        else
        {
          $object->$method();
        }
    }
    else
    {
      echo "Method does not exist";
    }
  }

}
else
{
  header('Location: '.global_url());
  die();
}

?>
