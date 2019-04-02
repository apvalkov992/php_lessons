<?php

namespace App;


class CatFamily
{
    const ACCELERATION = 2;

    const CALORIE_FREQUENCY = 10;

    const SLEEP_COUNT_HOURS = 8;

    protected $age;

    protected $size;

    protected $name;

    protected $speed;

    protected $weight;

    /**
     * CatFamily constructor.
     *
     * @param $age
     * @param $size
     * @param $name
     * @param $speed
     * @param $weight
     */
    public function __construct($weight, $age, $size, $speed = 0, $name = null)
    {
        $this->age = $age;
        $this->size = $size;
        $this->name = $name;
        $this->speed = $speed;
        $this->weight = $weight;
    }

    public function eat(Wildfowl $wildfowl)
    {
        $this->weight += $wildfowl->getWeight();
    }

    public function voice()
    {
        echo 'bla bla';
    }

    public function run(int $distance)
    {
        while ($distance > 0) {
            $this->speed += self::ACCELERATION;
            $distance--;
        }

        $this->speed = 0;
    }

    public function sleep()
    {
        $this->speed = 0;

        $hours = self::SLEEP_COUNT_HOURS;

        while ($hours > 0) {
            $this->weight -= self::CALORIE_FREQUENCY;

            $hours--;
        }
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public static function getClassName()
    {
        return static::class;
    }

    public function echoConstants()
    {
        echo self::CALORIE_FREQUENCY . PHP_EOL;
        echo self::SLEEP_COUNT_HOURS . PHP_EOL;
        echo static::ACCELERATION . PHP_EOL;
    }
}