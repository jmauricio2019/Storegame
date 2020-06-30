<!DOCTYPE html>
<html>

<head>
	
	<meta charset="UTF-8"/>
	<title>STORE GAME</title>   
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>	
	<link rel="stylesheet" href="_css/fotos.css">
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
	<h1>Store Game</h1>
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
       <div> <span style="float:left"><?php session_start();echo" ".$_SESSION['nome'];?></span><br/></div>
	</hgroup>
	
	<img id="icone" src="_imagens/playstation-icon.png"/>   
	<nav id="menu">
	<h1>Menu Principal</h1>
	<ul type="1" start="1">	
	<li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('_imagens/playstation-icon.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="playstation.php">PS4</a></li>
        <li onmouseover="mudaFoto('_imagens/xbox.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="xbox.php">XBoxOne</a></li>
	</ul>
	</nav>
</header>
<section id="corpo-full">
	<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
				<h3>Jogos > PlayStation 4</h3>
				<h1>Comprar Jogos</h1>
				<h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>
		
<p>Veja os melhores lançamentos com aquele preço que só <b>Game Store</b> tem pra você.</p>
<ul id="album-fotos">
	<li id="foto01"><span>FarCray    R$149,90</span></li>
	<li id="foto02"><span>The Witcher    R$159,90</span></li>
	<li id="foto03"><span>God Of War Hits     R$99,90</span></li>
	<li id="foto04"><span>Mortal Kombat 11     R$129,90</span></li>
	<li id="foto05"><span>Days Gone     R$129,90</span></li>
	<li id="foto06"><span>Resident Evil 2     R$159,90</span></li>
</ul>

</section>
<footer id="rodape">
<p>Copyright &copy; 2020<br/>
</footer>
</div>
</body>
</html>
