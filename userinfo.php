<?php

$con = mysqli_connect('127.0.0.1:4306','root','','bodhitree');

if($con){
    echo "<br>";
    echo "<br>";
    echo "CONNECTION SUCCESSFUL!";
}else{
    echo "No Connection!";
}

mysqli_select_db($con, 'bodhitree');

$Username = $_POST['Username'];
$EmailID = $_POST['EmailID'];
$PhoneNo = $_POST['PhoneNo'];
// $Comments = $_POST['Comments'];

$sql= " INSERT INTO `userinfodata` (`Username`, `EmailID`, `PhoneNo`) values ( '$Username', '$EmailID', '$PhoneNo' )";

// insert in database 
 $rs=mysqli_query($con, $sql);
//  die(mysqli_error());

if($rs)
{
    echo "<br>";
    echo "<br>";
    echo "<br>";
	echo "THANK YOU FOR REGISTERING WITH US!!";

}
?>