<?php
  include_once("conexao1.php")
?>
<?php
  		$nome=@$_POST['nome'];
		$diciplina=@$_POST['diciplina'];
		$avaliacao1=@$_POST['avaliacao1'];
		$avaliacao2=@$_POST['avaliacao2'];
		$avaliacao3=@$_POST['avaliacao3'];
		     if($nome!=''and $diciplina!=''){
			 $select = "SELECT CD_DICIPLINA FROM DICIPLINA WHERE NM_DICIPLINA ={'$diciplina'}";
			 $envio = sqlsrv_query($resultado,$select );
		     $select1 = "SELECT CD_ESTUDANTE FROM ESTUDANTE WHERE NM_ESTUDANTE =$nome";
			 $envio1 = sqlsrv_query($resultado,$select1 );
             echo ($envio);
	           $cadEstudante = "INSERT INTO DICIPLINA_ESTUDANTE(ID_DICIPLINA , ID_ESTUDANTE) VALUES(?,?)";
			   $parametros = array($envio,$envio1);
			   $envio2 =sqlsrv_query($resultado ,$cadEstudante,$parametros);
			 
                if ($envio2) {  
                echo "Cadastrado com sucesso.\n";  
              } else {  
                 echo "Row insertion failed.\n";  
                die(print_r(sqlsrv_errors(), true)); }
           }
		   
?>