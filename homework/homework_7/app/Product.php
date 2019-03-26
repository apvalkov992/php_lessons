<?php

class Product
{

    public $products;

    function addProduct($id, $title, $category, $price)
    {
        $this->products[] =
            [
                'id' => $id,
                'title' => $title,
                'category'=> $category,
                'price' => $price,
            ];
    }


}