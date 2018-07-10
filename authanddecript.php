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
//echo "guest64:{$guest64}\r\n<br>";

$deguest = rc4($guest, '0o9s');
//echo "de:{$deguest}\r\n<br>";

// 发送一个简单的 cookie
setcookie("Cookie",$guest64);

$root64  = base64_encode(rc4('root', '0o9s'));

header("auth-algorithm:base64_encode(rc4('user', 'pass')");

if( $_COOKIE["Cookie"] == $root64 ) {


        // Login successful
        echo "<p>the flag is {master,you.have.a.visitor!}</p>";

}
else if ( $_COOKIE["Cookie"] == master ){
        echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>
					welcome to my home
				</h2>
				<p>i am a robot,you are not my master.you are not in charge here.<br>
i can not give you what you want!
				</p>
<!--you hacked me.here is the information.the pass is four characters.two is number.two is lower case.-->
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

                ';
}else{
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                        <div class="jumbotron">
                                <h2>
                                        welcome to my home
                                </h2>
                                <p>i am a robot,you are not my master.you are not in charge here.<br>
i can not give you what you want!
                                </p>
                                <p>
                                        <a class="btn btn-primary btn-large" href="#">Learn more</a>
                                </p>
                        </div>
                </div>
        </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

';
}




?>
