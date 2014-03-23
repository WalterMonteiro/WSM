<?php
    session_start();
    
    if (!isset($_SESSION['carrinho']))
    {
            $_SESSION['carrinho'] = array();
    }
            // adicionar produto
        if (isset($_GET['acao']))
        {
                 // adicionar carrrinho
                 if($_GET['acao'] == 'add')
                 {
                         $id = intval($_GET['id']);
                         if(!isset($_SESSION['carrinho'] [$id]))
                         {
                              $_SESSION['carrinho'] [$id] = 1;
                         }
                         else 
                         {
                              $_SESSION['carrinho'] [$id] += 1;
                         }
                  }
                  
                 // Remover do carrinho
                  if($_GET ['acao'] == 'del')
                  {
                      $id = intval($_GET['id']);
                      if (isset($_SESSION['carrinho'][$id] )) 
                      {
                          unset($_SESSION['carrinho'][$id]);
                      }
                      
                  }
                  //Alterar quantidade
                  if ($_GET ['acao'] == 'up' )
                  {
                      if(is_array($_POST['prod']))
                      {
                          foreach ($_POST ['prod'] as $id => $qtd)
                          {
                              $id  = intval ($id);
                              $qtd = intval ($qtd);
                              if(!empty($qtd)|| $dtd <> 0)
                              {
                                  $_SESSION['carrinho'][$id] = $qtd;
                              }
                              else
                              {
                                  unset ($_SESSION['carrinho'][$id]);
                              }
                          }
                      }
                  }
                  
         }

          
       //  print_r($_SESSION['carrinho']);
        

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>HardTech</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    

    
    
    <table>
        <thead>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Pre&ccedil;o</th>
            <th width="100">SupTotal</th>
            <th width="64">Remover</th>
        </thead>
        
            <form action="?acao=up" method="post">
        


                <tbody>
                  <?php
                        if(count($_SESSION['carrinho']) ==0)
                        {
                            echo '<tr><td colspan="5"><center><h2> Nao ha produto no carrinho </h2></center></td></tr>';
                        }
                         else 
                            {   
                             
                            require ("conexao.php");
                                foreach ($_SESSION['carrinho'] as $id => $qtd)
                                {
                                    $sql   = "SELECT * FROM produto WHERE id= '$id'";
                                    $qr    = mysql_query($sql) or die (mysql_error());
                                    $ln    = mysql_fetch_assoc($qr);

                                    $nome  = $ln ['nome'];
                                    $preco = number_format ($ln ['preco'], 2, ',','.');
                                    $sub   = number_format ($ln ['preco'] * $qtd, 2, ',','.');
                                    
                                    
                                    echo'
                                        <tr>
                                            <td>'.$nome.'</td>
                                            <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                            <td>'.$preco.'</td>
                                            <td>'.$sub.'</td>
                                            <td><a href="?acao=del&id='.$id.'">Remover</a></td>
                                        </tr>
                                        ';
                                    
                                }
                                     $total += $sub;                      
                        }
                        
                        $total = number_format ($total, 2, ',','.');
                            echo'
                                <tr>
                                    <td colspan="3"> Total</td>
                                    <td colspan="2"> R$ '.$total.' </td>
                                </tr>
                                 ';    
                        
                        
                    ?>
                        
                     
                        
                </tbody>
                
              <tfoot>
                    <tr>
                        <td colspan="5"><input type="submit" value="Atualizar "/> </td>
                    </tr>

                    <tr>
                        <td colspan="5"><a href="index.php"> Escolher mais produtos </a></td>
                    </tr>
                </tfoot>
                
        
            </form>
        
    </table>
    
    
    
</body>
</html>