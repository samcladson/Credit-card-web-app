<?php 

session_start();

$customer = $_SESSION['customer'];

$cus = $customer[0]['Name'];
// echo "<pre>";print_r($customer[0]['Name']);exit();

$con = mysqli_connect('localhost','root','','access');


$customer_data = $_SESSION["customer"];

$balance = $customer_data[0]["Balance"] + $_POST['balance'];

$acc_no = $_POST['account_number'];


$sql = "UPDATE account SET Balance = '$balance' WHERE Account_Number = '$acc_no'";


if (mysqli_query($con,$sql)) {

		$message = "Rs ".  $_POST['balance'] ." Added Successfully!";

		echo "<script type='text/javascript'>alert('$message');window.location.href='../Admin/admin.php';</script>";

}
?>