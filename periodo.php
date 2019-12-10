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
		.card {
			color: black;
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
                <a class="dropdown-item" href="#1G">1a Grande Guerra</a>
                <a class="dropdown-item" href="#2G">2a Grande Guerra</a>
                <a class="dropdown-item" href="#mod">Moderno</a>
				<a class="dropdown-item" href="#now">Contemporaneo</a>
            </div>
		</li>
		<li class= "nav-item">
			<a class="nav-link" href="news.php">Notizie</a>
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
	<div class="row justify-content-md-center" style="margin-top: 70px;">
		<article class="col col-lg-2">
			<h3><b>Categorie</b></h3>
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action">Espressionismo</a>
				<a href="#" class="list-group-item list-group-item-action">Cubismo</a>
				<a href="#" class="list-group-item list-group-item-action">Futurismo</a>
				<a href="#" class="list-group-item list-group-item-action">Astrattismo</a>
				<a href="#" class="list-group-item list-group-item-action">Dadaismo</a>
				<a href="#" class="list-group-item list-group-item-action">Surrealismo</a>
				<a href="#" class="list-group-item list-group-item-action">La Pop Art</a>
				<a href="#" class="list-group-item list-group-item-action">Arte Concettuale</a>
			</div>
		</article>
		<article class="col-6">
		    <article class="red">
			    <h3>Inizio '900</h3>
				<p>Tra il 1880 e il 1914, tutto il mondo occidentale visse un periodo di progresso e benessere, agevolato anche dalla pace tra i popoli, che viene ricordato come la “Belle Époque”.
                Ci fu un progresso in medicina e fu ridotta la mortalità infantile con il conseguente “boom” demografico; nelle tecnologie e vie di trasporto; 
				nel commercio mondiale e nella produzione industriale, raddoppiata ed esaltata nelle Esposizioni universali; 
				nella pace internazionale.  Questo fu, inoltre, il periodo del trionfo della borghesia, delle sue attitudini, del suo stile di vita e della sua importanza che si poteva rivelare attraverso il tipo di abitazione ( quartiere, dimensioni e piano degli appartamenti ), il numero dei domestici, l’abbigliamento e i rapporti sociali cioè con quale genere di persone avevano conoscenza e confidenza.</p>
				<div class="card-columns">
				    <div class="card">
					    <img src="./img/espressionismo.jpg" class="card-img-top" alt="Espressionismo - " />
						<div class="card-body">
						    <h5 class="card-title">Espressionismo</h5>
							<a href="#" class="btn btn-primary">Scopri...</a>
						</div>
					</div>
					<div class="card">
					    <img src="./img/cubismo.jpg" class="card-img-top" alt="Espressionismo - " />
						<div class="card-body">
						    <h5 class="card-title">Cubismo</h5>
							<a href="#" class="btn btn-primary">Scopri...</a>
						</div>
					</div>
					<div class="card">
					    <img src="./img/futurismo.jpg" class="card-img-top" alt="Espressionismo - " />
						<div class="card-body">
						    <h5 class="card-title">Futurismo</h5>
							<a href="#" class="btn btn-primary">Scopri...</a>
						</div>
					</div>
					<div class="card">
					    <img src="./img/kandisky.jpg" class="card-img-top" alt="Espressionismo - " />
						<div class="card-body">
						    <h5 class="card-title">Astrattismo</h5>
							<a href="#" class="btn btn-primary">Scopri...</a>
						</div>
					</div>
				</div>
			</article>
            <article id="1G">
			    <h3>La Prima Guerra Mondiale</h3>
				<p>la Prima Guerra Mondiale, chiamata anche la Grande Guerra, fu una guerra molto diversa dalle precedenti: la natura stessa della guerra, il modo in cui fu combattuta diedero un valore decisivo di spartiacque della modernità. 
				Nella Grande Guerra le linee di combattimento furono piuttosto statiche, di logoramento. 
				La guerra ha comportato a uno stravolgimento della vita sociale: questa fu una guerra “totale” il cui ordine abolì qualsiasi concezione di sfera privata. 
				Lo Stato si assunse il diritto di regolare l’intera vita sociale anche dal punto di vista economico. 
				Tutta la popolazione fu inquadrata da una mobilitazione totale dall’alto. Lo Stato assunse un ruolo direttivo che non aveva mai avuto.</p>
			    <div class="card-columns">
				    <div class="card">
					    <img src="./img/dadaismo.jpg" class="card-img-top" alt="Espressionismo - " />
						<div class="card-body">
						    <h5 class="card-title">Dadaismo</h5>
							<a href="#" class="btn btn-primary">Scopri...</a>
						</div>
					</div>
					<div class="card">
					    <img src="./img/surrealismo.jpg" class="card-img-top" alt="Espressionismo - " />
						<div class="card-body">
						    <h5 class="card-title">Surrealismo</h5>
							<a href="#" class="btn btn-primary">Scopri...</a>
						</div>
					</div>
				</div>
			</article>
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
		<div class="col-6 linku">
			<h3>Links</h3><hr />
			<a href="mappa.php" style="color: white;">Mappa del sito</a><br />
			<a href="#" data-toggle="modal" data-target="#contactModal" style="color: white;">Contattaci</a><br />
			<a href="crediti.php" style="color: white;">Chi siamo</a>
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