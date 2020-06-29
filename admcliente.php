
<!DOCTYPE html>
<html>

<head>
	
	<meta charset="UTF-8"/>
	<title>STORE GAME</title>   
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
	<link rel="stylesheet" href="_css/form.css"/>	
	<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=xk0vK0ND7AHTVBsx_qvy1jvAlbZ9P4JplcbF5awpHPZNkwTDJ8aBj5XsRaaF6TONmYLKOOaTFUmHhS2OBiQSIQ" charset="UTF-8"></script><script language="javascript" src="_javascript/funcoes.js"></script>
	
	<script>
		
	</script>
</head>

<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
	<h1>Store Game</h1>
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
	</hgroup>
	
	<img id="icone" src="_imagens/contato.png"/>   
	<nav id="menu">
	<h1>Menu Principal</h1>
	<ul type="1" start="1">	
        <li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('_imagens/playstation-icon.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="playstation.php">PS4</a></li>
        <li onmouseover="mudaFoto('_imagens/xbox.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="xbox.php">XBoxOne</a></li>
        <li onmouseover="mudaFoto('_imagens/adm.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="cadastroCliente.php">Administração</a></li>
	</ul>
	</nav>
</header>
<section id="corpo-full">
<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
				<h3>Cadastro / Login > </h3>
				<h1>Cadastrar</h1>
				<h3 class="direita">Atualizado em Junho 2020</h3>
			</hgroup>
		</header>
    <form method="post" action="login.php">
		<fieldset id="usuario"><legend>Informações do Cliente</legend>
				<p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
				<p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Máx. 8 Dígitos"/></p>
				<p><label for="cMail">E-mail:</label><input type="email" name="tMail" id="cMail" size="20" maxlength="40" placeholder="Email"/></p>
				<p><label for="cNasc">Data de Nascimento:</label> <input type="date" name="tNasc" id="cNasc"/></p>
                                <p><label for="cNome">Telefone:</label><input type="text" name="tTel" id="cTel" size="15" maxlength="15" placeholder=" tel"/></p>
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
		           
            <!__input type="submit" name="bt1" value="Salvar"/>
            <p><input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="bt1" value="Salvar Dados"></p>  
            
             <! botoes do cadastro de produtos /><br>
            <td><a href="acessodbproduto.php?id="> Acessar Cadastros De Clientes: </a></td>
	  <! __input type="image" name="bt1" src="_imagens/salvar3.png" /> 
          </form>
          
              <br><br>
</article>
</section>

<footer id="rodape">
<p>Copyright &copy; 2020<br/>
</footer>
</div>
</body>

</html>
            
           
            
            