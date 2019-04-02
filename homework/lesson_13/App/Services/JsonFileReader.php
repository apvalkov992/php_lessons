<?php

namespace App\Services;

class JsonFileReader
{
    public function readFile(string $filePath)
    {
        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);

            return json_decode($content, true);
        }

        return false;
    }

}