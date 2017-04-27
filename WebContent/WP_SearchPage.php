<!DOCTYPE html>
<html>
<head>
<title>Web Programming Game Forum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Author"
	content="Matthew Czech, Zackary Flake, Matthew Paule">
<link rel="stylesheet" href="desktop.css" />
</head>
<body>
	<div id="Header">
		<img src="../images/GamerHQ_header.png" />
		<div id="SearchBar">
                         <form action="./WP_searchPage.php" method="POST">
                            <input type="text" name="game" value="Game"><br>
                            <input type="submit">
                          </form> 
		</div>
		<div id="MenuTabs">
			<ul id="HeaderTabs">
				<li><a href="./index.php">News</a>
				<li><a href="./ps4.php">PlayStation 4</a></li>
				<li><a href="./xboxone.php">XBox One</a></li>
				<li><a href="./pc.php">PC</a></li>
				<li><a href="./switch.php">Nintendo Switch</a></li>
				<li><a href="./3ds.php">3DS</a></li>
				<li><a href="./forum.php">Forum</a></li>
				<li>
			</ul>
		</div>
	</div>
	<div id="Content">
		<h1>Search Results for: </h1>
		<?php 
		?>
	</div>
	<div id="Footer">
		<p>Designed by Matthew Czech, Zackary Flake, and Matthew Paule</p>
	</div>
</body>
</html>
