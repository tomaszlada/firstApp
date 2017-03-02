<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php
$a = 5;
$b = 3;

function suma($zmienna1, $zmienna2)
{
    $wynik = $zmienna1 + $zmienna2;
    return $wynik; //Dodajemy argumenty i zwracamy wynik
}

echo suma($a, $b); // 8
?>
</body>
</html>