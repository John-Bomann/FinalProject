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
			<h1 class="h1-responsive text-center mt-4 mb-3">Rules</h1>
			<div class="container bg-dark mb-4 py-3" id="table-rules">
				<h2 class="h2-responsive">Table Rules</h2>
				<ul class="list-group text-light py-2 pr-4">
					<li class="lead">
						If you think I made a mistake, tell me. If it wasn't intentional, I'll fix it. If it was
						intentional, and you still disagree, wait until the game is over to talk with me about
						it.
					</li>
					<li class="lead">
						Feedback is encouraged. I'm learning, and there is always room for improvement.
					</li>
					<li class="lead">
						If you feel uncomfortable with something happening, you can ask for the story to skip
						past the event, no questions asked.
					</li>
				</ul>
			</div>
			<div class="container bg-dark my-4 py-3" id="homebrew-rules">
				<h2 class="h2-responsive">Homebrew Rules</h2>
				<ul class="list-group text-light py-2 pr-4">
					<li class="lead">
						If you accidentally roll with advantage instead of a straight roll, take the dice roll
						on the left.
					</li>
					<li class="lead">
						Always room for finagling, if you want something, we can probably work it out, as long
						as there is a tradeoff.
					</li>
					<li class="lead">Custom spells are allowed, after clearing and balancing it with me.</li>
					<li class="lead">Potions can be used as a bonus action.</li>
					<li class="lead">
						You can cast a spell as an action and bonus action on the same turn. The level of one of
						the spells depends on your spellcaster level:
						<table class="table table-bordered text-light mt-2 w-50">
							<tr>
								<th scope="row">Spellcaster Level</th>
								<td>5th</td>
								<td>9th</td>
								<td>13th</td>
								<td>17th</td>
							</tr>
							<tr>
								<th scope="row">Maximum Spell Level</th>
								<td>1st Level</td>
								<td>2nd Level</td>
								<td>3rd Level</td>
								<td>4th Level</td>
							</tr>
						</table>
					</li>
					<li class="lead">If you find an exploit, you get to use it, but only once.</li>
					<li class="lead">
						Reflavoring spells or abilities based on your character is encouraged.
					</li>
				</ul>
			</div>
			<div class="container bg-dark my-4 py-3" id="variant-rules">
				<h2 class="h2-responsive">Variant Rules</h2>
				<ul class="list-group text-light py-2 pr-4">
					<li class="lead">
						<a href="https://5e.tools/variantrules.html#action%20options_dmg" target="_blank"
							>Action Options (excluding mark)</a
						>
					</li>
					<li class="lead">
						<a
							href="https://5e.tools/variantrules.html#cleaving%20through%20creatures_dmg"
							target="_blank"
							>Cleaving</a
						>
					</li>
					<li class="lead">
						<a href="https://5e.tools/variantrules.html#diagonals_dmg" target="_blank">Diagonals</a>
					</li>
					<li class="lead">
						<a href="https://5e.tools/variantrules.html#feats_phb" target="_blank">Feats</a>
					</li>
					<li class="lead">
						<a href="https://5e.tools/variantrules.html#flanking_dmg" target="_blank">Flanking</a>
					</li>
					<li class="lead">
						<a href="https://5e.tools/variantrules.html#hitting%20cover_dmg" target="_blank"
							>Hitting Cover</a
						>
					</li>
					<li class="lead">
						<a
							href="https://5e.tools/variantrules.html#skills%20with%20different%20abilities_phb"
							target="_blank"
							>Skills with different abilities</a
						>
					</li>
					<li class="lead">
						<a href="https://5e.tools/variantrules.html#tool%20proficiencies_xge" target="_blank"
							>Tool proficiencies</a
						>
					</li>
				</ul>
			</div>
		</main>
		<?php include('include/footer.php') ?>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
	</body>
</html>
