<!DOCTYPE html>
<html>
<head>
    <script src="include/script/ckeditorbasic/ckeditor.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welecom to TraVinh</title>
    <link rel="icon" href="./upload/logotravinh.jpg">
    <link rel="stylesheet" href="./include/fontawesome/css/all.css">
    <link rel="stylesheet" href="./include/style/bootstrap.css">
    <link rel="stylesheet" href="include/mystyle45646.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php session_start(); ?>
    <style>
        body {
            background-image: url('../upload/gt12.jpg');
        }

        .rating {
            display: flex;
            align-items: center;
        }

        .fa-star {
            font-size: 24px;
            color: #C0C0C0;
            cursor: pointer;
        }

        .fa-star.checked {
            color: #ffcc00;
        }

        h3 {
            color: #000;
        }
    </style>
</head>
<body>

<?php require_once "./view/header.html" ?>
<?php
require_once "./module/ClassPosts.php";
$Posts = new ClassPosts();
$getlistpost = $Posts->getlistTitleAndAvatar();
$id = $_GET['id'];
$gettposttitle = $Posts->getPostTitle($id);
$gettpost = $Posts->getPostContent($id);
$getListcmt = $Posts->getListcomment($id);
if (isset($_POST['cmt'])) {
    $email = $_SESSION['email'];
    $post = $_GET['id'];
    $cmt = $_POST['cmt'];
    $access = $Posts->addcomment($email, $post, $cmt);
    unset($_POST['cmt']);
    echo '<script>window.location="./post.php?id=' . $id . '";</script>';
}
if ($getListcmt != false) $getCount = sizeof($getListcmt);
else $getCount = 0;
$Posts->closeConect();
?>

<div class="article-composition">
    <div class="container">
        <div class="row">
            <div class="col-9">

                <p style="color:#000;font-family: 'ZCOOL QingKe HuangYou', cursive; font-weight:500; font-size:38px; ">
                    <?php echo $gettposttitle; ?> </p>

                <?php
                echo $gettpost;
                ?>

                <div style="height: 3px; width: 100%; background: #333; margin-top: 60px;"></div>
                <h2>Phần Bình Luận</h2>
                <h3>Đánh giá</h3>
                <div class="rating">
                    <span class="fa fa-star checked" onclick="rateStar(1)"></span>
                    <span class="fa fa-star checked" onclick="rateStar(2)"></span>
                    <span class="fa fa-star checked" onclick="rateStar(3)"></span>
                    <span class="fa fa-star checked" onclick="rateStar(4)"></span>
                    <span class="fa fa-star checked" onclick="rateStar(5)"></span>
                </div>

                <div style="width: 100%;  background: #f8f8f8; border-radius: 3px; padding: 10px">
                    <?php if (isset($_SESSION['email'])) echo ' <form method="post">
                            <textarea name="cmt" id="cmt" style=" "></textarea>
                            <div style="text-align: right; margin-top: 15px">
                            <button class="btn btn-secondary">Comment</button> </div>
                        </form>
                        <script> CKEDITOR.replace(\'cmt\');</script>';
                    else {
                        echo '<span>Please <a href="./login.php">login</a> to comment !!</span>';
                    }
                    ?>

                    <hr>
                    <span style="font-size: 13px; margin-left:10px; position:relative; top:-20px;">Có tất cả <?php echo $getCount ?> bình luận </span>

                    <?php
                    $dem = 0;
                    while ($dem++ < $getCount) echo ' <div class="row" style="margin-top:10px">
                           <div class="col-1" style="text-align: center;">
                               <img class="imgicon-avatar-cmt" style="float:left; width:60px; border-radius:60px;"  src="./upload/unnamed.png">
                           </div>
                           <div class="col-11">
                               <span style="font-weight: 500">' . $getListcmt[$dem - 1][1] . '</span><br>
                               <span style="font-family: none;">' . $getListcmt[$dem - 1][0] . '</span>
                           </div>
                         </div>';
                    ?>
                </div>
            </div>
            <div class="col-3" style="background: #ccc;">

                <p style="font-size: 25px;">Bài viết liên quan</p>
                <hr>

                <?php

                $sumcount = sizeof($getlistpost);
                $count = 0;

                while ($count < $sumcount && $count < 6) {
                    echo '<a href="./post.html">
                    <table class="box-posts">
                        <tr style="width: 100%;">
                            <td style="width: 100%;">
                                <img style="width: 100%; height:300px" src="' . $getlistpost[$count][2] . '">
                            </td>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="width: 100%;">
                                <div style="height: 100%;  line-height:80% ; ">
                                    <h3 style="margin-top: 55px;">' . $getlistpost[$count][1] . '</h3>
                                </div>
                            </td>
                        </tr>
                    </table>
                  </a>';
                    $count++;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php require_once"./view/footer.php"; ?>

<script>
    function rateStar(starCount) {
        var stars = document.getElementsByClassName('fa-star');
        for (var i = 0; i < stars.length; i++) {
            if (i < starCount) {
                stars[i].classList.add('checked');
            } else {
                stars[i].classList.remove('checked');
            }
        }
    }
</script>

</body>
</html>
