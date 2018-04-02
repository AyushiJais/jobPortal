<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "PUJA";
$dbname = "jobportal";

//Create connection
$conn = new mysqli($servername , $username , $password , $dbname );

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
if(isset($_POST)){
	$email=$_POST['name1'];
	$pass=$_POST['pass'];

	//echo "email=" . $email;
	//echo "pass=" . $pass;
	//$pass=base64_encode(strrev(md5($pass))); 
	$sql="SELECT firstname,lastname,contact,username FROM users WHERE username='$email' AND password='$pass'";
	$result=$conn->query($sql);
	echo "hey";
	var_dump($result);

	if($result->num_rows >0){
		//echo "row passed";
	while($row=$result->fetch_assoc())
	{
		$_SESSION['name']=$row['firstname'] . " " . $row['lastname'];
		$_SESSION['email']=$row['username'];
		//echo "found";
		header("Location: dashboard.php");
		exit();
	}
	}
	else
	{
		$_SESSION['loginFailed']=true;
		header("Location: login1.php");
		exit();
	}
	$conn->close();
}else
{
	header("Location: login1.php");
	exit();
}
?>