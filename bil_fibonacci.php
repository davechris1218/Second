<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $x = 0;
    $y = 1;
    
    echo "Bilangan Fibonacci :" . "<br>";

    for ($i = 0; $i <= 20; $i++) {
        $hasil = $x + $y;
        
        echo $hasil . "<br>";
        $x = $y;
        $y = $hasil;
    }

    ?>

</body>

</html>