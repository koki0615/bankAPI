<?php 
namespace view\login;

function index() {
?>
<div class="container">
	<div class="page-lock">
        <div class="page-logo">
    		<a class="brand" href="index.html">
    		<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/layout/img/logo-big.png" alt="logo"/>
    		</a>
    	</div>
    	<div class="page-body">
    		<div class="lock-head">
    			 Locked
    		</div>
    		<div class="lock-body">
    			<div class="pull-left lock-avatar-block">
    				<img src="" class="lock-avatar">
    			</div>
    			<form class="lock-form pull-left" action="<?php echo CURRENT_URI; ?>" method="POST">
    			    <div class="form-group">
                        <label for="user_id">user_id</label>
                        <input id="user_id" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="user_id" name="id"/>
                    </div>	
    				<div class="form-group">
                        <label for="pwd">password</label>
    					<input id="pwd" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="password" name="pwd"/>
    				</div>
    				<div class="form-actions">
    					<button type="submit" class="btn btn-success uppercase">Login</button>
    				</div>
    			</form>
    		</div>
    		<div class="lock-bottom">
    			<a href="">パスワードを忘れた＾＾</a>
    		</div>
    	</div>
    </div>
</div>
<?php 
}