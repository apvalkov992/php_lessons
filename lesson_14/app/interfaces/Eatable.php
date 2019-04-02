<?php

namespace App\interfaces;


use App\Wildfowl;

interface Eatable
{
    public function eat(Wildfowl $wildfowl);
}