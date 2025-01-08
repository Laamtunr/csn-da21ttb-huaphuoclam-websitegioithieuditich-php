  <style>
      .fa{
          font-size: 23px;
          transition-duration: 1s;
      }
      .fa:hover{
          color: #6f42c1;
          transition-duration: 1s;
      }

  </style>
<div class="footer">
   <br><br>
       <div style="height: 30px; ">
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100016129441796&mibextid=LQQJ4d"><i   class="fa fa-facebook"></i></a>
        <a target="_blank" href=""><i class="fa fa-twitter"></i></a>
        <a target="_blank" href="https://www.youtube.com/@phuoclamhua4343"><i class="fa fa-youtube"></i></a>
        <a target="_blank" href="https://www.instagram.com/hpl.1353/"><i class="fa fa-instagram"></i></a>
       </div>
       <br>
       <p style="color: #ccc;">Hứa Phước Lâm - DA21TTB</p>
       <p style="color: #ccc;">110121047 - TVU </p>
       <div style="height: 20px;">
   </div>
   <div style="position: fixed; right: 10px; bottom: 10px;">
            <?php
                if(isset($_SESSION['email']))  echo '<a href="./account.php">
                <img id="iconlogin-accout" src="./upload/accout.png" class="img-login-accout" alt="Login">
            </a>';
                else echo '<a href="./login.php">
                <img id="iconlogin-accout" src="./upload/loginicon.jpg" class="img-login-accout" alt="Login">
            </a>';
            ?>
    </div>
   </div>