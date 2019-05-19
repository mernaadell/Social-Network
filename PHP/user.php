<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";
session_start();
$output=" Results  -> ";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
	{
    	die("Connection failed: " . mysqli_connect_error());
    } 
    else
        {  
             echo $_SESSION['friendfirstname'].' '
                        .$_SESSION['friendlastname'].' '
                        .$_SESSION['friendemail'].' '
                        .$_SESSION['friendgender'].' '
                        .$_SESSION['friendhometown'].' '
                        .$_SESSION['friendstatus'].' '
                        .$_SESSION['friendphone'].' '
                        ;  
           

	
			

   $conn->close();
}

?>