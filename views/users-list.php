<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List of users</title>
  </head>
  <body>
    <h1>List of users</h1>

    <p><a href="<?php echo global_url('users/edit'); ?>">Add new user</a></p>
    <table border="1">
      <tr>
        <td>first name</td>
        <td>last name</td>
        <td>username</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
    <?php if(!empty($users)): ?>
      <?php foreach ($users as $user): ?>
      <tr>
        <td><?php echo $user['firstname'] ?></td>
        <td><?php echo $user['lastname'] ?></td>
        <td><?php echo $user['username'] ?></td>
        <td><a href="<?php echo global_url('users/edit/'.$user['id']); ?>">Edit user</a></td>
        <td><a href="<?php echo global_url('users/delete/'.$user['id']); ?>">Delete user</a></td>
      </tr>
    <?php endforeach; ?>
    <?php endif; ?>
    </table>
    <p><a href="<?php echo global_url('login/logout'); ?>">Logout</a></p>
  </body>
</html>
