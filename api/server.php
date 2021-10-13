<?php

require __DIR__ . '/../utilities/database.php';

header('content-Type: application/json');

echo json_encode($db);

?>