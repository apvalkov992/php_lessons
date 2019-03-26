<?php
echo '<pre>';

class CustomEmpty {
    public function print()
    {
        var_dump($this);
    }
}

$empty = new CustomEmpty();
$empty->print();
$i = 0;

while ($i <= 100) {
    $empty = new CustomEmpty();
    $empty->print();
    $i++;
}
/*
$empty2 = new CustomEmpty();

$empty2->print();*/