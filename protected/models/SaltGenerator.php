<?php

/*
 * This class is supposed to be used as a singleton
 * it returns a randomized salt, depending on the parameter
 * 
 */

class SaltGenerator {
   
    
    public static function generate($length) {
        $BASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890.#%§';

        $max = strlen($BASE) - 1;
        $min = 0;
        $salt = '';
        for ($i = 0; $i < $length; $i++) {
            $position = rand($min, $max);
            $salt .= substr($BASE, $position, 1);
        }
        
        return $salt;
    }
}


?>
