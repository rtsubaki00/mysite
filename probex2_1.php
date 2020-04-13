<?php
 
$filepath = 'testdata.csv';
 

$file = new SplFileObject($filepath);
 

$file->setFlags(SplFileObject::READ_CSV);
 

 

foreach ($file as $line) {
 
 
  
 
  
  foreach($line as $value){
    echo $value.'<br>';
  }
  
  
}



?>