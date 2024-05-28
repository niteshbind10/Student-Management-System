<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "students_db";

//connect to database
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    
    //echo "Connection successful";
}
else 
{
    echo "Connection failed";
}

?>