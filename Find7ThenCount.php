<?php 
$output = 0;

for($i = 1; $i <= 100; $i++){
    $split = str_split($i);
    for($a=0; $a<count($split); $a++){
        if($split[$a] == 7){
            $output++;
            echo $i. "\n";
        }
    }
}
echo $output;
?>