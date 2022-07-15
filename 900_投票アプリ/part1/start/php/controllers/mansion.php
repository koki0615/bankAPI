<?php 
namespace controller\mansion;

use db\MansionQuery;
use lib\Auth;
use model\MansionModel;

function get() {

    Auth::requireLogin();

    $mansions = MansionQuery::fetchByMansionId();
    \view\mansion\index($mansions);
}

?>