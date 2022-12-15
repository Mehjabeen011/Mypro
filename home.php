<?php

$s_name ="localhost";
$u_id="root";
$u_password ="";
$db = "test2"; 

$conn = mysqli_connect($s_name,$u_id,$u_password,$db);
if ($conn) {
    echo ("Connect");
} else {
    die("Not Connected".mysqli_connect_error());
}

$name = $_POST['username'];
$password = $_POST['password'];


$q = "select * from signin where name = '$name' && password = '$password'";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	header('location:index.html');
} else {
	header('location:index.html');	
}

?>





haa wait. dekh raha hu.















