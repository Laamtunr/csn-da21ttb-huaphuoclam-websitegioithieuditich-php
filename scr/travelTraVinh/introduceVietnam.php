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
        <?php session_start(); ?>
        <style>
            body{
                background-image: url('../upload/gt12.jpg');
            }
            
    
        </style>
     

    </head>
    <body>
     
    

    
    <?php require_once "./view/header.html" ?>

    
    


   <div class="article-composition">
        <div class="container">

            <table style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                    <p style="color:#111;font-family: 'ZCOOL QingKe HuangYou', cursive; font-weight:500; font-size:35px; "></p>
                </td>
                   
                </tr>
            </table>
           <?php
            require_once "./module/ClassPosts.php";
             $getlistpost  = new ClassPosts();
             $getlistpost  = $getlistpost ->getlistTitleAndAvatar();
             $sumcount = sizeof( $getlistpost);
             $count = 0;
             while($count < $sumcount){
                    echo '<a href="./post.php?id='.$getlistpost[$count][0].'">
                    
                    <table class="box-posts">
                    
                            
                           <tr style="width: 100%;">
                           
                               <td style="width: 35%;">
                                 <img style="width: 100%; height:350px" src="'.$getlistpost[$count][2].'">
                               </td>
                               
                               <td style="width: 5%;"></td>
                               <td style="width: 60%;">
                                   <div style="height: 70%;  line-height:80% ; ">
                                       <h1 style="margin-top: 55px;">
                                       '.$getlistpost[$count][1].'
                                       </h1>
                                   </div>
                                   <hr>
                                   <div style="height: 30%; color:#000">
                                      posted by <b style="margin-left:4px;">Admin</b>
                                      
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


   <?php require_once "./view/footer.php"; ?>
   
</body>
</html>