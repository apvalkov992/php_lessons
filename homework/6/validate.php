<?php

    function validator (array $data) {

        $rules = require_once 'rules.php';
        $errors = [];
        foreach ($data as $key => $value) {
            if(isset($rules[$key])) {
                $result = checkRules($rules[$key],$value);

                if(!$result) {
                    $errors[] = $key;
                }
            }
        }
        return (count($errors) > 0) ? $errors : true ;
    }

    function checkRules(array $rules, $value) {
        foreach ($rules as $callback) {
            if (!$callback($value)) {
                return false;
            }
        }
        return true;
    }

    function showNewProduct (array $data) {
        ?>
        <div class="col-6 card">
            <div class="card-body">
                <h5 class="card-title"><?=$data['productName'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$data['formRubric'];?> <span style="font-size: 14px; color: $light-blue"><?=$data['productState'];?></span></h6>
                <p class="card-text"><?=$data['description'];?></p>
                <p>Контакты:</p>
                <p style="color: #343a40;"><?='Телефон: '.$data['contactPhone'].' Email: '.$data['contactEmail'];?></p>
                <p class="price" style="color: #343a40; float: right">Цена: <?=$data['productCost'];?></p>
            </div>
        </div>
        <?php
    }
?>