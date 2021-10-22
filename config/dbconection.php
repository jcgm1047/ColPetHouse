<?php
$mysqli = new mysqli("localhost", "root", "", "colpethouse");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

/* $query = "select * from marca_paquete";

$result = $mysqli->query($query);

while($row = mysqli_fetch_array($result)) {
    $id = $row["id_marca"];
    $nombre = $row["nombre"];
    echo "id".$id. " Nombre: ".$nombre."<br>";
} */
?>