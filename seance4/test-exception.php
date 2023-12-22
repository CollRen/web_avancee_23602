<?php

function divide($dividend, $divisor) {
    if ($divisor == 0) {
         throw new Exception('vous ne pouvez pas diviser par Zero', 404);
    }
    return $dividend / $divisor;
  }

  //echo divide(10, 0);

try{
    echo divide(10, 2);
}catch (Exception $e){
    echo $e->getMessage(); 
    echo "<br>";
    echo $e->getCode(); 
    echo "<br>";
    echo $e->getFile(); 
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
    var_dump($e);
}finally{
    echo "Bonnes vacances";
}


?>
