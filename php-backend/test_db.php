<?php
header('Content-Type: text/html; charset=utf-8');

require_once(dirname(__FILE__) . "/config/database.php");
$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "✅ Kết nối CSDL thành công!";
} else {
    echo "❌ Kết nối thất bại!";
} 'dirname(__FILE__) thực thi: ';
var_dump(dirname(__FILE__));
echo '<br>Đường dẫn kiểm tra thực thi: ';
var_dump(dirname(__FILE__) . '/config/database.php');
echo '<br>';
if (!file_exists(__DIR__ . '/config/database.php')) {
    echo "Không tìm thấy file database.php tại: " . (__DIR__ . '/config/database.php');
    exit;
}
require_once(__DIR__ . '/config/database.php');

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "✅ Kết nối CSDL thành công!";
} else {
    echo "❌ Kết nối thất bại!";
}
