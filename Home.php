<?php
$info= $_GET["info"];

 $to = "j.maguire4@nuigalway.ie";
 $subject = "From php";
 $body = "hi";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 ?>
