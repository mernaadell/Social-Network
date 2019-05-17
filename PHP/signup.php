<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="socialnetwork";

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
			// $image=$_FILES['pic']['name'];
			// $filetempname=$_FILES['pic']['tmpname'];
			// $folder='uploadedimages/';
			//move_uploaded_file($filetempname, $folder.$filename);
			$sql="INSERT INTO user(`first_name`, `last_name`, `nick_name`, `pass_word`, `user_email`, `phone_number`, `home_town`, `about_me`, `user_status`, `birth_date`, `user_gender`, `user_image`)VALUES('$firstname','$lastname','$nickname','$password','$email','$phone','$hometown','$aboutme','$mstatus','$birtdate','$gender','$')";
			$qry=mysqli_query($conn,$sql);
			if($qry){
				echo "done";

			}


		}
	
			

   $conn->close();
}

?>
