<!DOCTYPE html>
<html lamg="en">
	<head>
		<meta charset="utf-8">
		<title>Магазин мебели</title>
	</head>
	<div class="container-fluid">
	<?php require_once 'data/users.php' ?>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">Имя</th>
				<th scope="col">Фамилия</th>
				<th scope="col">Номер дисконтной карты</th>
				<th scope="col">Телефонный номер</th>
				<th scope="col">Дата рождения</th>	
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $key) : ?>
				<tr>
					<td td scope="row"><?= $key['idNumber']?></td>
					<td td scope="row"><?= $key['firstName']?></td>
					<td td scope="row"><?= $key['lastName']?></td>
					<td td scope="row"><?= $key['discountCard']?></td>
					<td td scope="row"><?= $key['phoneNumber']?></td>
					<td td scope="row"><?= $key['birthday']?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</div>
	</table>
<hr size="5" color="009900" >

<?php require_once 'data/products.php' ?>
	<div class="container">
	  <ul class="list-group">
	  	<?php foreach ($products as $key) : ?>
	    <li class="list-group-item"><?= $key['category']?>
	  	<?php endforeach;?>
	  	</li>
 	 </ul>
	</div>

<?php require_once 'data/products.php' ?>
	<div class="container-fluid">
		<div class="row">
<hr size="5" color="009900" >

<?php
// 3е задание не осилил... не совсем разобрался в его выполнении...
 ?>
</html>
