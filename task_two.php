<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Вычисление цифры</title>
</head>
<body>

<form action="" method="post">
Число:
<input name="number" value="">
 <br>
 </br>
 Цифра:
 <input name="numeral" value="">
 <br>
 </br>

 <p><input type="submit"></p>
 
 </form>
 
 <?php

$a = ($_POST['number']);

$b = ($_POST['numeral']);

$c = 0;

$a_massive = str_split($a);

foreach ($a_massive as &$value) {

             if ($value == $b) {
			 
			 $c++;

			 }
}


echo "<br />\n";

echo "В числе: $a; Цифра: $b; Встречается: $c раз(а)<br />\n";

?>

</body>


</html>
