 <html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css" >
    <title>ALTERAÇÃO DE NOTAS</title>
  </head>
    <body>
	    <form action="processa_nota.php" method="post">
          <table>			
		    <p >
			    <label  style="height: 30px;width: 100px; font-size:50px;" > Cadastro de Estudante</label>
			</p>
			<p > 
				<label > Nome: </label>
				<input type="text" id="nomeid"  name="nome" />
			</p>
				<label > DICIPLINA: </label>
				<input type="text" id="diciplinaid"  name="diciplina" />
			</p>
			<BR>
			<p > 
				<label > NÃO É NECESSÁRIO INCLUIR TODAS AS NOTAS DE UMA VEZ!!! </label>
			</p>
			<BR>
			<p > 
				<label > AVALIAÇÃO 1: </label>
				<input type="text" id="avaliacao1id" placeholder="0 a 10" name="avaliacao1" />
			</p>
			<p > 
				<label > AVALIAÇÃO 2: </label>
				<input type="text" id="avaliacao2id" placeholder="0 a 10" name="avaliacao2" />
			</p>	
			<p > 
				<label > AVALIAÇÃO 3: </label>
				<input type="text" id="avaliacao3id" placeholder="0 a 10" name="avaliacao3" />
			</p>				
			<p style="height: 30px;width: 100px; font-weight: bold;">  
				<input type="submit" value="salvar">
			</p>			
		  </table>
    </body>
</html>