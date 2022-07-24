<?php 

namespace controller\resident;

use Throwable;
use db\DataSource;
use db\MansionQuery;
use db\ResidentQuery;
use db\RoomQuery;
use model\MansionModel;
use model\RoomModel;
use model\ResidentModel;

function get() {

    
    
    $rooms = new RoomModel;
    $rooms->mansion_id = get_param('mansion_id', null, false);

    $mansion = new MansionModel;
    $mansion->id = get_param('mansion_id',null,false);
    $mansion = MansionQuery::fetchByname($mansion);

    $residents = new ResidentModel;

    $residents = ResidentQuery::fetchResidentId($rooms);
    // var_dump($resident);
    \view\resident\index($residents,$mansion);
    
}