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
    
}
?>
