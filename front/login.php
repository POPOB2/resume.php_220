<style>
  input{
    background: rgba(75, 75, 75);
    color: rgba(230,230,230);
    border-radius: 5px;
    padding: 0.1rem 0.5rem;
    margin: 0.5rem 0.1rem;
  }
  ::placeholder{
    color: rgba(230,230,230);
  }
  input:hover{
    background: rgba(100, 100, 100);
  }
  .log{
    background: rgba(50,180,50,0.8);
    color: rgba(255, 255, 255);
  }
  .log:hover{
    background: rgba(50,180,50);
  }
</style>
<div>
<form action="./api/chk_login.php" method="POST">
    <table>
        <tr>
            <td><input type="text" name="acc" placeholder="輸入帳號"></td>
        </tr>
        <tr>
            <td><input type="text" name="pw" placeholder="輸入密碼"></td>
        </tr>
    </table>

    <div>
        <input class="log" type="submit" value="登 入">
    </div>
</form>
</div>