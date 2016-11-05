<?php
$values = file_get_contents("q.txt");
$start = microtime(true);
$convert = explode("\n", $values);
  foreach ($convert as $value) {
    $lines = $convert;
  }
$count_array = array_count_values($lines);
  foreach($count_array as $value){
      if(2 == $value){
        $count[] = $value;
      }
  }
$end = microtime(true);
$time = ($end - $start) * 1000;
  echo "2回出現した値の数は" . "<br>";
  echo count($count) . "個です。<br>";
  echo "処理速度は" . $time . "です。";
 ?>
