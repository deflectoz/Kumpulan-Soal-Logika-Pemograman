<?php
function fizzBuz($angka){
    if ($angka % 3 == 0 && $angka % 5 == 0){
        echo "FizzBuzz \n";
    }else if ($angka % 3 == 0){
        echo "Fizz \n";
    }else if($angka % 5 == 0){
        echo "Buzz \n";
    }else{
        echo $angka. "\n";

    }
}

for($i = 1; $i <= 100; $i++){
    fizzBuz($i);
}
?>