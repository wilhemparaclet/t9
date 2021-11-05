<?php

class Resultat {

    public $code = array(
                'a' => '2',
                'b'=> '2',
                'c'=> '2',
                'd'=> '3',
                'e'=> '3',
                'f'=> '3', 
                'g'=> '4', 
                'h'=> '4',
                'i'=> '4',
                'j'=> '5',
                'k'=> '5',
                'l'=> '5', 
                'm'=> '6',
                'n'=> '6',
                'o'=> '6', 
                'p'=> '7',
                'q'=> '7',
                'r'=> '7', 
                's'=> '7',
                't'=> '8',
                'u'=> '8',
                'v'=> '8',
                'w'=> '9',
                'x'=> '9',
                'y'=> '9', 
                'z'=> '9',
                );
        
    function num($string) {

        // store every character from the string into an array
        $char = str_split($string);

        $i = 0;
        while ($i<count($char)) {

            //foreach all keys and values
            foreach ($this->code as $num => $num_value) {

                if ($char[$i] == $num) {
                    echo $num_value;
                }
            }

            $i++;
        }
    }
}   

$resul = new Resultat;

echo $resul->num('abandon');
?>