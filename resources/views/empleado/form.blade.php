
<div class="form-group">

<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->NombreReal)?$empleado->Nombre:''}}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Descripcion"> NombreSuper </label>
<input type="text" class="form-control" name="Descripcion" value="{{ isset($empleado->Descripcion)?$empleado->Descripcion:''}}" id="Descripcion">
<br>
</div>

<label for="Foto"> Foto </label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->FOTO}}" with="100" alt="">
@endif
<input type="file class="form-control"" name="Foto" value="" id="Foto">
<br>

<div class="form-group">
<label for="precio"> Informacion </label>
<input type="text"class="form-control" name="precio" value="{{isset($empleado->precio)?$empleado->precio:''}}" id="precio">
<br>
</div>

<div class="form-group">
<label for="cantidad"> Informacion </label>
<input type="text"class="form-control" name="cantidad" value="{{isset($empleado->cantidad)?$empleado->cantidad:''}}" id="cantidad">
<br>
</div>

<input type="submit" value="guardar datos">
<a href="{{url('empleado/')}}">Regresar<a/>
<br>