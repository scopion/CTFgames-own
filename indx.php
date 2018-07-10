<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.14.0</center>
<!--need key,get key,?key=-->
</body>
</html>

<?php
header('HTTP/1.1 404 Not Found');
header("key: bazinga");
?>

<?php

if( isset( $_GET[ 'key' ] ) ) {
    // Get username
    $key = $_GET[ 'key' ];

    if( $key ==bazinga) {

        // Login successful
        echo "<p>the flag is {come.and.play.with.me!}</p>";
    }
    else {
        // Login failed
        echo '
where is the key?
		';
    }

}
?>
