<form class="form-ingreso" onsubmit="GuardarVoto();return false">
        <h2 class="form-ingreso-heading">Voto</h2>
        <label for="provincia" class="sr-only">Provincia</label>
        <input type="text"  minlength="6"  id="provincia" title="Se necesita una provincia" class="form-control" placeholder="Provincia" required="" autofocus="">
        <label for="candidato" class="sr-only">Candidato</label>
        <select id="candidato" class="form-control" autofocus="">
        <option value="0">Macri</option>
        <option value="1">Scioli</option>
        <option value="2">Massa</option>
        </select>
        
        <input type="radio" name="sexo" value="m" class="form-control" align="top" >Masculino
        <input type="radio" name="sexo" value="f" class="form-control" align="top">Femenino

        
        <input readonly   type="hidden" id="dni" class="form-control" ><!--Session ?-->
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
</form>