<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('pdo.php');



$title = $_POST['title'] ?? '';
$url = $_POST['url'] ?? '';
$comment = $_POST['comment'] ?? '';

$sql = "INSERT INTO bookmark_table (title, url, comment, indate) VALUES (:title, :url, :comment, NOW())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status === false) {
    exit('登録失敗: ' . print_r($stmt->errorInfo(), true));
} else {
    header('Location: select.php');
    exit();
}
?>
