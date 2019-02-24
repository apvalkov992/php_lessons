<?php 
//Вывести на экран список пользователей в табличном виде
$users = [
	[
		'idUser' => 1,
		'lastName' => 'Ежиков',
		'firstName' => 'Александр',
		'middleName' => 'Ивонович',
		'birthday' => '12.05.1994',
		'userName' => 'superPuper',
		'pass' => crypt('password1'),
		'email' => 'eschik@mail.ru',
		'phone' => '+380951234567',
		'lastLogin' => '18.12.2009'
	],
	[
		'idUser' => 2,
		'lastName' => 'Кошкина',
		'firstName' => 'Тамара',
		'middleName' => 'Петровна',
		'birthday' => '31.12.1999',
		'userName' => 'TomaCAT',
		'pass' => crypt('password'),
		'email' => 'littlecat@gmail.com',
		'phone' => '+70661234567',
		'lastLogin' => '22.02.2019'
	],
	[
		'idUser' => 3,
		'lastName' => 'Жучков',
		'firstName' => 'Валера',
		'middleName' => 'Берталонович',
		'birthday' => '01.01.1986',
		'userName' => 'BigBug',
		'pass' => crypt('password3'),
		'email' => 'BigBug@ya.ru',
		'phone' => '+30851234567',
		'lastLogin' => '07.08.2018'
	]

]
?>