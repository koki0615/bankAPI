<?php 
namespace db;

use db\DataSource;
use model\ResidentModel;

class ResidentQuery {
    //データベースからidをもとに値を取得する関数
    public static function fetchResidentId() {

        

        $db = new DataSource;
        $sql = 'select * from mansion;';

        $result = $db->select($sql, [
            
        ], DataSource::CLS, MansionModel::class);

        return $result; 

    }
    
    public static function fetchById($mansion) {

        

        $db = new DataSource;
        $sql = '
        select * from mansion m
        where m.id = :id';

        $result = $db->selectOne($sql, [
            ':id' => $mansion->id
        ], DataSource::CLS, MansionModel::class);

        return $result;

    }

    

    // public static function insert($user) {

    //     $db = new DataSource;
    //     $sql = 'insert into master(id, pwd) values (:id, :pwd)';

    //     $user->pwd = password_hash($user->pwd, PASSWORD_DEFAULT);

    //     return $db->execute($sql, [
    //         ':id' => $user->id,
    //         ':pwd' => $user->pwd
    //     ]);

    // }


}