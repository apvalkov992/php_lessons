<?php
    function priceThousand ($value) {
        $value = (string)$value;
        $amount = strlen($value);

        //Вот и switchCase пригодился )))

        switch ($amount) {
            case 4:
                echo "<span class='priceThousand'>$value[0]</span> ";
                for ($i = 1; $i < $amount; $i++) {
                    echo $value[$i];
                }
                break;
            case 5:
                echo "<span class='priceThousand'>$value[0]$value[1]</span> ";
                for ($i = 2; $i < $amount; $i++) {
                    echo $value[$i];
                }
                break;
            case 6:
                echo "<span class='priceThousand'>$value[0]$value[1]$value[2]</span> ";
                for ($i = 3; $i < $amount; $i++) {
                    echo $value[$i];
                }
                break;
            case 7:
                echo "<span class='priceMillion'>$value[0]</span> ";
                echo "<span class='priceThousand'>$value[1]$value[2]$value[3]</span> ";
                for ($i = 4; $i < $amount; $i++) {
                    echo $value[$i];
                }
                break;
            
            default:
                echo $value;
                break;
        }
        return null;
    }