<?php


function customExplode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array
{
    $result = [];
    $count = substr_count($string, $delimiter);
    $start = 0;

    for ($i = 0; $i <= $count; $i++){
        $end = strpos($string, $delimiter);

        if ($end !== false && count($result) + 1 < $limit) {
            $result[] = substr($string, $start, $end - $start);
            $string = substr($string, $end + strlen($delimiter));
        } else {
            $result[] = $string;
            break;
        }
    }

    return $result;
}

$string = 'https://github.com/apvalkov/php_lessons/issues/66';

echo '<pre>';

print_r(customExplode('/', $string, 3));

//substr ( string $string , int $start [, int $length ] ) : string
function customSubstr(string $string , int $start, int $length = null): string {
    $result = '';
    $stringLength = strlen($string);

    if ($start < 0) {
        $start = $stringLength - abs($start);
    }

    if ($length < 0) {
        $length = abs(abs($length) - $stringLength + 1);
    }

    if ($length === 0 || $length === false) {
        return $result;
    }

    for ($i = $start; $i < $stringLength; $i++) {
        $result .= $string[$i];

        if ($length && $i === $length) {
            break;
        }
    }

    return $result;
}

echo '<pre>';

print_r(customSubstr('https://github.com/apvalkov/php_lessons/issues/66', 2, 0));
echo '<br>';
print_r(substr('https://github.com/apvalkov/php_lessons/issues/66', 2));
