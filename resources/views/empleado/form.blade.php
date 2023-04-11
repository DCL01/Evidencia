
<div class="form-group">

<label for="NombreReal"> NombreReal </label>
<input type="text" class="form-control" name="NombreReal" value="{{ isset($empleado->NombreReal)?$empleado->NombreReal:''}}" id="NombreReal">
<br>
</div>

<div class="form-group">
<label for="NombreSuper"> NombreSuper </label>
<input type="text" class="form-control" name="NombreSuper" value="{{ isset($empleado->NombreSuper)?$empleado->NombreSuper:''}}" id="NombreSuper">
<br>
</div>

<label for="Foto"> Foto </label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->FOTO}}" with="100" alt="">
@endif
<input type="file class="form-control"" name="Foto" value="" id="Foto">
<br>

<div class="form-group">
<label for="Informacion"> Informacion </label>
<input type="text"class="form-control" name="Informacion" value="{{isset($empleado->Informacion)?$empleado->Informacion:''}}" id="Informacion">
<br>
</div>

<input type="submit" value="guardar datos">
<a href="{{url('empleado/')}}">Regresar<a/>
<br>