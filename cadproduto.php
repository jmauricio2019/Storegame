<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<title>STORE GAME</title>   
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
	<link rel="stylesheet" href="_css/form.css"/>	
	<script language="javascript" src="_javascript/funcoes.js"></script>
</head>

<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
            
	<h1>Store Game</h1>
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
        <div> <span style="float:left"><?php session_start();echo" ".$_SESSION['nome'];?></span><br/></div>
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
<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
				<h3>ADM > Cadastro > Cadastro De Jogos</h3>
				<h1>Cadastro De Jogos</h1>
				<h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>
	<form method="post" action="#">
		<fieldset id="cadjogo"><legend>Identificação do Jogo</legend>
                    <p><label for="cPlataforma">Plataforma:</label>
			<select name="tPlataforma" id="cPlatafomra">
				<optgroup label="XBOX">
				<option value="xboxone">XBox One </option>
				<option value="xbox360">XBox 360 </option>
				
				</optgroup>
				<optgroup label="PLAYSTATION">
				<option value="playstation4">PlayStation 4 </option>
				<option value="playstation3">PlayStation 3 </option>
				</optgroup>
			</select>
                    <p><label for="cNomedoJogo">Nome do Jogo:</label><input type="text" name="tNomedoJogo" id="cNomedoJogo" size="20" maxlength="30" placeholder="Nome do Jogo"/></p>
                    <p><label for="cGenero">Gênero:</label><input type="text" name="tGenero" id="cNome" size="20" maxlength="30" placeholder="Ação/Corrida/Luta/RPG/Aventura/etc..."/></p>
                    <p><label for="cCodigo">Código do Jogo:</label><input type="text" name="tCodigo" id="cCodigo" size="20" maxlength="30" placeholder="Codigo do Jogo"/></p>
                    <p><label for="cPrecodoJogo">Valor R$ :</label><input type="text" name="tPrecodoJogo" id="cPrecodoJogo" size="20" maxlength="30" placeholder="Valor do Jogo"/></p>
                    <p><label for="cQtdJogo">Quantidade:</label><input type="number" name="tQtdJogo" id="cQtdJogo" min="0" max="50" value="0" /></p>
		</fieldset>  
            <input type="submit" name="bt1" value="Salvar"/> 
	  <! __input type="image" name="bt1" src="_imagens/salvar3.png" /> 
          </form>
<?php
  if(isset($_POST['bt1'])){
    $tPlataforma=$_POST['tPlataforma'];
    $tNomedoJogo=$_POST['tNomedoJogo'];
    $tGenero=$_POST['tGenero'];
    $tCodigo=$_POST['tCodigo'];
    $tPrecodoJogo=$_POST['tPrecodoJogo'];
    $tQtdJogo=$_POST['tQtdJogo'];
        try{
        $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore", "root", "");
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $texto="INSERT INTO cadproduto (plataforma, nome, genero, codigo, valor, quantidade) VALUE('".$tPlataforma."','".$tNomedoJogo."','".$tGenero.""
                . "','".$tCodigo."','".$tPrecodoJogo."','".$tQtdJogo."')";
        $conecta->exec($texto);
        echo 'dados garvados com sucesso...';       
        }
        
        catch(PDOException $erro){
        echo "erro na coneção";   
        }
        }
        ?>
          
</article>
</section>

<footer id="rodape">
<p>Copyright &copy; 2020<br/>

</footer>
</div>
</body>

</html>