<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function accum($s)
    {
        $output = '';
        for ($i = 1, $len = strlen($s); $i <= $len; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $output .= ($j === 1) ? strtoupper($s[$i - 1]) : strtolower($s[$i - 1]);
            }
            $output .= '-';
        }
        $output = rtrim($output, "-");
        return $output;
    }

    ?>

</body>

</html>