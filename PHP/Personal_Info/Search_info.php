<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";

$output = '    
<HTML>
<head>
<style> 
#sea{
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
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]#i", "", $search);
    echo $search;
    $q = mysqli_query($conn,"SELECT * FROM user_ WHERE nick_name like '%$search%' or first_name like '%$search%' or last_name like '%$search%'");
    $count = mysqli_num_rows($q);
    if($count == 0){
        $output = 'No search result';
    }
    else{
        $row = mysqli_fetch_array($q);
        $fname = $row['first_name'];
        $lname=$row['last_name'];
        $_SESSION['friendfirstname']=$row['first_name'];
        $_SESSION['friendlastname']=$row['last_name'];
        $_SESSION['friendemail']=$row['user_email'];
        $_SESSION['friendgender']=$row['user_gender'];
        $_SESSION['friendhometown']=$row['home_town'];
        $_SESSION['friendaboutme']=$row['about_me'];
        $_SESSION['friendstatus']=$row['user_status'];
        $_SESSION['friendphone']=$row['phone_number'];
        $_SESSION['friendbday']=$row['birth_date'];

        $output .= 
        '<p id = "sea"> First Name:</p>' .$_SESSION['friendfirstname'] .' <br>
        <p id = "sea"> Last Name:</p>'.$_SESSION['friendlastname'].' <br>
        <p id = "sea"> Email: </p>'.$_SESSION['friendemail'].'<br> 
        <p id = "sea"> Gender: </p>'.$_SESSION['friendgender'].'<br>
        <p id = "sea"> Hometown: </p>'.$_SESSION['friendhometown'].'<br>
        <p id = "sea"> About: </p>'.$_SESSION['friendaboutme'].'<br>
        <p id = "sea"> Status: </p>'.$_SESSION['friendstatus'].'<br>
        <p id = "sea"> Phone: </p>'.$_SESSION['friendphone'].'<br>
        <p id = "sea"> Birthday: </p>'.$_SESSION['friendbday'].' <br>';
        }  
        echo $output;
}
?>
