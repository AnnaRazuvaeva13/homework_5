<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<?

/*выводим массив входных данных с детальной информацией (значения, тип данных, длина массива и длина значений массива 
(русские буквы занимают 2 байта, поэтому длина увеличена в 2 раза))*/
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$arUserInfo = array("name"=>$_REQUEST['user_name'], "patronymic"=>$_REQUEST['user_second_name'],"surename"=>$_REQUEST['user_last_name'], "city"=>$_REQUEST['user_city'], "street"=>$_REQUEST['user_street'], "house"=>$_REQUEST['user_house'], "apartment"=>$_REQUEST['user_apartment']); 

/*записывем в переменную strUserInfo json-представление массива arUserInfo, используем флаги для вывода данных в читаемом виде: 
убираем кодирование многобайтовых символов и добавляем использование пробельных символов для форматировании выходных данных*/
$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

	<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br><br>

		<strong>Ваш адрес<span class="mf-req">*</span></strong><br>

		<strong>Город<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_city" id="user_city" value=""><br>

		<strong>Улица<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_street" id="user_street" value=""><br>

		<strong>Дом<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_house" id="user_house" value=""><br>

		<strong>Квартира<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_apartment" id="user_apartment" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
<div id="result">
	
	<!--выводим данные, содержащиеся в strUserInfo, используя короткий echo-тэг-->
	<?=$strUserInfo?>
</div>
</body>
</html>