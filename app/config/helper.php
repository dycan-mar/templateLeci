<?php
$url_absolute = "http://localhost/templateProject/leci/";
function asset($location)
{
    global $url_absolute;
    return $url_absolute . 'assets/' . $location;
}
function url($location)
{
    global $url_absolute;
    return $url_absolute . "public/views/" . $location . ".php";
}
function system($location, $params = [])
{
    global $url_absolute;
    return $url_absolute . "app/system/" . $location . ".php" . $params;
}
