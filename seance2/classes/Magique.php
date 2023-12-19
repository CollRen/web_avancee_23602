<?php

class Magique{

    public function getClassName(){
        return " The class name is <strong>" . __CLASS__ . "</strong>";
    }

    public function getLine()
    {
      return " The line number is " . __LINE__;
    }
    public function getFile()
    {
      return " The file is located at " . __FILE__;
    }
    public function getMethod()
    {
      return " The method is called " . __METHOD__;
    }
  

}

$magique = new Magique;

echo $magique->getClassName();
echo "<br>";
echo $magique->getLine();
echo "<br>";
echo $magique->getFile();
echo "<br>";
echo $magique->getMethod();
echo "<br>";





?>