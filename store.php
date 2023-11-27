<?php

$new_task = $_POST['text'] ?? '';
$response = [];

if($new_task) {
    $todos_json = file_get_contents('./todos.json');
    $todosArray = json_decode($todos_json, true);

    $new_todoItem = [
        'text' => $new_task,
        'done' => false
    ];

    $todosArray[] = $new_task;
    $todos_json = json_encode($todosArray);
    file_put_contents('./todos.json', $todos_json);

    $response = [
        'success' => true,
        'results' => $todosArray
    ];

} else {
    $response = [
        'success' => false,
        'message' => 'Inserire una task!'
    ];
}

header('Content-Type: application/json');
echo json_encode($responde);