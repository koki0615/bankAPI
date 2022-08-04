<?php

require_once 'config.php';

//Library
require_once SOURCE_BASE . 'libs/router.php';
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';

//Model
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';
require_once SOURCE_BASE . 'models/mansion.model.php';
require_once SOURCE_BASE . 'models/resident.model.php';
require_once SOURCE_BASE . 'models/room.model.php';
// require_once SOURCE_BASE . 'models/topic.model.php';

//Message
require_once SOURCE_BASE . 'libs/message.php';

//DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';
require_once SOURCE_BASE . 'db/mansion.query.php';
require_once SOURCE_BASE . 'db/resident.query.php';
require_once SOURCE_BASE . 'db/room.query.php';

//partials
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';

//views
require_once SOURCE_BASE .  'views/home.php';
require_once SOURCE_BASE .  'views/login.php';
require_once SOURCE_BASE .  'views/register.php';
require_once SOURCE_BASE .  'views/mansion.php';
require_once SOURCE_BASE .  'views/resident.php';
require_once SOURCE_BASE .  'views/delete.php';
require_once SOURCE_BASE .  'views/vacancy.php';
require_once SOURCE_BASE .  'views/api.php';


use function lib\route;

session_start();
try {

    \partials\header();

    $url = parse_url(CURRENT_URI);
    $rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    
    route($rpath, $method);
    
    //\partials\footer();
    
} catch(Throwable $e) {

    die('<h1>何かが凄くおかしいようです。</h1>');
    
}


// if($_SERVER['REQUEST_URI'] === 'login') {
//     require_once SOURCE_BASE . 'controllers/login.php';
// } elseif($_SERVER['REQUEST_URI'] === '/poll/part1/end/register') {
//     require_once SOURCE_BASE . 'controllers/register.php';
// } elseif($_SERVER['REQUEST_URI'] === '/poll/part1/end/') {
//     require_once SOURCE_BASE . 'controllers/home.php';
// }

// require_once SOURCE_BASE . 'partials/footer.php';

?>
