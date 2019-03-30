<?php

namespace lesson_12;

class Cart
{
    private $items;

    private $user;

    private $calculator;

    public function __construct(User $user, CartCalculator $calculator)
    {
        $this->user = $user;
        $this->calculator = $calculator;
    }

    public function addItem(CartItem $item)
    {
        $this->items[] = $item;
    }

    public function calculate()
    {
        return $this->calculator->calculate($this->items);
    }
}

class CartCalculator
{
    /**
     * @param CartItem[] $cartItems
     *
     * @return float
     */
    public function calculate(array $cartItems)
    {
        $sum = 0;

        foreach ($cartItems as $item) {
            $sum += $item->getGood()->getPrice() * $item->getAmount();
        }

        return $sum;
    }
}

class CartItem
{
    private $good;

    private $amount;

    public function __construct(Good $good, int $amount)
    {
        $this->good = $good;
        $this->amount = $amount;
    }

    /**
     * @return Good
     */
    public function getGood(): Good
    {
        return $this->good;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}

class Good
{
    private $title;

    private $category;

    private $price;

    public function __construct(string $title, Category $category, float $price)
    {
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}

class Category
{
    private $title;

    private $parent;

    public function __construct(string $title, Category $parent = null)
    {
        $this->title = $title;
        $this->parent = $parent;
    }
}

class User
{
    private $name;

    private $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

$categoryXiaomi = new Category('Xiaomi');
$categoryMeizu = new Category('Meizu');
$categoryNokia = new Category('Nokia');

// Xiaomi
$phoneX1 = new Good('Телефон R7', $categoryXiaomi, 7900.5);
$phoneX2 = new Good('Телефон R28', $categoryXiaomi, 100000);

// Meizu
$phoneM1 = new Good('Телефон Me 2', $categoryMeizu, 8500.2);
$phoneM2 = new Good('Телефон M 3', $categoryXiaomi, 5000.2);


$vasya = new User('Вася', 'vas@mail.ru');
$petya = new User('Петя', 'petya@mail.ru');

$cartVasya = new Cart($vasya, new CartCalculator());
$cartVasya->addItem(new CartItem($phoneX1, 1));
$cartVasya->addItem(new CartItem($phoneM2, 100));

var_dump($cartVasya->calculate());
