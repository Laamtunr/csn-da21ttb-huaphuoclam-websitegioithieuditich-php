<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Discover Tra Vinh</title>
        <script src="include/script/ckeditorbasic/ckeditor.js"></script>
        <link rel="icon" href="./upload/logotravinh.jpg">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>


        <?php session_start(); ?>
        <style>
            body{
                background: #f8f8f8;
            }
            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
            td, tr{
                padding-top: 15px;
            }
            
            .rating {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.fa-star {
    font-size: 24px;
    color: #808080;
    cursor: pointer;
}

.fa-star.checked {
    color: #DAA520; /* Màu vàng cho phần đã chọn */
}

.fa-star:hover {
    color: #DAA520; /* Màu vàng khi di chuột qua */
}

        </style>
        <script>
$(document).ready(function(){
    $(".rating span").click(function(){
        // Đặt lại màu sắc cho tất cả các sao về màu trắng
        $(".rating span").removeClass("checked");

        // Lặp qua tất cả các sao đến vị trí được click và đánh dấu là đã chọn
        $(this).prevAll().addBack().addClass("checked");
    });
});
</script>
        
    

    </head>
    <body style="background: #ddd;">
        
    <?php require_once "./view/header.html" ?>

    <div class="container" >
    <br>
    <h1 style="color: #DAA520;">	

    <?php
    require_once './module/travelPost.php';
         $getClass = new travelPost();
         $getidtravle = $_GET['id'];
         $getdata = $getClass->getTravelviewingByID($getidtravle);
         $getListcmt =  $getClass->getListcomment($getidtravle);
        $id = $_GET['id'];
         if(isset($_POST['cmt'])){
            $email = $_SESSION['email'];
            $post=$_GET['id'];
            $cmt = $_POST['cmt'];
            $access = $getClass->addcomment($email,$post,$cmt);
            unset($_POST['cmt']);
            echo '<script>window.location="./travelviewing.php?id='.$id.'";</script>';
        }

        if ($getListcmt!=false) $getCount = sizeof($getListcmt);
        else $getCount=0;

        $getClass->dieconnect();

       

    ?>

<?php echo $getdata[4]; ?></h1>
<br><br>
<div class="row">
            <div class="col-8">

            <div id="mycarousel" class="carousel slide" data-ride="carousel">

<!--Cho hiện thị chỉ số nếu muốn-->
<ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
</ol>
<!--Hết tạo chỉ số-->

<!--Các slide bên trong carousel-inner-->
<div class="carousel-inner">

    <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
    <div class="carousel-item active">
        <img class="d-block w-100" style="width: 100%; height:400px; "  src="<?php echo $getdata[1]; ?>">

    </div>

    <!--Slide 2-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[2]; ?>">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[3]; ?>">
    </div>

</div>

<script>
    $(document).ready(function(){
        // Lấy ra carousel
        var myCarousel = $("#mycarousel");

        // Thiết lập sự kiện tự động chuyển slide sau mỗi 2 giây
        setInterval(function(){
            myCarousel.carousel('next');
        }, 2000); // Đổi số 2000 thành số mili giây bạn muốn giữa các lần chuyển đổi
    });
</script>

<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
<!--Hết tạo điều khiển chuyển Slide-->

</div>

<!--Het-->
            </div>
            <div class="col-4"  style="background: #eee;">
                <h3 style="color: #CD5555;">Thông Tin Về Điểm Đến</h3>
                <table>
                <tr>
                <tr>
                                                        <td><i class=""></i></td>
                                                        <td style="padding-left: 10px;"><b>Vị trí: </b><span style="color:  #ff9900;"><?php echo $getdata[6]; ?></span></td>
                                                    </tr>
                                                    
                                                        <tr>
                                                            <td> <i class=""></i></td>
                                                            <td style="padding-left: 10px;"><b>Đặc điểm: </b> <span style="color:  #ff9900;"><?php echo $getdata[9]; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                                <td> <i class=""></i></td>
                                                                <td style="padding-left: 10px;"><b>Diện tích: </b><span style="color:  #ff9900;"><?php echo $getdata[10]; ?></span></td>
                                                            </tr>
                                                            
                </table>
                <div style=" font-weight: 500;background: #f57d00; text-align:center; position:absolute; bottom:20px; width:92%; height:40px; color:#eee; line-height:40px;">
                    <span> <?php echo $getdata[12]; ?></span>
                </div>
            </div>
        </div>
        <br>

        <!--talk about-->
        <div style="background: #eee; padding:15px">
            <h3>Di tích lịch sử Trà Vinh</h3>
            <p>
             <?php echo $getdata[5]; ?>
            </p>
        </div>
            <br>
        <div style="background: #eee; padding:15px">
        <h2>Bình luận</h2>

                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div style="width: 100%; border-radius: 3px; padding: 10px">
                    <!-- Nội dung comment -->
                </div>
                   
                    
                       <?php if(isset($_SESSION['email'])) echo ' <form method="post">
                            <input type="text" name="cmt" id="cmt" class="form-control" style="width: 100%; height: 50px">
                            <div style="text-align: right; margin-top: 15px">
                            <button class="btn btn-secondary">Comment</button> </div>
                        </form>
                       ';

                        else {
                            echo '<span>Please <a href="./login.php">login</a> to comment !!</span>';
                        }
                       ?>

                        <hr>
                        <span style="font-size: 13px; margin-left:10px; position:relative; top:-20px;">Have all <?php echo $getCount ?> comments</span>

                     <?php

                            $dem=0;
                         while($dem++ < $getCount)  echo ' <div class="row" style="margin-top:10px">
                           <div class="col-1" style="text-align: center;">
                               <img class="imgicon-avatar-cmt" style="float:left; width:60px; border-radius:60px;"  src="./upload/unnamed.png">
                           </div>
                           <div class="col-11">
                               <span style="font-weight: 500">'.$getListcmt[$dem-1][1].'</span><br>
                               <span style="font-family: none;">'.$getListcmt[$dem-1][0].'</span>
                           </div>
                         </div>';
                        ?>
                    </div>

        </div>
    </div>
    <br><br>
    <?php require_once"./view/footer.php"; ?>
   
   </body>
   </html>
 