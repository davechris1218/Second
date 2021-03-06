<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function countBits($n)
    {
        $count = 0;

        while ($n) {
            $count += $n & 1;
            $n >>= 1;
        }

        return $count;
    }
    echo countBits(1234);

    ?>

</body>

</html>