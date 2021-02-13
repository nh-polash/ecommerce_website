<?php
include("connect.php");
$db=new database();
$msg="";

$id=isset($_POST["txtId"])?$_POST["txtId"]:"";
$name=isset($_POST["txtName"])?$_POST["txtName"]:"";

if(isset($_POST["btnAdd"]))
{
	if(!empty($id) && !empty($name))
	{
			$sql="INSERT INTO `itemtable` (`id`,`name`,`picture`) VALUES('$id','$name','')";
			$query=$db->link->query($sql);
			if($query)
			{
				$msg="Insert Successfully!!";
			}
			else{
				$msg="Insert Unsuccessfully!!";
			}
	}
	else{
		$msg="Please Fill up all fields!!";
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<title>SBIT Admin</title>

</head>
<body>
	<form method="post">
		<!-- main area start here -->
		<main class="main-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card my-3">
							<div class="card-body">
								<div class="heading-one mb-3">
									<i class="fas fa-list"></i>
									<h5>Add Item</h5>
								</div>
								
									<div class="form-group row">
									  <label for="input1" class="col-sm-2 col-form-label">SL</label>
									  <div class="col-sm-10">
									  		<input class="form-control" name="txtId" type="text" placeholder="ex:1" id="input1">
									  </div>
									</div>
									<div class="form-group row">
									  	<label for="input2" class="col-sm-2 col-form-label">Item Name</label>
									  	<div class="col-sm-10">
										  	<input class="form-control" name="txtName" type="text" placeholder="Item Name" id="input2">
									  	</div>
									</div>
									
									<div class="form-group row">
										<label for="input12" class="col-sm-2 col-form-label">Picture</label>
										<div class="col-sm-10">
										  	<input class="form-control-file" name="picture" type="file" placeholder="" id="input12">
										</div>
									</div>
									<button type="submit" name="btnAdd" class="btn btn-success">Add</button>
									<button type="submit" name="view" class="btn btn-info">View</button>
								<br>
								<?php print $msg;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</form>
		<!-- main area end here -->



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- main js -->
	<script src="assets/js/active.js"></script>
	
</body>
</html>
