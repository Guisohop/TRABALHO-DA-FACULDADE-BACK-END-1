<?php
include("dados.php");
//var_dump($marmitas);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="
    width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
    <link rel="stylesheet" href="CSS.css">
    <title>Marmitas Dona Dirce</title>

</head>
<body>
	<header>
		
		<div class="container-logo">
		<div class="logo-imagem">
			<img src="assets/logo.png" width="200" height="200"/>
			</div><!--logo-imagem-->
		<div class="logo-texto">
			<h1 class="marmitas">Marmitas</h1>
			<h3 class="nome">DONA DIRCE</h3>
		</div>
	</div> <!--container-logo-->
	
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Conheça a Dona Dirce</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
		</div><!--menu-->

	</header>
<main>
			<div class="container4">
				<h1 class="texto-parteum">Venha para a casa da dona dirce,
					e escolha a sua marmita!!!</h1>
					<a href="SaibaMais.html"><button class="botao" " type="submit">Saiba Mais</button></a>
					
			</div>

		<section class="main_section">
			<header class="main_section_header">
				<h1>confira nossas marmitas</h1>
				<p>Aqui você encontra nosso cardápio das marmitas!</p>
			</header>
			<?php
				foreach($marmitas as $key => $value){
			?>
			<article class="artigo">
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['nome'];?></h2>
				<p>R$<?=substr($value['valor'], 0, 150);?></p>
			</article>
			<?php
				}
			?>
		</section>

	<footer class="footer">
		
		
		<div class="container-nossaspaginas">
		<div class="menu-rodape">
			<h1 class="saber-mais">Quer saber mais?</h1>
		<h3 class="nossas-páginas"> Nossas Páginas</h3>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Conheça a Dona Dirce</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
		</div><!--menu-rodape-->

		<div class="links-uteis"> 
		<h3 class="links-uteis-texto">Links Úteis</h3>
			<ul>
				<li><a href="#">Política de Privacidade</a></li>
				<li><a href="#">Aviso Legal</a></li>
				<li><a href="#">Termos de Uso</a></li>
			</ul>
		</div><!--links-uteis-->

		
			<div class="info">
				<h2>Sobre o Projeto</h2>
				<p>Projeto de Divulgação das marmitas da Dona Rita!</p>
			</div><!--Info-->
		

		
	</div>

	</footer>
	
	<div class="texto-direitos">
		Desenvolvido por Guilherme Souza Nodari
	</div>

</body>
</html> 