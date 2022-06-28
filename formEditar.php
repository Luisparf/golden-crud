<?php

include_once "connection.php";

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consult = $connect->query("SELECT * FROM login WHERE id = '$id'");
$line = $consult->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar.php" method="post" enctype="multipart/form-data" id="usrform"> 
Titulo: <input type="text" name="titulo" value="<?php echo $line['titulo']?>" id="titulo"/><br>
<textarea rows="4" cols="50" name="solucao" form="usrform">
<?php echo $line['solucao']?></textarea>
<br>
Foto: <input type="file"name="foto" id="foto"/><br>
<input type="hidden" name="id" value="<?php echo $line['id']?>">
<input type="submit" name="Editar">

<input type="submit" value="Salvar">
</form>

