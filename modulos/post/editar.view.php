<form action="editar.post.php">
  ID:<br>
  <input type="text" name="id" value="<?php echo $id; ?>" disabled><br>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  T�tulo:<br>
  <input type="text" name="titulo" value="<?php echo $titulo; ?>">
  <br>
  Descri��o:<br>
  <textarea rows="4" cols="50" name="descricao"><?php echo $descricao; ?></textarea>
  <br><br>
  <input type="submit" value="Salvar">
</form> 