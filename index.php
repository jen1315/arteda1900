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
	<title>Arte dal '900</title>
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
		ul{padding:0; margin:0; list-style:none}
		.media-left{width:100px; height:80px}
		.media-left > img{height:70px; width:90px}
		.latest_postnav{height:auto !important; margin-top:20px}
        .latest_postnav li{margin-bottom:10px; float:left; width:100%}
		hr {
		    display: block; height: 1px;
            border: 0; border-top: 1px solid white;
            margin: 1em 0; padding: 0; }
		}
	</style>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="">
		<img src="./img/Word-Art.png" alt="Logo" style="width: 50px;">
		Arte nel '900
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse text-center" id="navbarNav">
    <ul class="navbar-nav">
		<li class= "nav-item">
			<a class="nav-link" href="index.php">Home</a>
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
			<a class="nav-link" href="news.php">News</a>
		</li>
		<li class= "nav-item">
			<a class="nav-link" href="crediti.php">Chi siamo</a>
		</li>
		<form id="cercF" class="form-inline my-2 my-lg-0 center" action="cerca.php" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cerca" required>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
    </ul>
	</div>
	</nav>
	<div id="carouselExampleCaptions" class="carousel slide center" data-ride="carousel"  style="width:100%; margin-top: 50px;">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner" style="height: 500px !important;">
		<div class="carousel-item active">
		  <img src="./img/moderna.jpg" class="d-block w-100" alt="img1">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Arte Moderna</h5>
			<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="./img/futurismo.jpg" class="d-block w-100" alt="img2">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Futurismo</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="./img/kandisky.jpg" class="d-block w-100" alt="img3">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Third slide label</h5>
			<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
		  </div>
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="row justify-content-md-center">
		<article class="col col-lg-2">
			<h3><b>Categorie</b></h3>
			Inizio '900 - Ia Guerra Mondiale<br />
			<a href="#">Espressionismo</a><br />
			<a href="#">Cubismo</a><br />
			<a href="#">Futurismo</a><br />
			<a href="#">Astrattismo</a><br />
			<a href="#">Dadaismo</a><br />
			<a href="#">Surrealismo</a><br />
			Fine Ia Guerra - IIa Guerra Mondiale<br />
			<a href="#">Il Noveau Realisme Europeo</a><br />
			<a href="#">La pop art</a><br />
			<a href="#">Il minimalismo</a><br />
			<a href="#">Arte Concettuale</a><br />
		</article>
		<article class="col-6">
          <h2>Latest news</h2>
            <ul class="latest_postnav">
<?php
			  echo "<li>
                <div class='media'> <a href='#' class='media-left'> <img alt='' src='./img/Word-Art.png'> </a>
                  <div class='media-bodyì> <a href='#'> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>";
?>
            </ul>
		</article>
	</div>
	<div class="modal" id="contactModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <h5 class="modal-title">Contattaci</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
		  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<p>Oggetto</p>
			<input class="form-control" type="text" name="oggetto">
			<div class="form-group">
				<label class="col-form-label">Messaggio</label>
				<textarea class="form-control" rows="3" name="messaggio"></textarea>
		    </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
			<input type="submit" class="btn btn-danger" value="Manda">
		  </form>
<?php
		  //manda e-mail
	      $to = "jennifer.cai@libero.it";
	      $headers = "From: jennifer.cai@libero.it". "\r\n".
	                 "Reply-To: jennifer.cai@libero.it". "\r\n".
			         "X-Mailer: PHP/". phpversion();
	       if(!empty($_POST["messaggio"])) {
		       $subject = "data: ". time();
	           $message = $_POST["messaggio"];
		       mail($to, $subject, $message, $headers);
	       }//if
?>
		  </div>
		</div>
	  </div>
	</div>
  <footer class="footer-copyright py-3 red">
    <div class="row">
		<div class="col text-center"><img src="./img/Word-Art.png" alt="wordart" style="width: 200px;"></div>
		<div class="col-6">
			<h3>Links</h3><hr />
			<a href="mappa.html">Mappa del sito</a><br />
			<a href="#" data-toggle="modal" data-target="#contactModal">Contattaci</a><br />
			<a href="crediti.php">Chi siamo</a>
			<hr />@Arte dal '900 | 2019-2020
		</div>
	</div>
  </footer>
  <!-- jQuery library -->
  <script src="./bootstrap/jquery-3.3.1.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>