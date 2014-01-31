<?php
$p = $_GET['p'];
// if data are received via POST, with index of 'test'
if (isset($_POST['test'])) {
    
	$str = $_POST['test'];             // get data
	


$post_data = str_replace(" ","+",$str);
//echo $post_data; //echo this to canvas for image
//$filteredData=substr($post_data, strpos($post_data, ",")+1);
	$myFile = "saveimg.txt";
($handle = fopen($myFile, 'w')) || die("Couln't open file");;
fwrite($handle, $post_data);
fclose($handle);
}
//$unencodedData=base64_decode($post_data);
 /*$fp = fopen( 'test.png', 'wb' );
 fwrite( $fp, $unencodedData);
 fclose( $fp );
 echo '<img src="http://nuigstt.zxq.net/test.png" border=0>';*/
	//echo "/test.png";
    //echo "The string: '<i>".$str."</i>' contains ". strlen($str). ' characters and '. str_word_count($str, 0). ' words.';
	
if ($p=="Stu"){
$responseText2=$p;
//Read from File
$myFile = "saveimg.txt";
($handle = fopen($myFile, 'r')) || die("Couln't open file");
$theData = fread($handle, filesize($myFile));
fclose($handle);
echo $theData;
}
	
?> 
