<?php 
namespace controller\delete;

use db\MansionQuery;
use db\ResidentQuery;
use db\RoomQuery;
use model\ResidentModel;
use lib\Auth;
use lib\Msg;
use model\MansionModel;
use model\RoomModel;
use Throwable;

function get() {
  Auth::requireLogin();
  \view\delete\index();
    
    
}

function post()
{
    $resident = new ResidentModel;
    $mansion = new MansionModel;
    $room = new RoomModel;

    $mansion->name = get_param('mansion_name', null);
    $room->room_no = get_param('room_no', null);
    $resident_name = get_param('name', null);



   
    
    
    try {

        $room = RoomQuery::fetchRoomId($room,$mansion);
        $resident = ResidentQuery::fetchByResidentName($room);
        if ($resident_name === $resident->name) {

          ResidentQuery::delete($resident);
          $is_success = true;
        }
        else {

          Msg::ERROR;
          echo '削除失敗です。もう一度読み込んでやり直してください。';
          $is_success = false;
        }
        
    } catch (Throwable $e){

        Msg::push(Msg::DEBUG, $e->getMessage());
        $is_success = false;
    }


    
    if ($is_success) {

        RoomQuery::VacancyTo1($resident);
        Msg::push(Msg::INFO, "$resident->nameさんを削除しました。");
        redirect(GO_REFERER);
       
    }
        
        
    
}
