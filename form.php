<?php
if(isset($_POST['submit'])){
	chdir("uploads");
	$otdel = $_POST['otdel'];
	if(!file_exists($otdel)){
		mkdir($otdel, '0777');
	}
	chdir($otdel);

	$year = date("Y");
	$month = date("m");
	$kusp = $_POST['KUSP'];
	$date = date("Y-m-d_H-i-s_");

	//создаем директории Год, Месяц, КУСП
	if(!file_exists($year)){
		mkdir($year, '0777');
	}
	chdir($year);

	if(!file_exists($month)){
		mkdir($month, '0777');
	}
	chdir($month);

	if(!file_exists($kusp)){
		mkdir($kusp, '0777');
	}
	chdir($kusp);

	$dir = getcwd();
	$dir_upload = __DIR__ . '/uploads' .'/' . $otdel . '/' . $year . '/' . $month . '/' . $kusp .'/';
	echo $dir_upload;
	echo "<br><br>\nЗагрузка в директорию " . $dir . "<br><br>\n";
	$tmp_name = $_FILES['filename']['tmp_name'];
	$name = basename($_FILES['filename']['name']);
	echo $dir_upload . $date . $name;
	if(move_uploaded_file($tmp_name, $dir_upload . $date . $name)){
		echo '<br>Файл скопирован на сервер<br>';
		echo 'Характеристики файла:<br>';
		echo 'Имя файла: ';
		echo $_FILES['filename']['name'] . '<br>';
		echo 'Размер файла: ';
		echo $_FILES['filename']['size'] . '<br>';
		echo 'Тип файла: ';
		echo $_FILES['filename']['type'] . '<br>';
	}else{
		echo '<br>файл не скопирован на сервер<br><br>';
	}

}
?>
<a href="index.php">Вернутся на загрузку файлов </a> 