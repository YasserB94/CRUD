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
    public static function addGroup(string $groupname)
    {
        $pdo = self::connect();
        $tableName = 'group_table';
        $sql = 'INSERT INTO group_table(name) VALUES(:name)';
        $statement = $pdo->prepare($sql);
        $statement->execute([
            ':name' => $groupname
        ]);
    }
    public static function deleteGroupByID(int $id){
        $pdo = self::connect();
        $tableName = 'group_table';
        $sql = 'DELETE FROM group_table WHERE id =' . $id;
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }
}
