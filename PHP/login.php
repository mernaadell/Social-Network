<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";
$output="";
session_start();
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
    			
                $_SESSION['firstname']=$row['first_name'];
                $_SESSION['lastname']=$row['last_name'];
                $_SESSION['email']=$row['user_email'];
                $_SESSION['gender']=$row['user_gender'];
                $_SESSION['hometown']=$row['home_town'];
                $_SESSION['aboutme']=$row['about_me'];
                $_SESSION['status']=$row['user_status'];
                $_SESSION['phone']=$row['phone_number'];
                $_SESSION['bday']=$row['birth_date'];
              
                
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