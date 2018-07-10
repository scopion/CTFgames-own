<?php

if( isset( $_POST[ 'Upload' ] ) ) {
    // Where are we going to be writing to?
    //$target_path  = DVWA_WEB_PAGE_TO_ROOT . "hackable/uploads/";
    //$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

    // File information
    $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
    //$uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
	$uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1); 
    //$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];

    // Is it an image?
	//echo ${uploaded_ext};
    if( strtolower( $uploaded_ext ) == php ) {

            echo '<pre>yes !you are very close.</pre>';

    }
	else if( strtolower( $uploaded_ext ) == handsome ) {

            echo '<pre>thank you !the flag is {yes!i.am.so.good.}</pre>';

    }
    else {
        // Invalid file
        echo '<pre>不行，我很不满意。我要最帅的那张。</pre>';
    } 
}

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>get a girl friend</title>

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
					照骗
				</h2>
				<p>
					我很努力的找自己的照片，想找出来最帅的一张当头像，你能帮我找一下吗？<br>
					记得用之前的技巧哟！
				</p>
				<!--yes,look every and very carefully!-->
			<form action="handsome.php" method="post" enctype="multipart/form-data" role="form">


				<div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input name="uploaded" type="file" class="form-control-file" id="exampleInputFile" />

				</div>

				<button name="Upload" value="Upload" type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
			</div>

		</div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>