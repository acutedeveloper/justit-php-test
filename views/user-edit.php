<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit user</title>
  </head>
  <body>
    <h1>Edit the details for: </h1>

    <form action="<?php echo global_url('user/save'); ?>" method="post">
      <p>
        <label for="firstname">First name</label>
        <input name="firstname" type="text">
      </p>
      <p>
        <label for="lastname">Last name</label>
        <input name="lastname" type="text">
      </p>
      <p>
        <label for="username">Username</label>
        <input name="username" type="text">
      </p>
      <input type="submit">
    </form>

    <p><a href="<?php echo global_url('login/register_form'); ?>">View all users</a></p>

  </body>
</html>
