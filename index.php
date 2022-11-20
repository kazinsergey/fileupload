<!DOCTYPE html>
<head>
	<title>HTML-фopмы</title>
	<meta charset='utf-8'>
</head>
<body>
	<p>Форма для отправки файлов на сервер</p>
    <p>Отдел</p>
<form action="form.php" method="post" enctype="multipart/form-data">
	<select name="otdel">
	<option value="UMVD-ROSSII-Penze">УМВД России по г. Пензе
	<option value="OP-1-UMVD-Rossii-Penze">ОП 1 УМВД России по г. Пензе
	<option value="OP-2-UMVD-Rossii-Penze">ОП 2 УМВД России по г. Пензе
	<option value="OP-3-UMVD-Rossii-Penze">ОП 3 УМВД России по г. Пензе
	<option value="OOP-4-UMVD-Rossii-Penze">ОП 4 УМВД России по г. Пензе
	<option value="OOP-5-UMVD-Rossii-Penze">ОП 5 УМВД России по г. Пензе
	<option value="OMVD-Rossii-Bashmakovskomu-raionu">ОМВД России по Башмаковскому району
	<option value="OeMVD-Rossii-Spasskomu-raionu">ОЕМВД России по Спасскому району
	<option value="OeMVD-Rossii-Bekovskomu-raionu">ОЕМВД России по Бековскому району
	<option value="OMVD-Rossii-Belinskomu-raionu">ОМВД России по Белинскому району
	<option value="OMVD-Rossii-Bessonovskomu-raionu">ОМВД России по Бессоновскому району
	<option value="PP-MO-MVD-Rossii-Nijnelomovskii-Vadinsk">ПП МО МВД России "Нижнеломовский" (Вадинск)
	<option value="OMVD-Rossii-Gorodishenskomu-raionu">ОМВД России по Городищенскому району
	<option value="OMVD-Rossii-Zemetchinskomu-raionu">ОМВД России по Земетчинскому району
	<option value="OP-MO-MVD-Rossii-Luninskii-Issa">ОП МО МВД России "Лунинский" (Исса)
	<option value="OMVD-Rossii-Kamenskomu-raionu">ОМВД России по Каменскому району
	<option value="OeMVD-Rossii-Kameshkirskomu-raionu">ОЕМВД России по Камешкирскому району
	<option value="MO-MVD-Rossii-Kolyshleiskii">МО МВД России "Колышлейский"
	<option value="OMVD-Rossii-Kuznecku">ОМВД России по г. Кузнецку"
	<option value="OMVD-Rossii-Kuzneckomu-raionu">ОМВД России по Кузнецкому району
	<option value="OeMVD-Rossii-Lopatinskomu-raionu">ОЕМВД России по Лопатинскому району
	<option value="MO-MVD-Rossii-Luninskii">МО МВД России "Лунинский
	<option value="TPP-MO-MVD-Rossii-Kolyshleiskii-Malaya-Serdoba">ТПП МО МВД России "Колышлейский" (М. Сердоба)
	<option value="OMVD-Rossii-Mokshanskomu-raionu">ОМВД России по Мокшанскому району
	<option value="OeMVD-Rossii-Narovchatskomu-raionu">ОЕМВД России по Наровчатскому району
	<option value="OeMVD-Rossii-Neverkinskomu-raionu">ОЕМВД России по Неверкинскому району
	<option value="MO-MVD-Rossii-Nijnelomovskii">МО МВД России "Нижнеломовский
	<option value="MO-MVD-Rossii-Nikolskii">МО МВД России "Никольский"
	<option value="OeMVD-Rossii-Pachelmskomu-raionu">ОЕМВД России по Пачелмскому району
	<option value="OMVD-Rossii-Penzenskomu-raionu">ОМВД России по Пензенскому району
	<option value="OMVD-Rossii-Serdobskomu-raionu">ОМВД России по Сердобскому району
	<option value="OP-MO-MVD-Rossii-Nikolskii-Sosnovoborsk">ОП МО МВД России "Никольский" (Сосновоборск)
	<option value="OeMVD-Rossii-Tamalinskomu-raionu">ОЕМВД России по Тамалинскому району
	<option value="OeMVD-Rossii-SHemysheiskomu-raionu">ОЕМВД России по Шемышейскому району
	<option value="UMVD-Rossii-Penzenskoi-oblasti">УМВД РОссии по Пензенской области
	</select>
	<p>КУСП  <input type = "text" name = "KUSP" value=""></p>
   	<br>
    <em>Файл не более 200 мегабайт!</em>
	<!-- Загрузка файла на сервер -->
	<input type="file" name="filename"><br>
	<input type='submit' name="submit" vаluе='Загрузить'>

</form>
        
    
	
	<!--<a href="uploads/prosmotr.php">просмотр загруженных файлов </a>-->
</body>
