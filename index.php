<?php
/*----------------------処理1------------------------------*/
$values = file_get_contents("q.txt");
$start = microtime(true);
$answer = "answer.txt";
$convert = explode("\n", $values);
  foreach($convert as $val){
    $lines[] = $val;
  }
$count_array = array_count_values($lines);
  foreach($count_array as $key => $value){
      if(2 == $value){
          $result[] =  intval($key);
      }
  }
  sort($result);
  foreach ($result as $cnt => $val) {
      $txt[] = $val . "\n";
  }
$end = microtime(true);
$time = ($end - $start) * 1000;
  echo "2回出現した値は" . "<br>";
  for($i = 0; $i < count($txt); $i++){
      echo $txt[$i] . "<br>";
  }
  echo "で処理速度は". $time . "秒です。<br>";
  file_put_contents($answer, $txt);
  echo "<hr>";
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
  $time2 = ($end2 - $start2) * 1000;
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
