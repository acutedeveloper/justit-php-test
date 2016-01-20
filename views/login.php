<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <body>
    <h1>Login Page</h1>

    <form action="<?php echo global_url('login/authenticate'); ?>" method="post">
      <p>
        <label for="username">Username</label>
        <input name="username" type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input name="password" type="password">
      </p>
      <input type="submit">    </form>

    <a href="<?php echo global_url('register'); ?>">register account</a>

  </body>
</html>
