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
          $result[] =  intval($key);
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
exit;
/*----------------------処理2------------------------------*/
  $values2 = file_get_contents("q.txt");
  $start2 = microtime(true);
  $convert2 = explode("\n", $values2);
  foreach ($convert2 as $value) {
    $lines2 = $convert2;
  }
  $count_array2 = array_count_values($lines2);
    foreach($count_array2 as $value2){
        if(2 == $value2){
          $count2[] = $value2;
        }
    }
  $end2 = microtime(true);
  $time2 = $end2 - $start2;
    echo "2回出現した値の数は" . "<br>";
    echo count($count2) . "個です。<br>";
    echo "処理速度は" . $time2 . "です。<br>";
    echo "[結果]：処理2の方が";
  if ($time > $time2) {
    echo "早い。";
  } else {
    echo "遅い。";
  }

 ?>
