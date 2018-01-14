<?php
session_start();
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if(isset($_POST['submit'])){
if (!isset($_SESSION['username']))
    header('location: login.php');
else{
  $host='localhost';
$user='root';
$pass='';
$database='eightmm';

$con= new PDO("mysql:host=$host;dbname=$database", $user, $pass);

$user = $_POST['username'];
$pass = $_POST['password'];

  

  $result = $con->prepare("SELECT * FROM admin WHERE username ='$user' AND  password='$pass '"); 
 $result->execute();
    
    $num= $result->rowCount();
	$row =  $result->fetch();
    if ($num==1) 
	{	session_start();
	
	
	$_SESSION['username']=$row['username'];
	header('location: dashboard.php');	
	
	
}
    else
    {      
       phpAlert(   "Invalid Login! Please Try Again."   );    
header('location: login.php'); 
}
}

}