<?php include_once("templates/header.php") ?>

<div class="container-fluid">
	<div class="row vh-100">
		<div class="col-sm-3 w-100 navbar navbar-expand-lg bg-info d-flex flex-column">
			<div class="row w-100 d-flex justify-content-md-start justify-content-center align-items-center">
				<span class="navbar-brand"><img  src="https://cdn1.iconfinder.com/data/icons/business-office-42/64/x-48-512.png" style="width: 50px;height: auto;"></span>
				<a class="navbar-brand text-white" href="#Access"><h1>Access</h1></a>
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span><i class="fas fa-bars"></i></span>
			    </button>
			</div>
			<div class="row w-100">
				    <div class="collapse navbar-collapse" id="navbarContent">
						<div class="navbar-nav d-flex flex-column ">
								<a class="nav-item nav-link text-white" href="make_transaction.php">Make Transaction</a>
								<a class="nav-item nav-link text-white" href="#Bill Payment">Bill Payment</a>
								<a class="nav-item nav-link text-white" href="donate.php">Donate Money</a>
								<a class="nav-item nav-link text-white" href="Signup.php">Sign Up With Us</a>
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
		<div class="col-sm-9" style="background-image: url('https://cdni.rbth.com/rbthmedia/images/2018.10/original/5bc920f985600a58bc5f370e.jpg');background-size:cover;">
			<div class="row m-2 vh-100" style="background-color: rgba(0,0,0,0.7);">	
				<div class="row m-4 d-flex align-items-center justify-content-center">
					<h1 class="text-white">Payment and Money Transfer made simple</h1>
				</div>
				<div class="row m-2">	
					<div class="col-sm vh-auto">	
						<img src="https://www.paymentvision.com/wp-content/uploads/2018/08/PaymentVision.png"style=" width:75%;height:auto">
					</div>
					<div class="col-sm vh-auto">	
						<h2 class="text-white">Payment Made Simple</h2>
						<p class="text-white">	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit </p>
					</div>		
				</div>
				<div class="row m-2">
					<div class="col-sm">	
						<h2 class="text-white">Fast Transaction</h2>
						<p class="text-white">	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.	
						</p>
					</div>		
					<div class="col-sm text-right">
						<img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_786/https://www.mymoneystore.in/wp-content/uploads/2018/12/Definition-of-Online-Electronic-Cash.png"style=" width:75%;height:auto">
					</div>
				 
				</div>
			</div>
		</div>

		
	</div>
</div>

<?php 	include 'templates/footer.php'; ?>

</body>
</html>
