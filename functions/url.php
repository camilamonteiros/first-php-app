<?php
function url_redirect($values = []){
    $buildQueryString = ($values);
    header('Location: http://localhost/first-php-app?'. $buildQueryString);
    exit;
}
?>