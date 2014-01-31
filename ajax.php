<?php 
$q=$_GET["q"];
$p=$_GET["p"];
$info= $_GET["info"];
$image= $_GET["image"];

if($info){
$myFile = "somefile.txt";
($handle = fopen($myFile, 'w')) || die("Couln't open file");;
fwrite($handle, $info);
fclose($handle);
//echo "Info saved to server";
echo $info;
}

if($image){
$myFile = "somefile.txt";
($handle = fopen($myFile, 'w')) || die("Couln't open file");;
fwrite($handle, $image);
fclose($handle);
echo "Info saved to server";
}

if($q=="Lec"){
$responseText1=$q;
//Write to file
$myFile = "somefile.txt";
($handle = fopen($myFile, 'w')) || die("Couln't open file");;
fwrite($handle, $q);
fclose($handle);
}
if ($p=="Stu"){
$responseText2=$p;
//Read from File
$myFile = "somefile.txt";
($handle = fopen($myFile, 'r')) || die("Couln't open file");
$theData = fread($handle, filesize($myFile));
fclose($handle);
echo $theData;
}
//echo $responseText1;
//echo $responseText2;
//echo $theData;



?>
