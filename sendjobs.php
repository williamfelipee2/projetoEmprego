<? php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container" id="sendjobs">
		<header>
			<nav>
				<div class="nav-container" >
					<a href="index.php">
						<img id="logo" src="img/logo.png" alt="JobFinder">
						<i class="fas fa-bars btn-menumobile"></i>
					</a>
					<ul>
						<li><a href="findjobs.html">Encontrar vaga</a></li>
						<li><a href="sendjobs.html">Enviar vaga</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div>
			</nav>
			
		</header>
		<main id="sendjobs-container" class="wrapper">
			<h1>Download JobFinder</h1>
			<img src="img/cadastro.png"  id="cadastro" width="600" height="340"/>
			<div class="input-box">
				<input type="submit" value="FAZER O DOWNLOAD">
			</div>
        </main>
 
		<footer>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="img/logo.png">
						<h2>JobFinder</h2>
						<p>A maneira mais facíl de encontrar seu próximo emprego.</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Artigos recentes</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Como conseguir o primeiro emprego<br> em 
									tempos de crise?</a>
								<span class="article-date">05 de Fevereiro de 2020</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego<br> em 
									tempos de crise?</a>
								<span class="article-date">05 de Fevereiro de 2020</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego<br> em 
									tempos de crise?</a>
								<span class="article-date">05 de Fevereiro de 2020</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="fab fa-linkedin"></i>
								<span>Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="wrapper">
					<p>JobFinder - 2020</p>
				</div>
			</div>
		</footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>