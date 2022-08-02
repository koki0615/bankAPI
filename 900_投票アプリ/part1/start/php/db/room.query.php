<?php 
namespace db;

use db\DataSource;
use model\RoomModel;

class RoomQuery {
    //データベースからidをもとに値を取得する関数
    public static function fetchByRoomNo($resident) {

        

        $db = new DataSource;
        $sql = 'select * from room 
        where room.room_id = :id
        ;';

        $result = $db->selectOne($sql, [
            ':id' => $resident->room_id
        ], DataSource::CLS, RoomModel::class);

        return $result;

    }

    public static function fetchRoomId($room,$mansion) {

        $db = new DataSource;
        $sql = '
        select
            room.*
        from room
        inner join mansion
            on room.mansion_id = mansion.id
        where mansion.name = :name 
        and room.room_no = :no
        ;';

        $result = $db->selectOne($sql, [
            ':name' => $mansion->name,
            ':no' => $room->room_no
        ], DataSource::CLS, RoomModel::class);
        
        return $result;
    }

    public static function fetchByVacancy() {

        $db = new DataSource;
        $sql = 'select * from room 
        where room.vacancy = 1
        ;';

        $result = $db->select($sql, [

        ], DataSource::CLS, RoomModel::class);

        return $result;

    }

    public static function VacancyTo0($resident) {

        $db = new DataSource;
        $sql = 'update room set vacancy=0
        where room.room_id = :id
        ;';

        $result = $db->select($sql, [
            ":id" => $resident->room_id
        ], DataSource::CLS, RoomModel::class);

        return $result;

    }

    public static function VacancyTo1($resident) {

        $db = new DataSource;
        $sql = 'update room set vacancy=1
        where room.room_id = :id
        ;';

        $result = $db->select($sql, [
            ":id" => $resident->room_id
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