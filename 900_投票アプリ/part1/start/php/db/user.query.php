<?php 
namespace db;

use db\DataSource;
use model\UserModel;

class UserQuery {
    //データベースからidをもとに値を取得する関数
    public static function fetchById($id) {

        $db = new DataSource;
        $sql = 'select * from master where id = :id;';

        $result = $db->selectOne($sql, [
            ':id' => $id
        ], DataSource::CLS, UserModel::class);

        return $result;

    }

    public static function insert($user) {

        $db = new DataSource;
        $sql = 'insert into master(id, pwd) values (:id, :pwd)';

        $user->pwd = password_hash($user->pwd, PASSWORD_DEFAULT);

        return $db->execute($sql, [
            ':id' => $user->id,
            ':pwd' => $user->pwd
        ]);

    }


}