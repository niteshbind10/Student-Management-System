<?php
include("connection.php");

if(isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Insert user data into database
  $query = "INSERT INTO admintable (username, binary_password) VALUES ('$username', '$password')";
  $result = mysqli_query($conn, $query);

  if($result) {
    echo "<script>alert('Registration successful. You can now login.');</script>";
  } else {
    echo "<script>alert('Error: Registration failed.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup_style.css">
</head>
<body>
  <div class="signup-container">
    <form action="#" method="POST">
      <h2>Sign Up</h2>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="register">Register</button>
      <p id="success"></p>
    </form>
  </div>
</body>
</html>
