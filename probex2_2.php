<?php
 
$filepath = 'testdata.csv';
 

$file = new SplFileObject($filepath);
 

$file->setFlags(SplFileObject::READ_CSV);
 

 

foreach ($file as $line) {
 
 
  
 
  
  $cnt = count($line);
 
  
 
  for($i = 0; $i < $cnt; $i++){
    echo $line[$i].'<br>';
  }
}

 
?>

Thank you