<?php include 'templates/header.php'; ?>
<div class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://cdni.rbth.com/rbthmedia/images/2018.10/original/5bc920f985600a58bc5f370e.jpg');background-size:cover;">
	<div class="card justify-content-center align-items-center p-md-5" style="width:35rem; margin-top:1.5rem;background-color: rgba(0,0,0,0.8);">
				<h2 class="text-center text-white">Login to Access</h2><br>
				<div class="row mb-5">
					<img src="https://static.wixstatic.com/media/16c650_f71c9b2361c044a5a4cba320fa390daf~mv2_d_3000_1829_s_2.png/v1/fill/w_560,h_342,al_c,q_80,usm_0.66_1.00_0.01/signup.webp" style="width: 250px; height: auto">
				</div>
				<form class="row d-flex flex-column w-75" action="controller/login.php" method="post" enctype="multipart/form-data">
					<p class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Your Name</p>
					<input class="form-control mb-3 border-top-0 border-left-0 border-right-0 border-white shadow-none bg-transparent text-white" type="text" name="name" required>
					<p class="text-white"><i class="fas fa-phone"></i>&nbsp;&nbsp;Youe Phone</p>
					<input class="form-control mb-3 border-top-0 border-left-0 border-right-0 border-white shadow-none bg-transparent text-white" type="text" name="phone" required>
					<div class="row justify-content-center align-items-center">
						<button class="btn btn-success btn-lg btn-block m-3" type="submit">Login</button>
					</div>
				</form>	
	</div>
</div>