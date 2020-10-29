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
if ($conn->connect_error){
    	die("Connection failed: " . mysqli_connect_error());
} 

else {
    echo $_SESSION['friendfirstname'].' <br'
    .$_SESSION['friendlastname'].'<br> '
    .$_SESSION['friendemail'].' <br>'
    .$_SESSION['friendgender'].'<br> '
    .$_SESSION['friendhometown'].' <br>'
    .$_SESSION['friendstatus'].'<br> '
    .$_SESSION['friendphone'].'<br> '; 
    $memail=$_SESSION['email'];
    $mfemail=$_SESSION['friendemail'];

    if(isset($_POST['add'])){
           // header("location:login.php");
           $qry = mysqli_query($conn,"INSERT INTO friendship (user_email, friend_email ,request_status)VALUES('$memail',
                '$mfemail','1')");
            if($qry)
            {
                echo "your friend request done";
            }

    }
           

    else {
        echo $_SESSION['friendfirstname'].' <br'
        .$_SESSION['friendlastname'].'<br> '
        .$_SESSION['friendemail'].' <br>'
        .$_SESSION['friendgender'].'<br> '
        .$_SESSION['friendhometown'].' <br>'
        .$_SESSION['friendstatus'].'<br> '
        .$_SESSION['friendphone'].'<br> '; 
    }
        $conn->close();
}

?>

<!DOCTYPE html>
<html>
<body>
 <form action="" method="post">
    <input type="submit" value="Add friend" name="add">
    </form>
</body>
</html>