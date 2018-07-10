<?php

if( isset( $_GET[ 'pcap' ] ) ) {
    // Get username
    $user = $_POST[ 'username' ];

    // Get password
    $pass = $_POST[ 'password' ];


    if( $pass ==wenyi && $user==xiaoqin) {


        // Login successful
        echo "<p>the flag is {the.Poetry.is.writen.by.ximurong.}</p>";
    }
    else {
        // Login failed
        echo '
what is pcap?download the poem！

		';
    }

}

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>pcap</title>

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
					青春
				</h2>
				<p>				所有的结局都已写好<br>
所有的泪水也都已启程            <br>
却忽然忘了是怎麽样的一个开始    <br>
在那个古老的不再回来的夏日      <br>
                                <br>
无论我如何地去追索              <br>
年轻的你只如云影掠过            <br>
而你微笑的面容极浅极淡          <br>
逐渐隐没在日落後的群岚          <br>
                                <br>
遂翻开那发黄的扉页              <br>
命运将它装订得极为拙劣          <br>
含著泪 我一读再读               <br>
却不得不承认                    <br>
青春是一本太仓促的书            <br>
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="src/poem.gz">READ MORE</a>
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

?> 
