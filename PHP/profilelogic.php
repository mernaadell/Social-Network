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
           
            if(isset($_POST['show']))
            {
              
              echo $_SESSION['firstname'].' '
                        .$_SESSION['lastname'].' '
                        .$_SESSION['email'].' '
                        .$_SESSION['gender'].' '
                        .$_SESSION['hometown'].' '
                        .$_SESSION['aboutme'].' '
                        .$_SESSION['status'].' '
                        .$_SESSION['phone'].' '
                        .$_SESSION['bday'].' ';          
            }
         
    	if(isset($_POST['search']))
    	{
        		$search=$_POST['search'];
        		$search=preg_replace("#[^0-9a-z]#i", "", $search);

        		$qry="SELECT * FROM user_ WHERE nick_name like '%$search%' or first_name like '%$search%' or last_name like '%$search%' ";
        		$q=mysqli_query($conn,$qry);
        		$count=mysqli_num_rows($q);
        		if($count==0)
        			$output='no search result';
        		else
        		{
        			//while(){
                    $row=mysqli_fetch_array($q);
        			$fname=$row['first_name'];
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
        			$output.='<div> 
                    <a href="user.php">' .$fname.' '.$lname;

               // }
               
        		}

                echo $output.'</a></div>';

    	}

	
			

   $conn->close();
}

?>