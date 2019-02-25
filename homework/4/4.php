<?php
$users=[
	[
		'firstName' => 'Sergei',
		'lastName' => 'Duvanov',
		'userID' => 1
	],
	[
		'firstName' => 'Kirill',
		'lastName' => 'Kurilin',
		'userID' => 2
	],
	[
		'firstName' => 'Arkadii',
		'lastName' => 'Tsaregradcev',
		'userID' => 3
	],
	[
		'firstName' => 'Vitalii',
		'lastName' => 'Kulichikov',
		'userID' => 4
	],
	[
		'firstName' => 'Stepan',
		'lastName' => 'Darvenko',
		'userID' => 5
	],
	[
		'firstName' => 'Ivan',
		'lastName' => 'Fuckoff',
		'userID' => 6
	],
];
$categories=[
'Phones',
'Notebooks',
'Accessories',
'Headphones',
'Tablets',
'Computer Parts'
];
$goods=[
	[
		'title'=>'notebook',
		'diagonal'=>'14"',
		'resolution'=>'1920x1080',
		'cpu'=>'Intel Core i5-7300HQ',
		'ram'=>'8Gb',
		'rom'=>'256Gb',
		'img'=>'http://lorempixel.com/400/200'
	],
	[
		'title'=>'TV',
		'diagonal'=>'32"',
		'resolution'=>'1920x1080',
		'img'=>'http://lorempixel.com/400/200'
	],
	[
		'title'=>'phone',
		'diagonal'=>'6.46"',
		'resolution'=>'2560x1080',
		'cpu'=>'Qalcomm Snupdragon 625',
		'ram'=>'3Gb',
		'rom'=>'32Gb',
		'img'=>'http://lorempixel.com/400/200'
	],
	[
		'title'=>'tablet',
		'diagonal'=>'10"',
		'resolution'=>'1920x1080',
		'cpu'=>'Intel Atom Z3735F',
		'ram'=>'4Gb',
		'rom'=>'64Gb',
		'img'=>'http://lorempixel.com/400/200'
	],
];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#FEF7F1">

	<table class="table", border="1">
		<thead>
			<tr>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>ID</th>
			</tr>
		</thead>
		<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?= $user['firstName'] ?></td>
						<td><?= $user['lastName'] ?></td>
						<td><?= $user['userID'] ?></td>
					</tr>>
				<?php endforeach; ?>
		</tbody>
	</table>
<br>

<ul class="list-group">
	<?php foreach ($categories as $category): ?>
		<li class="list-group-item"> <?= $category ?> </li>	
	<?php endforeach; ?>
</ul>
<br>
<div class="row" align="center">
<?php foreach ($goods as $good): ?>
<div class="card">
  <img class="card-img-top" src=<?= $good['img'] ?> alt="Card image cap">
 	 <div class="card-body">
   		 <h5 class="card-title"><?= $good['title'] ?></h5>
   			 <p class="card-text"><?= $good['diagonal'] ?></p>
   			 <p class="card-text"><?= $good['resolution'] ?></p>
   			 <p class="card-text"><?= $good['cpu'] ?></p>
   			 <p class="card-text"><?= $good['ram'] ?></p>
    		 <p class="card-text"><?= $good['rom'] ?></p>
   		 <a href="https://github.com/apvalkov/php_lessons/issues/40" class="btn btn-primary">Go to Github</a>
  </div>
</div>
	<?php endforeach; ?>
</div>
</body>
</html>
