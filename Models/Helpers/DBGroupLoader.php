<?php
abstract class DBGroupLoader extends DB_Connector
{
    public static function getAllGroups(): array
    {
        $allgroups = [];
        $pdo = self::connect();
        $data = $pdo->query("SELECT * FROM group_table");
        while ($row = $data->fetch(PDO::FETCH_NUM)) {
            $tmp = new Group($row[0], $row[1]);
            array_push($allgroups, $tmp);
        }
        return $allgroups;
    }
}
