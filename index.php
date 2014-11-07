<html>
<head>
	<title>Enkrip Pswrd MD5</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Password :
		<input type="text" name="enkrip">
		<br>
		<input type="submit" name="send" id="send" value="Send!">
	</form>
</body>
</html>
<?php
if (isset($_REQUEST['send'])) {
	echo "pasword : <b>" . $_POST['enkrip'] . "</b><br>";
	$passen = md5($_POST['enkrip']);
	echo "Hasil Enkripsi : <b>" . $passen . "</b>";
}
?>
