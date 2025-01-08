<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Kiểm tra dữ liệu
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Vui lòng điền đầy đủ thông tin.";
        exit;
    }

    // Gửi email
    $to = "admin@example.com"; // Email quản trị
    $subject = "Liên hệ từ $name";
    $body = "Họ và tên: $name\nEmail: $email\nSố điện thoại: $phone\nNội dung:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thông tin đã được gửi thành công. Cảm ơn bạn đã liên hệ với chúng tôi!</h2>";
    } else {
        echo "<h2>Đã xảy ra lỗi khi gửi thông tin. Vui lòng thử lại sau.</h2>";
    }

    // (Tùy chọn) Lưu dữ liệu vào cơ sở dữ liệu
    // Kết nối cơ sở dữ liệu (MySQL)
    // $conn = new mysqli("localhost", "root", "", "contact_db");
    // if ($conn->connect_error) {
    //     die("Kết nối thất bại: " . $conn->connect_error);
    // }
    // $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "<h2>Thông tin đã được lưu thành công.</h2>";
    // } else {
    //     echo "Lỗi: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();
} else {
    echo "Phương thức không hợp lệ.";
}
?>
