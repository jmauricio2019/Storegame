<!DOCTYPE html>
<html>

<head>
	
	<meta charset="UTF-8"/>
	<title>STORE GAME</title> 
        <div> <span style="float:left"><?php session_start();echo" ".$_SESSION['nome'];?></span><br/></div>
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
	<style>
		
	</style>
	
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
	<h1>Store Game</h1>
        <div> <span style="float:left"><?php session_start();echo" ".$_SESSION['nome'];?></span><br/></div>
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
	</hgroup>
	
	<img id="icone" src="adm/papel6.png"/>   
	<nav id="menu">
	<h1>Menu Principal</h1>
        
	<ul type="1" start="1">	
	<li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('_imagens/playstation-icon.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="playstation.php">PS4</a></li>
        <li onmouseover="mudaFoto('_imagens/xbox.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="xbox.php">XBoxOne</a></li>
        <li onmouseover="mudaFoto('_imagens/cadjogo.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="cadproduto.php">Cad. de Jogos</a></li>
        <li onmouseover="mudaFoto('_imagens/adm.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="adm.php">Administração</a></li>
	</ul>
	</nav>
</header>
<section id="corpo">
	<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>

				<h3 class="direita">Atualizado em Junho2020</h3>
			</hgroup>
		</header>

<h2>Cadastro do Cliente</h2>



<form method="post" action="#">
               
		<fieldset id="usuario"><legend>Identificação do Usuário</legend>
				<p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
				<p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Máx. 8 Dígitos"/></p>
				<p><label for="cMail">E-mail:</label><input type="email" name="tMail" id="cMail" size="20" maxlength="40" placeholder="Email"/></p>
				<p><label for="cNasc">Data de Nascimento:</label> <input type="date" name="tNasc" id="cNasc"/></p>
                                <p><label for="cNome">Telefone:</label><input type="text" name="tTel" id="cTel" size="15" maxlength="15" placeholder=" tel"/></p>
		</fieldset>
		
		<fieldset id="endereco"><legend>Endereço do Usuário</legend>
			<p><label for="cRua">Logradouro: </label><input type="text" name="tRua" id="cRua" size="20" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
			<p><label for="cNum">Número: </label><input type="number" name="tNum" id="cNum" min="0" max="99999"</p>
                        
			<p><label for="cEst">Estado:</label><input type="text" name="tEst" id="cEst" maxlength="2" size="3" placeholder="UF" list="estados"/></p>
                            <datalist id="estados">
				<option value="SP"></option>
				<option value="MG"></option>
				<option value="RJ"></option>
				<option value="ES"></option>
                            </datalist>
		
			<p><label for="cCid">Cidade:</label><input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"/></p>
			<datalist id="cidades">
				<option value="Cruzeiro"></option>
				<option value="Lavrinhas"></option>
				<option value="Cachoeira Paulista"></option>
				<option value="Lorena"></option>
			</datalist>
                        
		</fieldset>
		
		<fieldset id="pedido"><legend>Quero um Google Glass</legend>
			<p><input type="checkbox" name="tPed" id="cPed" checked />
			<label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
			<p><label for="cCor">Cor:</label><input type="color" name="tCor" id="cCor" value="#0000ff" /></p>
			<p><label for="cQtd">Quantidade:</label><input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0" /></p>
			<p><label for="cTot">Preço Total: R$ </label><input type="text" name="tTot" id="cTot" placeholder="Total a pagar"readonly /></p>
                        
		</fieldset>
                <! botoes do cadastro de clientes />
            <input type="submit" name="bt1" value="Salvar"/>
            <input type="submit" name="bt2" value="Pesquisar"/>
            <input type="submit" name="bt3" value="Atualizar"/>
            <input type="submit" name="bt4" value="Excluir"/>



</article>
</section>
<aside id="lateral">

<h2>Cadastro de Produtos</h2>

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
            
            
            <! botoes do cadastro de produtos />
            <input type="submit" name="bt5" value="Salvar"/>
            <input type="submit" name="bt6" value="Pesquisar"/>
            <input type="submit" name="bt7" value="Atualizar"/>
            <input type="submit" name="bt8" value="Excluir"/>
            </aside>
            
	  <! __input type="image" name="bt1" src="_imagens/salvar3.png" /> 
</form>

</aside>
<?php
          /*começa banco cadastro de clientes*/
        if(isset($_POST['bt1'])){
        $tNome=$_POST['tNome'];
        $tSenha=$_POST['tSenha'];
        $tMail=$_POST['tMail'];
        $tNasc=$_POST['tNasc'];
        $tTel=$_POST['tTel'];
        $tRua=$_POST['tRua'];
        $tNum=$_POST['tNum'];
        $tEst=$_POST['tEst'];
        $tCid=$_POST['tCid'];
        try{
        $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore", "root", "");
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $texto="INSERT INTO clientes (nome, senha, email, datanasc, tel, logadouro, numero, uf, cidade) VALUE('".$tNome."','".$tSenha."','".$tMail."','".$tNasc."','".$tTel."','".$tRua."','".$tNum."','".$tEst."','".$tCid."')";
        $conecta->exec($texto);
        echo 'dados garvados com sucesso...';       
        }
        
        catch(PDOException $erro){
        echo "erro na coneção";   
        }
        }
         /*fim banco cadastro de clientes*/
        
         /*começa banco cadastro deprodutos*/
         if(isset($_POST['bt5'])){
    $tPlataforma=$_POST['tPlataforma'];
    $tNomedoJogo=$_POST['tNomedoJogo'];
    $tGenero=$_POST['tGenero'];
    $tCodigo=$_POST['tCodigo'];
    $tPrecodoJogo=$_POST['tPrecodoJogo'];
    $tQtdJogo=$_POST['tQtdJogo'];
        try{
        $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore", "root", "");
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $texto="INSERT INTO cadproduto (plataforma, nome, genero, codigo, valor, quantidade) VALUE('".$tPlataforma."','".$tNomedoJogo."','".$tGenero."','".$tCodigo."','".$tPrecodoJogo."','".$tQtdJogo."')";
        $conecta->exec($texto);
        echo 'dados garvados com sucesso...';       
        }
        
        catch(PDOException $erro){
        echo "erro na coneção";   
        }
        }
         /*fim banco cadastro de produtos*/
        ?>

<footer id="rodape">
<p>Copyright &copy; 2020<br/>


</footer>
</div>
</body>
</html>

