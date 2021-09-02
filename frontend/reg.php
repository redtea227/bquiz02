<fieldset>
  <legend>會員註冊</legend>
  <div style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</div>
  <form>
    <table>
      <tr>
        <td class="clo">帳號:</td>
        <td><input type="text" name="acc" id="acc"></td>
      </tr>
      <tr>
        <td class="clo">密碼:</td>
        <td><input type="text" name="pw" id="pw"></td>
      </tr>
      <tr>
        <td class="clo">確認密碼:</td>
        <td><input type="text" name="pw2" id="pw2"></td>
      </tr>
      <tr>
        <td class="clo">信箱:</td>
        <td><input type="text" name="email" id="email"></td>
      </tr>
      <tr>
        <td>
          <input type="button" value="註冊" onclick="reg()">
          <input type="reset" value="清除">
        </td>
        <td></td>
      </tr>
    </table>
  </form>
</fieldset>

<script>
  function reg(){
    let acc = $("#acc").val();
    let pw = $("#pw").val();
    let pw2 = $("#pw2").val();
    let email = $("#email").val();

    if(acc == "" || pw == "" || pw2 == "" || email == ""){
      alert("不可空白");
    }else if (pw != pw2){
      alert("密碼錯誤")
    }else{
      $.get("api/chk_acc.php",{acc},(res)=>{
        if(res == "1"){
          alert("帳號重複")
        }else{
          $.post("api/save_reg.php",{acc,pw,email},(chk)=>{
            if(chk == "1"){
              alert("註冊完成,歡迎加入")
            }else{
              alert("註冊失敗")
            }
          })
        }
      })
    }
  }
</script>