<?php

class DBRepository
{
    public static mixed $connection;

    public static function connection()
    {
       self::$connection = new mysqli( DB_HOST,DB_USER,DB_PASSWORD,DB_NAME );
        if (self::$connection->errno) {
            die("Database error");
        }
        return self::$connection;
      
    }

    public static function query(string $sql)
    {
        $query = self::connection()->query($sql);
       $object_array = [];
        while ($row = mysqli_fetch_array($query)) {
            $object_array[] = $row;
        }
        return $object_array;
    }




}
