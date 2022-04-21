<?php
$input = "aku suka kamu"; //.masukkan kata atau kalimat yang ingin dibalik

//.mulai memproses input
$count = strlen($input); //.menghitung jumlah karakter
echo "input = ".$input; //.menampilkan input
echo "\n"; //.menampilkan pembatas antara input dan output
echo "output = "; //.menampilkan output
for($i=$count; $i >=0; $i--){
 $output = substr($input, $i, 1);
 echo $output; //.menampilkan output karakter yang sudah dibalik
}
?>