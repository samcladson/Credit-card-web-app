<?php 

session_start();




$name = $_POST['name'];
$phone = $_POST['phone'];
$arr = array();

$con = mysqli_connect('localhost','root','','access');
	

			// trying to acccess the data of both the table in one array and storing it in session
			$data = "SELECT * FROM customer,account where customer.Name = account.Name AND customer.Name='$name'";
			$result = mysqli_query($con,$data);
			while($row = mysqli_fetch_assoc($result)){
				$arr[] = $row;
			}
			
			// echo "<pre>";print_r($arr);exit();

			$_SESSION["customer"] = $arr;

			header("Location:../Admin/admin.php");

?>