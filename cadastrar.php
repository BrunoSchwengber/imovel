<?php 
	require_once("conexao.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUGUEL UTFPR</title>
    </head>
    <body>
        <table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>GÊNERO</th>
				<th>TELEFONE</th>
				<th>CPF</th>
				<th>ENDEREÇO</th>
				<th>BAIRRO</th>
				<th>CIDADE</th>
			</tr>
		</thead>
		<tbody>
			<?php while($cad = $rs->fetch_array()):?>
				<tr>
					<td><?php echo($cad['cad_id']) ?></td>
					<td><?php echo($cad['cad_nome']) ?></td>
					<td><?php echo($cad['cad_genero']) ?></td>
					<td><?php echo($cad['cad_telefone']) ?></td>
					<td><?php echo($cad['cad_cpf']) ?></td>
					<td><?php echo($cad['cad_endereco']) ?></td>
					<td><?php echo($cad['cad_bairro']) ?></td>
					<td><?php echo($cad['cad_cidade']) ?></td></tr>
			<?php endwhile;?>
		</tbody>
	</table>
    </body>
</html>
