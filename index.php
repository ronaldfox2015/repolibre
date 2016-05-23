<?php
  include('cn.php');

// Realizar una consulta MySQL
//$query = 'SELECT * FROM my_table';
$query = 'update ';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


$data = file_get_contents("mlucarsform.json");
$products = json_decode($data, true);
var_dump($products['available_filters']);exit;
foreach (var_dump($products) as $product) {
    print_r($product);
}



// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>