<?php
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];	

	$conn = mysqli_connect("localhost","root","","testdb") or die("Unable to connect");
	if($conn){
		//echo "connection successful";
		$sql = "INSERT INTO `data`(`id`,`name`,`password`,`email`,`mobile`,`gender`) VALUES ('0','$name','$password','$email','$mobile','$gender')";
		
		$rs = mysqli_query($conn, $sql);
		
		$result=mysqli_query($conn,$sql);
		
		if($rs){
		echo "Data inserted sucessfully";
		}
	}
?>