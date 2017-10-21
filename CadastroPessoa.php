<?php 
	require_once("conexao.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUGUÉIS UTFPR</title>
    </head>
    <body>
        <form method="POST" action="cadastrar.php">
		<div>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" value="<?php echo(@$cadastro->car_nome); ?>">
		</div>			
		<br>
		
		<div>
			<label for="nome">Gênero</label>
			<input type="text" name="genero" id="genero" value="<?php echo(@$cadastro->car_genero); ?>">
		</div>
		<br>
		
		<div>
			<label for="nome">Telefone</label>
			<input type="text" name="telefone" id="telefone" value="<?php echo(@$cadastro->car_telefone); ?>">
		</div>
		<br>

		<div>
			<label for="nome">CPF</label>
			<input type="text" name="cpf" id="cpf" value="<?php echo(@$cadastro->car_cpf); ?>">
		</div>
		<br>

		<div>
			<label for="nome">Endereço</label>
			<input type="text" name="endereco" id="endereco" value="<?php echo(@$cadastro->car_endereco); ?>">
		</div>
		<br>

		<div>
			<label for="nome">Bairro</label>
			<input type="text" name="bairro" id="bairro" value="<?php echo(@$cadastro->car_bairro); ?>">
		</div>
		<br>

		<div>
			<label for="nome">Cidade</label>
			<input type="text" name="cidade" id="cidade" value="<?php echo(@$cadastro->car_cidade); ?>">
		</div>
		<br>
		
		<a href="cadastros.php"><input type="button" value="CADASTRAR"></a>
    </body>
</html>
