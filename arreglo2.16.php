<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$empleados = [
    ["nombre" => "Jorge", "sueldo" => 3000],
    ["nombre" => "Ana", "sueldo" => 2500],
    ["nombre" => "Luis", "sueldo" => 4000],
    ["nombre" => "Armando", "sueldo" => 3500],
    ["nombre" => "Ricardo", "sueldo" => 2000],
];


usort($empleados, function ($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});


echo "Empleados ordenados por sueldo:<br>";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: " . $empleado['sueldo'] . "<br>";
}


array_push($empleados, ["nombre" => "Carlos", "sueldo" => 3200]);
array_push($empleados, ["nombre" => "Elena", "sueldo" => 2700]);


echo "<br>Empleados después de agregar nuevos:<br>";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: " . $empleado['sueldo'] . "<br>";
}
?>

</body>
</html>
