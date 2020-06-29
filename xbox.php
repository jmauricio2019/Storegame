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
	</hgroup>
	
	<img id="icone" src="_imagens/xbox.png"/>   
	<nav id="menu">
	<h1>Menu Principal</h1>
	<ul type="1" start="1">	
	<li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('_imagens/playstation-icon.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="playstation.php">PS4</a></li>
        <li onmouseover="mudaFoto('_imagens/xbox.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="xbox.php">XBoxOne</a></li>
        <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="login.php">Login</a></li>
	</ul>
	</nav>
</header>
<section id="corpo-full">
	<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
				<h3>Jogos > XBox One</h3>
				<h1>Comprar Jogos</h1>
				<h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>
		
<p>Veja os melhores lançamentos com aquele preço que só <b>Game Store</b> tem pra você.</p>
<ul id="album-fotos">
	<li id="foto1"><span>PES 2020     R$139,90</span></li>
	<li id="foto2"><span>Mortal Kombat 11     R$129,90    </span></li>
	<li id="foto3"><span>Forza Horizon 4     139,90</span></li>
	<li id="foto4"><span>Te Witcher     R$159,90</span></li>
	<li id="foto5"><span>Call Of Duty     R$129,90</span></li>
	<li id="foto6"><span>Just Cause 4    R$99,90</span></li>
</ul>

</section>
<footer id="rodape">
<p>Copyright &copy; 2020<br/>
</footer>
</div>
</body>
</html>
