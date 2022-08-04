<?php 
namespace controller\home;

use db\ResidentQuery;
use lib\Auth;
use lib\Msg;
use model\MansionModel;
use model\ResidentModel;
use model\RoomModel;
use model\UserModel;

function get(){
    Auth::requireLogin();

    if(UserModel::getSession() === null) {
        Msg::push(Msg::ERROR, 'ログインしてください。');
        redirect('login');
    }

    $residents = new ResidentModel;
    $mansion = new MansionModel;
    $room = new RoomModel;


    \view\home\index($residents,$room,$mansion);

}
    


