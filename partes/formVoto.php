<form class="form-ingreso" onsubmit="GuardarVoto();return false">
        <h2 class="form-ingreso-heading">Voto</h2>
        <label for="provincia" class="sr-only">Provincia</label>
        <input type="text"  minlength="6"  id="provincia" title="Se necesita una provincia" class="form-control" placeholder="Provincia" required="" autofocus="">
        <label for="localidad" class="sr-only">Localidad</label>
        <input type="text"  minlength="6"  id="localidad" title="Se necesita una localidad" class="form-control" placeholder="localidad" required="" autofocus="">
        <label for="direccion" class="sr-only">Direccion</label>
        <input type="text"  minlength="6"  id="direccion" title="Se necesita una direccion" class="form-control" placeholder="direccion" required="" autofocus="">
        <label for="presidente" class="sr-only">Presidente</label>
        <select id="presidente" class="form-control" autofocus="">
        <option value="0">Macri</option>
        <option value="1">Scioli</option>
        <option value="2">Massa</option>
        </select>
        
        <input type="radio" name="sexo" id="sexo" value="m" class="form-control" align="top" >Masculino
        <input type="radio" name="sexo" id="sexo" value="f" class="form-control" align="top">Femenino

        
        <input readonly   type="hidden" id="dni" name="dni" class="form-control" ><!--Session ?-->
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
</form>