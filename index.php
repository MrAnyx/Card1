<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Fully responsive Bootstrap card">
	<meta name="keywords" content="HTML, CSS, PHP">
	<meta name="author" content="MrAnyx">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- import bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- import personal style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- import fontawesome -->
	<script src="https://kit.fontawesome.com/7796a3bf49.js"></script>

	<!-- Icone -->
	<link rel="icon" href="#" />

	<title>Templace Bootstrap Card</title>
</head>
<body>


	<!-- Container where cards must be placed -->
	<div class="container my-4">

		<!-- Defining the rows that will contain the cards -->
		<div class="row justify-content-center">
			

			
			<!-- The actual card -->
			<?php for($i = 0; $i<5; $i++){ ?>
			<div class="col-md-6 col-lg-4 mb-4">
				<div class="card-content rounded">
					<div class="card-img">
						<img src="https://picsum.photos/400/300">
						<span class="ml-3 rounded"><h4><?= Date("j/n/Y") ?></h4></span>
						<div class="views text-light rounded-0">
							<i class="far fa-eye mr-2"></i><?= random_int(500, 90000)?>
							<i class="fas fa-comments ml-3 mr-2"></i><?= random_int(20, 500)?>
						</div>
					</div>
					<div class="card-desc">
						<h5>Title</h5>
						<div>Pariatur sunt veniam reprehenderit magna excepteur aliquip commodo deserunt in cupidatat ea anim ullamco laborum anim consequat pariatur sint veniam consequat dolore eiusmod sint amet.</div>
						<a href="#" class="btn-card rounded">Read</a>
					</div>
				</div>
			</div>

			<?php } ?>
			
			


			
		</div>
	</div>

</body>
</html>