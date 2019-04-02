<?php

namespace App\Factory;

use App\Cinema\Film;
use App\Services\JsonFileReader;

class FilmFactory
{
    const ABSOLUTE_FILE_PATH = '/storage/films.json';

    const LANGUAGE = 'Ru';

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
            foreach ($content as $film) {
                $startAt = new \DateTime('-' . rand(1,5) . ' day');
                $endAt = (clone $startAt)->add(new \DateInterval('P'. rand(1, 14) .'D'));

                $result[] = new Film(
                    $film['name'],
                    new \DateInterval('PT'. rand(80, 120) .'M'),
                    $film['genre'],
                    $startAt,
                    $endAt,
                    (bool) rand(0, 1),
                    self::LANGUAGE
                );
            }
        }

        return $result;
    }

    private function getFile()
    {
        return dirname(dirname(__DIR__)) . self::ABSOLUTE_FILE_PATH;
    }
}