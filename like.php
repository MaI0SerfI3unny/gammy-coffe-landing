<?php
require "./connector.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');
    $decodedData = json_decode($postData, true);

    $id = $decodedData['commentId'];
    $type = $decodedData['typeLike']; 

    $sqlSelect = "SELECT * FROM `comments` WHERE id = ?";
    $stmtSelect = $conn->prepare($sqlSelect);
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $resultSelect = $stmtSelect->get_result();

    if ($resultSelect->num_rows > 0) {
        $row = $resultSelect->fetch_assoc();
        $currentCount = $type ? $row['yesCount'] : $row['noCount'];

        $newCount = $currentCount + 1;

        // Use prepared statement for the update query
        $sqlUpdate = "UPDATE comments SET " . ($type ? "yesCount" : "noCount") . " = ? WHERE id = ?";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $stmtUpdate->bind_param("ii", $newCount, $id);
        $stmtUpdate->execute();
    }

    http_response_code(200);
    $response = ['status' => 200, 'message' => $type];
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
