<?php
include("dropdown.html");
include("footer.html");
echo "<link rel='stylesheet' href='main.css'>";

$img =["img/img1.jpg","img/img2.jpg","img/img3.jpg","img/img4.jpg"];
$index = mt_rand(0,3);
echo "<center> <img src = $img[$index] alt = 'image'> </center>"; 

echo "<h2>Email:<a align='center' href='mailto:bohdan16@live.com'>bohdan16@live.com</a></h1>";
echo "<h2 align='center'>Група: 3-В</h2>";

$info = ["Моя майбутня професія: інженер","Хоббі:Електроніка; Сталкер.","In vino verits, in aqua sanitas.",
"Ego cogito, ergo sum.","Vivere militare est"];
$info_p = $info[mt_rand(0,sizeof($info))];
echo "<h2 align='center'>$info_p</h2>";
	

 ?>