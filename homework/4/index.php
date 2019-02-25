<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

    <title>Hello, world!</title>
  </head>
  <body>
  	<?php
  		$users = [
  			["surname" => "Иванов", "name" => "Иван", "middle_name" => "Иванович"],
  			["surname" => "Петров", "name" => "Петр", "middle_name" => "Петрович"],
  			["surname" => "Иванов", "name" => "Иван", "middle_name" => "Иванович"],
  			["surname" => "Иванов", "name" => "Иван", "middle_name" => "Иванович"],
  		];

  		$categories = ["Категория1", "Категория2", "Категория3", "Категория4", "Категория5"];

  		$cards = [
  			[
  				"title" => "Пост1",
  				"description" => "Описание поста1",
  				"img" => "http://lorempixel.com/400/200",
  			],
  			[
  				"title" => "Пост2",
  				"description" => "Описание поста2",
  				"img" => "http://lorempixel.com/g/400/200",
  			],
  			[
  				"title" => "Пост3",
  				"description" => "Описание поста3",
  				"img" => "http://lorempixel.com/400/200/sports",
  			]
  		];
  	?>

    <div class="container">
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Фамилия</th>
    				<th>Имя</th>
    				<th>Отчество</th>
    			</tr>
    		</thead>
    		<tbody>
				<?php foreach ($users as $user): ?>
    				<tr>
    					<td><?= $user["surname"]?></td>
    					<td><?= $user["name"]?></td>
    					<td><?= $user["middle_name"]?></td>
    				</tr>
    			<?php endforeach; ?>
    		</tbody>
    	</table>

    	<ul class="list-group">
			<?php foreach($categories as $categorie): ?>
				<li class="list-group-item">
					<?= $categorie?>
				</li>
			<?php endforeach; ?>
		</ul>
		
		<div class="row">
			<?php foreach ($cards as $card): ?>
				<div class="card col-md-6">
					<img class="card-img-top" src="<?= $card['img'] ?>" alt="">
					<div class="card-body">
						<h5 class="card-title"><?= $card["title"]?></h5>
						<p class="card-text"><?= $card["description"]?></p>
					</div>
				</div>
			<?php endforeach ?>

		</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>s