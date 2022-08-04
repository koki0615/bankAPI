<?php 
namespace view\register;

function index() {
?>
<h1 class="sr-only">住人登録</h1>
<div class="container">
    <div class="page-lock">
        <div class="">
          <h2>居住者登録フォーム</h2>
        </div>
        
        <div class="login-form bg-white p-4 shadow-sm mx-auto rounded">
          <form action="<?php echo CURRENT_URI; ?>" method="POST">
              <div class="form-group">
                  <label for="name">氏名</label>
                  <input id="name" type="text" name="name" class="form-control" placeholder="山田太郎">
              </div>
              <div class="form-group">
                  <label for="account_name">銀行口座名</label>
                  <input id="account_name" type="text" name="account_name" class="form-control" placeholder="ﾔﾏﾀﾞﾀﾛｳ">
              </div>
              <div class="form-group">
                  <label for="rent">家賃</label>
                  <input id="rent" type="text" name="rent" class="form-control" placeholder="XXXXX">
              </div>
              <div class="form-group">
                  <label for="update_day">更新日</label>
                  <input id="update_day" type="text" name="update_day" class="form-control" placeholder="20XX-YY-ZZ">
              </div>
              <div class="form-group">
                  <label for="frequency">更新頻度</label>
                  <input id="frequency" type="text" name="frequency" class="form-control" placeholder="X">
              </div>
              <div class="form-group">
                  <label for="commission">更新手数料</label>
                  <input id="commission" type="text" name="commission" class="form-control" placeholder="XXXXX">
              </div>
              <div class="form-group">
                  <label for="guarantee">保証会社</label>
                  <input id="guarantee" type="text" name="guarantee" class="form-control" placeholder="〇〇株式会社">
              </div>
              <div calss="form-action">
                  <input type="submit" value="登録" class="btn btn-success uppercase">
              </div>
          </form>
        </div>
    </div>
</div>
<?php } ?>
