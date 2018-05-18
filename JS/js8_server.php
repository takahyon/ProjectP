<?php

$jsonUrl = "addresses.json";

if (file_exists($jsonUrl)) {
    $json = file_get_contents($jsonUrl);
    echo $json;
}
?>
