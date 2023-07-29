<?php
include('inc/connections.php');


if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استقبال البيانات المرسلة من النموذج
$id_number = isset($_POST['id_number']) ? $_POST['id_number'] : '';
$phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$complaint_text = isset($_POST['complaint_text']) ? $_POST['complaint_text'] : '';

// إدخال البيانات في جدول قاعدة البيانات
$sql = "INSERT INTO complaints (id_number, phone_number, complaint_text) VALUES ('$id_number', '$phone_number', '$complaint_text')";

if ($conn->query($sql) === TRUE) {
    echo "تم حفظ الشكوى بنجاح";
} else {
    echo "حدث خطأ أثناء حفظ الشكوى: " . $conn->error;
}



// إغلاق الاتصال بقاعدة البيانات
$conn->close();

