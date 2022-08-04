<?php


function get_param($key, $default_val, $is_post = true) {

    $arry = $is_post ? $_POST : $_GET;
    return $arry[$key] ?? $default_val;

}

function redirect($path) {

    if($path === GO_HOME) {

        $path = get_url('');

    } else if($path === GO_REFERER) {

        $path = $_SERVER['HTTP_REFERER'];

    } else {

        $path = get_url($path);

    }
    
    header("Location: {$path}");

    die();

}

function the_url($path) {
    echo get_url($path);
}

function get_url($path) {

    return BASE_CONTEXT_PATH . trim($path, '/');

}

function is_alnum($val) {

    return preg_match("/^[a-zA-Z0-9]+$/", $val);
    
}

// function room_no($resident) {
//     $room_no = RoomQuery::fetchByRoomNo($resident);
//     echo $room_no;
// }


//契約更新日を伝える月（２カ月前）かどうか,更新する日かどうかを判定をする関数
function date_check($update_day) {
    
                        
    if($update_day != 'なし') {
        $date = new DateTime($update_day);
        $today = new DateTime();
        
        $date1 = $date->modify('first day of this months')->modify('-2 months')->format('Y-m-d');
        $today1 = $today->modify('first day of this months')->format('Y-m-d');

        $news = false;
                            
        if($date1 == $today1) {
            $news = true;
        }else {
            $news = false;
        }
         

    }else {
        $news = false;
    }

    return $news;

}

function update_check($update_day) {
    
                        
    if($update_day != 'なし') {
        $date = new DateTime($update_day);
        $today = new DateTime();
        


        $today1 = $today->format('Y-m-d');
        $date2 = $date->format('Y-m-d');
                            
        $update = false;

        if($date2 < $today1) {
            $update = true;
        }else{
            $update = false;
        }

    }else {
        $update = false;
    }

    return $update;

}

function plus_day($update_day,$frequency) {
    

    $date = new DateTime($update_day);
    if ($frequency == 1) {
        $new_date = $date->modify('+1 years')->format('Y-m-d');
    }
    elseif ($frequency == 2) {
        $new_date = $date->modify('+2 years')->format('Y-m-d');
    }
    elseif ($frequency == 3) {
        $new_date = $date->modify('+3 years')->format('Y-m-d');
    }
    else {
        $new_date = $date->format('Y-m-d');
    }
    

    return $new_date;
}
