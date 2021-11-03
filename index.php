<?php

	echo '
		<!DOCTYPE HTML>
		<html>
			<head>
				<title>EcoToothpick empire</title>
				<meta http-equiv="content-type" content="text/html; charset=UTF-8">
				<meta name="description" content="Prvi blok zadataka eko cackalice portal">
				<meta name="keywords" content="Programiranje, web, aplikacija, Eko, cackalice, čačkalice, portal">
				<meta name="author" content="Armando Filipi">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="shortcut icon" type="image/x-icon" href="ikona.ico">
				<link rel="stylesheet" href="stil.css">
			</head>
	';

	echo '<body>';

		echo '
			<header>
				<div class="cover-image"></div>
				<nav>
					<ul>
						<li><a href="index.php?menu=1">Home</a></li>
						<li><a href="index.php?menu=2">News</a></li>
						<li><a href="index.php?menu=3">Contact</a></li>
						<li><a href="index.php?menu=4">About</a></li>
						<li><a href="index.php?menu=5">Gallery</a></li>
					</ul>
				</nav>
			</header>
		';
		
		echo '<main>';

			if (isset($_GET['menu'])) {
				switch($_GET['menu']) {
					case 1:
						include("home.php");
						break;
					case 2:
						include("news.php");
						break;
					case 3:
						include("contact.php");
						break;
					case 4:
						include("about.php");
						break;
					case 5:
						include("gallery.php");
						break;
				}
			}
			
			else
				include("home.php");

		echo '</main>';

		echo '
			<footer>
				<p>Copyright &copy; 2021. Armando Filipi. <a href="https://github.com/gausjordan/ntpws2"><img src="img/GitHub-Mark-64px.png" style="filter: invert(1)" title="Github" alt="Github"></a></p>
			</footer>
		';

	echo '</body>';

	echo '</html>';
?>