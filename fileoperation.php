<?php


//reading
// $file=fopen("sampletext.txt","r");
// echo fread($file,filesize("sampletext.txt"));
// fclose($file);

$file1=fopen("sampletext.txt","w");
$contents="Hiran Ullasan an MCA student";
fwrite($file1,$contents);

// $contents="Sanija K an MCA student";
// fwrite($file1,$contents);
fclose($file1);

$file=fopen("sampletext.txt","r");
echo fread($file,filesize("sampletext.txt"));
fclose($file);



?> 
