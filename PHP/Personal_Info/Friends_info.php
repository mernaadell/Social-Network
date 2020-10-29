<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";

$output = '    
<HTML>
<head>
<style> 
#fri{
color: #1F4DFF;
margin-bottom:0px;
}
</style>
</head>
<body>';

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error){
    	die("Connection failed: " . mysqli_connect_error());
}
 
else{
    $uemail=$_SESSION['email'];
    $q = mysqli_query($conn,"SELECT * FROM friendship WHERE user_email= '$uemail' and request_status='0'");
    $count = mysqli_num_rows($q);
    $i = 0;
    while($row=mysqli_fetch_array($q)){                   
    $friend = $row['friend_email'];
    $output .= '<p id = "fri"> Friend '.$i++.': </p>';
    $output .= $friend;
    }
    echo $output;
}
?>