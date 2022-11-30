<?php
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);


if (isset($_POST["newTask"])) {
    $todos[] =  [
        "text" => $_POST["newTask"],
        "done" => false,
    ];
    file_put_contents("todo.json", json_encode($todos));
}

//To json
header("Content-Type: application/json");
echo json_encode($todos);
