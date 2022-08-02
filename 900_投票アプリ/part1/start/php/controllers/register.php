<?php 
namespace controller\register;

use db\ResidentQuery;
use db\RoomQuery;
use model\ResidentModel;
use lib\Auth;
use lib\Msg;
use model\RoomModel;
use Throwable;

function get() {
    Auth::requireLogin();
    \view\register\index();
    
    
}

function post()
{
    $resident = new ResidentModel;

    $resident->room_id = get_param('room_id', null,false);
    $resident->name = get_param('name', null);
    $resident->account_name = get_param('account_name', null);
    $resident->rent = get_param('rent', null);
    $resident->update_day = get_param('update_day', null);
    $resident->frequency = get_param('frequency', null);
    $resident->commission = get_param('commission', null);
    $resident->guarantee = get_param('guarantee', null);


    try {
        
        $is_success = ResidentQuery::insert($resident);
    } catch (Throwable $e){

        Msg::push(Msg::DEBUG, $e->getMessage());
        $is_success = false;
    }

    
    if ($is_success) {
        RoomQuery::VacancyTo0($resident);
        Msg::push(Msg::INFO, "{$resident->name}さんの登録ができました。");
        redirect(GO_REFERER);
       
    } else {
        Msg::ERROR;
        redirect(GO_REFERER);
        
    }
}
