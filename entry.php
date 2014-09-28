<?php
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$jarFileName = 'javasudokusolverapi.jar';

$inputString = substr($_SERVER['REQUEST_URI'],1);
putenv('LANG=ru_RU.UTF-8');
exec(
    "java -jar $jarFileName ".$inputString,
    $output
);

foreach ($output as $row) {
    echo $row;
}