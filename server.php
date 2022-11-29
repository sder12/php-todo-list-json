<?php
$array_debug = ['a', 'b', 'c'];

header("Content-Type: application/json");
echo json_encode($array_debug);
