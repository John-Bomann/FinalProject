<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" type="image/png" href="./images/Group 21@2x.png" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
		/>
		<link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css" />
		<link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css" />
		<link rel="stylesheet" href="css/main.css" />
		<title>Isorei</title>
	</head>
	<body class="bg-dark">
		<?php include('include/nav.php') ?>
		<main class="bg-dark text-light">
			<h1 class="h1-responsive text-center mt-4 mb-3">Magic Item List</h1>
			<div class="container">
        <div class="row d-flex flex-column">
          <h3 class="h3-responsive">
            Cloak of Displacement
          </h3>
          <div class="item">
            <div class="section">
              <span class="title">Materials</span>
              <span><b>Displacer Beast Hide</b> - Good</span>
              <span>Gems - Good</span>
            </div>
            <div class="section">
              <span class="title">Refinement</span>
              <span>Checks</span>
              <span>DC:</span>
            </div>
            <div class="section">
              <span class="title">Enchanting</span>
              <span>Checks</span>
              <span>DC: </span>
            </div>
          </div>
        </div>
      </div>
		</main>
		<?php include('include/footer.php') ?>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
	</body>
</html>
