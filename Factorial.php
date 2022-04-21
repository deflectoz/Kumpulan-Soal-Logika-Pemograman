<?php
function hitungArray($var){
    $x = 1;
    $nilai = 1;
    while ($x <= $var)
    {
        $nilai = $nilai*$x;
        $x++;
    }
    return $nilai;
}

echo hitungArray(13);
?>