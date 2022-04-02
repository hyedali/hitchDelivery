<?php
  // $file = "aaa.csv";
  // $openfile = fopen($file, "r");
  // $cont = fread($openfile, filesize($file));
  // echo $cont;
  // $ctr = 10;
  // if (($file = fopen("aaa.csv", "r")) !== FALSE) {
  //   while (($record = fgetcsv($file, 100, ",")) !== FALSE) {
  //     $total = count($record);
  //     echo $record[0];
  //   }
  //   fclose($file);
  // }

  $file = fopen('aaa.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {


  if($line[3] == 'Q' && $line[26]=="대구광역시 남구 명덕시장길"){
    echo '<pre>';
    print_r($line[0]);
    print_r($line[1]);
    print_r($line[31]);
    echo '</pre>';
  }
}
fclose($file);
 ?>
