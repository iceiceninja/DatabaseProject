<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
      <link rel="stylesheet" href="styles.css">
  <style>
    input
    {
      background:green;
      color: yellow;
    }
  </style>
  </head>
  <body>
    <?php
      if (isset($_GET['authenticate']) && $_GET['authenticate'] == 0) {
        echo '<p style="background:red; color: white;">User not found</p>';
      }
      ?>
    <h1>Login</h1>

    <form action="authenticate.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required /><br /><br />

      <label for="password">Password:</label>
      <input
        type="password"
        id="password"
        name="password"
        required
      /><br /><br />

      <input type="submit" value="Login" />
    </form>
  </body>
</html>