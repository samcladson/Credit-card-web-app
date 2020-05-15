<?php 	
include 'templates/header.php';

?>
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

			<div class="col-sm-9" style="background-image: url('https://media.children.org/cdn-8d444ff845cb520/globalassets/00_home-page/help-kids-have-a-childhood.jpg');background-size:cover;">
				<form>
					<div class="row card vh-100 m-2" style="background-color: rgba(0,0,0,.6);">
						<div class="card-header w-100 text-center">
							<h1 class="text-white">Make Your Donation</h1>
						</div>
						<div class="card-body w-100 d-flex flex-column justify-content-center align-items-center">
							<div class="row d-flex w-100 m-2">	
								<h3 class="text-white">Enter Donation Amount</h3><br>	
								<div class="form-group w-100 m-2">
									<p class="text-white"><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Amount</p>
									<input class="form-control" type="text" name="transaction_amount">
								</div>
							</div><br>	
							<div class="row w-100">	
								
								<div class="col-sm border-right">
									<h3 class="text-white">Organisation Details</h3><br>	
									<div class="form-group w-100">
										<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Organisation Name</p>
										<input class="form-control" type="text" name="recever_name">
									</div>
									<div class="form-group w-100">
										<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Phone Number</p>
										<input class="form-control" type="text" name="recever_number">
									</div>	
								</div>

								
								<div class="col-sm border-left">
									<h3 class="text-white">YOUR DETAIL</h3><br>	
									<div class="form-group w-100">
										<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Name on Card</p>
										<input class="form-control" type="text" name="name-on-card">
									</div>
									<div class="form-group w-100">
										<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Card Number</p>
										<input class="form-control" type="text" name="card-number">
									</div>
									<div class="row w-100">
										<div class="col-sm">
											<div class="form-group">
												<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Expiry Date</p>
												<input class="form-control" type="text" name="expiry-date">
											</div>
										</div>
										<div class="col-sm">
											<div class="form-group">
												<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;CVV</p>
												<input class="form-control" type="text" name="name-on-card">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row w-100">
								<button class="btn btn-success btn-lg btn-block m-3">Proceed Transaction</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
include 'templates/footer.php';

?>
<body>
</html>