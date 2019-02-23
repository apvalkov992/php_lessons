<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>4</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style type="text/css">
        .card {
            width: 18rem; 
            margin-top: 25px; 
            margin-right: 25px;
        }

        .card-img-top {
            max-height: 200px;
        }

        .productsTitle {
            margin: 0px 0 15px 0;
        }

        .productsTitle:after {
            content: '';
            display: block;
            margin-top: 10px;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .card {
            border: 1px solid #c1c1c1;
        }
    </style>

    </head>

    <body>
    <?php 
        $users = [
            [
                'firstName' => 'Andrey',
                'lastName' => 'Bulavkin',
                'middleName' => 'Fedorovich',
                'Age' => '24',
                'Address' => 'st. Mira, h. 4'
            ],
            [
                'firstName' => 'Mariya',
                'lastName' => 'Ivanova',
                'middleName' => 'Dmitrievna',
                'Age' => '21',
                'Address' => 'st. Pushkina, h. Kolotushkina 1'                
            ],
            [
                'firstName' => 'Semen',
                'lastName' => 'Semenov',
                'middleName' => 'Semenovich',
                'Age' => '20',
                'Address' => 'st. Shcolnaya, h. 21'
            ]
        ];
    ?>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">firstName</th>
                <th scope="col">lastName</th>
                <th scope="col">middleName</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 1;
                foreach ($users as $key => $value):
            ?>
            <tr>
                <th scope="row"><?= $i;?></th>
                <td><?= $value['firstName']; ?></td>
                <td><?= $value['lastName']; ?></td>
                <td><?= $value['middleName']; ?></td>
                <td><?= $value['Age']; ?></td>
                <td><?= $value['Address']; ?></td>
            </tr>
            <?php
                $i++;
                endforeach;
            ?>
        </tbody>
    </table>
    

    <?php
        $list = ['элемент 1','элемент 2','элемент 3','элемент 4','элемент 5'];
    ?>
    <ul class="list-group">
    <?php
        foreach ($list as $key => $value) :
    ?>
        <li class="list-group-item"><?= $value?></li>
    <?php
        endforeach;
    ?>
    </ul>

    
    <?php
        $products = [
            [
                'name' => 'Апельсин',
                'description' => 'Апельсин — самая распространённая цитрусовая культура во всех тропических и субтропических областях мира.',
                'img_src' => 'https://foodinformer.ru/wp-content/uploads/2015/10/apelsin-1.jpeg'
            ],
            [
                'name' => 'Яблоко',
                'description' => 'Яблоко — плод яблони, который употребляется в пищу в свежем виде, служит сырьём в кулинарии и для приготовления напитков. Считается, что родиной яблони является Центральная Азия. Наибольшее распространение получила яблоня домашняя.',
                'img_src' => 'https://eimg.pravda.com/images/doc/a/5/a53904c-b15df714.jpg'
            ],
            [
                'name' => 'Банан',
                'description' => 'Банан — название съедобных плодов культивируемых видов рода Банан; обычно под таковыми понимают Musa acuminata и Musa × paradisiaca, а также Musa balbisiana, Musa fehi, Musa troglodytarum и ряд других. Также бананами могут называть плоды Ensete ventricosum.',
                'img_src' => 'https://www.vladtime.ru/uploads/posts/2018-06/1528268208_39816644-banana-wallpapers.jpg'
            ],
            [
                'name' => 'Огурец',
                'description' => 'Огурец обыкновенный, или Огурец посевной, — однолетнее травянистое растение, вид рода Огурец семейства Тыквенные, овощная культура.',
                'img_src' => 'https://7info.ru/wp-content/uploads/2017/12/cucumbers-growing-big.jpg'
            ]
        ];
    ?>
    <div class="container">
        <div class="row">
        <?php
            foreach ($products as $key => $value) :
        ?>
        <div class="card col-5">
            <img class="card-img-top" src="<?= $value['img_src'];?>" alt="<?= $value['name'].' изображение';?>">
            <div class="card-body">
                <h3 class="productsTitle"><?= $value['name'];?></h3>
                <p class="card-text"><?= $value['description'];?></p>
            </div>
        </div>
        <?php
            endforeach;
        ?>
        </div>
    </div>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>