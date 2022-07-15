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
    public static function getGroupByID(int $id):Group{
            $pdo = self::connect();
            $sql = 'SELECT * FROM group_table WHERE id='.$id;
            $data = $pdo->query($sql);
            while($row=$data->fetch(PDO::FETCH_NUM)){
                $group = new Group($row[0],$row[1]);
                return $group;
            }
        
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
    public static function editGroupNameByID(int $id,string $newName){
        $pdo = self::connect();
        $tableName = 'group_table';
        $sql = 'UPDATE group_table SET name=? WHERE id=?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$newName,$id]);
    }
}
