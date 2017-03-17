<?php
$json_data=file_get_contents("Test.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->Nim;
echo "<br>";
echo "Nama: ";echo $obj->Nama;
echo "<br>";
echo "Email: ";echo $obj->Email;
echo "<br>";
echo "No_hp: ";echo $obj->No_hp;
echo "<br>";
echo "Mata kuliah 1: ";echo $obj->Mata_kuliah[0];
echo "<br>";
echo "Mata kuliah 2: ";echo $obj->Mata_kuliah[1];
echo "<br>";
echo "Mata kuliah 3: ";echo $obj->Mata_kuliah[2];


?>