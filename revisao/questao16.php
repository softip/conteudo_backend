<?php

   $v1 = array(
        "Placa" => "AAA-0001",
        "Nome" =>  "Fusca",
        "Ano" =>   1970,
        "Valor" => 30000
   );

   $v2 = array(
        "Placa" => "BBB-0002",
        "Nome" =>  "Gol",
        "Ano" =>   2014,
        "Valor" => 45000
   );

    $v3 = array(
        "Placa" => "CCC-0003",
        "Nome" =>  "Onix",
        "Ano" =>   2020,
        "Valor" => 70000
    );
 
$carros = [$v1, $v2, $v3];

echo "<table border=1 width='100%'>";
foreach($carros as $valor){
    echo "<tr>";
    echo "<td>" . $valor["Placa"] . "</td>";
    echo "<td>" . $valor["Nome"] . "</td>";
    echo "<td>" . $valor["Ano"] . "</td>";
    echo "<td>" . $valor["Valor"] . "</td>";
    echo "</tr>";
}
echo "</table>";


?>


  
    

