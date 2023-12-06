<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener datos de una API</title>
</head>
<body>
    <?php
        $url = "https://aves.ninjas.cl/api/birds";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        
        foreach ($data as $bird) {
            $spanishName = $bird['name']['spanish'];
            $englishName = $bird['name']['english'];
            $latinName = $bird['name']['latin'];
            $image = $bird['images']['main'];
        
            echo "<div>";
            echo "<h2>$spanishName</h2>";
            echo "<h3>$englishName</h3>";
            echo "<h3>$latinName</h3>";
            echo "<img src='$image' alt='$spanishName'>";
            echo "</div>";
        }
    ?>
</body>
</html>