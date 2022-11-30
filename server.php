<?php

$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

//POST OPERATION
if (isset($_POST["newTask"])) {
    //Add new task
    $todos[] =  [
        "text" => $_POST["newTask"],
        "done" => false,
    ];
    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["indexToggle"])) {
    //Toggle done or not done
    $todoIndex = $_POST["indexToggle"];
    $todos[$todoIndex]["done"] = !$todos[$todoIndex]["done"];
    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["indexCancel"])) {
    //Cancel element
    $todoIndex = $_POST["indexCancel"];
    array_splice($todos, $todoIndex, 1);
    file_put_contents("todo.json", json_encode($todos));
}


//To json
header("Content-Type: application/json");
echo json_encode($todos);
