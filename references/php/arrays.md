# Массивы 

На самом деле массив в PHP - это упорядоченное отображение, 
которое устанавливает соответствие между значением и ключом. 
Этот тип оптимизирован в нескольких направлениях, 
поэтому вы можете использовать его как собственно 
массив, список (вектор), хэш-таблицу (являющуюся реализацией карты), словарь, коллекцию, стэк, очередь и, 
возможно, что-то еще. 
Так как значением массива может быть другой массив PHP, можно также создавать деревья и многомерные массивы.


Массив (тип array) может быть создан языковой конструкцией `array()`. В качестве параметров она принимает любое количество разделенных запятыми пар `key => value` (`ключ => значение`).
```php
<?php 
array(
    key  => value,
    key2 => value2,
    key3 => value3,
)
?>
```
    
Запятая после последнего элемента массива необязательна и может быть опущена. Обычно это делается для однострочных массивов, то есть array(1, 2) предпочтительней array(1, 2, ). Для многострочных массивов с другой стороны обычно используется завершающая запятая, так как позволяет легче добавлять новые элементы в конец массива.

Начиная с PHP 5.4 возможно использовать короткий синтаксис определения массивов, который заменяет языковую конструкцию array() на [].

```php
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Начиная с PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>
```

`key` может быть либо типа `integer`, либо типа `string`. `value` может быть любого типа.

Дополнительно с ключом `key` будут сделаны следующие преобразования:

* Строки, содержащие целое число (исключая случаи, когда число предваряется знаком +) будут преобразованы к типу integer. Например, ключ со значением "8" будет в действительности сохранен со значением 8. С другой стороны, значение "08" не будет преобразовано, так как оно не является корректным десятичным целым.
* Числа с плавающей точкой (тип float) также будут преобразованы к типу integer, то есть дробная часть будет отброшена. Например, ключ со значением 8.7 будет в действительности сохранен со значением 8.
* Тип bool также преобразовываются к типу integer. Например, ключ со значением true будет сохранен со значением 1 и ключ со значением false будет сохранен со значением 0.
* Тип null будет преобразован к пустой строке. Например, ключ со значением null будет в действительности сохранен со значением "".
* Массивы (тип array) и объекты (тип object) не могут использоваться в качестве ключей. При подобном использовании будет генерироваться предупреждение: `Недопустимый тип смещения (Illegal offset type)`.

Если несколько элементов в объявлении массива используют одинаковый ключ, то только последний будет использоваться, а все другие будут перезаписаны.

```php
<?php
$array = [
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
];
var_dump($array);
?>
```
Результат выполнения данного примера:

```php
array(1) {
  [1]=>
  string(1) "d"
}
```

Так как все ключи в вышеприведенном примере преобразуются к 1, значение будет перезаписано на каждый новый элемент и останется только последнее присвоенное значение "d".

Массивы в PHP могут содержать ключи типов integer и string одновременно, так как PHP не делает различия между индексированными и ассоциативными массивами.


Параметр `key` является необязательным. Если он не указан, PHP будет использовать предыдущее наибольшее значение ключа типа `integer`, увеличенное на 1.

Доступ к элементам массива может быть осуществлен с помощью синтаксиса `array[key]`.

```php
<?php
    $array = [
        "foo" => "bar",
        42    => 24,
        "multi" => [
             "dimensional" => [
                 "array" => "foo"
             ]
        ]
    ];
    
    var_dump($array["foo"]);
    var_dump($array[42]);
    var_dump($array["multi"]["dimensional"]["array"]);
?>
```

Существующий массив может быть изменен путем явной установкой значений в нем.

Это выполняется присвоением значений массиву (array) с указанием в скобках ключа. Кроме того, ключ можно опустить, в результате получится пустая пара скобок ([]).
```php
    $arr[key] = value;
    $arr[] = value;
    // key может быть integer или string
    // value может быть любым значением любого типа
```
    
   
Если массив `$arr` еще не существует, он будет создан. Таким образом, это еще один способ определить массив array. Однако такой способ применять не рекомендуется, так как если переменная $arr уже содержит некоторое значение (например, значение типа string из переменной запроса), то это значение останется на месте и [] может на самом деле означать доступ к символу в строке. Лучше инициализировать переменную путем явного присваивания значения.