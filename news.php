<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="./img/bplogo.png" type="image/png">
	<title>News</title>
	<style>
		.navbar-nav li{
			padding-left:30px;
			padding-right:30px;
		}
		.center {
			margin: auto;
		}
		article {
		    margin: 10px;
			padding: 20px;
			font-size: 18px;
		}
		.red {
			background-color: rgb(143, 26, 26);
			color: white;
		}
		hr {
		    display: block; height: 1px;
            border: 0; border-top: 1px solid white;
            margin: 1em 0; padding: 0; }
		}
	</style>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.html">
		<img src="./img/Word-Art.png" alt="Logo" style="width: 50px;">
		Arte nel '900
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse text-center" id="navbarNav">
    <ul class="navbar-nav">
		<li class= "nav-item">
			<a class="nav-link" href=".index.html">Home</a>
		</li>
		<li class= "nav-item dropdown center">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Periodo</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Inizio '900</a>
                <a class="dropdown-item" href="#">1a Grande Guerra</a>
                <a class="dropdown-item" href="#">2a Grande Guerra</a>
                <a class="dropdown-item" href="#">Contemporaneo</a>
            </div>
		</li>
		<li class= "nav-item">
			<a class="nav-link" href="./php/news.php">News</a>
		</li>
		<li class= "nav-item">
			<a class="nav-link" href="crediti.html">About Us</a>
		</li>
		<form class="form-inline my-2 my-lg-0 center" action="./php/cerca.php" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cerca">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
    </ul>
	</div>
	</nav>
	<div class="row" style="margin-top: 50px;">
		<article class="col">
		<h3><b>Categorie</b></h3>
		<a href="#">Astrattismo</a>
		</article>
		<article class="col-6">
<?php
		//riepilogo news
		session_start();
		
		if(!empty($_SESSION["news"])) {
			foreach($_SESSION as $key => $value) {
			}
		} else {
			echo "Nessuna Notizia.";
		}
?>
		</article>
	</div>
	<div class="modal" id="passModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Enter Password:</p>
			<input id="pass" type="password"/>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-danger" onclick="done()">Done</button>
		  </div>
		</div>
	  </div>
	</div>
  <footer class="footer-copyright py-3 red">
    <div class="row">
		<div class="col text-center"><img src="./img/Word-Art.png" alt="wordart" style="width: 200px;"></div>
		<div class="col-6">
			<h3>Links</h3><hr />
			<a href="">Mappa del sito</a><br />
			<a href="#">Contact Us</a><br />
			<a href="#" data-toggle="modal" data-target="#passModal">Sezione privata</a>
			<hr />@Arte dal '900 | 2019-2020
		</div>
	</div>
  </footer>
  <script>
		function done() { 
			var password = document.getElementById("pass").value;
			if(password == "1234")
			    window.open('post.html');
			else
			    alert("Password errata.");
		};
  </script>
  <!-- jQuery library -->
  <script src="./bootstrap/jquery-3.3.1.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>