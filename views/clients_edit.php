<?php if(!empty($list_client)){
	foreach ($list_client as $Clients) {
		extract($Clients);
	}
}
?>
<div class="container-fluid">
<h2>Client Edit</h2>


<form method="POST">
	<div class="col-md-4 col-md-offset-4">
		<div class="form-group">
			<input type="text" name="client_name" class="form-control" value="<?php echo $client_name; ?>">
		</div>
	
	<div class="form-group">
		<select name="client_genre" class="form-control">
			<option value="">Selecione o Sexo</option>
			<option <?php echo ($client_genre == "M" ? "selected" : ""); ?> value="m">Masculino</option>
			<option <?php echo ($client_genre == "F" ? "selected" : ""); ?> value="f">Feminino</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" value="Alterar Cadastro" class="btn btn-primary">
	</div>
	</div>

</form>

</div>