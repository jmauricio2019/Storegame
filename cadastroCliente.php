
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<title>STORE GAME</title>   
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
	<link rel="stylesheet" href="_css/form.css"/>	
	<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=qdKRPFinnPnrTkM3Kc2e3I_TWZ_kMBiY-AnbFW3ZrF15GT8VAmNYj45gMlezIYOV5hgngKQ3VwbUtzr09BRd4Q" charset="UTF-8"></script><script language="javascript" src="_javascript/funcoes.js"></script>
</head>

<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
            
	<h1>Store Game</h1>
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
        <div> <span style="float:left"> Administrador</span><br/></div>
	</hgroup>
	
	<img id="icone" src="_imagens/cadjogo.png"/>   
	<nav id="menu">
	<h1>Menu Principal</h1>
	<ul type="1" start="1">	
        <li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="fale-conosco.php">Login</a></li>
        <li onmouseover="mudaFoto('_imagens/cadjogo.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="cadproduto.php">Cad. de Jogos</a></li>
        <li onmouseover="mudaFoto('_imagens/adm.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="adm.php">Administração</a></li>
	</ul>
	</nav>
</header>
<section id="corpo-full">
<article id="noticia-principal"><br>
		<header id="cabecalho-artigo">
			<hgroup>
				<h3>ADM > Cadastros > </h3>
				<h1>Cadastro Geral</h1>
				<h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>
	<form method="post" action="#">
		<fieldset id="cadjogo"><legend>Area Administrativa</legend><br><br>
                    <li onmouseover="mudaFoto('_imagens/contato.png')" ><a href="admcliente.php">Cadastro De Clientes</a></li><br>
                    <li onmouseover="mudaFoto('_imagens/cadjogo.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="admjogo.php">Cadastro De Jogos</a></li>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    
		</fieldset>  
          </form>
          
</article>
</section>

<footer id="rodape">
<p>Copyright &copy; 2020<br/>

</footer>
</div>
</body>

</html>