<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'duplalove');
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

/*$sql = 'SELECT * FROM vagasti2';
$result = $conn->query($sql);
?>*/

$sql = 'INSERT INTO vagasti2(nomeCargo, salario, nivelEscolaridade, remoto, experiencia) values("' . $_POST["nomeCargo"] . '","' . $_POST["salario"] . '", "' . $_POST["nivelEscolaridade"] . '", "' . $_POST["remoto"] . '", "' . $_POST["experiencia"] . '")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>