
<!DOCTYPE html>
<html>

<head>
	
	<meta charset="UTF-8"/>
	<title>GAME STORE</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
	<link rel="stylesheet" href="_css/form.css"/>	
	<script language="javascript" src="_javascript/funcoes.js"></script>
</head>

<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
	<h1>Game Store</h1>
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
	</hgroup>
	
	<img id="icone" src="_imagens/contato.png"/>   
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
				<h3> Login ></h3>
				<h1>Acessar</h1>
				<h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>
    <form action="#" name="gerador" method="POST">
	<fieldset id="usuario"><legend>Acessar:</legend> 
            
            <p><label for="cusuario">Email:<br></label><input type="text" name="login" id="cUsuario" size="20" maxlength="30" /></p>
            <p><label for="cdata">Senha:<br></label><input type="text" name="senha" id="cNomedoJogo" size="20" maxlength="12"/></p>        	
            
        <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_entrar" value="Acessar"><br><br><br>
        
        <a href="fale-conosco.php" target="_blank"><u>Cadastre-se</u></a>
          </form>
          
</article>
</section>

<footer id="rodape">
<p>Copyright &copy; 2020<br/>
</footer>
</div>
    
<?php
include 'BancoData.php';
$temp = new Banco();
$temp ->login();  
?>
</body>
</html>