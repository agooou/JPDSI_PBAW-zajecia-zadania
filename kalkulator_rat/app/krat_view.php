<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/krat.php" method="get">
	<label for="id_x">Kwota zaciągniętego kredytu: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br />
	<label for="id_y">Liczba lat: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br />
	<label for="id_y">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br />
	<input type="submit" value="Oblicz ratę" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 50px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 30px; padding: 7px; border-radius: 40px; background-color: #ff0; width:250px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>