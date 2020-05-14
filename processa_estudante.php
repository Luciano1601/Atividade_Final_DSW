<?php
  include_once("conexao1.php")
?>
<?php //salva estudante
		$nome=@$_POST['nome'];
		$email=@$_POST['email'];
		$ddd=@$_POST['ddd'];
		$codigo=@$_POST['codigo'];
		$numero=@$_POST['numero'];		
		$cep=@$_POST['cep'];
		$logradouro=@$_POST['rua'];
		$bairro=@$_POST['bairro'];
		$localidade=@$_POST['cidade'];
		$uf=@$_POST['estado'];
           if($nome!=''and $email!=''){
	         $cadEstudante = "INSERT INTO ESTUDANTE(NM_ESTUDANTE,E_MAIL) VALUES(?,?)";
			 $parametros = array("$nome","$email"); 
			 $envio =sqlsrv_query($resultado ,$cadEstudante,$parametros);
		     $select = "SELECT CD_ESTUDANTE FROM ESTUDANTE WHERE NM_ESTUDANTE = $nome and E_MAIL= $email";
			 $envio1 = sqlsrv_query($resultado,$select );			 
                if ($envio) {  
                echo "Cadastrado com sucesso.\n";  
              } else {  
                 echo "Row insertion failed.\n";  
                die(print_r(sqlsrv_errors(), true)); }
           }
		   else{
			   echo("erro");	 
		   }
		   if($ddd!=''and $codigo!=''){
			 $cadTelefone = "INSERT INTO ESTUDANTE(DDD,CD_ESTADO,NUMERO,CD_ESTUDANTE) VALUES(?,?,?,?)";
			 $parametros1 = array($ddd,$codigo,$numero,$envio1); 
			 $envio2 =sqlsrv_query($resultado ,$cadTelefone,$parametros1);   
			 echo "Cadastrado com sucesso.\n";  
		   }
		   	if($cep!=''and $uf!=''){
			 $cadCep = "INSERT INTO CEP(CEP,RUA,NUMERO,BAIRRO,CIDADE,ESTADO,CD_ESTUDANTE) VALUES(?,?,?,?,?,?,?)";
			 $parametros1 = array($cep,$logradouro,$bairro,$localidade,$uf,$envio1); 
			 $envio2 =sqlsrv_query($resultado ,$cadTelefone,$parametros1);   
			 echo "Cadastrado com sucesso.\n";  
		   }
	    sqlsrv_free_stmt($envio);
		sqlsrv_free_stmt($envio2);
        sqlsrv_close($resultado); 	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css" >
<title>Pagina inicial</title>
</head>
<body class="home">
<nav class="home1">
<input class="link">
<label for="chec" >
<img src="menu.jpg">
<span style="position:absolute; color:red; bottom:500px; left:530px;">
<p>
<label>
<?php echo("CADASTRO REALIZADO COM SUCESSO!!!");?></label>
</p>
</span>
</label >
   <ul class="home2">
      <li class="home3"><a href="salvar_diciplina.php">CADASTRO DE DICIPLINA</a></li>
	  <li class="home3"><a href="salvar_estudante.php">CADASTRO DE ESTUDANTE</a></li>
	  <li class="home3"><a href="lancar_nota.php">LANÇAR NOTA</a></li>
	  <li class="home3"><a href="alterar_nota.php">ALTERAR NOTA</a></li>
	  <li class="home3"><a href="">MOSTRAR RELATÓRIO DE ESTUDANTES</a></li>
   </ul>
</nav>

   

</body>
</html>