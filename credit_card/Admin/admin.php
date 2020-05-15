<?php include '../templates/header.php'; ?>

<?php  

session_start();

$customer = $_SESSION['customer'];

$cus = $customer[0]['Name'];

$con = mysqli_connect('localhost','root','','access');

$data = "SELECT * FROM customer,account where customer.Name = account.Name AND customer.Name='$cus'";
			$result = mysqli_query($con,$data);
			while($row = mysqli_fetch_assoc($result)){
				$arr[] = $row;
			}
$_SESSION["customer"] = $arr;

?>

<?php 

// echo "<pre>";print_r($arr);exit();

 ?>
	<div class="container-fluid">
		<div class="row vh-100">
			<div class="col-sm-3 w-100 navbar navbar-expand-lg bg-info d-flex flex-column">
					<div class="row w-100 d-flex justify-content-md-start justify-content-center align-items-center">
						<span class="navbar-brand"><img  src="https://cdn1.iconfinder.com/data/icons/business-office-42/64/x-48-512.png" style="width: 50px;height: auto;"></span>
						<a class="navbar-brand text-white" href="../index.php"><h1>Access</h1></a>
					
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					    	<span><i class="fas fa-bars"></i></span>
					    </button>
					</div>
					<div class="row w-100">
						    <div class="collapse navbar-collapse" id="navbarContent">
								<div class="navbar-nav d-flex flex-column ">
										<a class="nav-item nav-link text-white" href="../make_transaction.php">Make Transaction</a>
										<a class="nav-item nav-link text-white" href="#Bill Payment">Bill Payment</a>
										<a class="nav-item nav-link text-white" href="../donate.php">Donate Money</a>
										<a class="nav-item nav-link text-white" href="#Terms and Conditions">Terms and Conditions</a>
								</div>
							</div>
							<div class="row d-flex align-items-center justify-content-center mt-5">	
								<h4 class="text-white mb-5">Scan to switch to your phone</h4>
									<img src="https://library.kissclipart.com/20180928/rlw/kissclipart-png-qr-code-clipart-qr-code-barcode-clip-art-f6f2167061f52b16.png" style="width: 50%;height:auto">
							</div>
					</div>					
			</div>
			<div class="col-sm-9" style="background-image: url('https://cdni.rbth.com/rbthmedia/images/2018.10/original/5bc920f985600a58bc5f370e.jpg');background-size:cover;">
					<div class="row card vh-100 m-2 d-flex justify-content-center align-items-center flex-column" style="background-color: rgba(0,0,0,.8);">
						<div class="card-header w-100 text-center border-white">
							<h1 class="text-white">My Account</h1>
						</div>
						<h1 class="text-white m-5">Welcome back <?=$arr[0]['Name'];?>!</h1>
						<div class="card-body d-flex flex-column justify-content-top align-items-center w-100">

							<div class="row w-100">
								<div class="col-sm-3 d-flex align-items-justify flex-column">
										<button class="btn btn-success m-2" data-toggle="collapse" data-target="#My_Wallet" type="button" aria-expanded="true" aria-controls="view-customers"><i class="fas fa-wallet"></i>&nbsp;My Access Wallet</button>								 
										<button class="btn btn-success m-2" data-toggle="collapse" data-target="#Add-money" type="button" aria-expanded="false" aria-controls="Add-money"><i class="fas fa-dollar-sign"></i>&nbsp;Add Money</button>
										<button class="btn btn-success m-2" data-toggle="collapse" data-target="#Delete-account" type="button" aria-expanded="false" aria-controls="Delete-account"><i class="fas fa-trash-alt"></i>&nbsp;Delete Account</button>
								</div>
								<div class="col-sm">
									<div class="row">
										<div class="col-sm">
											<p class="text-white">Account Number</p>
											<h4 class="text-white"><?=$arr[0]['Account_Number']?></h4>
										</div>
										<div class="col-sm">
											<p class="text-white">Your Balance</p>
											<h3 class="text-white"><?=$arr[0]['Balance']?></h3>
										</div>
									</div>
									
									<div class="collapse" id="My_Wallet">
										
									</div>

									<div class="collapse text-justify" id="Add-money">
										<form method="post" action="../controller/transaction_control.php">
											<div class="form-group w-100">
												<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Enter Account Number</p>
												<input class="form-control" type="text" name="account_number">
											</div>
											<div class="form-group w-100">
												<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Enter Amount</p>
												<input class="form-control" type="text" name="balance">
											</div>
											<button class="btn btn-success btn-md btn-block" type="submit">Add Amount</button>
										</form>
									</div>

									<div class="collapse" id="Delete-account">
										ojpyjreojblnlvgnlnwlihwohob
									</div>

								</div>
								<div class="col-sm-3 d-flex justify-content-center align-items-top flex-column">
									<h3 class="text-white">Personal info</h3>
									<?php foreach ($arr as $key => $value) { ?>
										<div class="card w-100 p-2" style="background-color: rgba(255,255,255,.1);">
											<div class="row d-flex justify-content-center align-items-center mt-3">
												<img src="../includes/images/<?=$value['Picture']?>" style="width:150px;height: 150px;">
											</div>
											<h2 class="text-white" class="text-center mb-2"><?=$value['Name']?></h2>	
											<p class="text-white">Phone:&nbsp;<?=$value['Phone']?></p>
											<p class="text-white">Email:&nbsp;<?=$value['Email']?></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						
					</div>
			</div>
			
		</div>
	</div>


<?php include '../templates/footer.php'; ?>

</body>
</html>