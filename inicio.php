<html>
	<head>
		<title> Formulario </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		$nome=@$_POST['nome'];
		$cep=@$_POST['cep'];
		
		if ($nome == ''){
			$logradouro = "";
			$bairro		= "";
			$localidade = "";
			$uf			= "";
			$pais 		= "";
		}
		if ($cep!=''){
			$arq = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/');

			$json = json_decode($arq);
			
			$logradouro = $json->logradouro;
			$bairro		= $json->bairro;
			$localidade = $json->localidade;
			$uf			= $json->uf;
			
			if ($uf != ''){
				$pais = "Brasil";
			}
		}
		?>
		<form action="pagina.php" method="post">
		<table>
			<p> 
				<label> Nome: </label>
				<input type="text" id="nomeid" placeholder="Informe seu nome." name="nome"/>
			</p>
			<p>
				<input type="radio" name="sexo" id="sexo" value="M">Masculino 
				<input type="radio" name="sexo" id="sexo" value="F">Feminino 
			</p>
			
			<p>
				<label> CEP: </label>
				<input type="text" name="cep" size="30" placeholder="Ex:12345678" value="<?php echo $cep;?>">
			</p>	
			
			<p style="height: 30px;width: 100px; font-weight: bold;"class="submit">  
				<input type="submit" value="Verificar CEP">
			</p>
			
			<p>
				<label> Rua: </label>
				<input type="text" name="rua" id="rua" value="<?php echo $logradouro;?>" disabled>
			</p>	
			
			<p>
				<label> Bairro: </label>
				<input type="text" name="bairro" value="<?php echo $bairro;?>" disabled>
			</p>	
			
			<p>
				<label> Cidade: </label>
				<input type="text" name="cidade" value="<?php echo $localidade;?>" disabled>
			</p>	
			
			<p>
				<label> Estado: </label>
				<input type="text" name="estado" size="30" value="<?php echo $uf;?>" disabled>
			</p>	
			
			<p>
				<label > País: </label>
				<input type="text"  name="pais" value="<?php echo $pais;?>" disabled>
			</p>	
		</table>
		</form>
	</body>
</html>