<!DOCTYPE html>
<html>
<head>
<title>Web Programming Game Forum - PC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Author"
	content="Matthew Czech, Zackary Flake, Matthew Paule">
<link rel="stylesheet" href="desktop.css" />
<link rel="icon" href="../images/hqicon.ico" />
</head>
<body>
	<div id="Header">
		<a href="./index.php">
			<img src="../images/GamerHQ_header.png">
		</a>
		<div id="SearchBar">
			 <form action="./WP_searchPage.php" method="GET">
                            <input type="text" name="game" value="Game"><br>
                            <input type="submit">
                          </form> 
		</div>
		<div id="MenuTabs">
			<ul id="HeaderTabs">
				<li><a href="./index.php">News</a></li>
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
		<div id="Sidebar">
			<img src="../images/pc.jpg">
			<ul id="Info">
			<li><strong>Manufacturer:</strong><br/> Varies</li>
			<li><strong>Released (NA):</strong><br/> Late 1970's (Home computers)</li>
			<li><strong>CPU:</strong><br/> Varies</li>
			<li><strong>GPU:</strong><br/> Varies</li>
			<li><strong>RAM:</strong><br/> Varies</li>
			</ul>
		</div>
		<h1>Top PC Games</h1>
		<span id="Add">
			<a href="./addgame.php">Add Game</a>
		</span>
	</div>
	<div id="Footer">
		<p>Designed by Matthew Czech, Zackary Flake, and Matthew Paule</p>
	</div>
</body>
</html>
