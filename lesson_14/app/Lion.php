<?php

namespace App;

use App\interfaces\Eatable;
use App\interfaces\Voiceable;

class Lion extends CatFamily implements Voiceable, Eatable
{
    const ACCELERATION = 23;

    const CALORIE_FREQUENCY = 12;

    const SLEEP_COUNT_HOURS = 4;

    protected $size = 'big';

    public function __construct($age, int $speed = 0, $name = null)
    {
        $size = 'big';
        $weight = 120;
        parent::__construct($weight, $age, $size, $speed, $name);
    }

    public function voice()
    {
        echo 'rrrrr';
    }

    public function bigEat(BigWildfowl $wildfowl)
    {
        parent::eat($wildfowl);
    }

    public function eat(Wildfowl $wildfowl)
    {
        if ($wildfowl instanceof BigWildfowl) {
            parent::eat($wildfowl);
        }

        return;
    }

    /*public static function getClassName()
    {
        return self::class;
    }*/
}