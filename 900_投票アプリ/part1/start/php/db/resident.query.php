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
        order by room_no asc
        ;';

        $result = $db->select($sql, [
            ':id' => $rooms->mansion_id
        ], DataSource::CLS, ResidentModel::class);

        return $result;

    }

    public static function fetchByResidentName($room) {

        

        $db = new DataSource;
        $sql = 'select * from resident
        where resident.room_id = :id
        ;';

        $result = $db->selectOne($sql, [
            ':id' => $room->room_id
        ], DataSource::CLS, ResidentModel::class);

        return $result;

    }

    public static function insert($resident) {

        $db = new DataSource;
        $sql = 'insert into resident(room_id, name, account_name, rent, update_day, frequency, commission, guarantee) 
        values (:room_id , :name, :account_name, :rent, :update_day, :frequency, :commission, :guarantee)
        ';


        return $db->execute($sql, [
            ':room_id' => $resident->room_id,
            ':name' => $resident->name,
            ':account_name' => $resident->account_name,
            ':rent' => $resident->rent,
            ':update_day' => $resident->update_day,
            ':frequency' => $resident->frequency,
            ':commission' => $resident->commission,
            ':guarantee' => $resident->guarantee
        ]);

    }

    public static function delete($resident) {

        $db = new DataSource;
        $sql = 'delete from resident 
        where resident.id = :id 
        ';


        return $db->execute($sql, [
            ':id' => $resident->id
        ]);

    }


}