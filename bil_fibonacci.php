<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $x = 0;
    $y = 1;
    
    echo "Bilangan Fibonacci :" . "<br>";

    for ($i = 0; $i <= 20; $i++) {
        $result = $x + $y;
        
        echo $result . "<br>";
        $x = $y;
        $y = $result;
    }

    ?>

</body>

</html>