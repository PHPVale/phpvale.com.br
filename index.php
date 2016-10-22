<!DOCTYPE html>

<html class="no-js" lang="pt-BR"> 
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Cache-Control" content="no-cache, no-store">
		<meta http-equiv="Pragma" content="no-cache, no-store">

		<link rel="icon" type="image/png" href="favicon.png">

		<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.min.css" media="screen, print">

		<link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.css" media="screen, print">

		<link rel="stylesheet" type="text/css" href="assets/css/fonts.css" media="screen, print">
		<link rel="stylesheet" type="text/css" href="assets/css/base.css" media="screen, print">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen, print">

		<title>PHPVale - Grupo de desenvolvedores PHP do Vale do Paraíba</title>
	</head>

	<body>
		<div class="loading"></div>

		<div class="all-site">
			<header>
				<div class="top">
					<div class="container clear">
						<a href="index.php" class="logo"><img class="" src="assets/img/logo.png" alt="PHPVale"></a>
						<p class="members branco">100 membros</p>

						<a class="ico-menu">
							<span></span>
						</a>
					</div>
				</div>

				<nav class="menu">
					<div class="container">
						<ul>
							<li><a rel="php-vale" class="jumpSectionMenu">PHPVale</a></li>
							<li><a rel="blog" class="jumpSectionMenu">Blog</a></li>
							<li><a rel="events" class="jumpSectionMenu">Eventos</a></li>
							<li><a rel="participations" class="jumpSectionMenu">Participações</a></li>
							<li><a rel="contribute" class="jumpSectionMenu">Como contribuir</a></li>
							<li class="social"><a target="_blank" href="https://telegram.me/joinchat/CfuMTQoJjUjPQ_39AnE9uQ"><i class="fa fa-paper-plane"></i></a></li>
							<li class="social"><a target="_blank" href="https://github.com/PHPVale"><i class="fa fa-github"></i></a></li>
							<li class="social"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="social"><a target="_blank" href="https://twitter.com/phpvale"><i class="fa fa-twitter"></i></a></li>
							<li class="social fb"><a target="_blank" href="https://www.facebook.com/developers.do.vale"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</nav>			
			</header>

			<section class="php-vale center">
				<div class="container">
					<h2 class="">PHPVale</h2>
					<p>Comunidade de desenvolvedores PHP do Vale do Paraíba, interior de São Paulo. Temos por objetivo disseminar não só a linguagem PHP como todo tipo de tecnologia relacionada ao mundo de desenvolvimento web. Você que se interesse por programação está convidado a fazer parte e contribuir para o crescimento da comunidade. Seja bem-vindo!</p>
				</div>
			</section>

			<section class="blog bg-cinza-claro">
				<div class="container center">
					<h2 class="center toUpper">Blog</h2>

					<div class="own-grid clear">
						<div class="four computer two tablet one smart">
							<div class="blog-article has-shadow">
								<?php 
									$articleName   = "Integração Pagseguro com PHP";
									$articleAuthor = "zidane";
								?>
								<a class="transparent" href="#" title="<?php echo $articleName; ?>">
									<div class="has-image">
										<img src="assets/img/img-blog.png" alt="Blog 4">
									</div>
									<div class="has-content">
										<p href="#">
											<?php 
												echo (strlen($articleName) > 40) ? substr($articleName, 0, 40) . "..." : $articleName 
											?>
										</p>
										<p href="#"><?php echo "Por: " . $articleAuthor; ?></p>	
									</div>
								</a>
							</div>
						</div>
						<div class="four computer two tablet one smart">
							<div class="blog-article has-shadow">
								<?php 
									$articleName   = "IF ternário PHP";
									$articleAuthor = "cristianoronaldo";
								?>
								<a class="transparent" href="#" title="<?php echo $articleName; ?>">
									<div class="has-image">
										<img src="assets/img/img-blog.png" alt="Blog 4">
									</div>
									<div class="has-content">
										<p href="#">
											<?php 
												echo (strlen($articleName) > 40) ? substr($articleName, 0, 40) . "..." : $articleName 
											?>
										</p>
										<p href="#"><?php echo "Por: " . $articleAuthor; ?></p>	
									</div>
								</a>
							</div>
						</div>
						<div class="four computer two tablet one smart">
							<div class="blog-article has-shadow">
								<?php 
									$articleName   = "Trabalhando com datas";
									$articleAuthor = "marcelinhocarioca";
								?>
								<a class="transparent" href="#" title="<?php echo $articleName; ?>">
									<div class="has-image">
										<img src="assets/img/img-blog.png" alt="Blog 4">
									</div>
									<div class="has-content">
										<p href="#">
											<?php 
												echo (strlen($articleName) > 40) ? substr($articleName, 0, 40) . "..." : $articleName 
											?>
										</p>
										<p href="#"><?php echo "Por: " . $articleAuthor; ?></p>	
									</div>
								</a>
							</div>
						</div>
						<div class="four computer two tablet one smart">
							<div class="blog-article has-shadow">
								<?php 
									$articleName   = "Função strlen";
									$articleAuthor = "ibrahimovic";
								?>
								<a class="transparent" href="#" title="<?php echo $articleName; ?>">
									<div class="has-image">
										<img src="assets/img/img-blog.png" alt="Blog 4">
									</div>
									<div class="has-content">
										<p href="#">
											<?php 
												echo (strlen($articleName) > 40) ? substr($articleName, 0, 40) . "..." : $articleName 
											?>
										</p>
										<p href="#"><?php echo "Por: " . $articleAuthor; ?></p>	
									</div>
								</a>
							</div>
						</div>
					</div>

					<p><span class="external-link"></span><a href="#" target="_blank">Ir para o blog</a></p>
				</div>
			</section>

			<section class="events bg-cinza-claro">
				<div class="container">
					<h2 class="center toUpper">Eventos</h2>

					<div class="own-grid clear">
						<div class="one computer relative">
							<div id="slideEvents" class="owl-carousel">
					            <div class="item has-shadow" data-slide="1">
					            	<?php 
					            		$eventName = "Frontinsampa";
					            		$eventUrl = "#";
					            	?>
					            	<a href="<?php echo $eventUrl; ?>" class="transparent" target="_blank" title="<?php echo $eventName; ?>">
						            	<span>
						            		<img src="assets/img/events/frontinsampa.png" alt="<?php echo $eventName; ?>">
						            	</span>
					            	</a>
					            </div>
					            <div class="item has-shadow" data-slide="2">
					            	<?php 
					            		$eventName = "Frontinbh";
					            		$eventUrl = "#";
					            	?>
					            	<a href="<?php echo $eventUrl; ?>" class="transparent" target="_blank" title="<?php echo $eventName; ?>">
						            	<span>
						            		<img src="assets/img/events/frontinbh.svg" alt="<?php echo $eventName; ?>">
						            	</span>
					            	</a>
					            </div>
					            <div class="item has-shadow" data-slide="3">
					            	<?php 
					            		$eventName = "Frontinsampa";
					            		$eventUrl = "#";
					            	?>
					            	<a href="<?php echo $eventUrl; ?>" class="transparent" target="_blank" title="<?php echo $eventName; ?>">
						            	<span>
						            		<img src="assets/img/events/frontinsampa.png" alt="<?php echo $eventName; ?>">
						            	</span>
					            	</a>
					            </div>
					            <div class="item has-shadow" data-slide="4">
					            	<?php 
					            		$eventName = "Frontinbh";
					            		$eventUrl = "#";
					            	?>
					            	<a href="<?php echo $eventUrl; ?>" class="transparent" target="_blank" title="<?php echo $eventName; ?>">
						            	<span>
						            		<img src="assets/img/events/frontinbh.svg" alt="<?php echo $eventName; ?>">
						            	</span>
					            	</a>
					            </div>
					            <div class="item has-shadow" data-slide="5">
					            	<?php 
					            		$eventName = "Frontinsampa";
					            		$eventUrl = "#";
					            	?>
					            	<a href="<?php echo $eventUrl; ?>" class="transparent" target="_blank" title="<?php echo $eventName; ?>">
						            	<span>
						            		<img src="assets/img/events/frontinsampa.png" alt="<?php echo $eventName; ?>">
						            	</span>
					            	</a>
					            </div>
					            <div class="item has-shadow" data-slide="6">
					            	<?php 
					            		$eventName = "Frontinbh";
					            		$eventUrl = "#";
					            	?>
					            	<a href="<?php echo $eventUrl; ?>" class="transparent" target="_blank" title="<?php echo $eventName; ?>">
						            	<span>
						            		<img src="assets/img/events/frontinbh.svg" alt="<?php echo $eventName; ?>">
						            	</span>
					            	</a>
					            </div>
					        </div>

					        <i class="fa fa-arrow-left prev hide"></i>
					        <i class="fa fa-arrow-right next"></i>
						</div>
					</div>
				</div>
			</section>

			<section class="participations bg-cinza-claro">
				<div class="container">
					<h2 class="center toUpper">Participações</h2>

					<div class="own-grid clear">
						<div class="four computer two tablet one smart">
							<div class="box-participation has-shadow">
								<a title="Participações" class="transparent openModal" rel="participations" href="#" title="">
									<span>
										<img src="assets/img/partners/php.png" alt="Partner">
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="contribute center">
				<div class="container">
					<h2 class="toUpper">Como contribuir</h2>

					<p>Qualquer pessoa pode contribuir, tem um artigo maneiro, um job, ou quer compartilhar uma experiência de desenvolvimento, seja bem-vindo, a comunidade agradece. <a href="contribuicao.php">Enviar minha contribuição</a>.</p>
					<br>
					<p>Faça parte do PHPVale. Siga-nos nas redes sociais e ajude a comunidade crescer. <a href="#" class="openModal" rel="be-member">Quero ser um membro!</a></p>
				</div>
			</section>

			<footer>
				<div class="partners">
					<a href="http://www.php.net"><img src="assets/img/partners/php.png" alt="PHP"></a>
				</div>

				<p>
					<a href="https://www.facebook.com/developers.do.vale" class="social" target="_blank" title="Facebook PHPVale"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="https://twitter.com/phpvale" class="social" target="_blank" title="Twitter PHPVale"><i class="fa fa-twitter fa-2x"></i></a>
					<a href="#" class="social" target="_blank" title="Linkedin PHPVale"><i class="fa fa-linkedin fa-2x"></i></a>
					<a href="https://github.com/PHPVale" class="social" target="_blank" title="Github PHPVale"><i class="fa fa-github fa-2x"></i></a>
					<a href="https://telegram.me/joinchat/CfuMTQoJjUjPQ_39AnE9uQ" class="social" target="_blank" title="Telegram PHPVale"><i class="fa fa-paper-plane fa-2x"></i></a>
					<a href="mailto:contato@phpvale.com.br" class="social" title="E-mail PHPVale"><i class="fa fa-envelope-o fa-2x"></i></a>
				</p>
				<br>
				<p class="heart">Made with <i class="fa fa-heart"></i> by phpvale community</p>
			</footer>

			<a href="#" class="back-top jumpToTop"></a>

			<div class="modal hide"></div>
			<div class="modal-content" data-modal="be-member">
				<a href="#" class="fechar hide"></a>
				<h3 class="center azul">Faça parte da comunidade</h3><br>

				<form name="form-new-member" method="post" action="#">
					<fieldset>
						<input type="text" name="ipt-member-name" class="" placeholder="Nome" required>
						<input type="email" name="ipt-member-email" class="" placeholder="E-mail" required>
					</fieldset>
					
					<input type="submit" class="btn" value="Enviar">
				</form>
			</div>

			<div class="modal-content modal-content-full" data-modal="participations">
				<div class="todo">
					<a href="#" class="fechar"></a>

					<div class="container center relative">
						<h2 class="azul">X Semana da computação</h2>
						<p>Curso PHP com MongoDB</p>

						<div class="relative">
							<div id="slideParticipations" class="owl-carousel">
								<div class="item">
									<img src="assets/img/banner.jpg">
								</div>
								<div class="item">
									<img src="assets/img/banner.jpg">
								</div>
								<div class="item">
									<img src="assets/img/banner.jpg">
								</div>
							</div>

							<i id="galery" class="fa fa-arrow-left prev"></i>
						    <i id="galery" class="fa fa-arrow-right next"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="vendor/jquery/jquery-2.2.1.min.js"></script>

		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>

	</body>
</html>