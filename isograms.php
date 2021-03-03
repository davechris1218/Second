<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function isIsogram($str)
    {
        $str = strtolower($str);
        $maxRepeatingCount = 1;

        foreach (count_chars($str, 1) as $char => $value) {
            if ($value > $maxRepeatingCount) $maxRepeatingCount = $value;
        }

        if ($maxRepeatingCount == 1) return true;

        return false;
    }

    ?>

</body>

</html>