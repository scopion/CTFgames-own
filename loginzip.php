<?php

if( isset( $_GET[ 'Login' ] ) ) {
    // Get username
    $key = $_GET[ 'key' ];

    // Get password
    //$pass = $_POST[ 'password' ];


    if( $key ==gaihouzhui) {


        // Login successful
        echo "<p>the flag is {this.trick.will.use.again}</p>";
    }
    else {
        // Login failed
        echo '
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">

				<p>			always check the sourcecode!
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="src/key">READ MORE</a>
				</p>
				<!--当文件没有后缀，你要怎么办？-->

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

    <title>zip</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" method="get" action="loginzip.php">
				<div class="form-group">
					<label for="exampleInputEmail1">
						key
					</label>
					<input type="text" class="form-control" id="key" name="key">
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
