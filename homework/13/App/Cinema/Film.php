<?php

namespace App\Cinema;

use DateTime;
use DateInterval;

class Film
{
    private $title;

    private $duration;

    private $genre;

    private $language;

    private $startPremier;

    private $endPremier;

    private $ageLimit;

    public function __construct(
        string $title,
        DateInterval $duration,
        string $genre,
        DateTime $startPremier,
        DateTime $endPremier,
        int $ageLimit = 0,
        string $language = 'Ru'
    ) {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->startPremier = $startPremier;
        $this->endPremier = $endPremier;
        $this->ageLimit = $ageLimit;
        $this->language = $language;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return DateTime
     */
    public function getStartPremier(): DateTime
    {
        return $this->startPremier;
    }

    /**
     * @return DateTime
     */
    public function getEndPremier(): DateTime
    {
        return $this->endPremier;
    }

    /**
     * @return int
     */
    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }
}