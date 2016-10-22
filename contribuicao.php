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

		<title>PHPVale - Grupo de desenvolvedores PHP do Vale do Paraíba | Enviar contribuição</title>
	</head>

	<body>
		<div class="loading"></div>

		<section class="contribution center">
			<div class="container menor">
				<a href="index.php" class="logo"><img class="" src="assets/img/logo-blue.png" alt="PHPVale"></a>

				<br><br>
				<h2 class="azul">Enviar minha contribuição</h2>

				<form name="form-contribution" method="post" action="#">
					<fieldset>
						<input type="text" name="ipt-name" class="" placeholder="Nome" required>
						<input type="email" name="ipt-email" class="" placeholder="E-mail" required>
						<input type="text" name="ipt-social" class="" placeholder="Rede social" required>

						<div class="tags">
							<a href="#" class="selectCategoryTag" data-category="Artigo" title="Categorias">Artigo</a>
							<a href="#" class="selectCategoryTag" data-category="Vaga de emprego" title="Categorias">Vaga de emprego</a>
							<a href="#" class="selectCategoryTag" data-category="Tutorial" title="Categorias">Tutorial</a>
							<a href="#" class="selectCategoryTag" data-category="" title="Categorias">Outro</a>
						</div>

						<input type="hidden" name="ipt-category" id="iptCategory" class="" placeholder="Categoria" required>

						<input type="file" name="ipt-attachment" id="iptAttachment" class="file">
						<label for="iptAttachment" onclick="upload();"><i class="fa fa-upload"></i> <span>Anexar arquivo... (.doc, .docx, .ppt, .pptx)</span></label>
						<p class="erro hide">Opa... Formato inválido.</p>

						<textarea name="txt-description" placeholder="Descrição"></textarea>

					</fieldset>

					<input type="submit" class="btn" value="Enviar">
				</form>

				<br>
				<i class="fa fa-arrow-left azul"><a href="index.php" class="border-none"> Voltar ao phpvale.com.br</a></i>
			</div>
		</section>

		<footer>
			<p class="heart">Made with <i class="fa fa-heart"></i> by phpvale community</p>
		</footer>

		<script type="text/javascript" src="vendor/jquery/jquery-2.2.1.min.js"></script>

		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>

		<script type="text/javascript" src="assets/js/upload-file.js"></script>

	</body>
</html>