<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tags -->
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
		<!-- main area start here -->
		<main class="main-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card my-3">
							<div class="card-body">
								<div class="heading-one mb-3">
									<i class="fas fa-list"></i>
									<h5>Add Product</h5>
								</div>
								<form method="POST">
									<div class="form-group row">
									  <label for="input1" class="col-sm-2 col-form-label">Item Name</label>
									  <div class="col-sm-10">
											<select class="form-control" id="input1">
												<option>Select an Item</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											 </select>
									  </div>
									</div>
									<div class="form-group row">
									  	<label for="input2" class="col-sm-2 col-form-label">Category Name</label>
									  	<div class="col-sm-10">
												<select class="form-control" id="input2">
													<option>Select an Category</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
									  	</div>
									</div>
									<div class="form-group row">
									  	<label for="input3" class="col-sm-2 col-form-label">Brand Name</label>
									  	<div class="col-sm-10">
												<select class="form-control" id="input3">
													<option>Select an Brand</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
									  	</div>
									</div>
									<div class="form-group row">
									  	<label for="input4" class="col-sm-2 col-form-label">Product Name (English)</label>
									  	<div class="col-sm-10">
												<input class="form-control" type="text" placeholder="Product Name (English)" id="input4">
									  	</div>
									</div>
									<div class="form-group row">
									  	<label for="input5" class="col-sm-2 col-form-label">Product Name (Bangla)</label>
									  	<div class="col-sm-10">
												<input class="form-control" type="text" placeholder="Product Name (Banlga)" id="input5">
									  	</div>
									</div>
									<div class="form-group row">
										<label for="input6" class="col-sm-2 col-form-label">Measurement Type:</label>
										<div class="col-sm-10">
											<select class="form-control" id="input6">
												<option>Dozen</option>
												<option>KG</option>
												<option>Ltr</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
								  </div>
									<div class="form-group row">
										<label for="input7" class="col-sm-2 col-form-label">Purchase Price:</label>
										<div class="col-sm-10">
										  <input class="form-control" type="text" placeholder="Purchase Price" id="input7">
										</div>
								  	</div>
									<div class="form-group row">
										<label for="input8" class="col-sm-2 col-form-label">Sale Price:</label>
										<div class="col-sm-10">
										  <input class="form-control" type="text" placeholder="Sale Price" id="input8">
										</div>
								  	</div>
									<div class="form-group row">
										<label for="input9" class="col-sm-2 col-form-label">Product Details:</label>
										<div class="col-sm-10">
										  <textarea class="form-control" id="input9"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="input10" class="col-sm-2 col-form-label">Shelf No.</label>
										<div class="col-sm-10">
										  	<input class="form-control" type="text" placeholder="Shelf No" id="input10">
										</div>
								  	</div>
									<div class="form-group row">
										<label for="input11" class="col-sm-2 col-form-label">Barcode</label>
										<div class="col-sm-10">
										  	<input class="form-control" type="text" placeholder="Barcode" id="input11">
										</div>
								  	</div>
									<div class="form-group row">
										<label for="input11" class="col-sm-2 col-form-label">Barcode</label>
										<div class="col-sm-10">
										  	<input class="form-control" type="text" placeholder="Barcode" id="input11">
										</div>
								  	</div>
									<div class="form-group row">
										<label for="input12" class="col-sm-2 col-form-label">File Upload:</label>
										<div class="col-sm-10">
										  	<input class="" type="file" placeholder="Barcode" id="input12">
										</div>
									  </div>
									  <button type="submit" name="add" class="btn btn-success">Add</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- main area end here -->



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- main js -->
	<script src="assets/js/active.js"></script>

</body>
</html>
