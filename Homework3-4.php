<?php
$pi = 3.14;
echo("<P>밑변는 <b>" . $_GET["width"] . "</b> 이고"); 
echo("<P>높이는 <b>" . $_GET["height"] . "</b> 입니다.<br>");
$area = $_GET["width"]*$_GET["height"]/2;
echo("<P>삼각형의 면적은 <b> $area </b> 입니다.<br><br>");

echo("<P>가로는 <b>" . $_GET["width"] . "</b> 이고"); 
echo("<P>세로는 <b>" . $_GET["height"] . "</b> 입니다.<br>");
$area = $_GET["width"]*$_GET["length"];
echo("<P>직사각형의 면적은 <b> $area </b> 입니다.<br><br>");


echo("<P>반지름는 <b>" . $_GET["radius"] . "</b> 입니다.<br>");
$area = $pi*$_GET["radius"]*$_GET["radius"];
echo("<P>원의 면적은 <b> $area </b> 입니다.<br><br>");

echo("<P>가로는 <b>" . $_GET["width"] . "</b> 이고"); 
echo("<P>세로는 <b>" . $_GET["height"] . "</b> 이고");
echo("<P>높이는 <b>" . $_GET["height"] . "</b> 입니다.<br>");
$volume = $_GET["width"]*$_GET["length"]*$_GET["height"];
echo("<P>직육면체의 체적은 <b> $area </b> 입니다.<br><br>");

echo("<P>반지름는 <b>" . $_GET["radius"] . "</b> 이고");
echo("<P>높이는 <b>" . $_GET["height"] . "</b> 입니다.<br>");
$volume = $pi*$_GET["radius"]*$_GET["radius"]*$_GET["height"];
echo("<P>원통의 체적은 <b> $area </b> 입니다.<br><br>");

echo("<P>반지름는 <b>" . $_GET["radius"] . "</b> 입니다.<br>");
$volume = 4/3*$pi*$_GET["radius"]*$_GET["radius"]*$_GET["radius"];
echo("<P>구의 체적은 <b> $area </b> 입니다.<br><br>");
?>