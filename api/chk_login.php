<!-- 判斷登入帳號是否正確 -->
<?php
include_once "base.php";

$chk=$Admin->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]); //計算的長度, 為id, ['帳號'為=>POST[進來的帳號]....]
if($chk>0){ // 若該變數大於零時 執行
    $_SESSION['user']=1; // SESSION 賦值1(true)
    to("../index.php"); // 導引到後台
}else{
?>

<script>
    alert("帳號或密碼錯誤");
    // to("../index.php"); // script不能用php的function, 改用下述
    location.href="../index.php";
</script>

<?php
}
?>
