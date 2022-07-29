<?php

namespace lib;

use db\ResidentQuery;
use db\UserQuery;
use model\ResidentModel;
use model\UserModel;
use Throwable;

class Auth
{
    public static function login($id, $pwd)
    {
        try {
            if (!(UserModel::validateId($id)
                * UserModel::validatePwd($pwd))) {
                return false;
            }

            $is_success = false;

            $user = UserQuery::fetchById($id);

            if (!empty($user) && $user->del_flg !== 1) {

                if (password_verify($pwd, $user->pwd)) {
                    $is_success = true;
                    UserModel::setSession($user);
                } else {
                    Msg::push(Msg::ERROR, 'パスワードが一致しません。');
                }
            } else {
                Msg::push(Msg::ERROR, 'ユーザーが見つかりません。');
            }
        } catch (Throwable $e) {

            $is_success = false;
            Msg::push(Msg::DEBUG, $e->getMessage());
            Msg::push(Msg::ERROR, 'ログイン処理でエラーが発生しました。少し時間をおいてから再度お試しください。');
        }

        return $is_success;
    }


    public static function isLogin()
    {
        try {

            $user = UserModel::getSession();
        } catch (Throwable $e) {

            UserModel::clearSession();
            Msg::push(Msg::DEBUG, $e->getMessage());
            return false;
        }

        if (isset($user)) {
            return true;
        } else {
            return false;
        }
        
    }

    public static function logout() {
        try {
            
            UserModel::clearSession();

        } catch (Throwable $e) {

            Msg::push(Msg::DEBUG, $e->getMessage());
            return false;

        }

        return true;
    }

    public static function requireLogin() {
        if(!static::isLogin()) {
            Msg::push(Msg::ERROR, 'ログインしてください。');
            redirect('login');
        }
    }

    public static function regist($resident)
    {
        try {
            $is_success = false;

            $exist_resident = ResidentQuery::fetchRoomId($resident);

            if (!empty($exist_resident)) {

                Msg::push(Msg::ERROR, 'この部屋は空いていません。');
                return false;
            }

            $is_success = ResidentQuery::insert($resident);

            if ($is_success) {
                
                ResidentModel::setSession($resident);
            }
        } catch (Throwable $e) {

            $is_success = false;
            Msg::push(Msg::DEBUG, $e->getMessage());
            Msg::push(Msg::ERROR, '居住者登録でエラーが発生しました。少し時間をおいてから再度お試しください。');
        }
    }
}
