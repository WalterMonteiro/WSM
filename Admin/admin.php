<?php session_start();?>
<?php

if(!isset ($_SESSION['usuario']) && (!isset ($_SESSION['senha'])))
    {
    header("Location: index.php");
    }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>HardTech</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    
    
    
    <!-- banner superiro logotipo-->
    
        <div id="header">
                 <img src="banner/superior.jpg" alt="" width="800" height="90" />
        </div>
    
    <!--Criando saldação da area administrativa-->
    
        <div id="header">        
                 <div align="center"><h1>Bem vindo a area de administracao</h1>
        </div>
    
   <!-- Criando menu area administrativa-->         
     
    <table width="985" >
        
        <tr>
            <td width="92">Ola  </td>
            <td> </td>
            <td width="299"><div align="right"><a href="?sair">sair</a></div></td>
        </tr>

        <tr>
            <td width="92">
              
                <a href="?cliente">cliente<br/></a>
                <a href="?admin">administrador<br/></a>
                <a href="?produto">produto<br/></a>
                <a href="?venda">venda<br/></a>
              
            </td>
            
            <td>
            <?php    
            require 'pesquisa.php';
            ?>
            </td>
            
            <td width="299">
                &nbsp;
            </td>
        </tr>
        
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>



    </table>
      
     <!--fazer logoff da conta de administrador-->
        <?php
                if(isset ($_REQUEST['sair']))
                {
                    header("Location: index.php");
                }

         ?>
    <!--Definindo roda pe-->

        <div id="footer">
            <h5>HardTech</h5>
        </div>

</body>
</html>