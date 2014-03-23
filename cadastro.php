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
	  	
	  	<div id="content">
                    
                    <form id="cadastro" name="cadastro" method="post" action="inserir.php" onsubmit="return validaCampo(); return false;">
                        <table width="625" border="0">
                            <tr>
                                <td width="69">cpf:</td>
                                <td width="546"><input name="cpf" type="text" id="cpf" size="70" maxlength="60" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td>nome:</td>
                                <td><input name="nome" type="text" id="nome" size="70" maxlength="60" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td>sobrenome:</td>
                                <td><input name="sobrenome" type="text" id="sobrenome" size="70" maxlength="60" />
                                <span class="style1">*</span></td>
                            </tr>
							
							<tr>
                                <td>Email:</td>
                                <td><input name="email" type="text" id="email" size="70" maxlength="60" />
                                <span class="style1">*</span></td>
                            </tr>
                           
                            <tr>
                                <td>Estado:</td>
                                <td><select name="estado" id="estado">
                                    <option>Selecione...</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="ES">ES</option>
                                    <option value="DF">DF</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                                <span class="style1">*      </span></td>
                            </tr>
                            
                            <tr>
                                <td>Cidade:</td>
                                <td><input name="cidade" type="text" id="cidade" maxlength="20" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td>endereco:</td>
                                <td><input name="endereco" type="text" id="endereco" maxlength="20" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td>Cep:</td>
                                <td><input name="cep" type="text" id="cep" maxlength="20" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td>Telefone:</td>
                                <td><input name="telefone" type="text" id="telefone" />
                                <span class="style3">Apenas numeros</span> </td>
                            </tr>
                            
                            <tr>
                                <td>Sexo:</td>
                                <td><input name="sexo" type="radio" id="sexo" value="Masculino" checked="checked" />
                                Masculino <input name="sexo" type="radio" id="sexo" value="Feminino" />
                                Feminino <span class="style1">*</span> </td>
                            </tr>
                                
                            <tr>
                                <td>Data de nascimento:</td>
                                <td><input name="datanascimento" type="text" id="datanascmimento" size="70" maxlength="70" />
                                <span class="style1">*</span></td>
                            </tr>

                            <tr>
                                <td>Login:</td>
                                <td><input name="login" type="text" id="loguin" maxlength="12" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td>Senha:</td>
                                <td><input name="senha" type="password" id="senha" maxlength="12" />
                                <span class="style1">*</span></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><p>
                                <a href="inserir.php"><input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> <a/>
                                </br></br><input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                                </br></br><span class="style1">* Campos com * são obrigatórios!          </span></p>
                            <p>  </p></td>
                            </tr>
                        </table>
                    </form>					
		
		</div>
	  </div>
	  <div id="left" class="column">
	  	<div class="block">
		
			<ul id="navigation">
				<li class="color"><a href="#">Acessorios</a></li>
				<li><a href="#">Acessorios Notebook</a></li>
				<li class="color"><a href="#">Antivirus</a></li>
				<li><a href="#">Cabos</a></li>
				<li class="color"><a href="#">Caixas de Som</a></li>
				<li><a href="#">Cartoes de memoria</a></li>
				<li class="color"><a href="#">Computadores</a></li>
				<li><a href="#">Cooler</a></li>
				<li class="color"><a href="#">Docks Station</a></li>
				<li><a href="#">Energia</a></li>
				<li class="color"><a href="#">Fones de ouvido</a></li>
				<li><a href="#">Fontes</a></li>
				<li class="color"><a href="#">Gabinetes</a></li>
				<li><a href="#">Gravadora</a></li>
				<li class="color"><a href="#">HD</a></li>
				<li><a href="#">Memoria</a></li>
				<li class="color"><a href="#">Monitores</a></li>
				<li><a href="#">Placa de som</a></li>
				<li class="color"><a href="#">Placa de videos</a></li>
				<li><a href="#">Placa mae</a></li>
				<li class="color"><a href="#">Processadores</a></li>
				<li><a href="#">Rede</a></li>
				<li class="color"><a href="#">Tablet</a></li>
				<li><a href="#">Teclado</a></li>
				<li class="color"><a href="#">WebCam</a></li>
			</ul>
		</div>
		
	  </div>
	
	</div>
	
	<div id="footer">
		<a href="index.php">Home</a>  |  <a href="index2.html">Novos Produtos</a>  |  <a href="index2.html">Oferta</a>  |  <a href="index2.html">Minha conta</a>  |  <a href="index2.html"></a>  |  <a href="index2.html"></a>  |  <a href="index2.html"></a>  |  <a href="index2.html"></a>  |  <a href="index2.html" class="terms"></a>  |  <a href="index2.html" class="terms"></a>
		<p> Empresa de venda de componentes eletronicos 
</body>
</html>