<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа #4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <style type="text/css">
			.table {width: 80%; margin:auto; border: 2px solid #dee2e6;}

			.list-group1 {width:20%; padding: 0px 0px 2px 10px;}

			.container{overflow:hidden; width: 1000px; margin:auto;}
			.box div{width: 300px; height: 300px;  display:inline-block; margin:auto; }
			.card-block{padding:5pt; text-align: right;}
			.card-title {height:5%; text-align: left; font-weight:bold}
			.card-text {height:15%; text-align: left;}
			.card-img-top {width: 298px; height: 150px; object-fit: cover;}
			.btn-price {font-weight:bold; text-align: left; display:inline-block; padding: 0px 60pt 0px 0px;}
			.btn {text-align: right; font-weight:bold}
			.btn-primary {text-align: right;}
/*Немного CSS стилей от души еще никому не вредило (кроме самомнения заказчика)*/
  </style>
</head>
<body>

					<!-- ЗАДАНИЕ -->
<!--Выучить циклы `while`, `do while`, `for`, `foreach`
				### Практическая часть
 * Вывести на экран список пользователей в табличном виде
 * Вывести на экран категории в виде списка
 * Вывести на экран товары в виде плитки (элемент `card`)*/-->


<!-- ЗАГОЛОВОК -->
<h5 align="center"><font face="arial" color="#004694">Задание #1</font></h5>


<!-- Задание #1 -->
<?php 
$users = [
		[
			'userid'	 => '0001',
			'lastName'	 => 'Верьянов',
			'firstName'	 => 'Антон',
			'patronymic' => 'Павлович',
			'position'	 => 'Администратор'
		],
		[
			'userid'	 => '0002',
			'lastName'	 => 'Таровский',
			'firstName'	 => 'Дмитрий',
			'patronymic' => 'Олегович',
			'position'	 => 'Менеджер по продажам'
		],
		[
			'userid'	 => '0003',
			'lastName'	 => 'Климов',
			'firstName'	 => 'Евгений',
			'patronymic' => 'Борисович',
			'position'	 => 'Менеджер по закупкам'
		],
		[
			'userid'	 => '0004',
			'lastName'	 => 'Заумов',
			'firstName'	 => 'Василий',
			'patronymic' => 'Геннадиевич',
			'position'	 => 'HR Менеджер'
		],
		[
			'userid'	 => '0005',
			'lastName'	 => 'Карпов',
			'firstName'	 => 'Денис',
			'patronymic' => 'Иванович',
			'position'	 => 'Менеджер по связям'
		],
		[
			'userid'	 => '0006',
			'lastName'	 => 'Чкалов',
			'firstName'	 => 'Кирилл',
			'patronymic' => 'Павлович',
			'position'	 => 'Ревизор качества'
		],
		[
			'userid'	 => '0007',
			'lastName'	 => 'Семенчук',
			'firstName'	 => 'Олег',
			'patronymic' => 'Антонович',
			'position'	 => 'Менеджер по рекламе'
		],
		[
			'userid'	 => '0008',
			'lastName'	 => 'Гузинский',
			'firstName'	 => 'Михаил',
			'patronymic' => 'Андреевич',
			'position'	 => 'Менеджер по продажам'
		],
		];
?>
<table class="table table-bordered" >
	 <caption valign="top">
    <font face="arial" color="#004694"><i>Список рабочего персонала</i></font>
  </caption>
	<thead>
			<tr>
				<th scope="col">Фамилия</th>
				<th scope="col">Имя</th>
				<th scope="col">Отчество</th>
				<th scope="col">Должность</th>
				<th scope="col">Персональный номер</th>
			</tr>
	</thead>

	<tbody>
		<?php foreach ($users as $user) :?>
			<tr>
				<td><?= $user ['lastName']?></td>
				<td><?= $user ['firstName']?></td>
				<td><?= $user ['patronymic']?></td>
				<td><?= $user ['position']?></td>
				<td><?= $user ['userid']?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<!-- РАЗДЕЛИТЕЛЬНАЯ ЧЕРТА И ЗАГОЛОВОК -->
<hr size="2" color="fff" >
<h5 align="center"><font face="arial" color="#004694">Задание #2</font></h5>


<!-- Задание #2 -->
<?php  
$list = ['Процессоры','Материнские платы','Блоки питания','Видеокарты','Оперативная память','Жесткие диски','Корпуса','Мониторы','Разная перефирия'];

		foreach ($list as $value) :?>
			<div class="list-group1" >
				<a href="#" class="list-group-item list-group-item-action active"><?= $value ?></a>
			</div>
		<?php endforeach; ?>


<!-- РАЗДЕЛИТЕЛЬНАЯ ЧЕРТА И ЗАГОЛОВОК -->
<hr size="2" color="fff" >
<h5 align="center"><font face="arial" color="#004694">Задание #3</font></h5>


<!-- Задание #3 -->
<?php



$goods = [
		[
		'model' 		=> 'Intel Pentium Gold G5500 BOX',
		'price' 		=> '8 499',
		'description'	=> '3800 Мгц 2-ядерный процессор Intel Pentium Gold G5500 BOX..',
		'picture' 		=> 'https://www.prompt.lv/1249254-large_default/intel-pentium-g5500-380ghz-lga1151-4mb-cache-boxed-cpu.jpg',
		],
		[
		'model' 		=> 'AMD Sempron 2650 BOX',
		'price' 		=> '2 250',
		'description'	=> 'Процессор AMD Sempron 2650 объединяет оптимальные..',
		'picture' 		=> 'https://plex.com.ua/89548-tm_thickbox_default/%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80-amd-sempron-x2-2650-sd2650jahmbox.jpg',
		],
		[
		'model' 		=> 'ASUS M5A78L-M LX3',
		'price' 		=> '3 699',
		'description'	=> 'Эта материнская плата прекрасно совместима с процессорами AMD..',
		'picture' 		=> 'http://ae01.alicdn.com/kf/HTB1r7uaXtfvK1RjSszhq6AcGFXat.jpg',
		],
		[
		'model' 		=> 'Kingston HyperX Fury Black',
		'price' 		=> '5 699',
		'description'	=> 'Всего в комплекте поставки вы найдете один модуль ОЗУ..',
		'picture' 		=> 'https://techprime.com.ua/63357-large_default/ddr3-2x4gb-1600-135v-kingston-hyperx-fury-black-hx316lc10fbk2-8.jpg',
		],


		];




/*
		foreach ($list as $value) :?>
			<div class="list-group1" >
				<a href="#" class="list-group-item list-group-item-action active"><?= $value ?></a>
			</div>
		<?pыhp endforeach; ?>

*/


?>
<?php

foreach ($goods as $value) :?>

	<div class="container">
		<div class="box">

			<div>
				<div class="card">
					<img class="card-img-top" src="<?= $value['picture'] ?>" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title"><?= $value['model'] ?></h6>
								<p class="card-text"><?= $value['description'] ?></p>
								<h5 class="btn-price"><?= $value['price'] ?>₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>

		</div>
	</div>
		<?php endforeach; ?>



<br>
<br>
</body>
</html>