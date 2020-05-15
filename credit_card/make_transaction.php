<?php 
if (isset($_POST['transaction'])) {

	$data = array();

	$amount = $_POST['transaction_amount'] ;
	$recever_name = $_POST['recever_name-on-card'];
	$rec_card_no = $_POST['recever_card-number'];
	$name_on_card = $_POST['name_on_card'];
	$card_number = $_POST['card-number'];

	$data['Name'] = $name_on_card;
	$data['Amount'] = $amount;
	$data['Recever_name'] = $recever_name;
	$data['Recever_card_no'] = $rec_card_no;
	$data['Card_no'] = $card_number;

	// echo "<pre>";print_r($data);exit();
	session_start();

	$con = mysqli_connect('localhost','root','','access');

	$qry = "SELECT Balance From account where Account_Number = '$rec_card_no'";

	if(mysqli_query($con,$qry)){
		$result = mysqli_query($con,$qry);
			while($row = mysqli_fetch_assoc($result)){
				$arr[] = $row;
			}
	}

	$customer_data = $_SESSION["customer"];

	$balance = $customer_data[0]["Balance"] - $data['Amount'];

	$Add_balance = $arr[0]["Balance"] + $data['Amount'];

	$acc_no = $_POST['account_number'];


	$sql = "UPDATE account SET Balance = '$balance' WHERE Account_Number = '$card_number'";

	$sql2 = "UPDATE account SET Balance = '$Add_balance' WHERE Account_Number = '$rec_card_no'";


	if (mysqli_query($con,$sql)AND mysqli_query($con,$sql2)) {

			$message = "RS ".  $data['Amount'] ." Transfered Successfully!";

			echo "<script type='text/javascript'>alert('$message');window.location.href='Admin/admin.php';</script>";

		
	}
}
?>



<?php include 'templates/header.php'; ?>
	<div class="container-fluid">
		<div class="row vh-100">
			<div class="col-sm-3 w-100 navbar navbar-expand-lg bg-info d-flex flex-column">
				<div class="row w-100 d-flex justify-content-md-start justify-content-center align-items-center">
					<span class="navbar-brand"><img  src="https://cdn1.iconfinder.com/data/icons/business-office-42/64/x-48-512.png" style="width: 50px;height: auto;"></span>
					<a class="navbar-brand text-white" href="index.php"><h1>Access</h1></a>
				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<span><i class="fas fa-bars"></i></span>
				    </button>
				</div>
				<div class="row w-100">
					    <div class="collapse navbar-collapse" id="navbarContent">
							<div class="navbar-nav d-flex flex-column ">
									<a class="nav-item nav-link text-white" href="make_transaction.php">Make Transaction</a>
									<a class="nav-item nav-link text-white" href="#Bill Payment">Bill Payment</a>
									<a class="nav-item nav-link text-white" href="#Donate Money">Donate Money</a>
									<a class="nav-item nav-link text-white" href="signup.php">Sign Up With Us</a>
									<a class="nav-item nav-link text-white" href="login.php">Login To Account</a>
									<a class="nav-item nav-link text-white" href="#Terms and Conditions">Terms and Conditions</a>
							</div>
						</div>
						<div class="row d-flex align-items-center justify-content-center mt-5">	
						<h4 class="text-white mb-5">Scan to switch to your phone</h4>
							<img src="https://library.kissclipart.com/20180928/rlw/kissclipart-png-qr-code-clipart-qr-code-barcode-clip-art-f6f2167061f52b16.png" style="width: 50%;height:auto">
						</div>
				</div>
					
			</div>

			<div class="col-sm-9">
				<form method="post" action="make_transaction.php">
					<div class="row card vh-100">
						<div class="card-header w-100 text-center">
							<h1>Make Your Transaction</h1>
						</div>
						<div class="card-body w-100 d-flex flex-column justify-content-center align-items-center">
							<div class="row d-flex w-100 m-2">	
								<h3>Enter Transaction Amount</h3><br>	
								<div class="form-group w-100 m-2">
									<p><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Amount</p>
									<input class="form-control" type="text" name="transaction_amount">
								</div>
							</div><br>	
							<div class="row w-100">	
								
								<div class="col-sm border-right">
									<h3>RECEVERS DETAILS</h3><br>	
									<div class="form-group w-100">
										<p><i class="fas fa-user"></i>&nbsp;&nbsp;Name</p>
										<input class="form-control" type="text" name="recever_name-on-card">
									</div>
									<div class="form-group w-100">
										<p><i class="fas fa-user"></i>&nbsp;&nbsp;Card Number</p>
										<input class="form-control" type="text" name="recever_card-number">
									</div>	
								</div>

								
								<div class="col-sm border-left">
									<h3>YOUR DETAIL</h3><br>	
									<div class="form-group w-100">
										<p><i class="fas fa-user"></i>&nbsp;&nbsp;Name on Card</p>
										<input class="form-control" type="text" name="name_on_card">
									</div>
									<div class="form-group w-100">
										<p><i class="fas fa-user"></i>&nbsp;&nbsp;Card Number</p>
										<input class="form-control" type="text" name="card-number">
									</div>
									<div class="row w-100">
										<div class="col-sm">
											<div class="form-group">
												<p><i class="fas fa-user"></i>&nbsp;&nbsp;Expiry Date</p>
												<input class="form-control" type="text" name="expiry-date">
											</div>
										</div>
										<div class="col-sm">
											<div class="form-group">
												<p><i class="fas fa-user"></i>&nbsp;&nbsp;CVV</p>
												<input class="form-control" type="text" name="name-on-card">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row w-100">
								<button class="btn btn-success btn-lg btn-block m-3" name="transaction">Proceed Transaction</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

