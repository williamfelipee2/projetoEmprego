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
    <div class="container">
		<header>
			<nav>
				<div class="nav-container">
					<a href="index.html">
						<img id="logo" src="img/logo.png" alt="JobFinder">
						<i class="fas fa-bars btn-menumobile"></i>
					</a>
					<ul>
						<li><a href="findjobs.php">Encontrar vaga</a></li>
						<li><a href="sendjobs.php">Enviar vaga</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div>
			</nav>
			<div id="main-banner">
				<div id="search-form">
					<h1>A maneira mais fácil de encontrar seu novo emprego</h1>
					<p>Conecte-se de forma gratuita as melhores empresas e consiga o emprego dos seus sonhos.</p>			
					<form>
						<input type="text" name="job" placeholder="Digite o cargo">
						<select name="region">
							<option value="">Todos os estados</option>
						</select>
						<select name="category">
							<option value="">Categoria</option>
						</select>
						<input type="submit" value="Pesquisar">
					</form>
				</div>
			</div>
		</header>
		<main id="lastjobs-container" class="wrapper">
			<h1>Últimas vagas enviadas</h1>
			<ul>
				<li>
					<a href="job.html" class="clickarea">
						<div class="company-box">
							<img src="img/googlelogo.png">
							<div class="company-info">
								<h3>Developer</h3>
								<p>Google</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Mountain View, California</p>
						</div>
						<div class="job-type">
							<span class="clt">CLT</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="clickarea">
						<div class="company-box">
							<img src="img/ibmlogo.png">
							<div class="company-info">
								<h3>DBA</h3>
								<p>IBM</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Armonk, New York</p>
						</div>
						<div class="job-type">
							<span class="pj">PJ</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="clickarea">
						<div class="company-box">
							<img src="img/linkedinlogo.png">
							<div class="company-info">
								<h3>Front End Developer</h3>
								<p>Linkedin</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Sunnyvale, California</p>
						</div>
						<div class="job-type">
							<span class="homeoffice">Home Office</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="clickarea">
						<div class="company-box">
							<img src="img/facebooklogo.png">
							<div class="company-info">
								<h3>Full Stack Developer</h3>
								<p>Facebook</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Menlo Park, California</p>
						</div>
						<div class="job-type">
							<span class="pj">PJ</span>
						</div>
					</a>
				</li>
			</ul>
			<div class="btnjobs-container">
				<a href="#" class="btn-jobs">Ver mais vagas</a>
			</div>
        </main>
        <section id="sendjobs-container">
            <div id="sendjobs-inner" class="wrapper">
                <h2>Envie uma vaga que será vista por milhares de candidatos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum. 
                    Fusce semper magna ante, vitae commodo velit pretium quis. 
                    Proin semper feugiat massa vel fermentum. Mauris ut laoreet mauris.
                    
                </p>
                <a href="#" class="light-btn">Enviar vaga</a>
            </div>
		</section>
		<section id="status-container" class="wrapper">
			<h2 class="title-center">Estatísticas do JobFinder</h2>
			<p class="p-center">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum. 
                    Fusce semper magna ante, vitae commodo velit pretium quis. 
                    Proin semper feugiat massa vel fermentum. 
			</p>
			<div class="status-box">
				<span class="status-qtd">150</span>
				<p class="status-text">Vagas abertas</p>
			</div>

			<div class="status-box">
				<span class="status-qtd">250</span>
				<p class="status-text">Candidatos contratados</p>
			</div>
			<div class="status-box">
				<span class="status-qtd">50</span>
				<p class="status-text">Empresas participates</p>
			</div>
			<div class="status-box">
				<span class="status-qtd">550</span>
				<p class="status-text">Candidatos</p>
			</div>
		</div>
		</section>
		<section id="testmony-container">
			<div class="wrapper"></div>
			<h2>Veja o que os candidatos dizem</h2>
			<p class="p-center">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum. 
                    Fusce semper magna ante, vitae commodo velit pretium quis. 
                    Proin semper feugiat massa vel fermentum. 
			</p>
			<div class="testmony-box">
				<p class="testmony-msg">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum.
				</p>
				<img src="img/avatar1.png" alt="">
				<p class="testmony-name">João</p>
			</div>

			<div class="testmony-box">
				<p class="testmony-msg">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum.
				</p>
				<img src="img/avatar2.png" alt="">
				<p class="testmony-name">Maria</p>
			</div>

			<div class="testmony-box">
				<p class="testmony-msg">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum.
				</p>
				<img src="img/avatar3.png" alt="">
				<p class="testmony-name">Pedro</p>
			</div>

			<div class="testmony-box">
				<p class="testmony-msg">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum.
				</p>
				<img src="img/avatar4.png" alt="">
				<p class="testmony-name">Ana</p>
			</div>
		</section>
		<section id="blog-container" class="wrapper">
			<h2 class="title-center">Últimos artihos do nosso blog</h2>
			<p class="p-center">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent facilisis odio vitae mattis elementum. 
                    Fusce semper magna ante, vitae commodo velit pretium quis. 
                    Proin semper feugiat massa vel fermentum. 
			</p>

			<div class="article-box">
				<img src="img/blog1.jpg">
				<h4><a href="#">Article title</a></h4>
				<p class="article-date">05 de Fevereiro de 2020 | 10 comentários</p>
				<p class="article-resume">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Praesent facilisis odio vitae mattis elementum. 
				</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>

			<div class="article-box">
				<img src="img/blog2.jpg">
				<h4><a href="#">Article title</a></h4>
				<p class="article-date">05 de Abril de 2020 | 10 comentários</p>
				<p class="article-resume">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Praesent facilisis odio vitae mattis elementum. 
				</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>


			<div class="article-box">
				<img src="img/blog3.jpg">
				<h4><a href="#">Article title</a></h4>
				<p class="article-date">15 de Junho de 2020 | 10 comentários</p>
				<p class="article-resume">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Praesent facilisis odio vitae mattis elementum. 
				</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>

		</section>
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