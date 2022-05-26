<?php

function decoder($filename,$out){

    require('bin/colors.php');

    $file = fopen($filename,'r');
    $code="";
    while ($line = fgets($file))
    {
        $code = $code.$line;
    }

    $array = explode(';', $code);
    $i = 0;
    $line = "";
    $found = false;
    while($found != true){
        if (substr(strval($array[$i]), 0, 1) == "s"){
            $line = strval($array[$i]);
            $found = true;
        }
        $i++;
    }

    $array2 = explode('\'', $line);
    $line = strval($array2[1]); 
    $val = base64_decode(strval(strrev($line)));

    if(!file_exists("out/"))
    {
        shell_exec("mkdir out");
    }
    shell_exec("echo '$val' > $out");
    $path = shell_exec("pwd");
    $path= trim($path);
    $path = $path."/";
    echo $fgreen."\nDecoding Done$red File$fgreen Saved at -> $red$path$out\n";
    echo $yellow."Bye!\n\n$nbold";
    fclose($file);
}

?>