<?php
    $numeri = [];

    for($i = 0; $i <= 15; $i++){
        $jammja = rand(0, 40);
        if(!in_array($jammja, $numeri)){
            $numeri[] = $jammja;
        }
    }

    echo "<pre>";
print_r($numeri);
echo "</pre>";
?>