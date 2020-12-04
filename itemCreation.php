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
			<h1 class="h1-responsive text-center mt-4 mb-3">Magic Item Creation</h1>
			<!-- Material Acquisition -->
			<div class="container mb-4 py-3">
				<h2 class="h2-responsive">Material Acquisition</h2>
				<p class="description">
					This phase consists of harvesting and/or finding materials with innate magical properties.
					These items can be anything from a magical plant, to the heart of a giant. In order to
					collect these materials, a single check based on the creature type must be made to determine how well the material is extracted and preserved for future use. A magical item cannot be made without a magical base.
				</p>
				<h3 class="h3-responsive">Skill Check</h3>
				<div class="row mb-2">
					<div class="col-6">
						<table class="table table-bordered text-light">
							<thead>
								<th>Monster Type</th>
								<th>Skill Check</th>
							</thead>
							<tr>
								<td>Beast, Dragon, Plant, Monstrosity</td>
								<td>Survival/Nature</td>
							</tr>
							<tr>
								<td>Giant, Humanoid</td>
								<td>Medicine</td>
							</tr>
							<tr>
								<td>Celestial, Fey, Fiend, Undead</td>
								<td>Religion</td>
							</tr>
							<tr>
								<td>Aberration, Construct, Elemental, Ooze</td>
								<td>Arcana</td>
							</tr>
						</table>
					</div>
					<div class="col-6">
						<div class="sidebar">
							Each monster type has a check associated with it based on its biology. Other skill checks might apply depending on the situation, 
							so don't be afraid to ask.
							<ul>
								<li>
									Beasts, dragons, plants, and monstrosities are things that have biologies similar to what you might come across in nature.
								</li>
								<li>
									Giants and humanoids have biology that someone who heals people would be familiar with.
								</li>
								<li>
									Celestials, fey, fiends, and undead have bodies that someone
									familiar with the extraplanar would have knowledge of.
								</li>
								<li>
									Abberations, constructs, elementals, and oozes have more magical origins, so arcana would be applicable.
								</li>
							</ul>
						</div>
					</div>
				</div>
				<h3 class="h3-responsive">Material Quality</h3>
				<div class="row mb-2">
					<div class="col-6">
						<table class="table table-bordered text-light">
							<thead>
								<th>Target DC</th>
								<th>Quality</th>
								<th>Modifier</th>
							</thead>
							<tr>
								<td>8</td>
								<td>Poor</td>
								<td>+2</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Mediocre</td>
								<td>+1</td>
							</tr>
							<tr>
								<td>12</td>
								<td>Average</td>
								<td>+0</td>
							</tr>
							<tr>
								<td>14</td>
								<td>Good</td>
								<td>-1</td>
							</tr>
							<tr>
								<td>16</td>
								<td>Excellent</td>
								<td>-2</td>
							</tr>
							<tr>
								<td>20</td>
								<td>Perfect</td>
								<td>-3</td>
							</tr>
						</table>
					</div>
					<div class="col-6">
						<div class="sidebar">
							Based on how well you do on your check, the DC for the next phase, refinement, is changed. If you do poorly on the check, it becomes harder. If you do well on your check, it becomes easier, as shown on the table. The quality column of the table is for materials that you acquired from others, didn't have to make a check for, and for enchanting materials. <br /> <br />Enchantment materials are components such as gems, certain metals, or thematic components that are appropriate for the kind of item you are making. The DM decides the quality of the material, and rates it from poor to perfect, and the modifier is applied to the enchanting process.
						</div>
					</div>
				</div>
			</div>
			<!-- Material Refinement -->
			<div class="container mb-2 py-3">
				<h2 class="h2-responsive mb-2">Material Refinement</h2>
				<p class="description">
					This phase consists of polishing and combining the collected material into something fit for enchantment. This would be changing a pelt into a cloak, smithing the sword, or weaving a scarf. In addition, if you are using enchantment materials, these would be applied at this stage, though it might not require a check.
				</p>
				<div class="row mb-2">
					<div class="col-6">
						<table class="table table-bordered text-light">
							<thead>
								<th>Item Rarity</th>
								<th>Creation DC</th>
								<th>Time</th>
							</thead>
							<tr>
								<td>Common</td>
								<td>10</td>
								<td>3 days</td>
							</tr>
							<tr>
								<td>Uncommon</td>
								<td>12</td>
								<td>6 days</td>
							</tr>
							<tr>
								<td>Rare</td>
								<td>14</td>
								<td>12 days</td>
							</tr>
							<tr>
								<td>Very Rare</td>
								<td>16</td>
								<td>24 days</td>
							</tr>
							<tr>
								<td>Legendary</td>
								<td>18</td>
								<td>48 days</td>
							</tr>
						</table>
					</div>
					<div class="col-6">
						<div class="sidebar">
							Over the course of the duration, 3 skill checks are made using the appropriate tools. The tools needed depend on the kind of item you are making, and what you are making it from. A cloak from a pelt would need leatherworker's tools, and a scarf made from silk would need weaver's tools. <br /><br />The refinement DC is based on the material quality and item rarity, as shown on the tables. A natural 20 counts as two successes, and a natural 1 counts as two failures. Each success decreases the enchanting DC by 1, and each failure increases the enchanting DC by 1. So if you had 2 successes and 1 failure, the enchanting DC would decrease by 1.<br /><br />  The time it takes to complete is divided by the number of creatures working on it, if they have a relevant proficiency.
						</div>
					</div>
				</div>
			</div>
			<!-- Item Enchanting -->
			<div class="container mb-2 py-3">
				<h2 class="h2-responsive">Item Enchantment</h2>
				<p class="description">
					During this phase, a skilled spellcaster weaves magic into the item, in order to control and/or redirect its natural magic. Over the duration, make (time spent / 2) skill checks using your spellcasting ability modifier and tool proficiency if available. The item gets flaws or perks based on how much you succeed or fail.
				</p>
				<div class="row mb-2">
					<div class="col-6">
						<table class="table table-bordered text-light">
							<thead>
								<th>Item Rarity</th>
								<th>Base DC</th>
								<th>Time Spent</th>
								<th>Caster Level</th>
								<th>Combined Spell Level</th>
							</thead>
							<tr>
								<td>Common</td>
								<td>12</td>
								<td>1 day</td>
								<td>1</td>
								<td>2</td>
							</tr>
							<tr>
								<td>Uncommon</td>
								<td>14</td>
								<td>2 days</td>
								<td>3</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Rare</td>
								<td>16</td>
								<td>4 days</td>
								<td>6</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Very Rare</td>
								<td>18</td>
								<td>6 days</td>
								<td>9</td>
								<td>11</td>
							</tr>
							<tr>
								<td>Legendary</td>
								<td>20</td>
								<td>8 days</td>
								<td>13</td>
								<td>16</td>
							</tr>
						</table>
					</div>
					<div class="col-6">
						<div class="sidebar">
							A spellcaster of the required level must use spell slots with a combined level equal to the value shown on the table. Multiple spellcasters can participate in this, and help each other. <br /><br />If the combined spell slots is twice the value on the table, you can choose between reducing the enchanting DC by 1 or reducing the time remaining by a day.<br /><br /> A natural 20 counts as two successes, and a natural 1 counts as two failures.
							<ul>
								<li>If you get all successes, roll twice on the perks table.</li>
								<li>If you get more successes than failures, roll on the perks table.</li>
								<li>If you get more failures than successes, roll on the flaws table.</li>
								<li>If you get all failures, you must start this process over</li>
							</ul>
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
		<script type="text/javascript" src="js/itemCreation.js"></script>
	</body>
</html>
