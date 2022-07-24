<?php 
namespace db;

use db\DataSource;
use model\RoomModel;

class RoomQuery {
    //データベースからidをもとに値を取得する関数
    public static function fetchByRoomId($rooms) {

        

        $db = new DataSource;
        $sql = 'select room.room_id from room 
        where room.mansion_id = :id 
        ;';

        $result = $db->select($sql, [
            ':id' => $rooms->mansion_id
        ], DataSource::CLS, RoomModel::class);

        return $result;

    }

    public static function room() {

        $db = new DataSource;
        $sql = 'select * from room;';

        $result = $db->select($sql, [

        ], DataSource::CLS, RoomModel::class);
        
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