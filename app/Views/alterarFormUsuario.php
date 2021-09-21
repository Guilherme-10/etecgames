<<form method="POST" action="">
    <div class="mb-3"> 
        <label class="form-label" for="codigousuarioinput">Código:</label>
        <input type="text" name="codUsuAlterar"id="codigousuarioinput" value="<?php echo($usuario->codusu)?>">
   </div>
   <div class="mb-3">
        <label for="codigousuarioinput">Email:</label>
        <input type="text" name="emailUsu"id="codigousuarioinput" value="<?php echo($usuario->emailUsu)?>">
   </div>
   <div>
   <button type="submit" class="btn btn-primary">Alterar</button>
   </div>
</form>