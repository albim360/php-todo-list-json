<?php

$todo_string = file_get_contents('./todo.json');

$todo_list = json_decode($todo_string, true);

$new_todo = isset($_POST['todo']) ? $_POST['todo'] : null;
$response = [
    'text' => $new_todo,
    'done' => true
];


if ($new_todo !== null) {
  $todo_list[] = $response;
}

$new_array_string = json_encode($todo_list);
file_put_contents('./todo.json', $new_array_string);


header('Content-Type: application/json');
echo $new_array_string;