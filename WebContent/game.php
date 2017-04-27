<!DOCTYPE html>
<html>
<head>
<?php
	$title = "No Title Given";
	//$title =
	echo "<title>Web Programming Game Forum - " . $title . "</title>";
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Author"
	content="Matthew Czech, Zackary Flake, Matthew Paule">
<link rel="stylesheet" href="desktop.css" />
<link rel="icon" href="../images/hqicon.ico" />
<script type="text/javascript">
	function walkthrough(){
		var p = document.createElement("p");
		var text = document.createTextNode("WOAH");
		p.appendChild(text);

		document.getElementById("InnerContent").innerHTML = "";
		document.getElementById("InnerContent").appendChild(p);
	}

	function reviews(){
		var p = document.createElement("p");
		var text = document.createTextNode("DUUUUDE");
		p.appendChild(text);

		document.getElementById("InnerContent").innerHTML = "";
		document.getElementById("InnerContent").appendChild(p);
	}

	function gallery(){
		var p = document.createElement("p");
		var text = document.createTextNode("AAAHHHH");
		p.appendChild(text);

		document.getElementById("InnerContent").innerHTML = "";
		document.getElementById("InnerContent").appendChild(p);
	}

	function discuss(){
		var p = document.createElement("p");
		var text = document.createTextNode("GUHHHH");
		p.appendChild(text);

		document.getElementById("InnerContent").innerHTML = "";
		document.getElementById("InnerContent").appendChild(p);
	}
</script>
</head>
<body onload="walkthrough()">
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
		<?php 
			$image = "nocover.jpg";
			//$image =
			echo "<img src=\"../images/coverart/" . $image . "\">";
		?>
		<ul id="Info">
			<li><strong>Developed By:</strong><br/> </li>
			<li><strong>Published By:</strong><br/> </li>
			<li><strong>Systems:</strong><br/> </li>
			<li><strong>Released (NA):</strong><br/> </li>
			<li><strong>Rating:</strong><br/> </li>
			<li class="edit">EDIT</li>
			</ul>
		</div>
		<?php
			echo "<h1>" . $title . "</h1>";
		?>
			<ul id="GameTabs">
				<li><a onclick="walkthrough()">Walkthroughs/FAQs</a></li>
				<li><a onclick="reviews()">Reviews</a></li>
				<li><a onclick="gallery()">Gallery</a></li>
				<li><a onclick="discuss()">Discuss</a></li>
			</ul>
			<div id="InnerContent">
			</div>
	</div>
	<div id="Footer">
		<p>Designed by Matthew Czech, Zackary Flake, and Matthew Paule</p>
	</div>
</body>
</html>
