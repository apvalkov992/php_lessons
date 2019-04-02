<?php

namespace App\Factory;

use App\Cinema\CinemaHall;
use App\Services\JsonFileReader;

class CinemaHallsFactory
{
    const ABSOLUTE_FILE_PATH = '/storage/cinemaHalls.json';

    private $fileReader;

    public function __construct(JsonFileReader $fileReader)
    {
        $this->fileReader = $fileReader;
    }

    public static function generate()
    {
        $self = new self(new JsonFileReader());
        $content = $self->fileReader->readFile($self->getFile());
        $result = [];

        if (is_array($content)) {
            foreach ($content as $cinemaHall) {
                $result[] = new CinemaHall($cinemaHall['color'], rand(30, 100));
            }
        }

        return $result;
    }

    private function getFile()
    {
        return dirname(dirname(__DIR__)) . self::ABSOLUTE_FILE_PATH;
    }
}