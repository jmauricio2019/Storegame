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
     <form method="post" action="#">
    <section id="corpo-full">

	<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
                        <h3>ADM > BD > Produtos </h3>
			<h1>Banco de Dados</h1>
                        <h3 class="direita">Atualizado em Junho de 2020</h3>
			</hgroup>
		</header>
    <p><h1><label for="cIde">ID Produto:</label><input type="number" name="id" id="cUsuario" size="20" maxlength="30" /></h1></p>
        <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_excluir" value="Excluir">
        <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_atualizar" value="Atualizar"><br><br><br>
</form>
<?php
   
  try{
   $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore", "root", "");
   $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $dados = $conecta->query("SELECT * FROM cadproduto");
  
  foreach ( $dados as $linha){
    //echo  $linha['id']."_    _".$linha['plataforma']."_     _".$linha['nome']."<a href='adm.php?nome='> <b>Editar</b> </a>"."_    _"." <a href='adm.php?nome='> <b>Excluir</b> </a>", "<br>";
   
    
  /*loop deve terminar aqui*/     
        //crie uma variável para receber o código da tabela
    $tabela = '<table id="tabelaspec">';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<td class="ce">ID</td>'; // colunas do cabeçalho
    $tabela .= '<td class="ce">Plataforma</td>';
    $tabela .= '<td class="ce">Nome</td>';
    $tabela .= '<td class="ce">Genero</td>';
    $tabela .= '<td class="ce">Código</td>';
    $tabela .= '<td class="ce">Valor</td>';
    $tabela .= '<td class="ce">Qntd</td>';
    
    
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
      
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$linha['id'].'</td>'; // coluna Alvara
    $tabela .= '<td>'.$linha['plataforma'].'</td>'; //coluna numero
    $tabela .= '<td>'.$linha['nome'].'</td>'; // coluna validade
    $tabela .= '<td>'.$linha['genero'].'</td>'; // coluna validade
    $tabela .= '<td>'.$linha['codigo'].'</td>'; // coluna validade
    $tabela .= '<td>'.$linha['valor'].'</td>'; // coluna validade
    $tabela .= '<td>'.$linha['quantidade'].'</td>'; // coluna validade
    


    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela
    echo $tabela  ; // imprime
    echo "<br />";    
  }
  } catch (PDOException $erro){
     echo "nao posso fazer a pesquisa".$erro;
  }
if(isset($_POST['btn_excluir'])){
    $ide=$_POST['id'];
    try {
          $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore", "root", "");
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

          
          $sql = "DELETE FROM cadproduto WHERE id= '$ide'";
          $conn->exec($sql);
            echo '<script language="javascript">';
            echo 'alert("Dados deletados com sucesso ")';
            echo '</script>';
        } catch(PDOException $e) {
            echo '<script language="javascript">';
            echo 'alert("Erro conexão... ")';
            echo '</script>';
        }
        header("location:acessodbproduto.php");
}

if(isset($_POST['btn_atualizar'])){
    $codi=$_POST['id'];
    header("location:atualizarProduto.php");            
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





