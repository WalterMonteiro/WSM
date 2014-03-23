<?php session_start(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>HardTech</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="header">
            
            <!-- banner superiro logotipo-->
            <a href="index.html" class="float"><img src="banner/superior.jpg" alt="" width="800" height="90" /></a>																																																		
	
	
		
		<ul id="menu">
			<li><img src="imagem/li.gif" alt="" width="19" height="29" /></li>
                        <li><a href="index.php"><img src="imagem/but1_a.gif" alt="" width="90" height="29" /></a></li>
			<li><a href="empresa.php"><img src="imagem/but2.gif" alt="" width="129" height="29" /></a></li>
                        <li><a href="promocoes.php"><img src="imagem/but3.gif" alt="" width="127" height="29" /></a></li>
                        <li><a href="faleconosco.php"><img src="imagem/but4.gif" alt="" width="113" height="29" /></a></li>
						
			</ul>
	</div>
	
    
    
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
                            <!-- banner propaganda central-->
	  	<a href="#" class="banner"><img src="banner/centro.jpg" alt="" width="572" height="236" /></a><br />
	  	<div id="content">
                    
                        

                    
                   
			<img src="imagem/title2.gif" alt="" width="540" height="29" /><br /><br />
			
				
     <?php
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
                    
    
    ?>
                
		</div>
	  </div>
	  <div id="left" class="column">
	  	<div class="block">
		<img src="imagem/title1.gif" alt="" width="168" height="42" /><br />
			<ul id="navigation">
                            <li class="color"><a href="telaproduto/acessorios.php">Acessorios</a></li>
                                <li><a href="Acessorios.php">Cabos</a></li>
                                <li class="color"><a href="caixasdesom.php">Caixas de Som</a></li>
                                <li><a href="cartaodememoria.php">Cartoes de memoria</a></li>
                                <li class="color"><a href="computadores.php">Computadores</a></li>
                                <li><a href="cooler.php">Cooler</a></li>
                                <li class="color"><a href="docksstation.php">Docks Station</a></li>
                                <li><a href="energia.php">Energia</a></li>
				<li class="color"><a href="#">Fones de ouvido</a></li>
                                <li><a href="fonte.php">Fontes</a></li>
                                <li class="color"><a href="gabinete.php">Gabinetes</a></li>
                                <li><a href="gravadora.php">Gravadora</a></li>
                                <li class="color"><a href="hd.php">HD</a></li>
                                <li><a href="memoria.php">Memoria</a></li>
                                <li class="color"><a href="monitor.php">Monitores</a></li>
                                <li><a href="placadesom.php">Placa de som</a></li>
                                <li class="color"><a href="placadevideo.php">Placa de videos</a></li>
                                <li><a href="placamae.php">Placa mae</a></li>
                                <li class="color"><a href="processadores.php">Processadores</a></li>
                                <li><a href="rede.php">Rede</a></li>
                                <li class="color"><a href="tablet.php">Tablet</a></li>
                                <li><a href="teclado.php">Teclado</a></li>
                                <li class="color"><a href="webcam.php">WebCam</a></li>
			</ul>
		</div>
              
              <!--baner inferior esquerdo-->
              <a href="#"><img src="banner/esquerdo.jpg" alt="" width="172" height="200" /></a>
	  </div>
	  <div id="right" class="column">
                 <!--banner superios direito-->
	  	<a href="#"><img src="banner/direito.jpg" alt="" width="237" height="216" /></a><br />
		<div class="rightblock">
			<img src="imagem/title4.gif" alt="" width="223" height="29" /><br />
			<div class="blocks">
				<img src="imagem/top_bg.gif" alt="" width="218" height="12" />
                                
                                
                                <?php

                                    if(!isset ($_SESSION['loguin']) && (!isset ($_SESSION['senha'])))
                                        {
                                                                echo '<form action="#">
                                                                                                      <label>Usuario</label><br/>
                                                    <input type="text" name="loguin" id="loguin" placeholder="Nome de loguin"><br/><br/>
                                                    <label>Senha</label><br/>
                                                    <input type="password" name="senha" id="senha" placeholder="Sua senha"><br/><br/>
                                                    <input type="submit" name="logar" id="logar" value="Logar">  <br/><br/>
                                                                            <p class="line center"><a href="cadastro.php" class="reg">Registrar</a> | <a href="esquecer.php" class="reg">Esqueceu a senha?</a></p>
                                                                    </form>';
                                                                     include'logar.php'; 
                                        }
                                     else 
                                         {
                                            echo 'Ola';
                                            echo $secao_loguin;
                                        }

                                    ?>
                                
                                
			
                                
                                
                                
                                
				<img src="imagem/bot_bg.gif" alt="" width="218" height="10" /><br />
			</div>
			<div class="blocks">
				<img src="imagem/top_bg.gif" alt="" width="218" height="12" />
				
				<img src="imagem/bot_bg.gif" alt="" width="218" height="10" /><br />
			</div>
		</div>
	  </div>
	</div>
	
	<div id="footer">
            <a href="index.html">Home</a>  |   <a href="empresa.php">Empresa</a>  |  <a href="faleconosco.php">Flae conosoco</a>  |  <a href="index2.html">Minha conta</a>  
            </p> Empresa de venda de componentes eletronicos 
</body>
</html>