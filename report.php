<?php
session_start();
include 'database.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$username = $_SESSION['username'];
$date = date('Y-m-d');

// استعلام لجلب الأنشطة اليومية
$stmt = $conn->prepare("SELECT * FROM activities WHERE username = ? AND DATE(timestamp) = ?");
$stmt->bind_param("ss", $username, $date);
$stmt->execute();
$result = $stmt->get_result();

echo "<h1>تقرير الأنشطة لـ $username بتاريخ $date</h1>";
echo "<table border='1'>
<tr>
<th>الوقت</th>
<th>النشاط</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row['timestamp'] . "</td>
    <td>" . $row['action'] . "</td>
    </tr>";
}

echo "</table>";
?>