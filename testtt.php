<?php

function rc4 ($data,$pwd)//　$data需加密字符串  $pwd密钥
{
    $key[] ="";
    $box[] ="";
 
    $pwd_length = strlen($pwd);
    $data_length = strlen($data);
 
    for ($i = 0; $i < 256; $i++)
    {
        $key[$i] = ord($pwd[$i % $pwd_length]);
        $box[$i] = $i;
    }
 
    for ($j = $i = 0; $i < 256; $i++)
    {
        $j = ($j + $box[$i] + $key[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
 
    for ($a = $j = $i = 0; $i < $data_length; $i++)
    {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
 
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
 
        $k = $box[(($box[$a] + $box[$j]) % 256)];
        $cipher .= chr(ord($data[$i]) ^ $k);
    }
     
    return $cipher;
}

$guest = rc4('buyaoyongroot', '0o9s');
$guest64  = base64_encode(rc4('buyaoyongroot', '0o9s'));
echo "guest64:{$guest64}\r\n<br>";

$deguest1 = rc4($guest, '0o9s');
echo "de:{$deguest1}\r\n<br>";


$deguest2 = rc4($guest, '0p9s');
echo "de:{$deguest2}\r\n<br>";






?>
