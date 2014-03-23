<?php session_start(); include 'conexao.php'; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>HardTech</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>



<body>
        <div id="formulario">
                <form name="form" method="post" enctype="multipart/form-data" id="form">
                    <label>Usuario</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Nome de usuario">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Sua senha">
                    <input type="submit" name="logar" id="logar" value="Logar">  
                </form>
            <?php include'logar.php'; ?>
        </div>
    </body>
</html>