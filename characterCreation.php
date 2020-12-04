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
      <h1 class="h1-responsive text-center mt-4 mb-5">Character Creation</h1>
      <div class="container">
        <div class="col mb-4">
          <div class="row my-2">
            <h2 class="h2-responsive text-center">Character Rules</h2>
            <ul class="list-group text-light py-2 pr-4">
              <li class="lead">
                Each character gets a starting feat from the approved list.
              </li>
              <li class="lead">
                Choose your primary deity, and apply the appropriate bonus.
              </li>
              <li class="lead">
                "Customizing Your Origin" rules from Tasha's Cauldron of Everything are permitted for backgrounds.
              </li>
              <li class="lead">
                Lots of things can be reflavored or changed based on what you 
                want for your character. Don't be afraid to ask!
              </li>
            </ul>
          </div>
          <div class="row my-2">
            <h2 class="h2-responsive text-center mt-4">Playable Races</h2>
            <table class="table table-bordered text-light text-center">
              <tr>
                <td>Aasimar</td>
                <td>Bugbear</td>
                <td>Dragonborn</td>
              </tr>
              <tr>
                <td>Dwarf</td>
                <td>Elf</td>
                <td>Firbolg</td>
              </tr>
              <tr>
                <td>Genasi</td>
                <td>Gnome</td>
                <td>Goblin</td>
              </tr>
              <tr>
                <td>Halfling</td>
                <td>Half-elf</td>
                <td>Half-orc</td>
              </tr>
              <tr>
                <td>Hobgoblin</td>
                <td>Human</td>
                <td>Kobold</td>
              </tr>
              <tr>
                <td>Lizardfolk</td>
                <td>Minotaur</td>
                <td>Orc</td>
              </tr>
              <tr>
                <td>Lizardfolk</td>
                <td>Minotaur</td>
                <td>Orc</td>
              </tr>
              <tr>
                <td>Shifter</td>
                <td>Tabaxi</td>
                <td>Tiefling</td>
              </tr>
              <tr>
                <td>Triton</td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="row my-2">
            <h2 class="h2-responsive text-center">Feats</h2>
            <ul class="list-group text-light py-2 pr-4">
              <li class="lead">
                Each feat can only be taken once
              </li>
              <li class="lead">
                All feats from official sourcebooks are allowed except for Gunner.
              </li>
            </ul>
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
