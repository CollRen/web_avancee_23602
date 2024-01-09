<?php

class Utility {

    public static $staticProperty = 'I am a static property';


    static public function calculate($a, $b){
        return $a + $b;
    }

    static public function redirect($url) {
        header("location: $url");
    }
}

?>