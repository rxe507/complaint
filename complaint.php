<<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "complaint";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// حفظ المعلومات المدخلة في النموذج في قاعدة البيانات
if (isset($_POST['id-number']) && isset($_POST['phone-number']) && isset($_POST['complaint'])) {
    $id_number = $_POST['id-number'];
    $phone_number = $_POST['phone-number'];
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO complaints (id_number, phone_number, complaint) VALUES ('$id_number', '$phone_number', '$complaint')";

    if ($conn->query($sql) === TRUE) {
        echo "تم تقديم الشكوى بنجاح";
    } else {
        echo "خطأ في تقديم الشكوى: " . $conn->error;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>