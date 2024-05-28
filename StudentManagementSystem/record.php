<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: index.php"); // Redirect the user to the login page if they are not logged in
    exit;
}
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Student Records</title>
<link rel="stylesheet" href="recordstyle.css">
</head>

<body>
<a href="system.php" style="text-decoration: none;">
    <h2 style="text-align: center; color: white;">Student Management System</h2>
</a>
<form method="post" action="#" style="text-align:center">
    <input type="text" name="id" placeholder="Search By ID" style="color:black;" />
    <input type="text" name="name" placeholder="Search By Name" style="color:black;" />
    <select name="class" id="class">
        <option value="" disabled selected hidden>Search by Class</option>
        <option value="Nursery">Nursery</option>
        <option value="KG">KG</option>
        <option value="Class 1">Class 1</option>
        <option value="Class 2">Class 2</option>
        <option value="Class 3">Class 3</option>
        <option value="Class 4">Class 4</option>
        <option value="Class 5">Class 5</option>
        <option value="Class 6">Class 6</option>
        <option value="Class 7">Class 7</option>
        <option value="Class 8">Class 8</option>
        <option value="Class 9">Class 9</option>
        <option value="Class 10">Class 10</option>
        <option value="Class 11">Class 11</option>
        <option value="Class 12">Class 12</option>
    </select>
    <input type="submit" name="search" value="Search" style="background-color: #008cba;" />
</form>

<?php
if (isset($_POST['search'])) {
    $conditions = [];

    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $conditions[] = "id = '$id'";
    }
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        $conditions[] = "name = '$name'";
    }
    if (!empty($_POST['class'])) {
        $class = $_POST['class'];
        $conditions[] = "class = '$class'";
    }

    if (count($conditions) > 0) {
        $query = "SELECT * FROM data WHERE " . implode(' OR ', $conditions);
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);

        if ($total > 0) {
            echo '<h3 align="center">Records of the Students</h3>';
            echo '<table align="center" width="90%">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Class</th>
                        <th>Address</th>
                    </tr>';
            
            while ($result = mysqli_fetch_assoc($data)) {
                echo '<tr>
                        <td>' . $result['id'] . '</td>
                        <td>' . $result['name'] . '</td>
                        <td>' . $result['gender'] . '</td>
                        <td>' . $result['email'] . '</td>
                        <td>' . $result['number'] . '</td>
                        <td>' . $result['class'] . '</td>
                        <td>' . $result['address'] . '</td>
                      </tr>';
            }
            echo '</table>';
        } else {
            echo '<p align="center" style="color: red;">No records found</p>';
        }
    } else {
        echo '<p align="center" style="color: red;">Please enter at least one search criterion.</p>';
    }
}
?>
</body>
</html>
