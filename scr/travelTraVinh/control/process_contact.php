<?php
session_start();
include 'db_connection.php'; // Kết nối cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Chuẩn bị câu lệnh SQL
    $sql = "INSERT INTO lienhe (ho_ten, email, so_dien_thoai, noi_dung) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Gán tham số và thực thi
        $stmt->bind_param("ssss", $name, $email, $phone, $message);
        if ($stmt->execute()) {
            $_SESSION['status_message'] = 'Thông tin đã được gửi thành công!';
            $_SESSION['status_type'] = 'success';
        } else {
            $_SESSION['status_message'] = 'Có lỗi xảy ra. Vui lòng thử lại.';
            $_SESSION['status_type'] = 'error';
        }
        $stmt->close();
    } else {
        $_SESSION['status_message'] = 'Không thể chuẩn bị câu lệnh. Vui lòng thử lại.';
        $_SESSION['status_type'] = 'error';
    }
    $conn->close();

    // Quay lại trang liên hệ
    header('Location: contact.php');
    exit;
}
?>
