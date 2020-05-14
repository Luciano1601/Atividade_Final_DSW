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
		$email=@$_POST['email'];
		$ddd=@$_POST['ddd'];
		$codigo=@$_POST['codigo'];
		$numero=@$_POST['numero'];		
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
        <form action="processa_estudante.php" method="post">
          <table>			
		    <p >
			    <label  style="height: 30px;width: 100px; font-size:50px;" > Cadastro de Estudante</label>
			</p>
			<p > 
				<label > Nome: </label>
				<input type="text" id="nomeid" placeholder="Informe seu nome." name="nome" value="<?php echo $nome;?>"/>
			</p>
				<label > E-mail: </label>
				<input type="text" id="nomeid" placeholder="Informe seu E-mail" name="email" value="<?php echo $email;?>"/>
			</p>	
			<p > 
				<label > DDD: </label>
				<input type="text" id="nomeid" placeholder="ex55" name="ddd" value="<?php echo $ddd;?>"/>
			</p>
			<p > 
				<label > Código Estado: </label>
				<input type="text" id="nomeid" placeholder="ex:11" name="codigo" value="<?php echo $codigo;?>"/>
			</p>	
			<p > 
				<label > Numero: </label>
				<input type="text" id="nomeid" placeholder="ex:940028922" name="numero" value="<?php echo $numero;?>"/>
			</p>				
			<p>			
			<p>
				<label> CEP: </label>
				<input type="text" name="cep" size="30" placeholder="33344555" value="<?php echo $cep;?>">
			</p>	
			<p>
				<label> Rua: </label>
				<input type="text" name="rua" id="rua" value="<?php echo $logradouro;?>">
			</p>
			<p>
				<label> numero: </label>
				<input type="text" name="nm" id="rua" value="<?php echo $nm;?>" >
			</p>				
			<p>
				<label> Bairro: </label>
				<input type="text" name="bairro" value="<?php echo $bairro;?>" >
			</p>	
			<p>
				<label> Cidade: </label>
				<input type="text" name="cidade" value="<?php echo $localidade;?>" >
			</p>	
			<p>
				<label> Estado: </label>
				<input type="text" name="estado" size="30" value="<?php echo $uf;?>" >
			</p>
			<p style="height: 30px;width: 100px; font-weight: bold;">  
				<input type="submit" value="salvar">
			</p>			
		  </table>
    </body>
</html>