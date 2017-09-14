<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jacek Hożejowski	- Portfolio</title>
	
	<meta name="description" content="Stworzę dla Ciebie wyjątkową stronę www! Zatrudnij programistę webowego: PHP, JavaScript, HTML, CSS, MySQL, WordPress, Joomla!" />
	<meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, WordPress, Joomla" />
	
	
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<script src="timer.js"></script>
		
</head>

<body onload="odliczanie();">
	
	<div id="container" style="align=center;">
	
		<div class="rectangle">
			<div id="logo"><a href="zatrudnij-programiste" class="tilelinkhtml5">Jacek Hożejowski</a></div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		</div>
		<div class="row" id="main-part">
		<div class="col-sm-12 col-md-6">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<a href="kim-jestem" class="tilelinkhtml5">
						<div class="tile1">
							<i class="icon-user"></i><br/>Kim jestem?
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="oferta" class="tilelinkhtml5">
						<div class="tile1">
							<i class="icon-laptop"></i><br />Co oferuję?
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="tile2">
						<a href="cv" class="tilelink"><i class="icon-graduation-cap"></i><br />Curriculum vitae</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="tile3">
						<a href="kontakt" class="tilelink"><i class="icon-mail"></i><br />Kontakt ze mną</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="tile5">
				<?php
					$number = 0 ;
					 if (isset($_GET['p'])){
						$number = 1 * $_GET['p'] ;
					} ;
					require_once "some_content.php" ;
				?>
				</div>
			</div>		
		<div class="col-sm-12 col-md-6">
			<div style="margin: 0 auto;">
				<div class="yt">
					<a href="http://youtube.com" target="_blank" class="sociallink"><i class="icon-youtube"></i></a>
				</div>
				<div class="fb">
					<a href="http://facebook.com" target="_blank" class="sociallink"><i class="icon-facebook"></i></a>
				</div>
				<div class="gplus">
					<a href="http://plus.google.com" target="_blank" class="sociallink"><i class="icon-gplus"></i></a>
				</div>
				<div class="tw">
					<a href="http://twitter.com" target="_blank" class="sociallink"><i class="icon-twitter"></i></a>			
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="tile4">
			<i>To, że jesteśmy w dupie, to jasne. Problem w tym, że zaczynamy się w niej urządzać. </i><br /> - Stefan Kisielewski
			</div>
		</div>
		</div>
	<div class="rectangle">2015 &copy; Jacek - Portfolio. Programista zaprasza do współpracy! <i class="icon-mail-alt"></i> adres mailowy - jhozejowski@sbs.sniadek.pl </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>