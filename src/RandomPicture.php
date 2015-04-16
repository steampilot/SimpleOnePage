<?php
/**
 * Created by PhpStorm.
 * User: jerome.roethlisberge
 * Date: 16.04.2015
 * Time: 11:17
 */
$pictures = array();
if ($handle = opendir( $randomBannerDir)) {
    /* Das ist der korrekte Weg, ein Verzeichnis zu durchlaufen. */
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            array_push($pictures,$entry);
         }
    }
    closedir($handle);
}
$i = rand(0, count($pictures)-1);
$picture_url = $randomBannerDir . "/" . $pictures[$i];
?>
