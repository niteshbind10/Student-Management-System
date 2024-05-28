<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Management System</title>
  <link rel="stylesheet" href="login_style.css">
</head>
<body>
  <section class="header">
    <form action="#" method="post" autocomplete="off" onsubmit="return validate()">
      <div class="form">
        <h2>Admin Login</h2>
        <input type="text" name="username" placeholder="Username" id="username">
        <input type="password" name="password" placeholder="Password" id="password">
        <button class="btnn" name="button" type="submit">Login</button>
        <p id="success"></p>
      </div>
    </form>
  </section>

  <script>
    function validate() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username == "" || password == "") {
        alert("Please fill all the fields");
        return false;
      } else {
        return true;  
      }
    }

    function loginsuccess() {
      var txt ="Login Successful. Redirecting...";
      document.getElementById("success").innerHTML = txt;
    }
 
    function loginfailed() {
      var failed = document.getElementById("success");
      var txt = "Login failed. Enter valid details!";
      failed.style.color = "red";
      failed.innerHTML = txt;
    }
  </script>

  <?php
    include("connection.php");
    if(isset($_POST['button'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      // Correcting the query
      $query = "SELECT * FROM admintable WHERE username = '$username' AND binary_password = '$password'";
      $data = mysqli_query($conn, $query);
      $total = mysqli_num_rows($data);

      if($total == 1) {
        $_SESSION['username'] = $username;
        ?>
        <script>
          loginsuccess();
          setTimeout(function() {
            window.location.href = "system.php";
          }, 1000); // Wait for 1 second before redirecting
        </script>
        <?php
      } else {
        ?>
        <script>
          loginfailed();
        </script> 
        <?php
      }
    }
  ?>
</body>
</html>
