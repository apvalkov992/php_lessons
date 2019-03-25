<?php
class goods
{
    protected $title;
    protected $category;
    protected $description;
    protected $price;
    protected $image;

    public function __construct($title, $category,$description, $price, $image = null)
    {
        $this->title = $title;
        $this->category = $category;
        $this->description =$description;
        $this->price = $price;
        $this->image = $image;
    }


}