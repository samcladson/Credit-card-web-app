<?php  


$con = mysqli_connect('localhost','root','','access');
	$data = "SELECT * FROM customer";
	$result = mysqli_query($con,$data);
	$arr = array();
	while($row = mysqli_fetch_assoc($result)){
		$arr[] = $row;
	}
	// echo "<pre>";
	// print_r(json_encode($arr));
	// echo "</pre>";	
?>


	<!-- bootstrap style link -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- bootstrap style link end -->
	<link rel="stylesheet" type="text/css" href="includes/css/style.css">

<div class="container">
<div class="row d-flex justify-content-center align-items-center flex-wrap">
<?php foreach ($arr as $key => $value) { ?>
	<div class="card col-3 p-5 m-2">
		<div class="row d-flex justify-content-center align-items-center">
			<img src="includes/images/<?=$value['Picture']?>" style="width:150px;height: 150px;">
		</div>
		<h2 class="text-center mb-2"><?=$value['Name']?></h2>	
		<p>Phone:&nbsp;<?=$value['Phone']?></p>
		<p>Email:&nbsp;<?=$value['Email']?></p>
	</div>
<?php } ?>
</div>
</div>

<div class="row d-flex justify-content-center align-items-center m-5">
	<a href="index.php"><button class="btn btn-success btn-lg ">Go to home</button></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- bootstrap script end -->

