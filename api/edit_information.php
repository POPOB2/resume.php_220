<?php
include_once "./base.php";
// $_FILES[傳過來的東西(格式)],['tmp_name']==暫存的陣列名稱
// if(!empty($_FILES['img'])){
  if(isset($_FILES['img']['tmp_name'])){
      move_uploaded_file($_FILES['img']['tmp_name'],"../assets/img/".$_FILES['img']['name']);// 此name為確實檔名
      $data['img']=$_FILES['img']['name']; // 把檔案處理成檔名
  }
// }else{

// }




//編輯和刪除,依據$_POST['id']

if(!empty($_POST['id'])){
  foreach ($_POST['id'] as $idx => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){ // 查看是否有POST傳值過來的del 且 是否為陣列($id為內容,$_POST[del]為????) 若皆為true
    $Information->del($id); // $Information(DB)->執行刪除function(目標為foreach的$id)
    }else{
    $row=$Information->find($id); // 將$row設為該DB->查詢單筆($id)  
    
    $row['img']=$data['img'];
    $row['text']=$_POST['text'][$idx]; // 此處的POST為baack/information的name=名[]傳過來的內容
    $row['name']=$_POST['name'][$idx];
    $row['birthday']=$_POST['birthday'][$idx];
    $row['website']=$_POST['website'][$idx];
    $row['phone']=$_POST['phone'][$idx];
    $row['city']=$_POST['city'][$idx];
    $row['age']=$_POST['age'][$idx];
    $row['mastery']=$_POST['mastery'][$idx];
    $row['email']=$_POST['email'][$idx];
    $Information->save($row); // 更新後儲存, 此$row為當初find的指定的那筆資料
    }
  }
}

to("../index.php");
?>