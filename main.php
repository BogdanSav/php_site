<?php 

echo "<link rel='stylesheet' href='main.css'>";
echo "<h1 align = 'center'>Головна сторінка</h1> ";
$refer = ["info_univer.php","infopage.php","stud_plan.php"];
$names = ["Про університет","Інформаційна сторінка","Навчальний план"];


for ($i=0; $i <3 ; $i++) { 
	$index = mt_rand(0,2);
		
	echo "<h1 align = 'center'><a href = $refer[$index] >$names[$index]</a></h1>";	
}

include("footer.html");
 ?>