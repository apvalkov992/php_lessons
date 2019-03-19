<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid mb-2">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">WebDevelopmentCourse</a>
            </nav>
        </div>

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success">

                <?php
               
                $users = [
                    [
                        'lastName' => 'Наскидашвили',
                        'firstName' => 'Кирилл',
                        'middleName' => 'Анатольевич',
                        'group' => 'КС 15-1',
                        'userAge' => 18,
                        'phoneNumber' => '071-345-44-08'
                    ],
                    [
                        'lastName' => 'Халаджи',
                        'firstName' => 'Виктория',
                        'middleName' => 'Викторовна',
                        'group' => 'ПКС 16-1',
                        'userAge' => 18,
                        'phoneNumber' => '071-347-15-31'
                    ],
                    [
                        'lastName' => 'Пархоменко',
                        'firstName' => 'Мария',
                        'middleName' => 'Юрьевна',
                        'group' => 'ФК 18-1',
                        'userAge' => 16,
                        'phoneNumber' => '071-419-96-95'
                    ],
                    [
                        'lastName' => 'Кейдун',
                        'firstName' => 'Назар',
                        'middleName' => 'Витальевич',
                        'group' => 'ОРАТ 18-2',
                        'userAge' => 16,
                        'phoneNumber' => '071-411-38-06'
                    ],
                    [
                        'lastName' => 'Иванов',
                        'firstName' => 'Эдуард',
                        'middleName' => 'Игоревич',
                        'group' => 'КСК 18-1',
                        'userAge' => 16,
                        'phoneNumber' => '071-359-40-13'
                    ],
                ];
                ?>
            </div>
            <table class="table">
                <thead>
                	<tr>
                		<p align="center"> Список активистов ОО "Молодая Республка" </p>
                	</tr>
                <tr>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Группа</th>
                    <th>Возраст</th>
                    <th>Номер телефона</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) :?>
                    <tr>
                        <td><?= $user['lastName']?></td>
                        <td><?= $user['firstName']?></td>
                        <td><?= $user['middleName']?></td>
                        <td><?= $user['group']?></td>
                        <td><?= $user['userAge']?></td>
                        <td><?= $user['phoneNumber']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>

            </table>
            <br>
            <?php
             $departments = ['"Отделение компьютерной техники"','"Механико-техническое отделение"', '"Педагогическое отделение"', '"Отделение программирования"', '"Экономическое отделение"', '"Электро-техническое отделение"']
            ?>
				<p align="center"> Список отделений ГПОУ "Донецкий политехнический колледж" </p>
            <ul class="list-group">
                <?php foreach ($departments as $item) : ?>

                    <li class="list-group-item"><?= $item?></li>

                <?php endforeach;?>
            </ul>

            <?php
                $goods = [
                    [
                        'title' => 'Сыр "Рокфор"',
                        'description' => 'У Рокфора специфический аромат и вкус, сильно чувствуется привкус маслянистой кислоты, а плесень добавляет остроты. Сыр определенно удивит вас своим причудливым послевкусием, сперва мягкое, потом сладковатое, а в самом конце соленое. У Рокфора отсутствует корка, внешняя сторона съедобна и тоже соленая.',
                        'img' => 'https://www.vareni.cz/include/ir/clanky/1040/list--c600xc600.jpg'
                    ],
                    [
                        'title' => 'Сыр "Пармезан"',
                        'description' => 'Друзья-сыролюбы, специально для Вас мы подготовили супер вкусное предложение.

						Мы точно знаем, какой сыр Вы любите больше других — это Пармезан.

						Сейчас хороший пармезан найти очень сложно. Еще пару лет назад мы с Вами лакомились пармезаном из Италии — это всем известные экстра твердые сыры Грана Падано и Пармиджано Реджано.

						Но сейчас они под эмбарго, и мы, наконец, нашли вкусный пармезан в России по очень приятной цене. Правда приехал он к нам из Аргентины и в слепой дегустации на наших мастер классах победил остальных конкурентов из России и Швейцарии.

						Сыр выдерживается в среднем 12 месяцев и за это время успевает обрести приятную крошащуюся структуру. Вес головки — около 6 кг.

						Для того, чтобы было выгодно довести сыр до Москвы по этой цене, нам придется выкупить сразу довольно большую партию сыра, и именно поэтому нам нужна Ваша помощь.',
                        'img' => 'https://massaget.kz/userdata/uploads/u58177/1441003257_l.jpg'
                    ],
                    [
                        'title' => 'Сыр "Моцарелла"',
                        'description' => 'Моцарéлла — свежий мягкий сыр, изготовленный в России из пастеризованного коровьего молока по классическому итальянскому рецепту.

						Консистенция очень мягкая и нежная, однако из-за большого количества влаги в сыре, он не хранится долго (1-2 дня).

						Структура — немного слоистая, не содержит пузырьков воздуха. При разрезании сыра вытекает немного молочной жидкости.

						Хотя существует и твёрдая Моцарелла, самая вкусная — Моцарелла Giornata (однодневной выдержки). Её можно купить только у нас или в Италии :)',
                        'img' => 'https://avatars.mds.yandex.net/get-marketpic/210846/market_L60fuFmEQI0okNtMaWLQHQ/orig'
                    ],
                    [
                        'title' => 'Сыр "Камамбер Герцензе"',
                        'description' => 'Камамбер Герцензе (Camembért Gerzensee) — мягкий швейцарский сыр с белой благородной плесенью, изготовленный из пастеризованного молока коров, пасущихся на богатых цветочно-травных пастбищах предгорья Альп.

							Аккуратные головки камамбера Герцензе, покрытые крепкой белоснежной корочкой, таят в себе нежное сырное тело золотистого цвета.

							В аромате молодых головок сыра преобладают грибные и землистые нотки, а в зрелых появляются настойчивые и вызывающие — анималистичные.

							Сырная мякоть солоноватая и сливочная, как идеальное французское масло; густая и тягучая, как деревенская сметана; гладкая и стремительно тающая, как заварной крем.

							Сырное тело выдержанных образцов Камамбер Герцензе приобретает более насыщенный и пикантный вкусовой букет с нотками сладкого томленого лука и савойской капусты, корнеплодов и крепкого бульона.',
                        'img' => 'https://goto-wine.ru/upload/iblock/62f/62f681050002da735a9d06e1e59b7629.jpg'
                    ]
                ];
            ?>
					<br><br><p align="center"> Товары магазина элитных сыров "Cheese Please" </p>
            <div class="row">
                <?php foreach ($goods as $good) :?>
                    <div class="card col-md-6">
                        <img class="card-img-top" src="<?= $good['img']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $good['title']?></h5>
                            <p class="card-text"><?= $good['description']?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>