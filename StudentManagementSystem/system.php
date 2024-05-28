<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: index.php"); // Redirect the user to the login page if they are not logged in
    exit;
}

include("connection.php");
error_reporting(0);

// Save operation
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $class = $_POST['class'];
    $address = $_POST['address'];

    $checkuser = "SELECT * FROM data WHERE email = '$email' OR number = '$number'";
    $data = mysqli_query($conn, $checkuser);
    $total = mysqli_num_rows($data);

    if ($total != 0) {
        echo "<script>
                alert('Student with given email or phone number already exists');
              </script>";
    } else {
        $query = "INSERT INTO data (name, gender, email, number, class, address) VALUES ('$name', '$gender', '$email', '$number', '$class', '$address')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            $checkuser = "SELECT * FROM data WHERE email = '$email'";
            $data = mysqli_query($conn, $checkuser);
            $result = mysqli_fetch_assoc($data);
            echo "<script>
                    alert('Student added successfully. Id card number: {$result['id']}');
                  </script>";
        } else {
            echo "<script>
                    alert('Something is wrong. Please try again');
                  </script>";
        }
    }
}

// Update operation
if (isset($_POST['modify'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $class = $_POST['class'];
    $address = $_POST['address'];

    $checkuser = "SELECT * FROM data WHERE (email = '$email' OR number = '$number') AND id != '$id'";
    $data = mysqli_query($conn, $checkuser);
    $total = mysqli_num_rows($data);

    if ($total != 0) {
        echo "<script>
                alert('Student with given email or phone number already exists');
              </script>";
    } else {
        $query = "UPDATE data SET name = '$name', gender = '$gender', email = '$email', number = '$number', class = '$class', address = '$address' WHERE id = '$id'";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>
                    alert('Student record updated successfully');
                  </script>";
        } else {
            echo "<script>
                    alert('Failed to update record');
                  </script>";
        }
    }
}

// Delete operation
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM data WHERE id = '$id'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>
                alert('Student record deleted successfully');
              </script>";
    } else {
        echo "<script>
                alert('Failed to delete record');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <style>
        table, td, th {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <a id="hi" href="system.php" style="text-decoration:none;">
            <h1 style="text-align: center; color: rgba(6, 136, 216, 0.911)">Student Management System</h1>
        </a>
        <form method="POST" action="#">
            <input type="text" name="id" id="id" placeholder="ID" value="<?php if (isset($_POST['searchid'])) { echo isset($result['id']) ? $result['id'] : ''; } ?>" />
            <input type="text" name="name" id="name" placeholder="Student Name" value="<?php if (isset($_POST['searchid'])) { echo isset($result['name']) ? $result['name'] : ''; } ?>" />
            <select name="gender" id="gender">
                <option value="" disabled selected hidden>Gender Select</option>
                <option value="male" <?php if (isset($result['gender']) && $result['gender'] == 'male') { echo "selected"; } ?>>Male</option>
                <option value="female" <?php if (isset($result['gender']) && $result['gender'] == 'female') { echo "selected"; } ?>>Female</option>
                <option value="other" <?php if (isset($result['gender']) && $result['gender'] == 'other') { echo "selected"; } ?>>Other</option>
            </select>
            <input type="text" name="email" id="email" placeholder="Email Address" value="<?php if (isset($_POST['searchid'])) { echo isset($result['email']) ? $result['email'] : ''; } ?>" />
            <input type="text" name="number" id="number" placeholder="Phone number" value="<?php if (isset($_POST['searchid'])) { echo isset($result['number']) ? $result['number'] : ''; } ?>" />
            <select name="class" id="class">
                <option value="" disabled selected hidden>Class Select</option>
                <option value="Nursery" <?php if (isset($result['class']) && $result['class'] == 'Nursery') { echo "selected"; } ?>>Nursery</option>
                <option value="KG" <?php if (isset($result['class']) && $result['class'] == 'KG') { echo "selected"; } ?>>KG</option>
                <option value="Class 1" <?php if (isset($result['class']) && $result['class'] == 'Class 1') { echo "selected"; } ?>>Class 1</option>
                <option value="Class 2" <?php if (isset($result['class']) && $result['class'] == 'Class 2') { echo "selected"; } ?>>Class 2</option>
                <option value="Class 3" <?php if (isset($result['class']) && $result['class'] == 'Class 3') { echo "selected"; } ?>>Class 3</option>
                <option value="Class 4" <?php if (isset($result['class']) && $result['class'] == 'Class 4') { echo "selected"; } ?>>Class 4</option>
                <option value="Class 5" <?php if (isset($result['class']) && $result['class'] == 'Class 5') { echo "selected"; } ?>>Class 5</option>
                <option value="Class 6" <?php if (isset($result['class']) && $result['class'] == 'Class 6') { echo "selected"; } ?>>Class 6</option>
                <option value="Class 7" <?php if (isset($result['class']) && $result['class'] == 'Class 7') { echo "selected"; } ?>>Class 7</option>
                <option value="Class 8" <?php if (isset($result['class']) && $result['class'] == 'Class 8') { echo "selected"; } ?>>Class 8</option>
                <option value="Class 9" <?php if (isset($result['class']) && $result['class'] == 'Class 9') { echo "selected"; } ?>>Class 9</option>
                <option value="Class 10" <?php if (isset($result['class']) && $result['class'] == 'Class 10') { echo "selected"; } ?>>Class 10</option>
                <option value="Class 11" <?php if (isset($result['class']) && $result['class'] == 'Class 11') { echo "selected"; } ?>>Class 11</option>
                <option value="Class 12" <?php if (isset($result['class']) && $result['class'] == 'Class 12') { echo "selected"; } ?>>Class 12</option>
            </select>
            <input type="text" name="address" id="address" placeholder="Address" value="<?php if (isset($_POST['searchid'])) { echo isset($result['address']) ? $result['address'] : ''; } ?>" />
            <div class="button-container">
                <a id="my" href="record.php"> Options </a>
                <input type="submit" name="save" onclick="return validate()" value="Save" style="background-color: #008cba" />
                <input type="submit" name="modify" value="Update" onclick="return validate()" style="background-color: #f4b342" />
                <input type="submit" name="delete" value="Delete" onclick="return deletedata()" style="background-color: #f44336;" />
            </div>
            <p id="error"></p>
        </form>
    </div>
</body>
</html>
