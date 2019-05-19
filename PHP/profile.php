<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";
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
    	if(isset($_POST['search']))
    	{
    		$search=$_POST['search'];
    		$search=preg_replace("#[^0-9a-z]#i", "", $search);
    		$qry="SELECT first_name ,last_name FROM user WHERE nick_name like '%$search%'";
    		$q=mysqli_query($conn,$qry);
    		$count=mysqli_num_rows($q);
    		if($count==0)
    			$output='no search result';
    		else
    		{
    			$row=mysqli_fetch_array($q);
    			$fname=$row['first_name'];
    			$lname=$row['last_name'];
    			$output.='<div>'.$fname.' '.$lname.'';
    		}

            echo $output.'</div>';

    	}

	
			

   $conn->close();
}

?>