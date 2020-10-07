<?php
$temperatura = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$media = array_sum($temperatura)/count($temperatura);
echo "El promedio de las temperaturas es ". $media;
echo "<br>";


$usados = array();
$bajo = array();
$alto = array();
sort($temperatura);
$count_L=0;
$count_H=0;
for ($i=0; $i < sizeof($temperatura); $i++) {

    if ($count_L == 5) {
        break;
    }
    if (!array_search($temperatura[$i],$usados)) {
        array_push($bajo,$temperatura[$i]);
        array_push($usados,$temperatura[$i]);
        $count_L++;
    }
}
for ($i=sizeof($temperatura) -1; $i > 0; $i--) {

    if ($count_H == 5) {
        break;
    }
    if (!array_search($temperatura[$i],$usados)) {
        array_push($alto,$temperatura[$i]);
        array_push($usados,$temperatura[$i]);
        $count_H++;
    }
}
sort($alto);
echo "Lista de las 5 temperaturas bajas: ".$bajo[0].",".$bajo[1].",".$bajo[2].",".$bajo[3].",".$bajo[4]."<br />";
echo "Lista de las 5 temperaturas altas: ".$alto[0].",".$alto[1].",".$alto[2].",".$alto[3].",".$alto[4]."<br />";