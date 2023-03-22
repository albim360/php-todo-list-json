<?php 

$todo_string = file_get_contents('./todo.json');

header('Content-Type: application/json');

$todo_list = json_decode($todo_string, true);

echo $todo_string;

?>