<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    for ($num = 1; $num <= 20; $num++){
        if (($num % 2) == 0){
            echo "$num = bilangan genap <br>";
        } else {
            echo "$num = bilangan ganjil <br>";
        }
    }

    ?>

</body>

</html>