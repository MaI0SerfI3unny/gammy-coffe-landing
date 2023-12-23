<?php 
require 'query.php';
require "./connector.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');
    $decodedData = json_decode($postData, true);

    $name = $decodedData['name'];
    $surname = $decodedData['surname'];
    $message = $decodedData['message'];
    $mark = $decodedData['mark'];

    $stmt = $conn->prepare($sql_create_comment);
    $stmt->bind_param("sss", $name, $surname, $message);
    $result_comment = $stmt->execute();

    if ($result_comment) {
        $commentId = $conn->insert_id;

        $stmt_mark = $conn->prepare($sql_create_mark);
        $stmt_mark->bind_param("ii", $mark, $commentId);
        $result_mark = $stmt_mark->execute();

        $stmt_mark->close();
    }

    http_response_code(200);
    $response = ['status' => 200, 'message' => "Comment was created"];
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
