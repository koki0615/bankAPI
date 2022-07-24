<?php 
namespace db;

use db\DataSource;
use model\ResidentModel;

class ResidentQuery {
    //データベースからidをもとに値を取得する関数
    public static function fetchResidentId($rooms) {

        

        $db = new DataSource;
        $sql = '
        select
            resident.*
        from resident
        inner join room
            on resident.room_id = room.room_id
        where room.mansion_id = :id 
        ;';

        $result = $db->select($sql, [
            ':id' => $rooms->mansion_id
        ], DataSource::CLS, ResidentModel::class);

        return $result;

    }

    // public static function room() {

    //     $db = new DataSource;
    //     $sql = 'select * from room;';

    //     $result = $db->select($sql, [

    //     ], DataSource::CLS, RoomModel::class);
        
    //     return $result;
    // }
    
    // public static function fetchById() {

        

    //     $db = new DataSource;
    //     $sql = '
    //     select name from resident ';

    //     $result = $db->select($sql, [
            
    //     ], DataSource::CLS, ResidentModel::class);

    //     return $result;

    // }

    

    

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