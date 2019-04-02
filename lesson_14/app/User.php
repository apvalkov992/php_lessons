<?php

namespace App;


use App\interfaces\Voiceable;

class User
{
    public function stroke(Voiceable $animal)
    {
        $animal->voice();
    }
}