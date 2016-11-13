<?php
ini_set('memory_limit', '10000M');
/*----------------------処理1------------------------------*/
$filename = 'q2.txt';
$fp = fopen($filename, 'r');
$start = microtime(true);
while(!feof($fp)){
  if(false !== fgets($fp)){
    $value[] = fgets($fp);
  }
}
fclose($fp);
$count_array = array_count_values($value);
  foreach($count_array as $key => $value){
      if(2 === $value){
          $result[] =  $key;
      }
  }
  sort($result);
  foreach ($result as $val) {
      $txt[] = $val . "\n";
  }
$end = microtime(true);
$time = $end - $start;
  echo '処理速度'. $time;
  $answer = 'answer2.txt';
  file_put_contents($answer, $txt);
/*----------------------処理2------------------------------*/
$filename2 = 'q2.txt';
$fp2 = fopen($filename, 'r');
$start2 = microtime(true);
while(!feof($fp2)){
  if(false !== fgets($fp2)){
    $values2[] = fgets($fp2);
  }
}
fclose($fp2);
$count_array2 = array_count_values($values2);
  foreach($count_array2 as $key2 => $value2){
      if(2 === $value2){
          $count2[] =  $key2;
      }
  }
$end2 = microtime(true);
$time2 = $end - $start;
  echo count($count2) . "個";
  echo "処理速度は" . $time2;

 ?>
