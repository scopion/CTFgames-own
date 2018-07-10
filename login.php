<?php

if( isset( $_POST[ 'Login' ] ) ) {
    // Get username
    $user = $_POST[ 'username' ];

    // Get password
    $pass = $_POST[ 'password' ];


    if( $pass ==INTJ && $user==XIAOQIN) {


        // Login successful
        echo "<p>the flag is {i.am.interested.in.psychology}</p>";
    }
    else {
        // Login failed
        echo '
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">

				<p>			小秦最近对荣格类型学挺感兴趣的，然后通过一些测试确定了自己的性格类型。你能猜出来他的性格类型是什么吗？
				</p>
<!--DOU SHI DA XIE,YONG HU MING YI JING GEI NI LE-->
			</div>
		</div>
	</div>
</div>';
    }

}

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>mbti</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" method="post" action="login.php">
				<div class="form-group">
					<label for="exampleInputEmail1">
						Username
					</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>

				<button type="submit" class="btn btn-primary" value="Login" name="Login">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
';

?> 
