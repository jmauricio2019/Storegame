<?php
class Banco
{
    // valida login no banco
    public function login()
    {
        session_start();
        if(isset($_POST['btn_entrar'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        try {
            $conecta= new PDO("mysql:host=127.0.0.1;port=3306;dbname=gamestore","root","");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dados=$conecta->query("SELECT * FROM  clientes");
            foreach ($dados as $linha){
                if($login == "admin" && $senha == "admin")
                {
                   if($linha['senha']==$senha && $linha['email']==$login )
                {
                    $_SESSION['nome']= $linha['nome'];
                    header("location:cadastroCliente.php");
                } 
                }
                 
                if($linha['senha']==$senha && $linha['email']==$login && $login != "admin" )
                {
                    $_SESSION['nome']= $linha['nome'];
                    header("location:playstation.php");
                }
                }
                if($linha['senha']!=$senha || $linha['email']!=$login )
                {
                    echo '<script language="javascript">';
                    echo 'alert("Usuário ou senha Incorreto")';
                    echo '</script>';
                }
                    
        }//fecha try
        catch (PDOException $erro) 
        {
            echo '<script language="javascript">';
            echo 'alert("Algum erro no banco")';
            echo '</script>';
        }       
        }
    }
    public function cadlogin()
    {
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
        {
        echo '<script language="javascript">';
        echo 'alert("Dados salvos com sucesso ")';
        echo '</script>';
        }
        header("location:login.php");
       
        }
        
        catch(PDOException $erro){
        echo '<script language="javascript">';
        echo 'alert("Erro conexão... ")';
        echo '</script>';   
        }
        }
    }
    public function deletar()
    { 
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
    }
}
?>
