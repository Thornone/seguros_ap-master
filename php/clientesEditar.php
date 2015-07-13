<?php
$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$categoria 	= mysql_real_escape_string($_POST['categoria']);
	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$contacto  	= mysql_real_escape_string($_POST['contacto']);
	$correo  	= mysql_real_escape_string($_POST['correo']);
	$rfc  		= mysql_real_escape_string($_POST['rfc']);

	if ( mysql_query("UPDATE clientes SET categoria='".$categoria."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',contacto='".$contacto."',email='".$correo."',rfc='".$rfc."' WHERE id='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente editado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM clientes WHERE id='".$id."' LIMIT 1"));

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">RFC</label>
									<div class="col-lg-10"><input type="text" name="rfc" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Tel&eacute;fono</label>
									<div class="col-lg-10"><input type="text" name="telefono" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-12">
									<div class="form-group">
										<label class="col-lg-2 control-label">Correo</label>
										<div class="col-lg-10"><input type="text" name="correo" class="form-control" placeholder=""></div>
									</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Direcci&oacute;n</label>
									<div class="col-lg-10"><input type="text" name="direccion" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Colonia: </label>
									<div class="col-lg-5"><input type="text" name="contacto" class="form-control" placeholder=""></div>
									<label class="col-lg-1 control-label">CP: </label>
									<div class="col-lg-4"><input type="text" name="cp" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Ciudad: </label>
									<div class="col-lg-10"><input type="text" name="ciudad" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Estado: </label>
									<div class="col-lg-10"><input type="text" name="estado" class="form-control" placeholder=""></div>
								</div>
							</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
