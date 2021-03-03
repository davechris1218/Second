<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function divisors($int)
    {
        $n = array();

        for ($i = 2; $i < $int - 1; $i++) {
            if ($int % $i == 0) {
                array_push($n, $i);
            }
        }

        if (count($n) == 0) {
            return $int . " is prime";
        }

        return $n;
    }
    print_r(divisors(12));

    ?>

</body>

</html>