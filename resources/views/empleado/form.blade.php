
<label for="NombreReal"> NombreReal </label>
<input type="text" name="NombreReal" value="{{ isset($empleado->NombreReal)?$empleado->NombreReal:''}}" id="NombreReal">
<br>
<label for="NombreSuper"> NombreSuper </label>
<input type="text" name="NombreSuper" value="{{ isset($empleado->NombreSuper)?$empleado->NombreSuper:''}}" id="NombreSuper">
<br>
<label for="Foto"> Foto </label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->FOTO}}" with="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<label for="Informacion"> Informacion </label>
<input type="text" name="Informacion" value="{{isset($empleado->Informacion)?$empleado->Informacion:''}}" id="Informacion">
<br>
<input type="submit" value="Guardar cambios">
<a href="{{url('empleado/')}}">Regresar<a/>
<br>