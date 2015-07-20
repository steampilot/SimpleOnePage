<?php
/**
 * Created by PhpStorm.
 * User: jerome.roethlisberge
 * Date: 16.04.2015
 * Time: 11:17
 */

function getRandomBanner($path = "assets/img/random_banner")
{
    $randomBanner = $path . "/";
    $pictures = array();
    if ($handle = opendir( $path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                array_push($pictures,$entry);
            }
        }
        closedir($handle);
    }
    $i = rand(0, count($pictures)-1);
    $randomBanner = $randomBanner . $pictures[$i];
    return $randomBanner;
}


