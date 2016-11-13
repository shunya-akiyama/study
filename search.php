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
?>
