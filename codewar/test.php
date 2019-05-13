<?php
$n = 7775460;
primeFactors($n);

function primeFactors($n)
{
    $res = $n;
    $lala = array();
    while (!isPrime($res)) {
        $mid = ceil($res/2);
        for ($i = 2;$i < $mid;++$i) {
            if (!isPrime($i)) {
                continue;
            } else {
                if ($res % $i == 0) {
                    $lala[] = $i;
                    $res = $res / $i;
                }
            }
        }
    }
    $lala[] = $res;
    $haha = array_count_values($lala);
    $result = '';
    foreach ($haha as $k => $v) {
        if ($v == 1) {
            $result .="($k)";
        } else {
            $result .="($k**$v)";
        }
    }
    return $result;
}


function isPrime($num)
{
    if ($num == 2 || $num == 3) {
        return true;
    } //2 3 为质数
    if ($num % 6 != 1 && $num % 6 != 5) {
        return false;
    }//不在6的倍数两边的则一定不为质数
    $mid = intval(sqrt($num));
    //在6的倍数两侧，有可能不是质数
    for ($i = 5;$i <= $mid;$i +=6) {
        if ($num % $i == 0 || $num %($i + 2) == 0) {
            return false;
        }
    }
    return true;
}
