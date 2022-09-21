<?php
    function encriptar($txtEncrip){
        $txt = "";
        $arr1 = str_split($txtEncrip,1);
        $long = count($arr1);
        for($i=0;$i < $long;$i++){
            $x[$i] = ord($txtEncrip[$i]);
            $x[$i] += 20;
            if($x[$i] <100)
            {
                $x[$i] = '0' . $x[$i]; 
            }
            $txt .=$x[$i];
        }
        return $txt;
    }
    function desencriptar($txtDescrip){
        $txt2 = "";
        $arr2 = str_split($txtDescrip,3);
        $long = count($arr2);
        for($i=0;$i < $long;$i++){
            $x[$i] = chr($arr2[$i]- 20);
            $txt2 .= $x[$i];
        }
        
        return $txt2;
    }
    
    function imprimir($impri){
        echo $impri;
    }
?>