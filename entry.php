<?php

header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$inputString = substr($_SERVER['REQUEST_URI'],1);
putenv('LANG=ru_RU.UTF-8');
exec(
    'cd /home/pavel/projects/JavaSudokuSolverAPI/out/artifacts/JavaSudokuSolverAPI_jar && java -jar JavaSudokuSolverAPI.jar '.$inputString,
    $output
);

var_dump($output);