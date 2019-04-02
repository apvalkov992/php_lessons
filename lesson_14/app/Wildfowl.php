<?php

namespace App;

class Wildfowl extends AbstractWildfowl
{
    protected $weight;

    /**
     * Wildfowl constructor.
     * @param $weight
     */
    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
}