<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function toCamelCase($str)
    {
        $strLength = strlen($str);
        for ($i = 0; $i < $strLength; $i++) {
            if ($str[$i] == "_" || $str[$i] == "-") {
                $str[$i] = " ";
            }
        }

        if ($str[0] == strtolower($str[0])) {
            $str1 = ucwords($str);
            $str2 = lcfirst($str1);
            return $str2 = str_replace(' ', '', $str2);
        } else {
            $str1 = ucwords($str);
            return $str1 = str_replace(' ', '', $str1);
        }
    }

    ?>

</body>

</html>