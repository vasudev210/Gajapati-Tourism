<?php
session_start();
$error = '';


$server_name="localhost";
$username="root";
$password="";
$database_name="gajapati";

$conn=mysqli_connect($server_name,$username,$password,$database_name);


if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
	$pass = $_POST['pass'];

    
    $sql = "SELECT * FROM `entry_details` WHERE `email` = '$email' AND `pass` = '$pass'";
    
    $result = mysqli_query($conn, $sql);
    if ($result)
        {
            // while ($row = mysqli_fetch_assoc($result))
            // {
                // $email = $row['email'];
                // $pass = $row['pass'];
                echo "login successfull...";
                header("location: entry.html");

            // }
        }
        else
        {
            echo "Your Login email or Password is invalid";
            
        }

    
    // if (mysqli_query($conn, $sql)) {
        
    //     $_SESSION['email'] = $email; 
    //     header("location: index.html");
    // } else {
    //     $error = "Your Login Name or Password is invalid";
    // }
}

mysqli_close($conn);
?>