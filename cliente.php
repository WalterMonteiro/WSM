<?php session_start();?>

<?php

if(!isset ($_SESSION['loguin']) && (!isset ($_SESSION['senha'])))
    {
    header("Location: index.php");
    }

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />


</head>
<body>
    
<?php

    
    $secao_loguin = $_SESSION['loguin'];

    
?>
    


<h1>Ola: <?php echo $secao_loguin;?>  </h1> <a href="?sair">sair</a>



<?php
    if(isset ($_REQUEST['sair']))
    {
        header("Location: index.php");
    }

?>

</body>
</html>