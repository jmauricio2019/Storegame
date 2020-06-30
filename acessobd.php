<!DOCTYPE html>
<html>

<head>
	
	<meta charset="UTF-8"/>
	<title>STORE GAME</title>   
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
	<h2>Sua Melhor Opção Em Compras De Jogos.</h2>
	</hgroup>
	
	<img id="icone" src="_imagens/papel6.png"/>   
	<nav id="menu">
	<h1>Menu Principal</h1>
	<ul type="1" start="1">	
        <li onmouseover="mudaFoto('_imagens/adm.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="cadastroCliente.php">Administração</a></li>
	</ul>
	</nav>
</header>
<section id="corpo-full">
	<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
                        <h3>ADM > BD > Clientes </h3>
			<h1>Banco de Dados</h1>
                        <h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>

<h2>Banco de Dados Clientes</h2>
<?php
  try{
   $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore", "root", "");
   $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $dados = $conecta->query("SELECT * FROM clientes");
  
  foreach ( $dados as $linha){
    //echo  $linha['id']."_    _".$linha['nome']."_     _".$linha['nome']."<a href='adm.php?nome='> <b>Editar</b> </a>"."_    _"." <a href='adm.php?nome='> <b>Excluir</b> </a>", "<br>";
    //      
        //crie uma variável para receber o código da tabela
    $tabela = '<table id="tabelaspec">';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<td class="ce">ID</td>'; // colunas do cabeçalho
    $tabela .= '<td class="ce">Nome</td>';
    $tabela .= '<td class="ce">Senha</td>';
    $tabela .= '<td class="ce">Email</td>';
    $tabela .= '<td class="ce">Data Nasc.</td>';
    
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
      
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$linha['id'].'</td>'; // coluna Alvara
    $tabela .= '<td>'.$linha['nome'].'</td>'; //coluna numero
    $tabela .= '<td>'.$linha['senha'].'</td>'; // coluna validade
    $tabela .= '<td>'.$linha['email'].'</td>'; // coluna validade
    $tabela .= '<td>'.$linha['datanasc'].'</td>'; // coluna validade
    $_SESSION['ide']= $linha['id'];
    $tabela .= '<td class="cd"><a href="adm.php?id='.$linha['id'].'"><b>Editar</b></a></td>';
    $tabela .= '<td class="cd"><a href="adm.php?id='.$linha['id'].'"><b>Excluir</b></a></td>';
    $tabela .= '</tr>'; // fecha linha
  /*loop deve terminar aqui*/
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela
    echo $tabela; // imprime
     echo "<br />";
  }
  }
     
     catch(PDOException $erro){
     echo "nao posso fazer a pesquisa";
  }
?>
<br>
<br>
</article>
</section>
<footer id="rodape">
<p>Copyright &copy; 2020<br/>

</footer>
</div>
</body>
</html>





