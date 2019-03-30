<?php

namespace App\Factory;

use App\Cinema\User;

class UserFactory
{
    const MIN_AGE = 12;

    const MAX_AGE = 30;

    const MIN_CASH = 500;

    const MAX_CASH = 5000;

    /**
     * @param int $count
     *
     * @return User[]
     */
    public static function generate(int $count): array
    {
        $result = [];

        while ($count > 0) {
            $result[] = new User(
                rand(self::MIN_AGE, self::MAX_AGE), rand(self::MIN_CASH, self::MAX_CASH)
            );

            $count--;
        }

        return $result;
    }
}