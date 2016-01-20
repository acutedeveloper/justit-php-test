<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add new user</title>
  </head>
  <body>
    <h1>Add new user</h1>

    <form action="<?php echo global_url('users/save'); ?>" method="post">
      <p>
        <label for="firstname">First name</label>
        <input name="firstname" type="text" <?php echo (isset($single_user['firstname']) ? 'value="'.$single_user['firstname'].'"' : NULL); ?>>
      </p>
      <p>
        <label for="lastname">Last name</label>
        <input name="lastname" type="text" <?php echo (isset($single_user['lastname']) ? 'value="'.$single_user['lastname'].'"' : NULL); ?>
      </p>
      <p>
        <label for="username">Username</label>
        <input name="username" type="text" <?php echo (isset($single_user['username']) ? 'value="'.$single_user['username'].'"' : NULL); ?>
      </p>
      <?php if(!isset($single_user['id'])): ?>
      <p>
        <label for="password">Password</label>
        <input name="password" type="password">
      </p>
      <?php endif; ?>
      <p>
        <?php echo (isset($single_user['id']) ? '<input type="hidden" name="id" value="'.$single_user['id'].'">' : NULL); ?>
        <input type="submit">
      </p>
    </form>

    <p><a href="<?php echo global_url('users'); ?>">Back to main list</a></p>

  </body>
</html>
