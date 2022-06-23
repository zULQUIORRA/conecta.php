<?php
require("conecta.php");

$sqlselect = " SELECT * FROM TB_USUARIO";


$resp = mysqli_query($con, $sqlselect);

echo mysqli_num_rows($resp);
echo "<br>";

while ($coluna = mysqli_fetch_assoc($resp)) {
    echo $coluna["nome_us"]. ", " . $coluna["email"] ."<br>";
}

?>