<?php

class Category
{

    public $category;

    function addCategory($id, $title)
    {
        $this->category[$id] =
            [
                'title' => $title,
            ];

    }

}