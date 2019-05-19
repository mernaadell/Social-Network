<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";
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
    	echo "merna";

		if (isset($_POST['signup']))
		{

         
			$firstname=$_POST['firstName'];
			$lastname=$_POST['lastName'];
			$nickname=$_POST['nickName'];
			$password=$_POST['Password'];
			$email=$_POST['Email'];
			$gender=$_POST['sex'];
			$hometown=$_POST['homeTown'];
			$phone=$_POST['phoneNumber'];
			$birtdate=$_POST['bday'];
			$aboutme=$_POST['me'];
			$mstatus=$_POST['status'];
				$_SESSION['firstname']=$firstname;
				$_SESSION['lastname']=$lastname;
				$_SESSION['email']=$email;
				$_SESSION['gender']=$gender;
				$_SESSION['hometown']=$hometown;
				$_SESSION['aboutme']=$aboutme;
				$_SESSION['status']=$mstatus;
				$_SESSION['phone']=$phone;
				$_SESSION['bday']=$birtdate;



			// $image=$_FILES['pic']['name'];
			// $filetempname=$_FILES['pic']['tmpname'];
			// $folder='uploadedimages/';
			//move_uploaded_file($fsiletempname, $folder.$filename);
			
			$sql="INSERT INTO user(`first_name`, `last_name`, `nick_name`, `pass_word`, `user_email`, `phone_number`, `home_town`, `about_me`, `user_status`, `birth_date`, `user_gender`, `user_image`)VALUES('$firstname','$lastname','$nickname','$password','$email','$phone','$hometown','$aboutme','$mstatus','$birtdate','$gender','$')";
			$qry=mysqli_query($conn,$sql);
			if($qry){
				echo "done";
				header("location: ../profile.html");

			}


		}
	
			

   $conn->close();
}

?>


