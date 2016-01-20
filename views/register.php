<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <h1>Register</h1>
    <p>Register your deatils</p>

    <form action="<?php echo global_url('register/save'); ?>" method="post">
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
      <p>
        <label for="password">Password</label>
        <input name="password" type="password">
      </p>
      <input type="submit">
    </form>

    <p><a href="<?php echo global_url('login/'); ?>">Back to login</a></p>

  </body>
</html>
