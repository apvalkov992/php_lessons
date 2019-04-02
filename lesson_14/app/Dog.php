<?php

namespace App;

use App\interfaces\Voiceable;

class Dog implements Voiceable
{
    public function voice()
    {
        echo 'гав гав';
    }
}