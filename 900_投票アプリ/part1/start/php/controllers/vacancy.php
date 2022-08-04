<?php 
namespace controller\vacancy;

use db\MansionQuery;
use db\RoomQuery;
use lib\Auth;
use model\MansionModel;
use model\RoomModel;

function get() {


    Auth::requireLogin();
    $rooms = new RoomModel;
    $mansion = new MansionModel;

    $rooms = RoomQuery::fetchByVacancy();
    \view\vacancy\index($rooms,$mansion);
}

?>