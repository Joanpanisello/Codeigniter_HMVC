<!DOCTYPE html>
<html>
<head>
	<?php include('includes.html'); ?>
</head>
<body>
	<?php include('navbar_top.html'); ?>
<br><br><br><br>

<h2 align='center'>Nou Usuari</h2><br><br><br>

<form method="post" accept-charset="utf-8" action="enviar" />

<label for="nom">&nbsp;&nbsp;<?php $this->lang->line('nom_form');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="nom" id="nom" value="" maxlength="20" size="20" style="width:15%" /><br><br>

<label for="cognom">&nbsp;&nbsp;<?php $this->lang->line('cognom_form');?>&nbsp;&nbsp;</label>
<input type="text" name="cognom" id="cognom" value="" maxlength="20" size="20" style="width:15%" /><br><br>

<label for="adreça">&nbsp;&nbsp;<?php $this->lang->line('adresa_form');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="adresa" id="adresa" value="" maxlength="20" size="20" style="width:15%" /><br><br>

<label for="ciutat">&nbsp;&nbsp;<?php $this->lang->line('ciutat_form');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="ciutat" id="ciutat" value="" maxlength="20" size="20" style="width:15%" /><br><br>

<label for="pais">&nbsp;&nbsp;<?php $this->lang->line('pais_form');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="pais" id="pais" value="" maxlength="20" size="20" style="width:15%" /><br><br>

<label for="telefon">&nbsp;&nbsp;<?php $this->lang->line('telefon_form');?>&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="telefon" id="telefon" value="" maxlength="20" size="20" style="width:15%" /><br><br><br><br>

<div align="left" style=margin-left:400px;>
<input type="submit" name="mysubmit" value="Crear"/>
</div>


</form>


	<div align="right" style=margin-top:300px;>
		<a href='javascript:history.back()'>
			<button type="button" class="btn btn-primary">
				Atras
			</button>
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div> 	

</body>
</html>
