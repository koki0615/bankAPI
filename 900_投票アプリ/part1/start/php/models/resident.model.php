<?php

namespace model;

use lib\Msg;

class ResidentModel extends AbstractModel
{


    public int $id;
    public int $room_id;
    public string $name;
    public string $account_name;
    public int $rent;
    public int $flag;
    public string $update_day;
    public int $frequency;
    public int $commission;
    public string $guarantee;
    



    public function isValidId()
    {
        return static::validateId($this->id);
    }

    public static function validateId($val)
    {
        $res = true;

        if(empty($val)) {

            Msg::push(Msg::ERROR, 'ユーザーIDを入力してください。');
            $res = false;

        } else {

            if(strlen($val) > 10) {
                Msg::push(Msg::ERROR, 'ユーザーIDは１０桁以下で入力してください。');
                $res = false;
            }

            if(!is_alnum($val)) {
                Msg::push(Msg::ERROR, 'ユーザーIDは半角英数字で入力してください。');
                $res = false;
            }

        }

        return $res;
    }

    

    // public static function validatePwd($val)
    // {
    //     $res = true;

    //     if (empty($val)) {

    //         Msg::push(Msg::ERROR, 'パスワードを入力してください。');
    //         $res = false;

    //     } else {

    //         if(strlen($val) < 4) {

    //             Msg::push(Msg::ERROR, 'パスワードは４桁以上で入力してください。');
    //             $res = false;

    //         } 
            
    //         if(!is_alnum($val)) {

    //             Msg::push(Msg::ERROR, 'パスワードは半角英数字で入力してください。');
    //             $res = false;

    //         }
    //     }

    //     return $res;
    // }

    // public function isValidPwd()
    // {
    //     return static::validatePwd($this->pwd);
    // }

}
