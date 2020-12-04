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
		<div class="d-none" id="data">
			<?php 
				include("include/config.php");
				$sql = "SELECT * FROM subclass_quiz";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($result);
				$data = array();
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					$data[] = $row;
				}
				echo json_encode($data);
			?>
		</div>
		<main class="bg-dark text-light mb-3">
			<div id="quizQuestions">
				<h1 class="card-header text-center mt-3 mb-3">What Subclass Are You?</h1>
				<div class="container d-flex flex-column w-50" id="quiz">
				</div>
				<div class="container">
					<button class="btn btn-primary btn-block w-50 my-2" id="submit">Submit Quiz</button>
				</div>
				<h2 class="text-center" id="warning"></h2>
			</div>
			<div class="results d-none align-items-center flex-column mt-4" id="results">
				<h1 class="text-center my-2" id="className"></h1>
				<h1 class="text-center my-2" id="subclassName"></h1>
				<a href="subclass.php" class="btn btn-lg btn-primary my-4">
					Take it again
			</a>
			</div>
		</main>
		<?php include('include/footer.php') ?>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
		<script type="text/javascript" src="js/quiz.js"></script>
	</body>
</html>
