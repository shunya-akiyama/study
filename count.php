<?php
ini_set('memory_limit', '10000M');
$filename = 'q2.txt';
$fp = fopen($filename, 'r');
$start = microtime(true);
while(!feof($fp)){
  if(false !== fgets($fp)){
    $values[] = fgets($fp);
  }
}
fclose($fp);
$count_array = array_count_values($values);
  foreach($count_array as $key => $value){
      if(2 === $value){
          $count[] =  $key;
      }
  }
$end = microtime(true);
$time = $end - $start;
  echo count($count) . "個";
  echo "処理速度は" . $time;
 ?>
