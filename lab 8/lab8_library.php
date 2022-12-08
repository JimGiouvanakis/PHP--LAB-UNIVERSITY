<?php

 function PostValue($key){
 if (key_exists($key, $_POST)) {
 $value = $_POST[$key];
 } else {
 $value = "";
 }
 return $value;
 }
 
 function ErrorExit($message){
 echo "<p>Σφάλμα: {$message}</p>" ;
 exit;
 }

 function AddError($message){
 global $data_ok, $error_message;
 $error_message .= "{$message}</br/>\n";
 $data_ok = false;
 }

?>