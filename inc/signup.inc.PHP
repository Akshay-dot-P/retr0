

<?php 
include_once "../db_connect.php";

//$id = POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



$query=  "INSERT INTO users(name, username, password, email) VALUES ('".$name."', '".$username."', MD5('".$password."'), '".$email."')";
$run = mysqli_query($conn, $query) or die(mysqli_error());
if($run){
	echo "you have successfully signed";
}

else {
	echo "Form not submitted";
}

?>
