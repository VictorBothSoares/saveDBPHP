<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'duplalove');
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

$sql = 'SELECT * FROM vagasti2';
$result = $conn->query($sql);
?>

<style>
  form {
    margin: 20px;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    font-family: Arial, sans-serif;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="number"],
  select {
    padding: 10px;
    border-radius: 3px;
    border: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    font-size: 16px;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<form action="backand.php" method="post">
  <label for="nomeCargo">Nome do Cargo:</label>
  <input type="text" id="nomeCargo" name="nomeCargo" required>

  <label for="salario">Salário:</label>
  <input type="number" id="salario" name="salario" required>

  <label for="nivelEscolaridade">Faculdade Necessária:</label>
  <input type="text" id="nivelEscolaridade" name="nivelEscolaridade" required>

  <label for="remoto">Trabalho Remoto:</label>
  <select id="remoto" name="remoto" required>
    <option value="">Selecione...</option>
    <option value="sim">Sim</option>
    <option value="nao">Não</option>
  </select>

  <label for="experiencia">Experiência Necessária:</label>
  <input type="text" id="experiencia" name="experiencia" required>

  <input type="submit" value="Enviar">
</form>
