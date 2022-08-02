<?php 

namespace controller\resident;

use Throwable;
use db\DataSource;
use db\MansionQuery;
use db\ResidentQuery;
use db\RoomQuery;
use lib\Auth;
use model\MansionModel;
use model\RoomModel;
use model\ResidentModel;

function get() {

    Auth::requireLogin();
    
    $rooms = new RoomModel;
    $rooms->mansion_id = get_param('mansion_id', null, false);

    $mansion = new MansionModel;
    $mansion->id = get_param('mansion_id',null,false);
    $mansion = MansionQuery::fetchByname($mansion);

    $residents = new ResidentModel;

    $residents = ResidentQuery::fetchResidentId($rooms);

    //var_dump($residents) ;
    // foreach ($residents as $resident) {
    //     $room = RoomQuery::fetchByRoomNo($resident);
    //     var_dump($room->room_id);
    // }

    \view\resident\index($residents,$mansion);
    
}