<?php
function find($input, $char)
{
    if(strlen($input) > $char) {
        $input = substr($input, 0, strpos($input, ' ', $char));
    }

    return $input;
}
$input = "Aku Ingin Makan Donat";
$char = 2;
find($input, $char);

?>