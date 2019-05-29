<?php

function primeFactors($n)
{
    $res = $n;
    $lala = array();
    while (!isPrime($res)) {
        $mid = ceil($res / 2);
        for ($i = 2; $i < $mid; ++$i) {
            if (!isPrime($i)) {
                continue;
            } else {
                if (0 == $res % $i) {
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
        if (1 == $v) {
            $result .= "($k)";
        } else {
            $result .= "($k**$v)";
        }
    }

    return $result;
}

function isPrime($num)
{
    if (2 == $num || 3 == $num) {
        return true;
    } //2 3 为质数
    if (1 != $num % 6 && 5 != $num % 6) {
        return false;
    }//不在6的倍数两边的则一定不为质数
    $mid = intval(sqrt($num));
    //在6的倍数两侧，有可能不是质数
    for ($i = 5; $i <= $mid; $i += 6) {
        if (0 == $num % $i || 0 == $num % ($i + 2)) {
            return false;
        }
    }

    return true;
}

//Are they the "same"?

$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [231, 121 * 121, 144 * 144, 19 * 19, 161 * 161, 19 * 19, 144 * 144, 19 * 19];
var_dump(comp($a1, $a2));

function comp($a1, $a2)
{
    if (count($a2) != count($a1)) {
        return false;
    }

    if (0 == count($a2)) {
        return true;
    }

    foreach ($a2 as $v) {
        if (pow(intval(sqrt($v)), 2) != $v) {
            return false;
        }

        if (!in_array(sqrt($v), $a1)) {
            return false;
        }
    }
    var_dump($a1, $a2);

    return true;
}

//Bit Counting
//将十进制转化为二进制 decbin(int number);直接用
//下面是用了十进制转化为二进制的算法
//参考链接：https://www.cnblogs.com/gaizai/p/4233780.html
function countBits($n)
{
    $count = 0;
    while ($n > 0) {
        $tmp = $n % 2;
        if ($tmp > 0) {
            ++$count;
        }
        $n = $n / 2;
    }

    return $count;
}

//Replace With Alphabet Position

function alphabet_position(string $s): string
{
    $r = '';
    $s = strtolower($s);
    for ($i = 0; $i < strlen($s); ++$i) {
        if (ord($s[$i]) < 97 || ord($s[$i]) > 122) {
            continue;
        }
        $r .= ('' == $r) ? (ord($s[$i]) - 96) : ' '.ord[$s[$i]];
    }

    return $r;
}
