<?php

$output = 0;

for($i=1; $i<=100; $i++){
	$slpInput = str_split($i);
  for($a=0;$a<count($slpInput); $a++){
  	if($slpInput[$a] == 7)
    {
    	$output++;
      // echo $i ."\n" ;
      }
  }
}
echo 'Total Angka 7 dari bilangan 1 - 100 adalah '.$output;

?>