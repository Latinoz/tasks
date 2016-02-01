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
 
 <p><input type="submit"></p>
 
 </form>
 
 <?php

$a = ($_POST['number']);


       if (is_numeric($a))		 {

$a_massive = str_split($a);

$c = array_sum($a_massive);



echo "<br />\n";

echo "Сумма числа: $a; равна: $c; <br />\n";

}



     else 

{ 
              echo "Вы не ввели число!";

}
?>

</body>


</html>
