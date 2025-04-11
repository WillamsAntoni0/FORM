<?php 

if(isset($_POST['submit'])) {

//print_r($_POST['nome']);
//print_r('<br>');
//print_r($_POST['sobrenome']);

include_once('config.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome) VALUES ('$nome','$sobrenome')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <header>
      <section>
            <form action="form.php" method="POST">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="idnome" required>
              <label for="sobrenome">Sobrenome</label>
              <input type="text" name="sobrenome" id="idsobrenome" required>
              <input type="submit" name="submit" value="Enviar">
              </form>
      </section>
  </header>
</body>
</html>


