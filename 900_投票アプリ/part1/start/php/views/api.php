<?php 

namespace view\api;

function index() {
    
// // START
// function gurunavi_search_restlist_v3($hit_per_page=30, $offset_page=1, $freeword) {
//     $ret = FALSE;
    
//     $search_url = "https://api.gnavi.co.jp/RestSearchAPI/v3/?"
//     . "keyid=" . GURUNAVIAPI_ACCESS_KEY
//     . "&hit_per_page=" . $hit_per_page
//     . "&offset_page=" . $offset_page
//     . "&freeword=" . urlencode_rfc3986(mb_convert_encoding($freeword, "UTF-8", INTERNAL_ENC));
    
//     $json = json_decode(mb_convert_encoding(@file_get_contents($search_url, false, ARR_CONTEXT_OPTIONS), "UTF-8", INTERNAL_ENC));
    
//     if ($json !== FALSE) {
//     $ret = array();
//     $n = 0;
//     foreach ($json->rest as $shop) {
//     //　中略
//     $ret[$n]['id'] = (string)$shop->id;
//     $ret[$n]['name'] = (string)$shop->name;
//     $ret[$n]['address'] = (string)$shop->address;
//     //　中略
//     $n++;
//     }
//     if (count($ret) <= 0) {
//     $ret = FALSE;
//     }
//     }
//     return($ret);
//     }
//     // END
}