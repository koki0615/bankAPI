<?php 
namespace view\delete;

function index() {
?>
<h1 class="sr-only">住人削除</h1>
<div class="container">
    <div class="page-lock">
        <div class="">
          <h2>居住者削除フォーム</h2>
        </div>
        
        <div class="login-form bg-white p-4 shadow-sm mx-auto rounded">
          <form action="<?php echo CURRENT_URI; ?>" method="POST">
              <div class="form-group">
                  <label for="mansion_name">マンション名</label>
                  <input id="mansion_name" type="text" name="mansion_name" class="form-control" placeholder="〇〇マンション">
              </div> 
              <div class="form-group">
                  <label for="room_no">部屋番号</label>
                  <input id="room_no" type="text" name="room_no" class="form-control" placeholder="101">
              </div>
              <div class="form-group">
                  <label for="name">名前</label>
                  <input id="name" type="text" name="name" class="form-control" placeholder="山本太郎">
              </div>
              <div calss="form-action">
                  <input type="submit" value="削除" class="btn btn-success uppercase">
              </div>
          </form>
        </div>
    </div>
</div>
<?php } ?>
