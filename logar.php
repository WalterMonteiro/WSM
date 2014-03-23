<?php

if(isset($_REQUEST['logar'])) {
    $loguin = $_REQUEST ['loguin'];
    $senha  = $_REQUEST ['senha'];
    
    $sql   = "SELECT * FROM cliente WHERE loguin = '$loguin' AND senha = '$senha' ";
    
    $query = mysql_query($sql) or die (mysql_error());
    $qtda  = mysql_num_rows($query);
    
    if ($qtda  == 0)
    {
        echo 'erro ao logar';
        
    }
    else 
    {
        header("Location: cliente.php");
    }
   
}

?>