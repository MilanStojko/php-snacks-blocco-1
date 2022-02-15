<?php
$partite = [
    [
        squadra1 =>"juventus",
        squadra2 =>"psg",
        punti1 =>"55",
        punti2 =>"58"
    ],
    [
        squadra1 =>"milan",
        squadra2 =>"inter",
        punti1 =>"55",
        punti2 =>"58"
    ],
    [
        squadra1 =>"Djibouti",
        squadra2 =>"Serbia",
        punti1 =>"0",
        punti2 =>"500"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i=0; $i < count($partite); $i++){
            echo $partite[$i]["squadra1"]."-".$partite[$i]["squadra2"];
            echo $partite[$i]["punti1"]."-".$partite[$i]["punti2"];
    }; 
    ?>
</body>
</html>