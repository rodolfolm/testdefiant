<?php
  $file = 'myfile.txt';

  header('Content-Type: text/plain');
 
  $contents = file_get_contents($file);
    
  if(preg_match_all("/\[(.*?)\]/", $contents, $matches)){
     echo "Found matches:\n";
     echo implode("\n", $matches[0]);
  }
  else{
     echo "No matches found";
}
