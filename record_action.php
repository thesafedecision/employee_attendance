<?php
session_start();
include 'database.php';

if (isset($_SESSION['username']) && isset($_POST['action'])) {
    $username = $_SESSION['username'];
    $action = $_POST['action'];
    $timestamp = date('Y-m-d H:i:s');

    // تخزين النشاط في قاعدة البيانات
    $stmt = $conn->prepare("INSERT INTO activities (username, action, timestamp) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $action, $timestamp);
    $stmt->execute();
}
?>