<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello OpenShift</title>
</head>

<?php

 function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
?>

<body>

<h1>
Hello Openshift      
</h1>

<?php
 $ip =  getRealUserIp();
 echo "Visiting from IP: $ip using ".$browser['browser'];
?>
             
</body>
