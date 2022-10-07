<?php

$file = fopen("userdata.csv","a");
fputcsv($file,$_POST );
fclose($file);
return print_r($_POST);
?>