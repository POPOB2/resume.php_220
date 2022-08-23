<style>
  input,textarea{
    background: rgba(75, 75, 75);
    color: rgba(230,230,230);
    border-radius: 5px;
    padding: 0.1rem 0.5rem;
  }
  textarea{
    padding: 0.5rem 0.5rem;
  }
  input:hover{
    background: rgba(100, 100, 100);
  }
  textarea:hover{
    background: rgba(100, 100, 100);
  }
</style>

<form action="./api/edit_information.php" method="post" enctype="multipart/form-data">
  <table width="100%">
    <tbody>
    <?php
    $rows=$Information->all();
    foreach($rows as $row){
    ?>
    <div class="about-me container">
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/<?=$row['img'];?>" class="img-fluid">
            <!-- 上傳圖片的表單 -->
            <input type="file" name="img">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>網頁設計_開發人員</h3>
          <p class="fst-italic">
          </p>
          <div class="row">
            <div class="col-lg-6" >
              <ul style="width:25rem">              
                <li><i class="bi bi-chevron-right"></i> <strong>姓名 : </strong> <span><input type="text" name="name[]" value="<?=$row['name'];?>"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>生日 : </strong> <span><input type="text" name="birthday[]" value="<?=$row['birthday'];?>"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>網站 : </strong> <span><input type="text" name="website[]" value="<?=$row['website'];?>"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>電話 : </strong> <span><input type="text" name="phone[]" value="<?=$row['phone'];?>"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>城市 : </strong> <span><input type="text" name="city[]" value="<?=$row['city'];?>"></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul style="width:25rem">
                <li><i class="bi bi-chevron-right"></i> <strong>年齡 : </strong> <span><input type="text" name="age[]" value="<?=$row['age'];?>"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>程度 : </strong> <span><input type="text" name="mastery[]" value="<?=$row['mastery'];?>"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>信箱 : </strong> <span><input type="text" name="email[]" value="<?=$row['email'];?>"></span></li>
              </ul>
            </div>
          </div>
          <div style="width:45rem; height:15rem;" > &nbsp;自我介紹 : <br><br>
            <!-- <input type="text" name="text[]" value="< ?=$row['text'];?>" style="width:100%; height:100%; border:1px solid orange;"> -->
            <!-- input用於單行, 就算更改寬高還是只有單行, 所以這裡改用textarea -->
            <textarea  style="width:100%; height:80%;" name="text[]"><?=$row['text'];?></textarea>
          </div>
        </div>
      </div>
      
    </div>
<!-- --------------------------------------用於隱密傳值---------------------------------------------- -->
<input type="hidden" name="id[]" value="<?=$row['id'];?>">
    <?php 
    }
    ?>
    </tbody>
  </table>
  <div style="text-align:center">
    <!-- 傳值給table 值為Information -->
    <input type="hidden" name="table" value="Information">
    <input type="submit" value="確定更改" style="margin-left:3rem">
    <input type="reset" value="重置" style="margin-left:3rem">
  </div>
  <input type="hidden" name="table" value="Information">
<!-- ------------------------------------------------------------------------------------ -->
</form>


<!-- </section> -->