<!DOCTYPE html>
<html>
<head>


 
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


<!-- Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">


<script type="text/javascript">
$(document).ready(function() {
	$('#users_table').dataTable({    
	"bPaginate": false,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false
	});
} );
</script>


	
</head>
<body>

	<?php include('navbar_top.html'); ?><br><br><br>

	<h3 align=center>Usuaris</h3><br>

	<!--<h1><?php //echo '<pre>'; print_r($this->_ci_cached_vars); die(); ?></h1>-->

	<div align="right">
	 				<a href='/codeigniterhelloworld/index.php/usuaris/crear'>
						<button type="button" class="btn btn-success">
				  			<span class="glyphicon glyphicon-plus"></span> 
				  			<span class="glyphicon glyphicon-user"></span> 
						</button>
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div> 

	<table cellpadding="0" cellspacing="0" border="0" id="users_table" class="table table-striped" width="100%" align="center">
		<thead bgcolor=#819FF7>
			<tr>
				<th>Nom</th>
				<th>Cognom</th>
				<th>Adre&ccedil;a</th>
				<th>Ciutat</th>
				<th>Pais</th>
				<th>Telefon</th>
				<th>ID</th>
				<th>Accions</th>
			</tr>
		</thead>
		<tbody>

			



			
			<?php foreach($this->_ci_cached_vars as $index => $persona){ ?>
			<tr>
				<td><?php echo $persona['Nom']; ?></td>
				<td><?php echo $persona['Cognom']; ?></td>
				<td><?php echo $persona['Adreça']; ?></td>
				<td><?php echo $persona['Ciutat']; ?></td>
				<td><?php echo $persona['Pais']; ?></td>
				<td><?php echo $persona['Telefon']; ?></td>
				<td><?php echo $persona['id']; ?></td>
				<td>
					<a href='/codeigniterhelloworld/index.php/usuaris/modificar/<?php echo $persona['id']; ?>'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterhelloworld/index.php/usuaris/eliminare/<?php echo $persona['id']; ?>'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<div align="right" style=margin-top:176px;>
		<a href='javascript:history.back()'>
			<button type="button" class="btn btn-primary">
				Atras
			</button>
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div> 

</body>
</html>

