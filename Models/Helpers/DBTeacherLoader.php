<?php
abstract class DBTeacherLoader extends DB_Connector
{
    public static function getAllTeachers(): array
    {
        $allteachers = [];
        // Getting our PDO object so we can talk to  our database
        $pdo = self::connect();
        // Getting all the data from the right table
        $data = $pdo->query("SELECT * FROM teacher_table");
        //Now lets loop over all the data we have
        //We'll use fetch on our PDO object(that's now in data and ran a query)
        //We'll use PDO::FETCH_NUM option, this will return an array of the query's result that is indexed by the column's number starting at 0
        //As long as data is returned to our $row variable i want to loop
        //So once $row is assigned nothing,error,null the loop stops
        while ($row = $data->fetch(PDO::FETCH_NUM)) {
            //I know $row is an array and indexes per column, but after this loop I no longer want data, I want objects!
            //So let's create a group with the ID and NAME thats in the current row in the current iteration of the loop
          $teacher = new Teacher($row[0], $row[1]);
          //Now let's get that object out of the loop's scope into an array
         array_push($allteachers, $teacher);
        }
         //We are out of the loop, this array is now filled with groupobjects made from the database's data
        //The function is called getAllGroups(), so this array better has a group for every row in the database!
        return $allteachers;
    }
}
