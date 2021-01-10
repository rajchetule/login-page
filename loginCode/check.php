<?php 
//fetch data
$email = $_POST['email'];
$pass = $_POST['password'];

if($email == "raju@gmail.com" && $pass == 123){
	// echo "Welcome user!";
	session_start();
	$_SESSION['user']=1;
	header("location: home.php");
}
else{
	// echo "Invalid user!";
	header("location: index.php");

}
?>

