<?php 

function print_deret_fibonacci($jumlah)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
  $hasil = "$angka_sebelumnya $angka_sekarang";
 
  for ($i=0; $i<$jumlah-2; $i++)
  {
    $output = $angka_sekarang + $angka_sebelumnya;
    $hasil = $hasil." $output";
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}

echo print_deret_fibonacci(8);
echo "\n";

?>