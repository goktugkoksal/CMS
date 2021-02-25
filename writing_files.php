<?php

$file = "example.txt";

//Control handle
if($handle = fopen($file,"w")){
    //Write File
    fwrite($handle,"PHP");

    fclose($handle);
}else{
    echo "ERROR";
}
