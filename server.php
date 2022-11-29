<?php
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

// $array_debug = ['a', 'b', 'c'];


//To json
header("Content-Type: application/json");
echo json_encode($todos);
