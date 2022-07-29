<?php 
namespace controller\home;

use lib\Auth;
use lib\Msg;
use model\UserModel;

function get(){
    Auth::requireLogin();


    if(UserModel::getSession() === null) {
        Msg::push(Msg::ERROR, 'ログインしてください。');
        redirect('login');
    }
    \view\home\index();
}
    


