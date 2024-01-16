<?php

function divide($dividend, $divisor) {
    if ($divisor == 0) {
         throw new Exception('Cannot divide by zero', 404);
    }
    return $dividend / $divisor;
  }

  //echo divide(10, 0);

try{
    echo divide(10, 0);
}catch (Exception $e){
    $code = $e->getCode();        
    $message = $e->getMessage();  
    $file = $e->getFile();        
    $line = $e->getLine();
    echo "Exception thrown in $file on line $line: [Code $code] $message";
}


?>
