<?php require_once 'template/head.php';  ?>

<body>
	
	<?php require_once 'template/menu.php'; ?>
	<section id="Welcome">
		<div class="row cover">
			<div class="col-md-8 col-sm-12 wel">
				<p>
					<strong>Hello there!!!<br> Welcome to the Event Booking App<br> HOVER on the "Book" button to Book an Event Now!!!</strong>
				</p>
			</div>
			<div class="col-md-4 col-sm-12 book" onclick="closedrop()">
				<!-- <div class="btn btn-outline-danger">Book</div> -->
				
				<div class="center">
					<div id="book" class="btn btn-outline-info bookbtn" onmouseenter="dropdown()"><strong>Book</strong></div>
					<div class="bg-light rubbish border" id="hidden">
						<div class="border-bottom py-2 overs"><a href="book-dinner.php">Dinner</a></div>
						<div class="border-bottom py-2 overs"><a href="book-wedding.php">Wedding</a></div>
						<div class="border-bottom py-2 overs"><a href="book-naming.php">Naming</a></div>
						<div class="border-bottom py-2 overs"><a href="book-gala.php">MET GALA</a></div>
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<?php  require_once 'template/footer.php'; ?>
	

</body>

<?php  require_once 'template/footer-sec.php'; ?>
</html>