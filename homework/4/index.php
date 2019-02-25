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
<h5 align="center"><font face="arial" color="#004694">Задание #3</font></h5>


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
	<div class="container">
		<div class="box">

			<div>
				<div class="card">
					<img class="card-img-top" src="https://www.prompt.lv/1249254-large_default/intel-pentium-g5500-380ghz-lga1151-4mb-cache-boxed-cpu.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">Intel Pentium Gold G5500 BOX</h6>
								<p class="card-text">3800 Мгц 2-ядерный процессор Intel Pentium Gold G5500 BOX..</p>
								<h5 class="btn-price">8 499 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://plex.com.ua/89548-tm_thickbox_default/%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80-amd-sempron-x2-2650-sd2650jahmbox.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">AMD Sempron 2650 BOX</h6>
								<p class="card-text">Процессор AMD Sempron 2650 объединяет оптимальные..</p>
								<h5 class="btn-price">2 250 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>

						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="http://ae01.alicdn.com/kf/HTB1r7uaXtfvK1RjSszhq6AcGFXat.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">ASUS M5A78L-M LX3</h6>
								<p class="card-text">Эта материнская плата прекрасно совместима с процессорами AMD..</p>
								<h5 class="btn-price">3 699 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://techprime.com.ua/63357-large_default/ddr3-2x4gb-1600-135v-kingston-hyperx-fury-black-hx316lc10fbk2-8.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">Kingston HyperX Fury Black</h6>
								<p class="card-text">Всего в комплекте поставки вы найдете один модуль ОЗУ..</p>
								<h5 class="btn-price">5 699 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://i1.price.ua/images/model/776/2379492/2/1/type1/msi_gtx_1050_ti_gaming_x_4g_3043452.png" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">MSI GeForce GTX 1050 TI</h6>
								<p class="card-text">Хищная красно-черная расцветка дополнена наличием двух..</p>
								<h5 class="btn-price">15 299 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://game-device.com/image/cache/catalog/pc_complect/korpus/corsair/Corsair_Graphite_Series_780T_White-1500x700.png" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">Corsair Graphite Series 780T</h6>
								<p class="card-text">Футуристический дизайн корпуса со сглаженными углами сразу..</p>
								<h5 class="btn-price">15 199 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://www.corsair.com/corsairmedia/sys_master/productcontent/CP-9020121-EU-CX550_004.png" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">Corsair CX 550M</h6>
								<p class="card-text">лагодаря габаритам 140x150x86 мм представленное комплектующее..</p>
								<h5 class="btn-price">6 499 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://static3.nordic.pictures/17178067-thickbox_default/intel-core-i5-7400-box.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">Intel Core i5-7400 BOX</h6>
								<p class="card-text">Совокупность технических параметров обеспечивает..</p>
								<h5 class="btn-price">14 799 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://pcaccesorios.com.mx/wp-content/uploads/2018/08/ROG-STRIX-X299-XE-GAMINGa-500x500.png" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">ASUS ROG STRIX X299-XE GAMING</h6>
								<p class="card-text"> Благодаря процессорному разъему LGA 2066 модель поддерживает..</p>
								<h5 class="btn-price">28 299 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/71rvqW0MLfL._SX679_.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">GIGABYTE GA-Z170X-Gaming G1</h6>
								<p class="card-text">Высокий рабочий потенциал гарантирован при двухканальном..</p>
								<h5 class="btn-price">40 999 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://33.img.avito.st/640x480/5137486933.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">Kingston HyperX FURY Red</h6>
								<p class="card-text">Тактовая частота модели достигает 2.4 ГГц, а ее пропускная способность..</p>
								<h5 class="btn-price">10 999 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://www.alternate.co.uk/p/1200x630/h/AMD_FX_8300_processor_3_3_GHz_Box_8_MB_L2@@ha8a27.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">AMD FX-8300 BOX</h6>
								<p class="card-text">Базовая частота процессора составляет 3300 МГц, а максимально..</p>
								<h5 class="btn-price">5 199 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://sec-market.com.ua/263-large_default/wd-purple-wd10purx-1-tb-zhestkiy-disk-hdd.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">1 ТБ Жесткий диск WD Purple</h6>
								<p class="card-text">Устройство обладает довольно высокой скоростью передачи..</p>
								<h5 class="btn-price">3 999 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://www.fantastic.md/images/cache/goods_image/big/goods_image_154496.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">HyperX Alloy FPS Mechanical</h6>
								<p class="card-text">Она характеризуется механическим ходом клавиш с технологией..</p>
								<h5 class="btn-price">8 499 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>
			<div>
				<div class="card">
					<img class="card-img-top" src="https://i1.price.ua/images/model/23/3045694/2/1/type1/philips_328e8qjab5_3998800.jpg" alt="Картинка карточки">
						<div class="card-block">
							<h6 class="card-title">31.5" Монитор Philips E Line</h6>
								<p class="card-text">Стильный, изящный монитор стал обладателем безрамочного..</p>
								<h5 class="btn-price">20 299 ₽</h5>
								<a href="#" class="btn btn-primary">В КОРЗИНУ</a>
						</div>
				</div>
			</div>

		</div>
	</div>
<br>
<br>
</body>
</html>