<?php
system('clear');
if(!file_exists('decoder.php') || !file_exists('bin/colors.php'))
{
	echo "\nSome Files Missing\n";
	exit(0);
}
else
{
	require('decoder.php');
	require('bin/colors.php');
}

system('clear');
echo $nbold. $red. "==============================\n";
echo $nbold. $red. "===   BLIND BASH DECODER   ===\n";
echo $nbold. $red. "===        BY LA_REF       ===\n";
echo $nbold. $red. "==============================\n$lblue";

$filename = readline("-> Enter File Name: ");
$filename = trim($filename);
$filename = "in/".$filename;
if(file_exists($filename))
{
    $out = readline("-> Out File Name: ");
    $out = "out/".$out;
    decoder($filename,$out);
}
else
{
	echo "$filename Not Exists\n";
}
?>