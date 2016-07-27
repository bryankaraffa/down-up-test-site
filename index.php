<?php
//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
$time = time();
if ($time /60 % 60 % 5) {
        http_response_code(403);
        echo "Forbidden";
}
else {
      	echo "OK";
}
?>
