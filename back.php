
<!-- <div class="row" style="border:1px solid red"> -->
<div class="row">
        <div  class="col-lg-4 col-md-6 d-flex align-items-stretch" style="position:relative;">
                <?php
                if(isset($_SESSION['user'])){
                ?>
                <!-- <a href="./api/logout.php" style="border:1px solid red; position:absolute; position:fixed; left:81%;">登出</a> -->
                <a href="./api/logout.php" style="position:absolute; position:fixed; left:81%;">登出</a>
                <?php
                }else{
                ?>
                <a href="index.php">登入</a>
                <?php
                }
                ?>
        </div>

        <!-- 引入後台變更資訊的區塊 -->
        <?php
        include "./back/information.php"
        ?>

</div>



