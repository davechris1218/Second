<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function findIt(array $arr): int
    {
        $count = 0;
        $arrCount = count($arr);
        for ($i = 0; $i < $arrCount; $i++) {
            for ($j = 0; $j < $arrCount; $j++) {
                if ($arr[$i] == $arr[$j]) {
                    $count++;
                }
            }
            if ($count % 2 != 0) {
                return $arr[$i];
            }
        }
        return -1;
    }
    
    echo findIt(array(1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5));

    ?>

</body>

</html>