<?php
$file = file_get_contents(__DIR__ . "/todolist.txt");
$tasks = explode(",", $file);
foreach ($tasks as $key => $task) {
    echo nl2br("Task number $key: $task \n");
}
