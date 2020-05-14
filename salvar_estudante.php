
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css" >
    <title>CADASTRO DE ESTUDANTE</title>
  </head>
    <body>
		 <?php //verifica cep 
		$nome=@$_POST['nome'];
		$cep=@$_POST['cep'];
        $cep = preg_replace( '/[^0-6]/is','', $cep );
        if (strlen($cep) != 8) {
	    }
	    if (preg_match('/(\d)\1{7}/', $cep)) {
           echo('CEP inválido');    }
		if ($nome == ''){
			$logradouro = "";
			$bairro		= "";
			$localidade = "";
			$uf			= "";
			$nm = "";
		}
	    else{
	       $arq = file_get_contents("http://viacep.com.br/ws/$cep/json/");
	       $json = json_decode($arq);
	       $logradouro =$json->logradouro;
	       $bairro =$json->bairro;
	       $localidade =$json->localidade;
	       $uf =$json->uf;
		   $nm= $json->complemento;
	    }
		?>
        <form action="salvar_estudante1.php" method="post">
          <table>			
		    <p >
			    <label  style="height: 30px;width: 100px; font-size:50px;" > Cadastro de Estudante</label>
			</p>
			<p > 
				<label > Nome: </label>
				<input type="text" id="nomeid" placeholder="Informe seu nome." name="nome" 
				required="required"/>
			</p>
		    <p > 
				<label > E-mail: </label>
				<input type="text" id="nomeid" placeholder="Informe seu E-mail" name="email" 
				required="required" />
			</p>	
			<p > 
				<label > DDD: </label>
				<input type="text" id="nomeid" maxlength="2" placeholder="ex55" name="ddd" />
			</p>
			<p > 
				<label > Código Estado: </label>
				<input type="text" id="nomeid" maxlength="2" placeholder="ex:11" name="codigo" />
			</p>	
			<p > 
				<label > Numero: </label>
				<input type="text" id="nomeid" maxlength="9" placeholder="ex:940028922" name="numero" />
			</p>				
			<p>
			
				<label> CEP: </label>
				<input type="text" name="cep" size="30" maxlength="8" placeholder="33344555" />
			</p>	
			
			<p style="height: 30px;width: 100px; font-weight: bold;">  
				<input type="submit" value="Procurar CEP">
			</p>
			
			<p>
				<label> Rua: </label>
				<input type="text" name="rua" id="rua" disabled>
			</p>	
			<p>
				<label> numero: </label>
				<input type="text" name="nm" id="rua" disabled>
			</p>			
			<p>
				<label> Bairro: </label>
				<input type="text" name="bairro"  disabled>
			</p>	
			
			<p>
				<label> Cidade: </label>
				<input type="text" name="cidade" disabled>
			</p>	
			
			<p>
				<label> Estado: </label>
				<input type="text" name="estado" size="30" disabled>
			</p>		
		  </table>
    </body>
</html>