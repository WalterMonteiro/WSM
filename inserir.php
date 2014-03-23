<?php
# chamando conexão
include_once 'conexao.php';

# selecionar o banco de dados que deseja utilizar

#$select = mysql_select_db($ht);

# Verificar se o arquivo foi chamado a partir de um formulario
if (count($_POST)){
    #criar a epressÃ£o SQL de inserÃ§Ã£o
    
    $sql = "INSERT INTO cliente (cpf,nome,sobrenome,estado,cidade,telefone,sexo,datanascimento,cep,email,endereco,loguin) 
            VALUES (    '{$_POST['cpf']}',
			'{$_POST['nome']}',
			'{$_POST['sobrenome']}',
			'{$_POST['estado']}',
			'{$_POST['cidade']}',
			'{$_POST['telefone']}',
			'{$_POST['sexo']}',
			'{$_POST['datanascimento']}',
			'{$_POST['cep']}',
			'{$_POST['email']}',
			'{$_POST['endereco']}',
			'{$_POST['login']}')";
	
	$resultado = mysql_query($sql);
   
    
    #verificar o suscesso da operaÃ§Ã£o
    #se a operaÃ§Ã£o foi realizada com sucesso,informa
	
	echo 'a operacao foi realizada com sucesso<br/>';
        echo '<a href="index.php" class="reg">HOME</a>';
}
?>