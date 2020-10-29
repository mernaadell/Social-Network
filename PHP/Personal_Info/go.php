<?php


$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";


// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error){
    	die("Connection failed: " . mysqli_connect_error());
} 

else{
 $memail=$_SESSION['email'];
                        $mfemail=$_SESSION['friendemail'];
                        
  $qry = mysqli_query($conn,"INSERT INTO friendship (user_email, friend_email ,request_status)VALUES('$memail',
                        '$mfemail','1')");
                    if($qry)
                    {
                        echo "your friend request done";
                    }
                   
}

?>