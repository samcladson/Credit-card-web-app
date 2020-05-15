<?php 
session_start();

if(isset($_POST['submit'])){
$con = mysqli_connect('localhost','root','','access');
	if($con){

		$images = "../includes/images/".basename($_FILES['image']['name']);

		$image = $_FILES['image']['name'];

		$user_id = "U".random_int(10000, 99999);
		$acc_no = 'ACCESS-NO'.random_int(1000000, 9999999);

		$_SESSION['customer'] = $_POST['Name'];
		$_SESSION['customer'] = $_POST['Phone'];

		$sql = "INSERT INTO customer(user_id,Name,Phone,Email,Picture) VALUES ('$user_id','".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','$image')";
		$sql2 = "INSERT INTO account (user_id,Name,	Account_Number) VALUES ('$user_id','".$_POST['name']."','$acc_no')";

		move_uploaded_file($_FILES['image']['tmp_name'], $images);
		if(mysqli_query($con,$sql)&&mysqli_query($con,$sql2)){


			header("Location:../login.php");
			
		}else{

			echo("Error description: " . mysqli_error($con));

		 	// $insert_fail_message = "Data is not inserted";
		 	// echo "<script>alert('$insert_fail_message')</script>";
		 }
	}

}else{
	$fail_message = "Sorry Database is not connected";
	echo "<script type='text/javascript'>alert('$fail_message');</script>";
}

?>