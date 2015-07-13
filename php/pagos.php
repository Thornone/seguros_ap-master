<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-archive"></i> Pagos
	<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
	</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-6 col-md-12">
			<div class="form-group">
				<label class="col-lg-1 control-label">No. Poliza</label>
				<div class="col-lg-2"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Cliente</label>

							</div>
						</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="form-group">
				<label class="col-lg-4 control-label">Aseguradora</label>

			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="form-group">
			<label class="col-lg-4 control-label">Agente</label>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="form-group">
			<label class="col-lg-4 control-label">Ramo</label>

		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="form-group">
			<label class="col-lg-4 control-label">Subramo</label>

		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="form-group">
			<label class="col-lg-4 control-label">Vigencia</label>

		</div>
	</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Vencimiento</th>
					<th>Serie</th>
					<th>Endoso</th>
					<th>Moneda</th>
					<th>Monto</th>
					<th>Comision</th>
					<th>Pagado</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>columna 6 </td>
					<td>columna 7 </td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2</td>
					<td>columna 3</td>
					<td>columna 4</td>
					<td>columna 5</td>
					<td>columna 6</td>
					<td>columna 7</td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="form-group">
				<label class="col-lg-4 control-label">Monto a Pagar</label>
				<div class="col-lg-6"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">No. Liquidacion</label>
				<div class="col-lg-6"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
							</div>
						</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="form-group">
				<label class="col-lg-4 control-label">Fecha Vencimiento</label>
				<div class="col-lg-6"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="form-group">
			<label class="col-lg-4 control-label">Banco</label>
			<div class="col-lg-6"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="form-group">
			<label class="col-lg-4 control-label">Fecha de Pago</label>
				<div class="col-lg-6"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="form-group">
			<label class="col-lg-4 control-label">No. Cheque</label>
				<div class="col-lg-6"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="form-group">
			<label class="col-lg-4 control-label">Forma de Pago</label>
				<div class="form-group">
		<div class="col-sm-5 m-b-xs">
		<select class="form-control">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select>
		</div>
		</div>
	</div>
	</div>
</div>
<div class="row wrapper">
		<div class="col-xs-12 col-sm-6 col-md-12">
			<div class="form-group">
				<a href="" class="pull-right btn btn-sm btn-success"><i class="fa fa-plus icon"></i> Registrar Pago </a>
			</div>
		</div>
	</div>
</section>