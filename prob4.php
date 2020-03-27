<?php
$a = 3;
if($a >= 3){
  echo 'こんにちは';
  if ($a == 1){
    echo '今日は良い天気だね';
  } elseif ($a == 2){
    echo '今日は寒いね';
  } elseif ($a == 3){
    echo '今日は湿度が高いね';
  } else {
    echo 'さようなら';
  }
} 

?>