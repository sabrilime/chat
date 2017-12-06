<?php
/**
 * Created by PhpStorm.
 * User: sabri
 * Date: 06/12/2017
 * Time: 11:45
 */



//Getting the parameters from URL.
if(isset($_GET['params'])) {
    $paramsRawUnfiltered = $_GET['params'];
    $paramsRawUnfiltered = strip_tags($paramsRawUnfiltered);
    $paramsRaw = explode( "/", $paramsRawUnfiltered); //Converting parameters to array.

    //Reading the parameter values, splitting them to controller, function and arguments.
    if(count($paramsRaw) >= 0) $controller = $paramsRaw[0];
    if(count($paramsRaw) > 1) $func = $paramsRaw[1];
    if(count($paramsRaw) > 1)  {
        for($i = 2; $i < count($paramsRaw); $i+=2) {
            $params[] = $paramsRaw[$i+1];
        }
    }
}