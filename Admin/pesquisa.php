<?php
    
                 if($_GET['acao'] == 'cliente')
                 {
                                   
                    require ("conexao.php");
                    $sql ="SELECT * FROM produto where qtdproduto > 0";
                    $qr = mysql_query($sql) or die(mysql_error());

                            while($ln = mysql_fetch_assoc($qr)) 
                            {
                            echo'<div class="item">';
                            echo'<img src="produto/'.$ln['imagem'].'"width="124" height="111"/> <br/>';
                            echo'<h2>'.$ln ['nome'].'</h></br>';
                            echo'Pre&ccedil;o: R$' .number_format($ln['preco'], 2, ',','.').'</br>';
                            echo'<a href="carrinho.php?acao=add&id='.$ln['id'].'"><img src="imagem/cart.gif" alt="" width="71" height="19" /> </a>';
                            echo'<br/> ';
                            echo'</div>';
                            }
                    
    
 
                }

?>