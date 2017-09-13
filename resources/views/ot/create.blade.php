@extends('layout.custom')

<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http://apirest.netne.net/assets/js/jquery.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/jspersonal.js') }}"></script>

<script type="text/javascript">


</script>

@section('content')

<div class="col-md-12">
	<div class="card">
		<div class="card-header" data-background-color="purple">
			<h4 class="title">OT</h4>
			<p class="category">Complete todos los campos</p>
		</div>
		<div class="card-content">
			<form action="#">
				<div class="row">
					<div class="col-md-9">
						<div class="form-group label-floating">
							<label class="control-label">Cliente</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Cono</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<!-- <div class="col-md-2">
						<div class="form-group label-floating">
							<label class="control-label">OT</label>
							<input type="email" class="form-control" >
						</div>
					</div> -->
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group label-floating">
							<label class="control-label">Dirección</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Distrito</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Recepcionista</label>
							<input type="text" class="form-control" >
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">E-mail</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Telefono</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Marca de vehículo</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Modelo de vehículo</label>
							<input type="text" class="form-control" >
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Año</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Color</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Placa</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group label-floating">
							<label class="control-label">Kilometraje</label>
							<input type="number" class="form-control" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<select id="tipo" name="tipo" onChange="mostrar(this.value);">
							<option value="none">--Ninguna--</option>
							<option value="DFSK">DFSK</option>
							<option value="SSANGYONG">SSANGYONG</option>
							<option value="SAM">SAM</option>
							<option value="PLANCHADOYPINTURA">PLANCHADO Y PINTURA</option>
							<option value="SEGUROS">SEGUROS</option>
							<option value="FLOTAS">FLOTAS</option>
							<option value="OFERTAS">OFERTAS</option>
							<option value="CUPON">CUPON</option>
							<option value="CUPONPAGADO">CUPON PAGADO TALLER</option>
							<option value="RECLAMOS">RECLAMOS</option>
							<option value="REPUESTOS">REPUESTOS</option>
						</select>
					</div>
				</div>

				<div class="row" id="A" style="display: none;">

					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="preventivo" id="preventivo" value="Bike" onchange="showContent('content_preventivo','preventivo')">Preventivo<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivomotor" id="correctivomotor" value="Car" onchange="showContent('content_correctivo_motor','correctivomotor')">Correctivo Motor<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivocaja" id="correctivocaja" value="Car" onchange="showContent('content_correctivo_caja','correctivocaja')">Correctivo Caja (T/M)<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivosuspension" id="correctivosuspension" value="Car" onchange="showContent('content_correctivo_suspension','correctivosuspension')">Correctivo Suspensión<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivoelectrico" id="correctivoelectrico" value="Car" onchange="showContent('content_correctivo_electrico','correctivoelectrico')">Correctivo Electrico<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivoac" id="correctivoac" value="Car" onchange="showContent('content_correctivo_ac','correctivoac')">Correctivo A/C<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivootros" id="correctivootros" value="Car" onchange="showContent('content_correctivo_otros','correctivootros')">Correctivo Otros<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="mantenimientosuspension" id="mantenimientosuspension" value="Car" onchange="showContent('content_mantenimiento_suspension','mantenimientosuspension')">Mant Suspensión<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="mantenimientoac" id="mantenimientoac" value="Car" onchange="showContent('content_mantenimiento_ac','mantenimientoac')">
							Mantenimiento A/C<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="planchadoypintura" id="planchadoypintura" value="Car" onchange="showContent('content_planchado_pintura','planchadoypintura')">Planchado y Pintura<br>
						</div>
					</div>

				</div>

				<div class="row" id="B"  style="display: none;">

					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="pintura" id="pintura" onchange="showContent('content_pintura','pintura')">Pintura<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="planchado" id="planchado" onchange="showContent('content_planchado','planchado')">Planchado<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="repuestos" id="repuestos" onchange="showContent('content_repuestos','repuestos')">Repuestos<br>
						</div>
					</div>

				</div>

				<div class="row" id="C"  style="display: none;">

					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="ot_normal" id="ot_normal" onchange="showContent('content_ot_normal','ot_normal')">OT NORMAL<br>
						</div>
					</div>

				</div>

				<div class="row" id="D"  style="display: none;">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group label-floating col-md-4">
								<select id=" " name=" ">
									<option value="cuponatic">CUPONATIC</option>
									<option value="groupon">GROUPON</option>
									<option value="otros">OTROS</option>
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="preventivo" id="preventivoo" value="Bike" onchange="showContent('content_preventivo','preventivoo')">Preventivo<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivomotor" id="correctivomotorr" value="Car" onchange="showContent('content_correctivo_motor','correctivomotorr')">Correctivo Motor<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivocaja" id="correctivocajaa" value="Car" onchange="showContent('content_correctivo_caja','correctivocajaa')">Correctivo Caja (T/M)<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivosuspension" id="correctivosuspensionn" value="Car" onchange="showContent('content_correctivo_suspension','correctivosuspensionn')">Correctivo Suspensión<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivoelectrico" id="correctivoelectricoo" value="Car" onchange="showContent('content_correctivo_electrico','correctivoelectricoo')">Correctivo Electrico<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivoac" id="correctivoacc" value="Car" onchange="showContent('content_correctivo_ac','correctivoacc')">Correctivo A/C<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="correctivootros" id="correctivootross" value="Car" onchange="showContent('content_correctivo_otros','correctivootross')">Correctivo Otros<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="mantenimientosuspension" id="mantenimientosuspensionn" value="Car" onchange="showContent('content_mantenimiento_suspension','mantenimientosuspensionn')">Mant Suspensión<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="mantenimientoac" id="mantenimientoacc" value="Car" onchange="showContent('content_mantenimiento_ac','mantenimientoacc')">
							Mantenimiento A/C<br>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group label-floating">
							<input type="checkbox" name="planchadoypintura" id="planchadoypinturaa" value="Car" onchange="showContent('content_planchado_pintura','planchadoypinturaa')">Planchado y Pintura<br>
						</div>
					</div>
				</div>

				<div id="content_preventivo" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Preventivo</b></h4>
					<!-- <input type="text">Servicio -->
					<input  name="num" type="number" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57">Kilometraje
					<br><br>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTable');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTable');" />
					<br>
					<TABLE id="dataTable" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_correctivo_motor" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Correctivo Motor</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableB');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableB');" />
					<br>
					<TABLE id="dataTableB" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_correctivo_caja" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Correctivo Caja (T/M)</b></h4>					
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableC');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableC');" />
					<br>
					<TABLE id="dataTableC" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>

				</div>

				<div id="content_correctivo_suspension" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Correctivo Suspension</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableD');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableD');" />
					<br>
					<TABLE id="dataTableD" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_correctivo_electrico" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Correctivo Electrico</b></h4>
					<!-- <input type="text">Servicio -->
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableE');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableE');" />
					<br>
					<TABLE id="dataTableE" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_correctivo_ac" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Correctivo A/C</b></h4>
					<!-- <input type="text">Servicio -->
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableF');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableF');" />
					<br>
					<TABLE id="dataTableF" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_correctivo_otros" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Correctivo Otros</b></h4>
					<!-- <input type="text">Servicio -->
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableG');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableG');" />
					<br>
					<TABLE id="dataTableG" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_mantenimiento_suspension" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Mantenimiento Suspensión</b></h4>
					<!-- <input type="text">Servicio -->
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableH');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableH');" />
					<br>
					<TABLE id="dataTableH" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				

				<div id="content_mantenimiento_ac" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Mantenimiento A/C</b></h4>
					<!-- <input type="text">Servicio -->
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableI');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableI');" />
					<br>
					<TABLE id="dataTableI" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				

				<div id="content_planchado_pintura" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Planchado y Pintura</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableK');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableK');" />
					<br>
					<TABLE id="dataTableK" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_pintura" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Pintura</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableL');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableL');" />
					<br>
					<TABLE id="dataTableL" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_planchado" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Planchado</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableM');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableM');" />
					<br>
					<TABLE id="dataTableM" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_repuestos" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Repuestos</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableJ');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableJ');" />
					<br>
					<TABLE id="dataTableJ" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<div id="content_ot_normal" style="display: none; border-radius: 25px; border: 1px solid #AA0887;padding: 20px;margin: 10px;">
					<h4><b>Repuestos</b></h4>
					
					<INPUT type="button" value="Agregar Item" onclick="addRow('dataTableOT');" />
					<INPUT type="button" value="Eliminar Item" onclick="deleteRow('dataTableOT');" />
					<br>
					<TABLE id="dataTableOT" border="1">
						<TR>
							<TD><INPUT type="checkbox" NAME="chk"/></TD>
							<TD> <INPUT type="text" placeholder="Descripcion"/> </TD>
							<TD> <INPUT type="text" placeholder="Costo" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/> </TD>
						</TR>
					</TABLE>
				</div>

				<button type="submit" class="btn btn-primary pull-right">Crear OT</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</div>

@endsection