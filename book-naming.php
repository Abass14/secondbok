<?php require_once 'template/head.php';  ?>

<body>
	
	<?php require_once 'template/menu.php'; ?>

	<section class="dinner container">
		<div class="row">
			<div class="theForm col-md-6 col-sm-12 pt-5">
				<div class="form-head py-3 px-3">Book a Naming Event</div>
				<form method="POST" action="" class="form-group pt-3 px-3">
					<div class="row py-3">
						<div class="col-md-3 col-sm-12">
							<label>Name:</label>
						</div>
						<div class="col-md-9 col-sm-12">
							<input type="text" class="form-control" name="number" placeholder="Please Enter Your Name Here">
						</div>
					</div>
					<div class="row py-3">
						<div class="col-md-3 col-sm-12">
							<label>Email:</label>
						</div>
						<div class="col-md-9 col-sm-12">
							<input type="email" class="form-control" name="email" placeholder="Please Enter Your Email Here">
						</div>
					</div>
					<div class="row py-3">
						<div class="col-md-3 col-sm-12">
							<label>Number:</label>
						</div>
						<div class="col-md-9 col-sm-12">
							<input type="number" class="form-control" name="number" placeholder="Please Enter Your Number Here">
						</div>
					</div>
					<div class="row py-3">
						<div class="col-md-3 col-sm-12">
							<label>Celebrant/Event Name:</label>
						</div>
						<div class="col-md-9 col-sm-12">
							<select class="form-control">
								<option></option>
							</select>
							<!-- <input type="number" class="form-control" name="number" placeholder="Please Enter Your Number Here"> -->
						</div>
					</div>
					<div class="row py-3">
						<div class="col-md-3 col-sm-12">
							<label>Date:</label>
						</div>
						<div class="col-md-9 col-sm-12">
							<input type="text" placeholder="mm-dd-yyyy" class="form-control" name="date">
						</div>
					</div>
					<div class="row py-3">
						<div class="col-md-3 col-sm-12 m-auto pt-3">
							<input type="submit" class="form-control btn btn-primary" name="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<?php require_once 'template/footer.php'; ?>

</body>

<?php  require_once 'template/footer-sec.php'; ?>
</html>