<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";
$output="";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
	{
    	die("Connection failed: " . mysqli_connect_error());
    } 
    else
    {

		if (isset($_POST['login']))
		{
			
			$password=$_POST['password'];
			$email=$_POST['email'];
			
    		$q=mysqli_query($conn,"SELECT * FROM user WHERE user_email='$email' and pass_word='$password'");
    		$row=mysqli_fetch_array($q);
    		if($row['user_email']==$email&&$row['pass_word']==$password)
    		{
    			echo "welcome";
    			header('Location: ../profile.html');
    		}
    		else
    		{
    			echo "invalid";
    		}

    		
    				
    			
			
			


		}
	
			

   $conn->close();
}

?>