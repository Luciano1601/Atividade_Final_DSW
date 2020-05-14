<?php
  include_once("conexao1.php")
?>
<?php //salva diciplina
           $diciplina=@$_POST['diciplina'];
           if($diciplina!=''){
	         $cadDiciplina ="INSERT INTO DICIPLINA(NM_DICIPLINA) VALUES(?)"	;
			 $parametro = array("$diciplina");
			 $enviod =sqlsrv_query($resultado ,$cadDiciplina,$parametro);
			 if ($enviod) {  
			   echo "Cadastrado com sucesso.\n"; } 
             else {  
               echo "Row insertion failed.\n";  
               die(print_r(sqlsrv_errors(), true)); }
           }
		
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
	  <li class="home3"><a href="">ALTERAR NOTA</a></li>
	  <li class="home3"><a href="">MOSTRAR RELATÓRIO DE ESTUDANTES</a></li>
   </ul>
</nav>

   

</body>
</html>