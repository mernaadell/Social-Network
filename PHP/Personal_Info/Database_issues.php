<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error){
    	die("Connection failed: " . mysqli_connect_error());
}
 
else{
    $friend_email =  $_POST['postemail'];
    $user_email = $_SESSION['email'];
    
    if($_POST['postname'] == "rej"){
        $q = mysqli_query($conn,"UPDATE friendship set request_status = '2' WHERE user_email='$user_email' and friend_email='$friend_email'");
        if($q){
            echo "<script type='text/javascript'>
				alert('Rejected!'); 
				location = './friends.php';
				</script>";
        }
    } //If rejected
   
    else if($_POST['postname'] == "acc"){
        $q = mysqli_query($conn,"UPDATE friendship set request_status = '0' WHERE user_email='$user_email' and friend_email='$friend_email'");
        if($q){
        echo "<script type='text/javascript'>
                alert('Done.. Accepted!');
                 
				location = './friends.php';
                </script>";
        }
    } //If accepted

    $conn -> close();
}
?>