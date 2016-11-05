<?php
$values = file_get_contents("q.txt");
$start = microtime(true);
$answer = "answer.txt";
$convert = explode("\n", $values);
  for($i = 0; $i < count($convert); $i++){
    $lines[] = $convert[$i];
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
  ?>
