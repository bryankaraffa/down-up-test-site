<?php
$time = time();
if ($time /60 % 60 % 5) {
        http_response_code(403);
}
else {
        echo "OK";
}
?>