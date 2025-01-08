<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discover Tra Vinh</title>
    <link rel="icon" href="./upload/logotravinh.jpg">
    <link rel="stylesheet" href="./include/fontawesome/css/all.css">
    <link rel="stylesheet" href="./include/style/bootstrap.css">
    <link rel="stylesheet" href="include/mystyle45646.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <?php session_start(); ?>
    <style>
        body {
            background-image: url('../upload/gt12.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: 'Times New Roman', Times, serif;
            color: #333;
        }
        .contact-header {
            text-align: center;
            margin: 40px 0;
        }
        .contact-header p {
            margin: 10px 0;
        }
        .contact-header h1 {
            font-size: 60px;
            color: #000;
        }
        .contact-header h2 {
            font-size: 40px;
            font-weight: 400;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 700px;
            margin: 40px auto;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #2980b9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }
        .form-group input:focus, 
        .form-group textarea:focus {
            border-color: #2980b9;
            outline: none;
        }
        .form-container button {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #2980b9;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        .form-container button:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>
    <?php require_once "./view/header.html"; ?>

    <div class="contact-header">
        <h1>Liên Hệ Hotline</h1>
        <h2>Hứa Phước Lâm - DA21TTB</h2>
        <p>Email: huaphuoclam120@gmail.com</p>
        <p>Phone: 0397291305</p>
        <p>Zalo: 0397291305</p>
        <p>Address: Đại học Trà Vinh - TVU</p>
    </div>

    <div class="form-container">
        <h2>Gửi Thông Tin Liên Hệ</h2>
        <form action="process_contact.php" method="post">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ và tên" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" required>
            </div>
            <div class="form-group">
                <label for="message">Nội dung liên hệ:</label>
                <textarea id="message" name="message" rows="5" placeholder="Nhập nội dung liên hệ" required></textarea>
            </div>
            <button type="submit">Gửi Thông Tin</button>
        </form>
    </div>
    

    <?php require_once "./view/footer.php"; ?>
</body>
</html>
