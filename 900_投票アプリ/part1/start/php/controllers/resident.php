<?php 

namespace controller\resident;

use Throwable;
use db\DataSource;
use db\MansionQuery;
use model\MansionModel;

function get() {

    $mansion = new MansionModel;
    $mansion->id = get_param('mansion_id', null,false);

    $mansion = MansionQuery::fetchById($mansion);

    \view\resident\index($mansion);
}