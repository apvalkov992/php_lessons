<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Личный кабинет</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
		$users = [
			[
				"login" => "user1",
				"email" => "user1@email.com",
				"password" => "12345",
			]
						[
				"login" => "user2",
				"email" => "user2@email.com",
				"password" => "12345",
			]
						[
				"login" => "user3",
				"email" => "user3@email.com",
				"password" => "12345",
			]
		];
	?>
	<div class="container">
		<form method="POST">
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email</label>
    			<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  			</div>

  			<div class="form-group">
    			<label for="exampleInputPassword1">Password</label>
    			<input nmae="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  			</div>

  			<div class="form-gorup">
  					
  			</div>

  			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>	
</body>
</html>