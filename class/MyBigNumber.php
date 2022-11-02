<?php
    class MyBigNumber{
        function MyBigNumber($num1, $num2){
            $i = strlen($num1) - 1;
            $j = strlen($num2) - 1;
            
            $carry = 0;
            $result = '';
            
            while ($i >= 0 || $j >= 0) {
                $sum = 0;
                
                $sum += $i >= 0 ? $num1[$i] : 0;
                
                $sum += $j >= 0 ? $num2[$j] : 0;
                
                $sum += $carry;
                
                if ($sum >= 10) {
                    $sum = $sum % 10;
                    $carry = 1;
                } else {
                    $carry = 0;
                }
                
                $result = strval($sum) . $result;
                
                $i--;
                $j--;
            }
            
            if ($carry == 1) {
                $result = strval($carry) . $result;
            }
            
            return $result;
        }

    }