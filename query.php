<?php

$sql_get_comment = "SELECT * FROM comments LEFT JOIN marks ON comments.id = marks.commentId ORDER BY comments.id DESC;";
$sql_get_mark = "SELECT * FROM `marks`";
$sql_create_comment = "INSERT INTO `comments` (`id`, `name`, `surname`, `message`, `yesCount`, `noCount`, `createdAt`, `updatedAt`) VALUES (NULL, ?, ?, ?, '0', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
$sql_create_mark = "INSERT INTO `marks` (`id`, `value`, `createdAt`, `updatedAt`, `commentId`) VALUES (NULL, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, ?)";
