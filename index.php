<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Földi Cintia dolgozat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nevek = array("Szalai András", "Mezei Ferdinánd", "Suhai Andrea", "Terény Éva", "Balla Péter");
        $klubok = array("Tollas", "Vitorlás", "Ping-pong", "Tánc", "Társas");
        $maximalisMeretek = array();
            for ($i=0; $i < 5; $i++) { 
                $maximalisMeretek[] = rand(10,100);
            }
        echo "<table>";
        echo "<tr><th>Név</th><th>Klub neve</th><th>Maximális méret</th></tr>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            echo "<td>{$nevek[$i]}</td>";
            echo "<td>{$klubok[$i]}</td>";
            echo "<td>{$maximalisMeretek[$i]}</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    ?>    
</body>
</html>