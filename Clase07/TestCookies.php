<!--Setting new cookie-->
<!--=============================-->
<?php 
setcookie("name","value",time()+$int);
/*name is your cookie's name
value is cookie's value
$int is time of cookie expires*/
?>

<!--Getting Cookie-->
<!--=============================-->
<?php 
echo $_COOKIE["your cookie name"];
?>

<!--Updating Cookie-->
<!--=============================-->
<?php 
setcookie("color","red");
echo $_COOKIE["color"];
/*color is red*/
/* your codes and functions*/
setcookie("color","blue");
echo $_COOKIE["color"];
/*new color is blue*/
?>

<!--Deleting Cookie-->
<!--==============================-->
<?php 
unset($_COOKIE["yourcookie"]);
/*Or*/
setcookie("yourcookie","yourvalue",time()-1);
/*it expired so it's deleted*/
?>