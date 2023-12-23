<?php
require './connector.php';
require './query.php';

$result_mark = $conn->query($sql_get_comment);

$data = [];
while ($row = $result_mark->fetch_assoc()) {
    $data[] = $row;
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$pageSize = 3;

$startIndex = ($page - 1) * $pageSize;
$endIndex = $startIndex + $pageSize - 1;
$totalItems = count($data);

// Получение данных для текущей страницы
$pagedData = array_slice($data, $startIndex, $pageSize);

// Формирование JSON-ответа
$response = [
    'data' => $data,
];

// Send the JSON response without additional debug information
header('Content-Type: application/json');
echo json_encode($response);
?>

