<?php
abstract class DBGroupLoader extends DB_Connector
{
    public static function getAllGroups(): array
    {
        $allgroups = [];
        //Let's get our PDO object so that we can talk to our database
        $pdo = self::connect();
        //First I want to get all the data from the right table
        $data = $pdo->query("SELECT * FROM group_table");
        //Now lets loop over all the data we have
        //We'll use fetch on our PDO object(that's now in data and ran a query)
        //We'll use PDO::FETCH_NUM option, this will return an array of the query's result that is indexed by the column's number starting at 0
        //As long as data is returned to our $row variable i want to loop
        //So once $row is assigned nothing,error,null the loop stops
        while ($row = $data->fetch(PDO::FETCH_NUM)) {
            //I know $row is an array and indexes per column, but after this loop I no longer want data, I want objects!
            //So let's create a group with the ID and NAME thats in the current row in the current iteration of the loop
            $tmp = new Group($row[0], $row[1]);
            //Now let's get that object out of the loop's scope into an array
            array_push($allgroups, $tmp);
        }
        //We are out of the loop, this array is now filled with groupobjects made from the database's data
        //The function is called getAllGroups(), so this array better has a group for every row in the database!
        return $allgroups;
    }
    public static function getGroupByID(int $id):Group{
            //Again we need access to the database let's connect
            $pdo = self::connect();
            //First, I'' prepare my sql, I'll use the $id from our function's parameters in the sql so that I'm sure to get only that entry
            $sql = 'SELECT * FROM group_table WHERE id='.$id;
            //Now let's tell our PDO object to run the query
            $data = $pdo->query($sql);
            //Since I know how fetch and PDO::FETCH_NUM WORKS, I am using this. even tough it's probably overkill to get an array, This I know and understand, let's optimise another time.
            while($row=$data->fetch(PDO::FETCH_NUM)){
                $group = new Group($row[0],$row[1]);
                //I should only have one $row, but even then I want to return the first group that we encounter as a group object. So let's kill the loop early with a return statemtn
                return $group;
            }
        
    }
    public static function addGroup(string $groupname)
    {
        //We'd like to add somethign to the database, so let's connect again and get the PDO object
        $pdo = self::connect();
        $tableName = 'group_table';
        //Let's prepare our SQL, a bit fancier this time. Instead of skipping the keys I'm going to put them here now, the values(:name) colon tells PDO, it will receive this input later
        $sql = 'INSERT INTO group_table(name) VALUES(:name)';
        //Let's tell PDO to prepare an SQL query
        $statement = $pdo->prepare($sql);
        //Here we'll execute, this function only accepts one parameter
        //So, I'm passing it an array where I tell PDO to put our $groupname's value where I put :name in the prepared query
        $statement->execute([
            ':name' => $groupname
        ]);
    }

    public static function deleteGroupByID(int $id){
        //I want to be able to delete a group, since the ID is unique, let's use that!
        //First we get our PDO again
        $pdo = self::connect();
        $tableName = 'group_table';
        //In datagrip I made sure my query works, now Let's use that query and concat the id to the query
        $sql = 'DELETE FROM group_table WHERE id =' . $id;
        //LEt's tell PDO to prepare our query
        $statement = $pdo->prepare($sql);
        //Now let's execute the perpared query
        $statement->execute();
    }
    public static function editGroupNameByID(int $id,string $newName){
        //Time to edit a group, to make sure we edit the right group. we get it by the ID
        //We also take in the name we want to set the group's name to
        //Lets get our PDO object once more
        $pdo = self::connect();
        $tableName = 'group_table';
        //Now perhaps our user has entered somethign we do not want to run on our database
        //So I'll enter my query here that updates our data, but I replaced every input with a ?
        $sql = 'UPDATE group_table SET name=? WHERE id=?';
        //Now lets tell PDO to prepare to fire this query off on to the database
        $statement = $pdo->prepare($sql);
        //Now once more, we execute the prepared statement, and we give it an array containing the values we want where we have '?' on our prepared statement
        //It's important to keep this array in order since PDO->execute() will loop over the given array in order and fill in the values in that order
        $statement->execute([$newName,$id]);
    }
}
